<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Payments</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        html, body {

        }
        .container-fluid {
            height: 100%;
            display: flex;
            flex-direction: column;
            background: #ffffff;
            border-radius: 10px;
            padding-left: 35px;
            padding-right: 35px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: #007bff;
            text-align: center;
            font-weight: bold;
            position: relative;
        }
        .custom-gradient-button {
            background: linear-gradient(to right, #e74c3c, #c0392b);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .custom-gradient-button:hover {
            background: linear-gradient(to right, #c0392b, #e74c3c);
        }
        .input-group .form-control {
            border-radius: 30px 0 0 30px;
            padding-left: 20px;
            height: 40px;
        }
        .input-group .btn {
            border-radius: 0 30px 30px 0;
            background-color: #28a745;
            height: 40px;
        }
        .input-group .btn:hover {
            background-color: #218838;
        }
        .table th {

            text-transform: uppercase;
            text-align: center;
            font-family: sans-serif;
        }

        .table tr {
            transition: transform 0.3s ease;
            /* font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; */
        }
        .table tr:hover {
            transform: scale(1.02);
            background-color: #e2f0f4;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .modal-header .btn-close {
            color: white;
        }
        .alert {
            margin-bottom: 20px;
        }
        .table-container {
            /* background: white; */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 500px; /* Set a maximum height */
            overflow-y: auto;
            overflow-x: hidden; /* Disable horizontal scrolling */
            /* margin-top: 20px; Space between header and table */
        }
        .table {
            width: 100%; /* Make the table take the full width of its container */
            table-layout: auto; /* Allow table layout to adjust */

        }
        .table th {
            position: sticky; /* Make header sticky */
            top: 0;
            padding: 8px; /* Padding for cells */
            background-color: hsl(172, 99%, 26%); /* Background color for header */
            color: rgb(255, 255, 255); /* Text color for header */
            z-index: 10; /* Ensure header is above the content */
            box-shadow: 0 2px 2px -2px gray; /* Optional shadow for better visibility */
            /* font-family: Helvetica Bold, Arial Black, Roboto Condensed, Montserrat; */
            letter-spacing: 1.1px
        }


        .table td {
            text-align: left; /* Align text to the left */
            border: 1px solid #dee2e6; /* Border styling */
            text-align: center; /* Center-align text */
            font-weight:500;
            color: rgba(0, 0, 0, 0.842);
        }


       /* Fixed width for S_No column */
   .table th:nth-child(1), .table td:nth-child(1) {
        width: 2%;
        /* border-top-left-radius: 30px; */
    }

   /* Fixed width for S_No column */
   .table th:nth-child(2), .table td:nth-child(2) {
        width: 3%; /* Fixed width for S_No column */
    }

     /* Fixed width for S_No column */
   .table th:nth-child(3), .table td:nth-child(3) {
        width: 5%; /* Fixed width for S_No column */

    }


     /* Fixed width for S_No column */
   .table th:nth-child(4), .table td:nth-child(4) {
        width: 10%; /* Fixed width for S_No column */
        text-align: left;
        padding-left: 30px;
        /* padding-left: 30px; */

    }
    .table th:nth-child(5), {
        width: 14%; /* Fixed width for S_No column */
        text-align: center;
    }
  /* Fixed width for S_No column */
.table td:nth-child(5) {
        width: 15%;
        /* padding-left: 30px;  */
        text-transform: lowercase;
        text-align: left;
        padding-left: 30px;
}


.table td:nth-child(5)::first-letter {
    text-transform: capitalize; /* Capitalize the first letter */

}

      /* Fixed width for S_No column */
  .table th:nth-child(6), .table td:nth-child(6) {
        width: 16%; /* Fixed width for S_No column */
        text-align: center;
        /* padding-left: 30px; */
    }

  /* Fixed width for S_No column */
  .table th:nth-child(7), .table td:nth-child(7) {
        width: 2%; /* Fixed width for S_No column */
        /* border-top-right-radius: 30px; */

    }
        .table tbody tr {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
            transform: scale(1.02); /* Slight scale effect on hover */
        }
#add1{
    margin-top: 20px;
}

.dashboard-header {
    /* font-size: 2.5rem;    */
    margin-bottom: 25px;
    text-align: center;
    font-weight: 900;
    padding: 10px;
    border-top-left-radius: 150px;
    border-bottom-right-radius: 150px;
    background: linear-gradient(135deg, #ff24a0, #b60256);
    box-shadow: 0 14px 20px rgba(0, 0, 0, 0.2);
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
            padding: 10px;

        }
        .container {
            /* margin-top: 30px; */
            background: #ffffffe3;
            border-radius: 10px;
            height: 100%;
            padding: 20px;
            padding-top: 0px;
            padding-bottom: 60px;
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



#bac4{
padding-left: 40px;
}

#bac3{
text-align: center;
}

    #bac5,#bac5 { font-size:14px; }
    #bac5::first-letter, #bac5::first-letter { text-transform: uppercase }

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
    background-color: #0056b3;

}

.total-row td {
    text-align: left;
    background: #007bff;
    color: white;
}

.details-row th td{
    text-align: left;

}



.head3{
    background: linear-gradient(90deg, #ff007b,#2667fe);
    font-size: 17px;
}

.head8{
    background: linear-gradient(90deg, #2667fe,#ff007b);
    font-size: 17px;
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

    .recoveries-title {
    color: white;                   /* White text color */
    font-weight: 750;               /* Bold text */
    font-size: 2.6rem;              /* Adjust size as needed */
    margin-bottom: 20px;            /* Space below the title */
    text-align: center;             /* Center the title (optional) */
}

.dropdown{
    background: linear-gradient(135deg, #014c3e, #00ca98); /* Gradient background */
            padding: 8px;
            padding-left: 15px;
            padding-right: 15px;
            color: white;
            border: white;
        }

        .btn-custom {
    background-color: #007bff; /* Custom blue color */
    border-radius: 25px;       /* Rounded corners */
    padding: 10px 20px;        /* Padding for button */
    transition: background-color 0.3s ease, transform 0.2s; /* Smooth transitions */
}

.btn-custom:hover {
    background-color: #0056b3; /* Darker blue on hover */
    transform: translateY(-2px); /* Slight lift effect */
}

.dropdown-menu {
    border-radius: 8px;         /* Rounded corners for dropdown */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.dropdown-item {
    transition: background-color 0.3s; /* Smooth background change */
}

.dropdown-item:hover {
    background-color: #f8f9fa; /* Light gray on hover */
}

.search-input {
    border-radius: 25px 0 0 25px; /* Rounded left corners */
    border: 1px solid #ced4da;     /* Light border */
    padding: 12px 15px;            /* Padding for input */
}

.custom-gradient-button {
    border-radius: 0 25px 25px 0;  /* Rounded right corners */
    background: linear-gradient(90deg, #007bff, #0056b3); /* Gradient background */
    color: white;                   /* White text color */
    border: none;                   /* No border */
    padding: 12px 15px;            /* Padding for button */
}

.custom-gradient-button:hover {
    background: linear-gradient(90deg, #0056b3, #007bff); /* Reverse gradient on hover */
}


/* General button styling */
.btn-custom {
    background-color: #5c67f2; /* Vibrant blue */
    border: none;
    border-radius: 5px;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn-custom:hover {
    background-color: #3b48c7; /* Darker blue for hover */
}

/* Dropdown menu styling */
.dropdown-menu {
    background-color: #f8f9fa; /* Light background */
    border: 1px solid #dcdcdc;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Dropdown items */
.dropdown-item {
    color: #333;
    font-weight: 500;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #e6e9f2; /* Light blue-gray for hover */
}

/* Icons within buttons */
.dropdown-item i {
    margin-right: 8px;
    color: #5c67f2; /* Match button color */
}

/* Modal button custom styling */
[data-bs-toggle="modal"] {
    color: #5c67f2;
}

/* Custom style for delete options */
.dropdown-item:hover i,
.btn-custom i {
    color: #3b48c7; /* Darker color for icon hover */
}

/* Custom styling for 'Delete All' */
[data-bs-target="#confirmDeleteAllModal"] {
    color: #d9534f; /* Red for delete action */
}

[data-bs-target="#confirmDeleteAllModal"]:hover {
    background-color: #f2dede; /* Light red for hover */
}

/* Custom button animation */
.btn-custom:active {
    transform: scale(0.98);
}

/* Adjusting modal styles (optional) */
.modal-header {
    background-color: #5c67f2;
    color: #fff;
    border-bottom: none;
}

.modal-content {
    border-radius: 8px;
}


        .pagination {
            justify-content: center; /* Center pagination */
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
            <i class="fas fa-home" style="color: #3498db;"></i>  HOME
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
            <div class="dashboard-header">
            <h1 class="recoveries-title" style="color: white; ">Stop Payments</h1> </div>

    <!-- Flash Message -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Action Row for Import, Export, Add Record, and Search -->
    <div class="row mb-9 align-items-center">
        <div class="col-md-9">
            <div>
                <button  class="dropdown btn btn-primary btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="fas fa-cogs" style="color: #ffffff; font-size: 1rem; transition: color 0.3s; padding-right:5px"></i>Action

                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addRecordModal">
                            <i class="fas fa-plus"></i> Add New Stop Payment
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="toggleImport()">
                            <i class="fas fa-file-upload"></i> Add New File
                        </button>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('stop-payments.export') }}" title="Export to Excel">
                            <i class="fas fa-file-export"></i>Export in Excel
                        </a>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="showDeleteButtons()">
                            <i class="fas fa-trash"></i>Show Delete Button
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#confirmDeleteAllModal">
                            <i class="fas fa-trash-alt"></i> Delete All Records
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Search..." onkeyup="debounceSearch()" title="Search Records">
                <button class="btn custom-gradient-button" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Import Form (Hidden by Default) -->
    <div  id="add1" class="import-form mb-3" style="display: none;">
        <form action="{{ route('stop-payments.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="file" name="file" class="form-control" required>
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </div>

    <!-- Table for displaying records -->
    <div class="table-container">
        <table class="table table-bordered table-hover mt-4" id="stopPaymentTable">
            <thead>
                <tr>
                    <th>S_No</th>
                    <th>Broker ID</th>
                    <th>PEF Code</th>
                    <th>Trainer Name</th>
                    <th>Remark/Reference</th>
                    <th>Remark-1</th>

                    <th>Actions</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                @foreach ($stopPayments as $index => $stopPayment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $stopPayment->broker_id }}</td>
                    <td>{{ ucwords($stopPayment->pef_code) }}</td>
                    <td>{{ ucwords($stopPayment->name) }}</td>
                    <td>{{ ucwords($stopPayment->ref_no) }}</td>
                    <td>{{ ucwords($stopPayment->remark) }}</td>

                    <td>
                        <form action="{{ route('stop-payments.destroy', $stopPayment->s_no) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm delete-button" style="display: none;">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for Adding New Stop Payment -->
<div class="modal fade" id="addRecordModal" tabindex="-1" aria-labelledby="addRecordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRecordModalLabel">Add New Stop Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('stop-payments.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="broker_id" class="form-label">Broker ID</label>
                        <input type="text" class="form-control" name="broker_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="pef_code" class="form-label">PEF Code</label>
                        <input type="text" class="form-control" name="pef_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" class="form-control" name="remark">
                    </div>
                    <div class="mb-3">
                        <label for="ref_no" class="form-label">Ref No</label>
                        <input type="text" class="form-control" name="ref_no" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Stop Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Confirming Delete All -->
<div class="modal fade" id="confirmDeleteAllModal" tabindex="-1" aria-labelledby="confirmDeleteAllModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteAllModalLabel">Confirm Delete All</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete all records? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="{{ route('stop-payments.destroyAll') }}" method="POST" id="deleteAllForm">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete All</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS and dependencies -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    function toggleImport() {
        const importForm = document.querySelector('.import-form');
        importForm.style.display = importForm.style.display === 'none' ? 'block' : 'none';
    }

    function debounceSearch() {
        const input = document.getElementById('searchInput');
        clearTimeout(window.searchTimeout);
        window.searchTimeout = setTimeout(() => {
            const searchTerm = input.value.toLowerCase();
            const tableRows = document.querySelectorAll('#stopPaymentTable tbody tr');
            tableRows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
                row.style.display = rowText.includes(searchTerm) ? '' : 'none';
            });
        }, 300); // Adjust the delay as needed
    }

    function showDeleteButtons() {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.style.display = button.style.display === 'none' ? 'inline-block' : 'none';
        });
    }

</script>

</body>
</html>
