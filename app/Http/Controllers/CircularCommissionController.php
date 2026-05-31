<?php

namespace App\Http\Controllers;

use App\Exports\CircularCommissionExport;
use App\Imports\CircularCommissionImport;
use App\Imports\FinalCMCommissionImport;
use App\Models\Final_c_m_commissions;
use App\Imports\BMCommissionImport;
use App\Exports\BMCommissionExport;
use App\Models\BMCommission;
use App\Models\CircularCommission;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\FinalCMCommission;

class CircularCommissionController extends Controller
{
    public function importView(Request $request)
    {
        $search = trim($request->input('search', ''));

        $query = CircularCommission::query();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('trainer_id',    'LIKE', "%{$search}%")
                  ->orWhere('reference_id','LIKE', "%{$search}%")
                  ->orWhere('so_code',     'LIKE', "%{$search}%");
            });
        }

        $circularCommissions = $query->paginate(12)->appends(['search' => $search]);

        return view('import', compact('circularCommissions'));
    }

    public function importcir()
    {
        $circularCommissions = CircularCommission::all();
        return view('import-cir', compact('circularCommissions'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new CircularCommissionImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data Imported Successfully!');
    }

    public function export()
    {
        return Excel::download(new CircularCommissionExport, 'circular_commission.xlsx');
    }
}
