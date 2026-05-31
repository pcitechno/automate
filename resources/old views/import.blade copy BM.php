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


.sidebar {
    height: 100vh;
    width: 250px;
    background: linear-gradient(145deg, #0f2027, #203a43, #f20f79);
    position: fixed;
    top: 0;
    left: 0;
    padding: 60px 20px;
    font-size: 17px;
    box-shadow: 2px 0 15px rgba(0, 0, 0, 0.5);
    transition: width 0.3s ease-in-out;
    overflow: hidden;
}
 
.sidebar h4 {
    color: #ffffff;
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    font-weight: bold;
    letter-spacing: 1px;
}

.sidebar a {
    color: #ffffff;
    text-decoration: none;
    display: flex;
    align-items: center;
    margin: 15px 0;
    padding: 12px;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.3s ease;
    font-size: 18px;
    letter-spacing: 0.5px;
}

.sidebar a i {
    margin-right: 10px;
    font-size: 20px;
    transition: transform 0.3s;
}

.sidebar a:hover {
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    transform: translateX(10px);
}

.sidebar a:hover i {
    transform: rotate(360deg);
}

body {
    background: radial-gradient(circle at top left, #1e3c72, #2a5298);
    color: #fff;
    font-family: 'Poppins', sans-serif;
}

.colorful-text {
    background: linear-gradient(90deg, #011407,#ea134cf9, #0614d1, #011407);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 3em;
    font-weight: bold;
    text-align: center;
    animation: gradient-animation 5s ease-in-out infinite;
}

/* Optional: Add animation for a dynamic gradient effect */
@keyframes gradient-animation {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
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

        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            background: linear-gradient(90deg, #007bff, #6610f2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

        th,td {
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
table{
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


body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgb(100, 1, 94) 10%, rgba(0, 123, 255,1) 58%, rgba(242, 15, 121,1) 68%, rgba(15, 32, 39,1) 98%);
    animation: gradient 40s ease infinite;
    background-size: 210% 210%;
    background-attachment: fixed;
    
}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
    </style>
</head>

<body>

    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>

    <div class="sidebar" style="background-color: #2c3e50; padding: 20px; height: 100vh; color: white;">
        <h4 style="color: #ecf0f1; margin-bottom: 20px;">Performance Summaries</h4>
        <a href="/#" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-home" style="color: #3498db;"></i> Home
        </a>
        <a href="/commission" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-money-check-alt" style="color: #e74c3c;"></i> CM Commission
        </a>
        <a href="/import-export" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-briefcase" style="color: #9b59b6;"></i> BM Commission
        </a>
        <a href="/import" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-building" style="color: #f39c12;"></i> CIR Commission
        </a>
        <a href="/brokers" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-file-alt" style="color: #27ae60;"></i> Broker Register
        </a>
        <a href="/recoveries" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-hand-holding-usd" style="color: #e67e22;"></i> Recovery Report
        </a>
        <a href="/stop-payments" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-ban" style="color: #c42d1c;"></i> Stop Payment
        </a>

        <a href="/import-data" style="color: #ecf0f1;">
            <i class="fas fa-database" style="color: #35949d;"></i>  Database Import
        </a>
        


        <a href="/login" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-sign-out-alt" style="color: #a4c8ec;"></i> Logout
        </a>
    </div>
    
    
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
            <table id="commissionTable" class="table table-striped table-bordered" style="display: none;">
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
                                'final_amount' => $commission->Remark_1,
                                'bank_name' => $commission->Payable_Amount,
                                'bank_ac' => $commission->TDS_Amount,
                                'ifsc_code' => $commission->Final_Amount_Payable,
                                'cir_no' => $commission->CLEARING_DATE,
                                'date' => $commission->BANK_NAME,
                                'bank_ac_no' => $commission->BANK_AC_NO,
                                'ifsc' => $commission->IFSC,
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
                                            <th>Bank Account No</th>
                                            <th>IFSC</th>
                                        </tr>
                                    </thead>
                                    </thead>
                                    <tbody>
                                        @foreach ($group['details'] as $detail)
                                            <tr>
                                               
                                                <td>{{ $detail['final_amount'] }}</td>
                                                <td>{{ $detail['bank_name'] }}</td>
                                                <td>{{ $detail['bank_ac'] }}</td>
                                                <td>{{ $detail['ifsc_code'] }}</td>
                                                <td>{{ $detail['cir_no'] }}</td>
                                                <td>{{ $detail['date'] }}</td>
                                                <td>{{ $detail['bank_ac_no'] }}</td>
                                                <td>{{ $detail['ifsc'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
            </table>
            <p class="no-data" style="display: none;">No data available.</p>
        </div>
    </div>

     <script>
        function toggleDetails(button) {
            const detailsRow = button.closest('tr').nextElementSibling;
            if (detailsRow) {
                const isHidden = detailsRow.style.display === "table-row";
                detailsRow.style.display = isHidden ? "none" : "table-row";
                button.textContent = isHidden ? "Show Details" : "Hide Details";
            }
        }

            document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const searchButton = document.getElementById('searchButton');
            const table = document.getElementById('commissionTable');
            const noDataMessage = document.querySelector('.no-data');

            const performSearch = () => {
                const filter = searchInput.value.toLowerCase();
                let hasData = false;

                for (let row of table.tBodies[0].rows) {
                    const rowText = Array.from(row.cells).map(cell => cell.textContent.toLowerCase()).join(' ');

                    if (filter !== '' && rowText.includes(filter)) {
                        row.style.display = '';
                        hasData = true;
                    } else {
                        row.style.display = 'none';
                    }
                }

                if (filter === '') {
                    table.style.display = 'none';
                    noDataMessage.style.display = '';
                } else {
                    table.style.display = hasData ? '' : 'none';
                    noDataMessage.style.display = hasData ? 'none' : '';
                }
            };

            searchButton.addEventListener('click', performSearch);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
