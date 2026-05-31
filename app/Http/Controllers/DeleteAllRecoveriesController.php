<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeleteAllRecoveriesController extends Controller
{
    /**
     * Delete all records from the recoveries table.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAll(Request $request)
    {
        try {
            // Truncate the 'recoveries' table to delete all records
            DB::table('recoveries')->truncate();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'All data deleted successfully.');
        } catch (\Exception $e) {
            // Redirect back with an error message if something goes wrong
            return redirect()->back()->with('error', 'Failed to delete data: ' . $e->getMessage());
        }
    }
}
