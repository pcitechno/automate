<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('searchButton').addEventListener('click', function () {
                const input = document.getElementById('searchInput').value.toLowerCase();
                const tables = [
                    document.getElementById('bmCommissionTable'),
                    document.getElementById('finalCmCommissionTable'),
                    document.getElementById('circularCommissions')
                ];
                let foundAnyData = false;

                tables.forEach(table => {
                    const rows = table.querySelectorAll('tbody > tr:not(.details-row)');
                    let foundInTable = false;

                    rows.forEach(row => {
                        const mainCells = Array.from(row.querySelectorAll('td'));
                        const matchInMainRow = mainCells.some(cell => cell.textContent.toLowerCase().includes(input));
                        const detailsRow = row.nextElementSibling;

                        if (matchInMainRow) {
                            row.style.display = ""; // Show main row
                            if (detailsRow && detailsRow.classList.contains('details-row')) {
                                detailsRow.style.display = ""; // Show details row if exists
                            }
                            foundInTable = true;
                            foundAnyData = true;
                        } else if (detailsRow) {
                            const detailCells = Array.from(detailsRow.querySelectorAll('td'));
                            const matchInDetailsRow = detailCells.some(cell => cell.textContent.toLowerCase().includes(input));

                            if (matchInDetailsRow) {
                                row.style.display = ""; // Show main row
                                detailsRow.style.display = ""; // Show details row
                                foundInTable = true;
                                foundAnyData = true;
                            } else {
                                row.style.display = "none"; // Hide main row
                                detailsRow.style.display = "none"; // Hide details row
                            }
                        } else {
                            row.style.display = "none"; // Hide main row if no matches
                        }
                    });

                    // Show the table only if there is a match
                    table.style.display = foundInTable ? "table" : "none";
                });

                // Show or hide the "no data available" message
                document.getElementById('noDataMessage').style.display = foundAnyData ? "none" : "block";
            });
        });
    </script>


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
        #bmCommissionTable,
    #finalCmCommissionTable,
    #circularCommissions,
    #noDataMessage {
        display: none;
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
    padding: 7px;
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
    background: linear-gradient(90deg,#1bab01, #006860,#f00070,#f00070, #076f13, #1bab01);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 3em;
    font-weight: bold;
    text-align: center;
    font-weight: 900;
    padding-bottom: 30px;
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
            /* margin-top: 30px; */
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
            letter-spacing: 0.1px;
            font-size: 17px;
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

#bac1{
    background: linear-gradient(90deg,#f20f79, #007bff);
    color: white;
    border-top-left-radius: 60px;
    padding: 12px;
    /* border-top-right-radius: 20px; */
    border-bottom-left-radius: 60px;
    text-align: center;
}

#bac2{
    background: linear-gradient(90deg, #007bff,#f20f79);
    color: white;
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;
    /* border-top-left-radius: 60px;
    border-bottom-left-radius: 60px; */
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 15px;
    padding-right: 15px;
}

#bac4{
padding-left: 40px;
}


#bac3{
text-align: center;
}


    #bac5,#bac5 { font-size:14px; }
    #bac5::first-letter, #bac5::first-letter { text-transform: uppercase }


/* Fixed width for Common Heading column  */
       #adj  th:nth-child(1), #adj  td:nth-child(1) {
            width: 12%;

        }
        #adj  th:nth-child(2), #adj  td:nth-child(2) {
            width: 13%;
        }
        #adj  th:nth-child(3), #adj  td:nth-child(3) {
            width: 13%;
        }
        #adj  th:nth-child(4), #adj  td:nth-child(4) {
            width: 24%;
        }
        #adj  th:nth-child(5), #adj  td:nth-child(5) {
            width: 12%;
        }
        #adj  th:nth-child(6), #adj  td:nth-child(6) {
            width: 10%;
        }


/* Fixed width for Table Heading column  */
        #adj1  th:nth-child(1), #adj1  td:nth-child(1) {
            width: 12%;
        }
        #adj1  th:nth-child(2), #adj1  td:nth-child(2) {
            width: 13%;
        }
        #adj1  th:nth-child(3), #adj1  td:nth-child(3) {
            width: 13%;
        }
        #adj1  th:nth-child(4), #adj1  td:nth-child(4) {
            width: 24%;
        }
        #adj1  th:nth-child(5), #adj1  td:nth-child(5) {
            width: 12%;
        }
        #adj1  th:nth-child(6), #adj1  td:nth-child(6) {
            width: 10%;
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

.total-row {
    font-weight: bold;
    color: white;
    background-color: #2c4e72;

}

.total-row td {
    text-align: left;
    background: #007bff;
    color: white;
    border-bottom-right-radius:90px;
    border-bottom-left-radius:90px;
    text-align: center;
}

.details-row th td{
    text-align: left;

}



.head3{
    background: linear-gradient(90deg,#2667fe,#ff007b);
    font-size: 17px;
    border-top-left-radius:90px;
    border-bottom-left-radius:90px;
    text-align: center;
}


.head8{
    background: linear-gradient(90deg, #ff007b, #2667fe);
    font-size: 17px;
    border-top-right-radius:90px;
    border-bottom-right-radius:90px;
    text-align: center;
}

.headd{
    text-align: center;
}

.ctd{
    text-align: center;
}

.table thead th {
            background-color:  #ff007b;
            /* background: linear-gradient(180deg, #203a43, #f20f79); */
            color: white;
            position: sticky;
            top: 0;
        }



.table thead #prd  th {
    background-color: #ff007b;
    color: white;
    position: sticky;
    top: 0;
}



.control-center-heading {
        color: #8f8d8d;
        text-align: center;
        font-size: 18px;
        font-weight: 500;
        padding: 10px 10px;
        margin-bottom: 20px;
        margin-top: 30px;
        background: linear-gradient(145deg, #0f2027, #203a43,#0f2027);
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(75, 74, 74, 0.3);
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }



.input-group {
    max-width: 800px; /* Adjust width as needed */
    margin: 0 auto;   /* Center align the input group */
    padding-bottom: 10PX;
}


.search-button {
    border-radius: 0 25px 25px 0;  /* Rounded corners for the button */
    background-color: #007bff;     /* Button background color */
    color: white;                   /* Button text color */
    border: 1px solid #007bff;      /* Match border with background */
    transition: background-color 0.2s ease; /* Smooth transition for hover effect */
}

.search-button:hover {
    background-color: #0056b3;      /* Darker shade on hover */
    border-color: #0056b3;          /* Match border with hover color */
}

.search-button i {
    font-size: 18px;                 /* Icon size */
}

.search-input {
    border-radius: 25px 0 0 25px; /* Rounded corners for the input */
    border: 1px solid #007bff;     /* Change border color */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
    font-size: 16px;                /* Increase font size for readability */
    padding: 10px 25px;
    border-width: 1.8px;
}          /* Add padding for better spacing */
}

.search-input::placeholder {
    color: #aaa;                    /* Lighter color for the placeholder */
    opacity: 1;                     /* Make it fully opaque */
    transition: color 0.3s ease;   /* Smooth transition for color change */
}

.search-input:focus::placeholder {
    color: #007bff;                 /* Change color on focus to match input */
    opacity: 0.7;                   /* Slightly reduce opacity on focus */
}

.container-fluid {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #c11a1a;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }


        .sidebar a {
    color: #ffffff;
    text-decoration: none;
    display: flex;
    align-items: center;
    margin: 10px 0;
    padding: 7px;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.3s ease;
    font-size: 18px;
    letter-spacing: 0.6px;
}
    </style>
</head>
<body>

    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>

    <div class="sidebar" style="background-color: #2c3e50; padding-left: 20px; padding-top: 2px; height: 100vh; color: white;">
        <a style="padding-left:55px; padding-bottom:0px;" class="navbar-brand" href="/">
            <img src="{{ asset('storage/images/newlogo.png') }}" alt="Logo" width="100">
        </a>
        <div style="color: #9f9f9f; text-align:center; font-size:15px"><i > New Thinking New Way</i> </div>
        <hr style="border-top: 1px solid #fdfeff; width: 100%;">

        <h5 class="control-center-heading" style="margin-top: 20px">Quick Access</h5>
        {{-- <a href="/import-data" style="color: #ecf0f1; display: block; margin-bottom: 16px;">
            <i class="fas fa-home" style="color: #3498db;"></i> Control Panel
        </a> --}}
        <a href="/search" style="color: #ecf0f1; display: block;">
            <i class="fas fa-search-dollar fa-lg" style="color: #e67e22; margin-right: 8px;"></i> BM + CM + CIR <!-- Orange -->
        </a>

        <a href="/stop-payments" style="color: #ecf0f1; display: block;">
            <i class="fas fa-hand-paper fa-lg" style="color: #c0392b; margin-right: 8px;"></i> Stop Payment <!-- Dark Red -->
        </a>
        <a href="/recoveries" style="color: #ecf0f1; display: block;">
            <i class="fas fa-wallet fa-lg" style="color: #2ecc71; margin-right: 8px;"></i> Recovery Report <!-- Green -->
        </a>

        <a href="/commission" style="color: #ecf0f1; display: block;" >
            <i class="fas fa-chart-line fa-lg" style="color: #e74c3c; margin-right: 8px;" ></i> CM Commission <!-- Red -->
        </a>

        <a href="/import" style="color: #ecf0f1; display: block; margin-left:-3px">
            <i class="fas fa-balance-scale fa-lg" style="color: #f1c40f; margin-right: 10px;"></i>CIR Commission <!-- Yellow -->
        </a>
        <a href="/import-export" style="color: #ecf0f1; display: block;">
            <i class="fas fa-user-tie fa-lg" style="color: #3498db; margin-right: 8px;"></i> BM Commission <!-- Blue -->
        </a>

        <a href="/google-index" style="color: #ecf0f1; display: block; margin-left:-2px">
            <i class="fas fa-user-friends fa-lg" style="color: #8e44ad; margin-right: 10px;"></i>Broker Register <!-- Purple -->
        </a>

        <a href="/coming1" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sliders-h fa-lg" style="color: #f39c12; margin-right: 8px;"></i> Control Panel
        </a>

        <a href="/login" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sign-out-alt fa-lg" style="color: #16a085; margin-right: 8px;"></i> Logout <!-- Teal -->
        </a>
    </div>

<body>
    <div class="main-content">
        <div class="container">
            <h1 class="colorful-text">BM CM CIR-COMMISSION</h1>

            <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control search-input" placeholder="Search by:-  Trainer Id / Referral Code / PAN Number">
                <button class="btn search-button" type="button" id="searchButton">
                    <i class="fas fa-search"></i>
                </button>
            </div>


            <table id="adj" class="table table-striped table-bordered" style=" margin-right: 18px;">
                <thead>
                    <tr id="prd">
                        <th class="head3" style="text-align: center; padding:10px">Benefits Name</th>
                        <th class="head4" style="text-align: center">Trainer ID</th>
                        <th class="head5" style="text-align: center">Referral/Ref Code</th>
                        <th class="head6" style="padding-left:40px">Trainer Name</th>
                        <th class="head7" style="text-align: center">PAN Number</th>
                        <th class="head8" style="text-align: center">Payable info</th>
                    </tr>
                </thead>
            </table>

            <table id="bmCommissionTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        {{-- <th>SO Name</th>
                        <th>PAN</th>
                        <th>Trainer ID</th>
                        <th>Trainer Name</th>
                        <th>Code</th> --}}
                        {{-- <th>Details</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($bmCommissions as $commission)
                        @php
                            $key =  $commission->PAN . '|' . $commission->Trainer_ID . '|' . $commission->TRAINER_NAME . '|' . $commission->Code;
                            if (!isset($groupedData[$key])) {

                                $remark = substr(trim($commission->Remark_1), 0, 2);
                                $soCode = ($remark === 'BM') ? 'BM-COMMISSION' : (($remark === 'CM') ? 'CM-COMMISSION' : 'CIR-COMMISSION');

                                $groupedData[$key] = [
                                    'so_code' => $soCode,
                                    'do' => $commission->PAN,
                                    'so_name' => $commission->Trainer_ID,
                                    'trainer_id' => $commission->TRAINER_NAME,
                                    'name' => $commission->Code,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'remark_1' => $commission->Remark_1,
                                'payable_amount' => $commission->Payable_Amount,
                                'tds_amount' => $commission->TDS_Amount,
                                'final_amount' => $commission->Final_Amount_Payable,
                                'clearing_date' => $commission->CLEARING_DATE,
                                'bank_name' => $commission->BANK_NAME,
                                'bank_ac_no' => $commission->BANK_AC_NO,
                                'ifsc' => $commission->IFSC
                            ];
                        @endphp
                    @endforeach

                    @foreach ($groupedData as $group)
                        <tr id="adj1">
                            <td> <div id="bac1">{{ $group['so_code'] }} </div></td>
                            <td id="bac3">{{ $group['so_name'] }}</td>
                            <td id="bac3">{{ $group['name'] }}</td>
                            <td id="bac4">{{ $group['trainer_id'] }}</td>
                            <td id="bac3">{{ $group['do'] }}</td>
                            <td><button id="bac2" class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr id="bac6">
                                            <th  class="head3">Remark</th>
                                            <th>Payable Amount</th>
                                            <th>TDS Amount</th>
                                            <th>Final Amount Payable</th>
                                            <th>Clearing Date</th>
                                            <th>Bank Name</th>
                                            <th>Account_No</th>
                                            <th class="head8">IFSC Code</th>

                                            @php
                                            $totalPayable = 0;
                                            $totalTds = 0;
                                            $totalFinal = 0;
                                        @endphp
                                        @foreach ($group['details'] as $detail)
                                        @php
                                        // Add the current row's values to the totals
                                        $totalPayable += $detail['payable_amount'];
                                        $totalTds += $detail['tds_amount'];
                                        $totalFinal += $detail['final_amount'];
                                        @endphp
                                            <tr>
                                                <td class="headd">{{ $detail['remark_1'] }}</td>
                                                <td class="ctd">{{ $detail['payable_amount'] }}</td>
                                                <td class="ctd">{{ $detail['tds_amount'] }}</td>
                                                <td class="ctd">{{ $detail['final_amount'] }}</td>
                                                <td class="ctd">{{ $detail['clearing_date'] }}</td>
                                                <td class="ctd" id="bac5">{{ $detail['bank_name'] }}</td>
                                                <td>{{ $detail['bank_ac_no'] }}</td>
                                                <td class="head4 headd">{{ $detail['ifsc'] }}</td>
                                            </tr>
                                        @endforeach

                                        <!-- Display total in the last row -->
                                        <tr class="total-row">
                                            <td style="text-align: center;">Grand Total</td>
                                            <td>₹ {{ number_format($totalPayable, 2) }}</td>
                                            <td>₹ {{ number_format($totalTds, 2) }}</td>
                                            <td>₹ {{ number_format($totalFinal, 2) }}</td>
                                            <td colspan="4"></td>
                                        </tr>

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
                    {{-- <tr>
                        <th>CSC Name</th>
                        <th>PAN Number</th>
                        <th>AGT Code</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Details</th>
                    </tr> --}}
                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($finalCmCommissions as $commission)
                        @php
                            $key =  $commission->csc_name . '|' . $commission->pan_number . '|' . $commission->agt_code . '|' . $commission->code . '|' . $commission->name;
                            if (!isset($groupedData[$key])) {
                                $remark = substr(trim($commission->remark_3), 0, 2);
                                $soCode = ($remark === 'BM') ? 'BM-COMMISSION' : (($remark === 'CM') ? 'CM-COMMISSION' : 'CIR-COMMISSION');

                                $groupedData[$key] = [
                                    'csc_name' => $soCode,
                                    'pan_number' => $commission->pan_number,
                                    'agt_code' => $commission->agt_code,
                                    'code' => $commission->code,
                                    'name' => $commission->name,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'remark_3' => $commission->remark_3,
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
                        <tr id="adj1">
                            <td><div  id="bac1"> {{ $group['csc_name'] }} </div></td>
                            <td id="bac3">{{ $group['agt_code'] }}</td>
                            <td id="bac3">{{ $group['code'] }}</td>
                            <td id="bac4">{{ $group['name'] }}</td>
                            <td id="bac3">{{ $group['pan_number'] }}</td>
                            <td><button id="bac2" class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="7">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr id="bac6">
                                            <th class="head3" >Remark</th>
                                            <th>Payable Amount</th>
                                            <th>TDS Amount</th>
                                            <th>Final Amount Payable</th>
                                            <th>Clearing Date</th>
                                            <th>Bank Name</th>
                                            <th>Account No</th>
                                            <th class="head8">IFSC Code</th>
                                            @php
                                            // Initialize total variables outside the loop to prevent resetting with each iteration
                                            $totalPayable = 0;
                                            $totalTds = 0;
                                            $totalFinal = 0;
                                            @endphp

                                        @foreach ($group['details'] as $detail)

                                            <tr>
                                                <td class="headd">{{ $detail['remark_3'] }}</td>
                                                <td class="ctd">{{ number_format((float) $detail['payable_amt'], 2) }}</td>
                                                <td class="ctd">{{ number_format((float) $detail['tds_amt'], 2) }}</td>
                                                <td class="ctd">{{ number_format((float) $detail['final_amt'], 2) }}</td>
                                                <td class="ctd">{{ $detail['clearing_date'] }}</td>
                                                <td class="ctd" id="bac5">{{ $detail['bank_name'] }}</td>
                                                <td class="ctd">{{ $detail['account_no'] }}</td>
                                                <td class="headd">{{ $detail['ifsc'] }}</td>
                                            </tr>
                                            @php
                                            // Accumulate totals for display at the end
                                            $totalPayable += (float) $detail['payable_amt'];
                                            $totalTds += (float) $detail['tds_amt'];
                                            $totalFinal += (float) $detail['final_amt'];
                                            @endphp

                                        @endforeach

                                         <!-- Display total in the last row -->
                                         <tr class="total-row">
                                            <td style="text-align: center;">Grand Total</td>
                                            <td>₹ {{ number_format($totalPayable, 2) }}</td>
                                            <td>₹ {{ number_format($totalTds, 2) }}</td>
                                            <td>₹ {{ number_format($totalFinal, 2) }}</td>
                                            <td colspan="4"></td>
                                        </tr>
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

                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($circularCommissions as $commission)
                        @php
                            $key = $commission->so_code . '|' . $commission->do . '|' . $commission->so_name . '|' . $commission->trainer_id . '|' . $commission->name;
                            if (!isset($groupedData[$key])) {

                                $remark = substr(trim($commission->cir_no), 0, 2);
                                $soCode = ($remark === 'BM') ? 'BM-COMMISSION' : (($remark === 'CM') ? 'CM-COMMISSION' : 'CIR-COMMISSION');

                                $groupedData[$key] = [
                                    'so_code' => $soCode,
                                    'do' => $commission->trainer_id,
                                    'so_name' => $commission->reference_id,
                                    'trainer_id' => $commission->name,
                                    'name' => $commission->so_code,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'final_amount' => $commission->final_amount,
                                'bank_name' => $commission->bank_name,
                                'bank_ac' => $commission->bank_ac,
                                'ifsc_code' => $commission->ifsc_code,
                                'cir_no' => $commission->cir_no,
                                'net_payable_amount' => $commission->net_payable_amount,
                                'tds_deduction' => $commission->tds_deduction,
                                'date' => $commission->date ? $commission->date->format('Y-m-d') : 'N/A'
                            ];
                        @endphp
                    @endforeach
                    @foreach ($groupedData as $group)
                        <tr id="adj1">
                            <td> <div id="bac1">{{ $group['so_code'] }}</div></td>
                            <td id="bac3">{{ $group['do'] }}</td>
                            <td id="bac3">{{ $group['so_name'] }}</td>
                            <td id="bac4">{{ $group['trainer_id'] }}</td>
                            <td id="bac3">{{ $group['name'] }}</td>
                            <td><button id="bac2" class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr id="bac6">
                                            <th class="head3">Remark</th>
                                            <th>Payable Amount</th>
                                            <th>TDS Amount</th>
                                            <th>Final Amount Payable</th>
                                            <th>Clearing Date</th>
                                            <th>Bank Name</th>
                                            <th>Account No</th>
                                            <th class="head8">IFSC Code</th>


                                            @php
                                            // Initialize total variables outside the loop to prevent resetting with each iteration
                                            $totalPayable = 0;
                                            $totalTds = 0;
                                            $totalFinal = 0;
                                        @endphp

                                        @foreach ($group['details'] as $detail)
                                            <tr>
                                                <td class="headd">{{ $detail['cir_no'] }}</td>
                                                <td class="ctd">{{ number_format((float) $detail['net_payable_amount'], 2) }}</td>
                                                <td class="ctd">{{ number_format((float) $detail['tds_deduction'], 2) }}</td>
                                                <td class="ctd">{{ number_format((float) $detail['final_amount'], 2) }}</td>
                                                <td class="ctd">{{ $detail['date'] }}</td>
                                                <td class="ctd" id="bac5">{{ $detail['bank_name'] }}</td>
                                                <td class="ctd">{{ $detail['bank_ac'] }}</td>
                                                <td class="headd">{{ $detail['ifsc_code'] }}</td>
                                            </tr>

                                            @php
                                                // Accumulate totals for display at the end
                                                $totalPayable += (float) $detail['net_payable_amount'];
                                                $totalTds += (float) $detail['tds_deduction'];
                                                $totalFinal += (float) $detail['final_amount'];
                                            @endphp
                                        @endforeach

                                        <!-- Display total in the last row -->
                                        <tr class="total-row">
                                            <td style="text-align: center;">Grand Total</td>
                                            <td>₹ {{ number_format($totalPayable, 2) }}</td>
                                            <td>₹ {{ number_format($totalTds, 2) }}</td>
                                            <td>₹ {{ number_format($totalFinal, 2) }}</td>
                                            <td colspan="4"></td>
                                        </tr>

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
