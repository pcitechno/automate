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


class CommissionController extends Controller
{
    public function search(Request $request)
    {
        // Validate the search input
        $request->validate([
            'trainer_id' => 'nullable|string',
            'reference_id' => 'nullable|string',
        ]);

        $trainerId = $request->input('trainer_id');
        $referenceId = $request->input('reference_id');

        // Retrieve data from each table based on the input
        $bmCommissions = BmCommission::when($trainerId, function ($query) use ($trainerId) {
            return $query->where('trainer_id', $trainerId);
        })
        ->when($referenceId, function ($query) use ($referenceId) {
            return $query->where('reference_id', $referenceId);
        })
        ->get();

        $finalCmCommissions = FinalCmCommission::when($trainerId, function ($query) use ($trainerId) {
            return $query->where('trainer_id', $trainerId);
        })
        ->when($referenceId, function ($query) use ($referenceId) {
            return $query->where('reference_id', $referenceId);
        })
        ->get();

        $circularCommissions = CircularCommission::when($trainerId, function ($query) use ($trainerId) {
            return $query->where('trainer_id', $trainerId);
        })
        ->when($referenceId, function ($query) use ($referenceId) {
            return $query->where('reference_id', $referenceId);
        })
        ->get();

        // Pass data to the view
        return view('commissions.search_results', compact('bmCommissions', 'finalCmCommissions', 'circularCommissions'));


        $trainerId = $request->input('trainer_id'); // Assuming 'trainer_id' is passed from the search form

        // Fetch data from finalCmCommissions table
        $finalCmData = DB::table('final_cm_commissions')
            ->where('trainer_id', $trainerId)
            ->select('month_name', 'payable_amt', 'tds_amt', 'final_amt', 'clearing_date', 'bank_name', 'account_no', 'ifsc')
            ->get();

        // Fetch data from bmCommission table
        $bmCommissionData = DB::table('bm_commission')
            ->where('trainer_id', $trainerId)
            ->select('remark', 'payable_amount', 'tds_amount', 'final_amount_payable', 'clearing_date', 'bank_name', 'bank_account_no', 'ifsc')
            ->get();

        return view('search_results', compact('finalCmData', 'bmCommissionData'));
    }




}