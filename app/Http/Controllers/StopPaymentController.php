<?php

namespace App\Http\Controllers;

use App\Imports\StopPaymentImport;
use App\Models\StopPayment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StopPaymentExport;


class StopPaymentController extends Controller
{
    // public function index()
    // {
    //     $stopPayments = StopPayment::all();
    //     return view('stop_payments.index', compact('stopPayments'));
    // }



    public function index()
    {
        // Make sure you are retrieving the correct model
        $stopPayments = StopPayment::all(); // This returns a collection
        // Pass the collection to the view
        return view('stop_payments.index', compact('stopPayments'));
    }


    // app/Http/Controllers/StopPaymentController.php
public function destroyAll()
{
    StopPayment::truncate(); // This will delete all records
    return redirect()->back()->with('success', 'All records deleted successfully.');
}


    public function destroy($id)
    {
        // If using a custom primary key, make sure to call it by the correct column
        $stopPayment = StopPayment::where('s_no', $id)->firstOrFail();
        $stopPayment->delete();

        return redirect()->route('stop-payments.index')->with('success', 'Stop payment deleted successfully.');
    }



  public function import(Request $request)
    {
        Excel::import(new StopPaymentImport, $request->file('file'));
        return redirect()->back()->with('success', 'Data Imported Successfully');
    }

    public function export()
    {
        return Excel::download(new StopPaymentExport, 'stop_payments.xlsx');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'broker_id' => 'required|string',
            'pef_code' => 'required|string',
            'name' => 'required|string',
            'remark' => 'required|string',
            'ref_no' => 'required|string',
        ]);

        StopPayment::create($validatedData);

        return redirect()->back()->with('success', 'Stop payment added successfully!');
    }




    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'broker_id' => 'required|string',
    //         'pef_code' => 'required|string',
    //         'name' => 'required|string',
    //         'remark' => 'nullable|string',
    //         'ref_no' => 'nullable|string',
    //     ]);

    //     // Save the new record
    //     StopPayment::create($request->all());

    //     // Set flash message
    //     session()->flash('success', 'Record added successfully!');

    //     // Redirect back to the form
    //     return redirect()->route('stop-payments.index'); // Adjust this route if necessary
    // }



}
