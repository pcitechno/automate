<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BrokersImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\BrokerRegister;
use App\Models\Broker;

class BrokerRegisterController extends Controller
{
    public function index()
    {
        $brokers = BrokerRegister::paginate(12);
        return view('broker.index', compact('brokers'));
    }

    public function import(Request $request)
    {
        set_time_limit(300);
        \Log::info('Request data: ', $request->all());
        $request->validate([
        'file' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new BrokersImport, $request->file('file')->store('temp'));
        return redirect()->back()->with('success', 'Data Imported Successfully');
    }

    public function deleteAll(Request $request) {
        try {
            DB::table('broker_register')->truncate();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

}

