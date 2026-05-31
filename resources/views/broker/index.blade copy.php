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
    width: 200px;
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




/* Pagination Styles */
.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
}

.pagination .page-link {
    color: #007bff;
}

.pagination .page-link:hover {
    background-color: #e9ecef;
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

        <a href="/brokers" style="color: #ecf0f1; display: block; margin-left:-2px">
            <i class="fas fa-user-friends fa-lg" style="color: #8e44ad; margin-right: 10px;"></i>Broker Register <!-- Purple -->
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
                <div>
                    <h1 class="recoveries-title">Broker Register</h1>
                </div>
            </div>

    <!-- Full-Width Container -->
    <div class="container-fluid mt-4">

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="action-row">
            <form action="{{ route('final_cm_commission.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="file" class="form-control" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>

            <div style="position: relative;">
                <input type="text" class="search-box" id="search" placeholder="Search..." onkeyup="debouncedSearch()" >
                <i class="fas fa-search search-icon"></i>
                <button class="btn-search" onclick="debouncedSearch()"><i class="fas fa-search"></i></button>
            </div>

                      <!-- Export Button -->
                      <div class="action-item">
                        <a href="{{ route('export') }}" class="btn btn-primary">Export Data</a>
                    </div>
        </div>


<!-- Custom Confirmation Modal -->
<div class="modal-overlay" id="modalOverlay" style="display: none;">
    <div class="custom-confirmation-modal" id="confirmationModal">
        <h2>Confirm Deletion</h2>
        <p>Are you sure you want to delete all data? This action cannot be undone.</p>
        <button class="modal-button confirm" onclick="confirmDelete()">Yes, Delete</button>
        <button class="modal-button cancel" onclick="closeModal()">Cancel</button>
    </div>
</div>



            <div class="search-container">
                <input type="text" id="searchInput" class="form-control" placeholder="Search Brokers..." onkeyup="searchBrokers()">
            </div>
        </div>

        <!-- Brokers List Section -->
        <div class="table-container">
            <table class="table table-bordered table-hover table-striped" id="brokerTable">
                <thead>
                    <tr>
                    <th>MTH</th>
                        <th>F_YEAR</th>
                        <th>SO_CODE</th>
                        <th>CSC_NAME</th>
                        <th>DO_NAME</th>
                        <th>REFERENCE_ID</th>
                        <th>AGT_CODE</th>
                        <th>CODE</th>
                        <th>RANK</th>
                        <th>NAME</th>
                        <th>VCHR_NO</th>
                        <th>CREATED_DATE</th>
                        <th>FAT</th>
                        <th>SNF</th>
                        <th>CM_FAT</th>
                        <th>CM_SNF</th>
                        <th>FAT_RATE</th>
                        <th>RATE</th>
                        <th>QUANTITY</th>
                        <th>NET AMOUNT</th>
                        <th>PREVIOUS BALANCE</th>
                        <th>RI INCENTIVE</th>
                        <th>TOTAL PAY</th>
                        <th>RECOVERY 1</th>
                        <th>RECOVERY 2</th>
                        <th>AMOUNT PAYABLE</th>
                        <th>TDS AMOUNT</th>
                        <th>FINAL PAYABLE</th>
                        <th>VPART</th>
                        <th>STATUS</th>
                        <th>ACCOUNT NO</th>
                        <th>BANK NAME</th>
                        <th>IFSC</th>
                        <th>PAN NUMBER</th>
                        <th>REF CODE</th>
                        <th>REMARK 1</th>
                        <th>REMARK 2</th>
                        <th>REMARK 3</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commissions as $index => $commission)
                        @if ($index > 0) <!-- Skip the first row -->
                        <tr>
                        <td>{{ $commission->mth }}</td>
                        <td>{{ $commission->f_year }}</td>
                        <td>{{ $commission->so_code }}</td>
                        <td>{{ $commission->csc_name }}</td>
                        <td>{{ $commission->do_name }}</td>
                        <td>{{ $commission->reference_id }}</td>
                        <td>{{ $commission->agt_code }}</td>
                        <td>{{ $commission->code }}</td>
                        <td>{{ $commission->rank }}</td>
                        <td>{{ $commission->name }}</td>
                        <td>{{ $commission->vchr_no }}</td>
                        <td>{{ $commission->created_date }}</td>
                        <td>{{ $commission->fat }}</td>
                        <td>{{ $commission->snf }}</td>
                        <td>{{ $commission->cm_fat }}</td>
                        <td>{{ $commission->cm_snf }}</td>
                        <td>{{ $commission->fat_rate }}</td>
                        <td>{{ $commission->rate }}</td>
                        <td>{{ $commission->quantity }}</td>
                        <td>{{ $commission->netamount }}</td>
                        <td>{{ $commission->previous_balance }}</td>
                        <td>{{ $commission->ri_incentive }}</td>
                        <td>{{ $commission->total_pay }}</td>
                        <td>{{ $commission->recovery_1 }}</td>
                        <td>{{ $commission->recovery_2 }}</td>
                        <td>{{ $commission->amount_payable }}</td>
                        <td>{{ $commission->tds_amount }}</td>
                        <td>{{ $commission->final_payable_amount }}</td>
                        <td>{{ $commission->vpart }}</td>
                        <td>{{ $commission->status }}</td>
                        <td>{{ $commission->account_no }}</td>
                        <td>{{ $commission->bank_name }}</td>
                        <td>{{ $commission->ifsc }}</td>
                        <td>{{ $commission->pan_number }}</td>
                        <td>{{ $commission->ref_code }}</td>
                        <td>{{ $commission->remark_1 }}</td>
                        <td>{{ $commission->remark_2 }}</td>
                        <td>{{ $commission->remark_3 }}</td>
                        </tr>
                        @endif

                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $commissions->links('pagination::bootstrap-5') }}
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
