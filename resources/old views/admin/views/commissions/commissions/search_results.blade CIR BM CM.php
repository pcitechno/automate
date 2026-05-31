<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CM Commission Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Roboto', sans-serif;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .container {
            margin-top: 30px;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .search-input {
            border: 2px solid #007bff;
            border-radius: 30px;
            padding: 10px 20px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #0056b3;
            outline: none;
        }

        .search-button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 0 20px;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
        }

        .search-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #d1ecf1;
        }

        .details-row {
            display: none;
        }

        table {
            font-size: 15px
        }

        .btn-info {
            transition: all 0.3s;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 8px 12px;
        }

        .btn-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            background-color: #0056b3;
        }

        .no-data {
            text-align: center;
            color: #dc3545;
            font-style: italic;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 210px;
            }

            table {
                font-size: 12px;
            }
        }

        .table thead th {
            background-color: #007bff;
            color: white;
            position: sticky;
            top: 0;
        }

        @media (max-width: 576px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0;
                padding: 10px;
            }

            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>

<body>
    <div class="main-content">
        <div class="container">
            <h1 class="colorful-text">CIR-COMMISSION</h1>
            <div class="mb-3">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control search-input" placeholder="SEARCH BY AGT_CODE, CODE or PAN NUMBER">
                    <button class="btn search-button" type="button" id="searchButton">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <table id="bmCommissionTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SO Name</th>
                        <th>PAN</th>
                        <th>Trainer ID</th>
                        <th>Trainer Name</th>
                        <th>Code</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($bmCommissions as $commission)
                        @php
                            $key = $commission->SO_Name . '|' . $commission->PAN . '|' . $commission->Trainer_ID . '|' . $commission->TRAINER_NAME . '|' . $commission->Code;
                            if (!isset($groupedData[$key])) {
                                $groupedData[$key] = [
                                    'so_code' => $commission->SO_Name,
                                    'do' => $commission->PAN,
                                    'so_name' => $commission->Trainer_ID,
                                    'trainer_id' => $commission->TRAINER_NAME,
                                    'name' => $commission->Code,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'remark' => $commission->Remark,
                                'payable_amount' => $commission->Payable_Amount,
                                'tds_amount' => $commission->TDS_Amount,
                                'final_amount' => $commission->Final_Amount_Payable,
                                'clearing_date' => $commission->CLEARING_DATE,
                                'bank_name' => $commission->BANK_NAME,
                                'account_no' => $commission->Bank_Account_No,
                                'ifsc' => $commission->IFSC
                            ];
                        @endphp
                    @endforeach

                    @foreach ($groupedData as $group)
                        <tr>
                            <td>{{ $group['so_code'] }}</td>
                            <td>{{ $group['do'] }}</td>
                            <td>{{ $group['so_name'] }}</td>
                            <td>{{ $group['trainer_id'] }}</td>
                            <td>{{ $group['name'] }}</td>
                            <td><button class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Remark</th>
                                            <th>Payable Amount</th>
                                            <th>TDS Amount</th>
                                            <th>Final Amount Payable</th>
                                            <th>Clearing Date</th>
                                            <th>Bank Name</th>
                                            <th>Account No</th>
                                            <th>IFSC</th>
                                   
                                      
                                        @foreach ($group['details'] as $detail)
                                            <tr>
                                                <td>{{ $detail['remark'] }}</td>
                                                <td>{{ $detail['payable_amount'] }}</td>
                                                <td>{{ $detail['tds_amount'] }}</td>
                                                <td>{{ $detail['final_amount'] }}</td>
                                                <td>{{ $detail['clearing_date'] }}</td>
                                                <td>{{ $detail['bank_name'] }}</td>
                                                <td>{{ $detail['account_no'] }}</td>
                                                <td>{{ $detail['ifsc'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table id="finalCmCommissionTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>DO Name</th>
                        <th>CSC Name</th>
                        <th>PAN Number</th>
                        <th>AGT Code</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($finalCmCommissions as $commission)
                        @php
                            $key = $commission->do_name . '|' . $commission->csc_name . '|' . $commission->pan_number . '|' . $commission->agt_code . '|' . $commission->code . '|' . $commission->name;
                            if (!isset($groupedData[$key])) {
                                $groupedData[$key] = [
                                    'do_name' => $commission->do_name,
                                    'csc_name' => $commission->csc_name,
                                    'pan_number' => $commission->pan_number,
                                    'agt_code' => $commission->agt_code,
                                    'code' => $commission->code,
                                    'name' => $commission->name,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'month_name' => $commission->month_name,
                                'payable_amt' => $commission->amount_payable,
                                'tds_amt' => $commission->tds_amount,
                                'final_amt' => $commission->final_payable_amount,
                                'clearing_date' => $commission->clearing_date,
                                'bank_name' => $commission->bank_name,
                                'account_no' => $commission->account_no,
                                'ifsc' => $commission->ifsc,
                            ];
                        @endphp
                    @endforeach

                    @foreach ($groupedData as $group)
                        <tr>
                            <td>{{ $group['do_name'] }}</td>
                            <td>{{ $group['csc_name'] }}</td>
                            <td>{{ $group['pan_number'] }}</td>
                            <td>{{ $group['agt_code'] }}</td>
                            <td>{{ $group['code'] }}</td>
                            <td>{{ $group['name'] }}</td>
                            <td><button class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="7">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Month Name</th>
                                            <th>Payable Amt</th>
                                            <th>TDS Amt</th>
                                            <th>Final Amt</th>
                                            <th>Clearing Date</th>
                                            <th>Bank Name</th>
                                            <th>Account No</th>
                                            <th>IFSC</th>
                                
                                        @foreach ($group['details'] as $detail)
                                            <tr>
                                                <td>{{ $detail['month_name'] }}</td>
                                                <td>{{ $detail['payable_amt'] }}</td>
                                                <td>{{ $detail['tds_amt'] }}</td>
                                                <td>{{ $detail['final_amt'] }}</td>
                                                <td>{{ $detail['clearing_date'] }}</td>
                                                <td>{{ $detail['bank_name'] }}</td>
                                                <td>{{ $detail['account_no'] }}</td>
                                                <td>{{ $detail['ifsc'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tr>
                                </thead>
                               
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table id="circularCommissions" class="table table-striped table-bordered">
                <thead>
                    <tr> 
                        <th>SO Code</th>
                        <th>DO</th>
                        <th>SO Name</th>
                        <th>Trainer ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($circularCommissions as $commission)
                        @php
                            $key = $commission->so_code . '|' . $commission->do . '|' . $commission->so_name . '|' . $commission->trainer_id . '|' . $commission->name;
                            if (!isset($groupedData[$key])) {
                                $groupedData[$key] = [
                                    'so_code' => $commission->so_code,
                                    'do' => $commission->do,
                                    'so_name' => $commission->so_name,
                                    'trainer_id' => $commission->trainer_id,
                                    'name' => $commission->name,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'final_amount' => $commission->final_amount,
                                'bank_name' => $commission->bank_name,
                                'bank_ac' => $commission->bank_ac,
                                'ifsc_code' => $commission->ifsc_code,
                                'cir_no' => $commission->cir_no,
                                'date' => $commission->date ? $commission->date->format('Y-m-d') : 'N/A'
                            ];
                        @endphp
                    @endforeach
                    @foreach ($groupedData as $group)
                        <tr>
                            <td>{{ $group['so_code'] }}</td>
                            <td>{{ $group['do'] }}</td>
                            <td>{{ $group['so_name'] }}</td>
                            <td>{{ $group['trainer_id'] }}</td>
                            <td>{{ $group['name'] }}</td>
                            <td><button class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Final Amount</th>
                                            <th>Bank</th>
                                            <th>Bank A/C</th>
                                            <th>IFSC Code</th>
                                            <th>CIR No</th>
                                    
                                        @foreach ($group['details'] as $detail)
                                            <tr>
                                                <td>{{ $detail['date'] }}</td>
                                                <td>{{ $detail['final_amount'] }}</td>
                                                <td>{{ $detail['bank_name'] }}</td>
                                                <td>{{ $detail['bank_ac'] }}</td>
                                                <td>{{ $detail['ifsc_code'] }}</td>
                                                <td>{{ $detail['cir_no'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
            </table>

            

            <div id="noDataMessage" class="no-data" style="display: none;">
                No data available.
            </div>
        </div>
    </div>
 
 
    <script>
        function toggleDetails(button) {
            console.log("Button clicked");
            const detailsRow = button.closest('tr').nextElementSibling;
            if (detailsRow && detailsRow.classList.contains('details-row')) {
                const isHidden = detailsRow.style.display === 'none' || detailsRow.style.display === '';
                detailsRow.style.display = isHidden ? 'table-row' : 'none';
                button.textContent = isHidden ? 'Hide Details' : 'Show Details';
                console.log("Details row toggled", isHidden);
            } else {
                console.log("Details row not found");
            }
        }
        
        document.getElementById('searchButton').addEventListener('click', function () {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const tables = [document.getElementById('bmCommissionTable'), document.getElementById('finalCmCommissionTable'),document.getElementById('circularCommissions')];
            let foundAnyData = false;
        
            tables.forEach(table => {
                const rows = table.querySelectorAll('tbody > tr:not(.details-row)');
                let foundInTable = false;
        
                rows.forEach(row => {
                    const mainCells = Array.from(row.querySelectorAll('td'));
                    const matchInMainRow = mainCells.some(cell => cell.textContent.toLowerCase().includes(input));
                    const detailsRow = row.nextElementSibling;
        
                    // Show or hide the main row based on matches
                    if (matchInMainRow) {
                        row.style.display = ""; // Show main row
                        if (detailsRow && detailsRow.classList.contains('details-row')) {
                            detailsRow.style.display = ""; // Show details row if exists
                        }
                        foundInTable = true;
                        foundAnyData = true;
                    } else if (detailsRow) {
                        // Check the details row for matches
                        const detailCells = Array.from(detailsRow.querySelectorAll('td'));
                        const matchInDetailsRow = detailCells.some(cell => cell.textContent.toLowerCase().includes(input));
        
                        if (matchInDetailsRow) {
                            row.style.display = ""; // Show main row
                            detailsRow.style.display = ""; // Show details row
                            foundInTable = true;
                            foundAnyData = true;
                        } else {
                            row.style.display = "none"; // Hide main row
                            detailsRow.style.display = "none"; // Hide details row if main row is hidden
                        }
                    } else {
                        row.style.display = "none"; // Hide main row if no matches
                    }
                });
        
                // Show or hide the entire table based on rows found
                table.style.display = foundInTable ? "" : "none";
            });
        
            // Show or hide the no data message based on whether any data was found
            document.getElementById('noDataMessage').style.display = foundAnyData ? "none" : "block";
        });
        </script>
        
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
