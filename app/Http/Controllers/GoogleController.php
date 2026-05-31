<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BrokersImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\BrokerRegister;
use App\Models\Broker;

class GoogleController extends Controller
{
    public function index()
    {
        $brokers = BrokerRegister::all(); // Fetch all brokers from the database
        return view('index-google', compact('brokers'));
    }
 

    public function searchBrokers(Request $request)
    {
        $query = $request->input('query');     
        // Limit the number of results for better performance
        $brokers = Broker::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('broker_id', 'LIKE', '%' . $query . '%')
            ->take(50) // Limits results to 50
            ->get();
        return response()->json($brokers);
    }

}
