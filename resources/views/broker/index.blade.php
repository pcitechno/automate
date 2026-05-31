<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broker Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


    <!-- Custom CSS for the dashboard -->
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .dashboard-header {
            background-color: #007bff;
            color: white;
            /* padding: 20px; */
            margin: 0;
            /* border-bottom: 2px solid #0056b3; */
        }
        .table-container {
            background: white;
            /* padding: 20px; */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 480px; /* Limit height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .table {
            width: 100%; /* Full width for the table */
            table-layout: auto; /* Allow auto-fitting of columns */
        }
        .table th {
            background: #f32183;
            color: white;
            text-transform: uppercase;
        }
        .table th, .table td {
            white-space: nowrap; /* Prevent text from wrapping */
            padding: 10px 15px; /* Add some padding for better readability */
        }
        .table thead {
            background-color: #007bff;
            color: white;
            position: sticky; /* Make the header sticky */
            top: 0; /* Stick to the top */
            z-index: 10; /* Ensure it stays above other content */
        }

        .dashboard-footer {
            text-align: center;
            padding: 5px 0;
            margin-top: 20px;
            background-color: #f1f1f1;
            border-top: 1px solid #dee2e6;
            color: #6c757d;
        }
        .pagination {
            justify-content: center; /* Center pagination */
        }

        .table th:nth-child(1){
            border-top-left-radius: 20px;
            background: linear-gradient(145deg, #0f2027, #203a43, #f20f79);
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
            padding: 10px;
        }

        .container {
            /* margin-top: 30px; */
            background: #ffffff;
            border-radius: 10px;
            /* padding: 20px; */
            box-shadow: 0 4px 20px rgba(48, 47, 47, 0.2);
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .container {
            /* margin-top: 30px; */
            background: #ffffff;
            border-radius: 10px;
            /* padding: 20px; */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }


        .input-group {
            position: relative;
            margin-bottom: 20px;
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


    .dashboard-header {
    /* font-size: 2.5rem;    */
    /* margin-bottom: 25px; */
    text-align: center;
    font-weight: 900;
    padding: 10px;
    border-bottom-left-radius: 90px;
    border-bottom-right-radius: 90px;
    background: linear-gradient(135deg, #ff24a0, #2155ff);
    box-shadow: 0 14px 20px rgba(0, 0, 0, 0.2);
}
    .recoveries-title {
    color: white;                   /* White text color */
    font-weight: 750;               /* Bold text */
    font-size: 2.6rem;              /* Adjust size as needed */
    margin-bottom: 20px;            /* Space below the title */
    text-align: center;             /* Center the title (optional) */
}

/* Overlay to darken the background */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

/* Modal styling */
.custom-confirmation-modal {
    background-color: #fff;
    padding: 20px;
    width: 90%;
    max-width: 400px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    text-align: center;
    z-index: 1001;
}

.custom-confirmation-modal h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
}

.custom-confirmation-modal p {
    color: #666;
    margin-bottom: 20px;
}

/* Buttons in modal */
.modal-button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    margin: 5px;
}

.modal-button.confirm {
    background-color: #ff3333;
    color: white;
}

.modal-button.cancel {
    background-color: #ccc;
    color: #333;
}
/* Styling for the dropdown menu */
.dropdown-toggle {
    background: linear-gradient(135deg,#2155ff, #ff24a0);
    color: white;
    border: none;
    width: 150px;
    padding: 10px;
}

.dropdown-menu {
    background-color: #edf2ff;
    border: none;
    width: 400px;
    color: white;
}

.dropdown-menu .dropdown-item {
    color: #ecf0f1;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #ffffff;
    color: white;
}

.dropdown-menu .text-danger {
    color: #e74c3c !important;
}
.search-container {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.search-container .form-control {
    width: 100%;
    max-width: 400px;
    padding: 10px 15px;
    border: 2px solid #1872fa;
    border-radius: 25px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.search-container .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
    outline: none;
}

.search-container .form-control::placeholder {
    color: #aaa;
    font-style: italic;
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



/* Dashboard Header Styling */
.dashboard-header {
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.recoveries-title {
    font-size: 2rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0;
    text-align: center;
}

/* Dropdown Button Styling */
.dropdown {
    position: relative;
    margin-top: 10px;
}

.action-btn {
    font-size: 1.2rem;
    font-weight: 500;
    background-color: #007bff;
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    border: none;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.action-btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
    transform: translateY(-2px); /* Subtle lift effect */
}

/* Dropdown Menu Styling */
.dropdown-menu {
    border-radius: 5px;
    padding-top: 25px;
    box-shadow: 0 20px 8px rgba(0, 0, 0, 0.1);
    min-width: 300px; /* Ensures the dropdown has sufficient width */
}

.dropdown-menu .dropdown-item {
    font-size: 1rem;
    padding: 12px 20px;
    transition: background-color 0.3s ease;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #f1f1f1;
}

/* File Input and Submit Button Styling */
.form-control {
    border-radius: 25px; /* Rounded corners for file input */
}

.btn-sm {
    font-size: 1rem;
    padding: 8px 16px;
    border-radius: 25px;
}

/* Text and Button Customizations */
.text-danger {
    color: #e74c3c;
    font-weight: 500;
}

.text-danger:hover {
    text-decoration: underline;
}

/* Responsiveness */
@media (max-width: 768px) {
    .recoveries-title {
        font-size: 1.6rem; /* Slightly smaller title on mobile */
    }

    .dropdown-menu {
        width: 100%; /* Make dropdown full width on mobile */
    }

    .action-btn {
        font-size: 0.8rem;
        padding: 10px 20px;
    }

    .form-control {
        width: 60%; /* Adjust file input width for mobile */
    }
}



/* General Layout Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f7f9fc;
    color: #333;
}
/*
.main-content {
    padding: 20px;
} */


.dashboard-header {
    padding: 15px 0;
    border-bottom: 2px solid #e0e0e0;
}

.action-item a {
    padding: 10px 20px;
    font-size: 1.1rem;
    color: white;
    background-color: #007bff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.action-item a:hover {
    background-color: #0056b3;
}

.table-container {
            background: white;
            /* padding: 20px; */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 600px; /* Limit height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
.table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.table th,
.table td {
    padding: 7px;
    text-align: left;
}


.table thead {
    background-color: #007bff;
    color: white;
}

.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.table th {
    font-weight: bold;
    font-size: 15px;
    padding: 10px;
}

.table td {
    font-size: 0.9rem;
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination .page-item .page-link {
    color: #007bff;
    background-color: white;
    border: 1px solid #007bff;
    margin: 0 2px;
    padding: 5px 10px;
    font-size: 1rem;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    color: white;
}

.pagination .page-item:hover .page-link {
    background-color: #0056b3;
    color: white;
}

/* Center align the title */
.dashboard-header {
    padding: 15px 0;
    border-bottom: 2px solid #e0e0e0;
    text-align: center; /* Centers the title */
}

.recoveries-title {
    font-size: 2rem;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 10px;
    text-align: center; /* Ensure the text itself is centered */
}
/* Dashboard Header Styling */
.dashboard-header {
    display: flex;              /* Use flexbox to align the title and button */
    justify-content: space-between; /* Space between title and button */
    align-items: center;        /* Center vertically */
    padding: 20px 30px;         /* Padding for spacing */
    background-color: #f8f9fa; /* Subtle background color for the header */
    border-radius: 10px;        /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    margin-bottom: 30px;        /* Bottom margin for spacing from content */
}

.recoveries-title {
    font-size: 2rem;            /* Larger font size for the title */
    font-weight: 800;           /* Slightly bold font weight */
    color: #ffffff;             /* Highlight color */
    margin: 0;                  /* Remove default margin */
    text-align: left;           /* Align the title to the left */
    flex: 1;                    /* Allow title to take up available space */
}

.action-item {
    display: flex;
    justify-content: flex-end;  /* Align the button to the right */
}

.action-item .btn {
    font-size: 1.1rem;          /* Slightly larger font for the button */
    padding: 12px 24px;         /* Adequate padding for the button */
    border-radius: 25px;        /* Rounded corners for the button */
    background-color: #007bff;  /* Button background color */
    color: white;               /* Button text color */
    text-decoration: none;      /* Remove underline from the link */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition for hover */
}

.action-item .btn:hover {
    background-color: #0056b3;  /* Darker blue on hover */
    transform: translateY(-2px); /* Slight lifting effect on hover */
}

.action-item .btn:focus {
    outline: none;              /* Remove the focus outline */
}

@media (max-width: 768px) {
    .dashboard-header {
        flex-direction: column;  /* Stack the title and button vertically on smaller screens */
        align-items: center;     /* Center horizontally */
    }

    .recoveries-title {
        font-size: 1.8rem;       /* Slightly smaller font on mobile */
        text-align: center;      /* Center the title on mobile */
    }

    .action-item {
        margin-top: 20px;
        justify-content: center;  /* Center button horizontally */
    }
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
            <i class="fas fa-user-friends fa-lg" style="color: #8e44ad; margin-right: 10px;"></i>Trainer Register <!-- Purple -->
        </a>

        <a href="/coming1" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sliders-h fa-lg" style="color: #f39c12; margin-right: 8px;"></i> Control Panel
        </a>

        <a href="/login" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sign-out-alt fa-lg" style="color: #16a085; margin-right: 8px;"></i> Logout <!-- Teal -->
        </a>
    </div> <body>
    <div class="main-content">
        <div class="container">
            <div class="dashboard-header">
                <h1 class="recoveries-title">TRAINER REPORT</h1>
                    <!-- Dropdown Actions -->
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle action-btn" href="#" role="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cogs fa-lg"></i> Actions
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                            <!-- Import Brokers Data Option -->
                            <li>
                                <form action="{{ route('import-brokers') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center px-3">
                                    @csrf
                                    <input type="file" name="file" class="form-control me-2" required style="width: 70%; max-width: 250px;">
                                    <button type="submit" class="btn btn-sm btn-primary">Import</button>
                                </form>
                            </li>
                            <li><hr class="dropdown-divider"></li>

                            <!-- Delete All Database Option -->
                            <li>
                                <a href="#" onclick="openModal()" class="dropdown-item text-danger">
                                    <i class="fas fa-trash-alt"></i> Delete All Database
                                </a>
                            </li>
                        </ul>
                    </div>

            </div>


    <!-- Full-Width Container -->
    <div class="container-fluid mt-4">

<!-- Custom Confirmation Modal -->
<div class="modal-overlay" id="modalOverlay" style="display: none;">
    <div class="custom-confirmation-modal" id="confirmationModal">
        <h2>Confirm Deletion</h2>
        <p>Are you sure you want to delete all data? This action cannot be undone.</p>
        <button class="modal-button confirm" onclick="confirmDelete()">Yes, Delete</button>
        <button class="modal-button cancel" onclick="closeModal()">Cancel</button>
    </div>
</div>
</div>

        <!-- Brokers List Section -->
        <div class="table-container">
            <table class="table table-bordered table-hover table-striped" id="brokerTable">
                <thead>
                    <tr>
                        <th>Broker ID</th>
                        <th>Broker Name</th>
                        <th>SO/DO/WO</th>
                        <th>Code</th>
                        <th>Date of Joining</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>PAN No</th>
                        <th>Phone No</th>
                        <th>Driving License No</th>
                        <th>Passport No</th>
                        <th>Bank Name</th>
                        <th>Bank Account</th>
                        <th>IFSC Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brokers as $index => $broker)
                        @if ($index > 0) <!-- Skip the first row -->
                        <tr>
                            <td>{{ $broker->broker_id }}</td>
                            <td>{{ $broker->broker_name }}</td>
                            <td>{{ $broker->so_do_wo }}</td>
                            <td>{{ $broker->preffered_code }}</td>
                            <td>{{ $broker->doj }}</td>
                            <td>{{ $broker->dob }}</td>
                            <td>{{ $broker->gender }}</td>
                            <td>{{ $broker->pan_no }}</td>
                            <td>{{ $broker->phone_no }}</td>
                            <td>{{ $broker->driving_lic_no }}</td>
                            <td>{{ $broker->passport_no }}</td>
                            <td>{{ $broker->bank_name }}</td>
                            <td>{{ $broker->bank_account }}</td>
                            <td>{{ $broker->ifsc_code }}</td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $brokers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Search Functionality -->
    <script>
        function searchBrokers() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('brokerTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) { // Start from 1 to skip the header
                const td = tr[i].getElementsByTagName('td');
                let rowVisible = false;

                for (let j = 0; j < td.length; j++) {
                    if (td[j]) {
                        const txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            rowVisible = true;
                            break;
                        }
                    }
                }
                tr[i].style.display = rowVisible ? '' : 'none'; // Show or hide row
            }
        }


    function confirmDeleteAll() {
        if (confirm("Are you sure you want to delete all data in the database? This action cannot be undone.")) {
            fetch('/delete-all', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token for security
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("All data has been deleted successfully.");
                    location.reload();
                } else {
                    alert("An error occurred. Please try again.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("An error occurred. Please try again.");
            });
        }
    }

    function openModal() {
    document.getElementById('modalOverlay').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modalOverlay').style.display = 'none';
}

function confirmDelete() {
    // Call your delete function here, then close the modal
    confirmDeleteAll();
    closeModal();
}

function confirmDeleteAll() {
    fetch('/delete-all', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token for security
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("All data has been deleted successfully.");
            location.reload();
        } else {
            alert("An error occurred. Please try again.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert("An error occurred. Please try again.");
    });
}

    </script>

</body>
</html>
