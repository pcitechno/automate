<?php

namespace App\Imports;

use App\Models\BMCommission;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BMCommissionImport implements ToModel, WithHeadingRow
{
    /**
     * Map each row of the Excel file to the BMCommission model.
     *
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Uncomment to debug the imported row
        // dd($row); 

        return new BMCommission([
            'MTH' => $row['mth'] ?? null, // Handles missing 'mth' field
            'FYEAR' => $row['fyear'] ?? null,
            'SO_Code' => $row['so_code'] ?? null,
            'SO_Name' => $row['so_name'] ?? null,
            'DO_Name' => $row['do_name'] ?? null,
            'Reference_ID' => $row['reference_id'] ?? null,
            'Trainer_ID' => $row['trainer_id'] ?? null,
            'Code' => $row['code'] ?? null,
            'RANK' => $row['rank'] ?? null,
            'TRAINER_NAME' => $row['trainer_name'] ?? null,
            'VCHRNO' => $row['vchrno'] ?? null,
            'FAT' => $row['fat'] ?? null,
            'SNF' => $row['snf'] ?? null,
            'fat_rate' => $row['fat_rate'] ?? null,
            'RATE' => $row['rate'] ?? null,
            'Quantity' => $row['quantity'] ?? null,
            'NETAMOUNT' => $row['netamount'] ?? null,
            'PREV_BALANCE' => $row['prev_balance'] ?? null,
            'TOTAL_PAY' => $row['total_pay'] ?? null,
            'Recover_1' => $row['recover_1'] ?? null,
            'Recovery_2' => $row['recovery_2'] ?? null,
            'Paid_From_SO' => $row['paid_from_so'] ?? null,
            'Payable_Amount' => $row['payable_amount'] ?? null,
            'TDS_Amount' => $row['tds_amount'] ?? null,
            'ADV_PAID' => $row['adv_paid'] ?? null,
            'Final_Amount_Payable' => $row['final_amount_payable'] ?? null,
            'BANK_AC_NO' => $row['bank_ac_no'] ?? null,
            'BANK_NAME' => $row['bank_name'] ?? null,
            'IFSC' => $row['ifsc'] ?? null,
            'PAN' => $row['pan'] ?? null,
            'Remark_1' => $row['remark_1'] ?? null,
            'Remark_2' => $row['remark_2'] ?? null,
            'CLEARING_DATE' => $row['clearing_date'] ?? null,
        ]);
    }
}
