<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BMCommissionImport;
use App\Imports\CircularCommissionImport;
use App\Imports\FinalCMCommissionImport;
use App\Exports\BMCommissionExport;
use App\Exports\CircularCommissionExport;
use App\Models\BMCommission;
use App\Models\CircularCommission;
use App\Models\FinalCMCommission;

class ImportExportController extends Controller
{
    // Show the view with all data — supports search by Trainer_ID, Code, PAN
    public function index(Request $request)
    {
        $search = trim($request->input('search'));

        $query = BMCommission::query();

        if ($search !== '' && $search !== null) {
            $query->where(function ($q) use ($search) {
                $q->where('Trainer_ID', 'LIKE', "%{$search}%")
                  ->orWhere('Code',     'LIKE', "%{$search}%")
                  ->orWhere('PAN',      'LIKE', "%{$search}%");
            });
        }

        $bmCommissions = $query->paginate(12)->appends(['search' => $search]);

        return view('import-export', compact('bmCommissions'));
    }

    public function importbm()
    {
        $bmCommissions = BMCommission::all();
        return view('import-bm', compact('bmCommissions'));
    }

    // Import BM Commission data
    public function importBMCommission(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new BMCommissionImport, $request->file('file'));
        return redirect()->route('import-bm')->with('success', 'Data imported successfully!');
    }

    // Export BM Commission data
    public function exportBMCommission()
    {
        return Excel::download(new BMCommissionExport, 'bmcommission.xlsx');
    }

    // Import Circular Commission data
    public function importCircularCommission(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new CircularCommissionImport, $request->file('file'));
        return redirect()->back()->with('success', 'Circular Commission data imported successfully!');
    }

    // Export Circular Commission data
    public function exportCircularCommission()
    {
        return Excel::download(new CircularCommissionExport, 'circular_commission.xlsx');
    }

    // Import Final CM Commission data
    public function importFinalCMCommission(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new FinalCMCommissionImport, $request->file('file'));
        return redirect()->back()->with('success', 'Final CM Commission data imported successfully!');
    }
}
