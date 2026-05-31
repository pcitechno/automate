<?php

namespace App\Http\Controllers;

use App\Imports\FinalCMCommissionImport;
use App\Models\Final_c_m_commissions;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\FinalCMCommission;

class FinalCMCommissionController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->input('search', ''));

        $query = FinalCMCommission::query();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('agt_code',    'LIKE', "%{$search}%")
                  ->orWhere('pan_number', 'LIKE', "%{$search}%")
                  ->orWhere('ref_code',   'LIKE', "%{$search}%");
            });
        }

        $commissions = $query->paginate(12)->appends(['search' => $search]);

        return view('final_c_m_commissions.index', compact('commissions'));
    }

    public function importcm()
    {
        $commissions = FinalCMCommission::all();
        return view('import-cm', compact('commissions'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new FinalCMCommissionImport, $request->file('file'));

        return redirect()->route('import-cm')->with('success', 'Data imported successfully!');
    }

    public function exportFinalCMCommission()
    {
        return Excel::download(new FinalCMCommissionExport, 'FinalCMCommission.xlsx');
    }
}
