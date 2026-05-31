<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoveries List and Import Excel File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        /* General Body Styling */
        body {
            background-color: #f8f9fa;
            /* padding-top: 10px; */
           /* width: 100%; */
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }

        

        .table-container {
            background: white;
            /* padding: 20px; */ 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 500px; /* Set a maximum height */
            overflow-y: auto; /* Enable vertical scrolling */
            overflow-x: hidden; /* Disable horizontal scrolling */
        }

        /* Fixed width for S_No column */
        .table th:nth-child(1), .table td:nth-child(1) {
            text-align: center;
        }
        .table th:nth-child(2), .table td:nth-child(2) {
            text-align: center;
        }
        .table th:nth-child(4), .table td:nth-child(4) {
            text-align: center;
        }

        .table th:nth-child(5), .table td:nth-child(5) {
            text-align: center;
        }



  
        /* Enhanced Heading Style */
        .dashboard-header {
            font-size: 2.5rem;
            /* margin-bottom: 25px; */
            text-align: center;
            font-weight: bold;
            /* padding: 20px; */
            border-radius: 10px; /* Rounded corners */
            position: relative; /* For the pseudo-element */
            overflow: hidden; /* Ensure contents are clipped */
            color: #fff; /* Text color */
            background: linear-gradient(135deg,#1e7afb , #ff214a); /* Gradient background */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        }


           /* Arrow for tooltip */
        .table td:hover::before {
        content: '';
        position: absolute;
        bottom: 90%; /* Adjust based on tooltip height */
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent rgba(0, 0, 0, 0.8) transparent; /* Tooltip arrow color */
        z-index: 10;
            }


        /* Styling table */
        .table thead th {
            position: sticky; 
            background-color: #007bff;
            color: white;
            white-space: nowrap; /* Prevents wrapping */
            text-transform: uppercase; /* Converts heading to uppercase */
        }

        .table {
            table-layout: auto; /* Allows auto width adjustment */
            width: 100%; /* Full width */
        }






.table {
    width: 100%; /* Full width */
    border-collapse: collapse; /* Collapses borders for cleaner look */
}

.table th {
    position: sticky; /* Make header sticky */
    top: 0; /* Position it at the top */
    background-color: #007bff; /* Background color for header */
    color: white; /* Text color for header */
    z-index: 10; /* Ensure header is above the content */
    box-shadow: 0 2px 2px -2px gray; /* Optional shadow for better visibility */
}

.table th, .table td {
    padding: 10px; /* Padding for cells */
    text-align: left; /* Align text to the left */
    border: 1px solid #dee2e6; /* Border styling */
}


#dropdownMenuButton{
            background: linear-gradient(135deg, #ff24a0, #2155ff); /* Gradient background */ 
        }

/* Styling for the table */
        .table {
            table-layout: auto; /* Allows auto width adjustment */
            width: 100%; /* Full width */
        }

        .table td {
            white-space: nowrap; /* Prevent text from wrapping to the next line */
            overflow: hidden; /* Hide overflow text */
            text-overflow: ellipsis; /* Show ellipsis (...) for overflowed text */
        }


        .table tbody tr {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
            transform: scale(1.02); /* Slight scale effect on hover */
        }

        /* Button hover effect */
        .btn-primary {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }



        .modal-header {
            background-color: #007bff;
            color: white;
        }
        /* Styling for import and search */
        .form-inline {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* Search input styling */
        .search-input {
            max-width: 300px;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            background-color: #fff;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
            position: relative;
        }

        /* Placeholder styling */
        .search-input::placeholder {
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Search input hover and focus effect */
        .search-input:hover, .search-input:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Clear button styling */
        .clear-btn {
            margin-left: 10px;
        }
.dashboard-header {
    font-size: 2.5rem;
    margin-bottom: 25px;
    text-align: center;
    font-weight: bold;
    padding: 20px;   
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    color: #fff;
    background: linear-gradient(135deg, #ff24a0, #2155ff);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
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

        <h5 class="control-center-heading" >Quick Access</h5>
        {{-- <a href="/import-data" style="color: #ecf0f1; display: block; margin-bottom: 16px;">
            <i class="fas fa-home" style="color: #3498db;"></i>  HOME
        </a> --}}
        <a href="/commission" style="color: #ecf0f1; display: block;">
            <i class="fas fa-chart-line fa-lg" style="color: #ff6f61; margin-right: 8px;"></i> CM Commission
        </a>
        
        <a href="/import-export" style="color: #ecf0f1; display: block;">
            <i class="fas fa-user-tie fa-lg" style="color: #a86bd0; margin-right: 8px;"></i> BM Commission
        </a>
        
        <a href="/import" style="color: #ecf0f1; display: block; margin-left:-3px">
            <i class="fas fa-balance-scale fa-lg" style="color: #ffb347; margin-right: 10px;"></i>CIR Commission
        </a>
        
        <a href="/brokers" style="color: #ecf0f1; display: block; margin-left:-2px">
            <i class="fas fa-user-friends fa-lg" style="color: #76c7c0; margin-right: 10px;"></i>Broker Register
        </a>
        
        <a href="/search" style="color: #ecf0f1; display: block;">
            <i class="fas fa-search-dollar fa-lg" style="color: #ffae42; margin-right: 8px;"></i> BM + CM + CIR
        </a>
        
        <a href="/recoveries" style="color: #ecf0f1; display: block;">
            <i class="fas fa-wallet fa-lg" style="color: #ff92b2; margin-right: 8px;"></i> Recovery Report
        </a>
        
        <a href="/stop-payments" style="color: #ecf0f1; display: block;">
            <i class="fas fa-hand-paper fa-lg" style="color: #ff5f5f; margin-right: 8px;"></i> Stop Payment
        </a>
        
        <a href="/login" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sign-out-alt fa-lg" style="color: #82b3d4; margin-right: 8px;"></i> Logout
        </a>  
    </div> 
 
<body>
    <div class="main-content">
        <div class="container">
            <h1 class="dashboard-header text-center">Recoveries List</h1>

        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif

        <!-- Import and Delete Buttons in a Single Row -->
        <div class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    <button id="dropdownMenuButton" class="btn btn-info" type="button" data-toggle="collapse" data-target="#importDeleteDropdown" aria-expanded="false" aria-controls="importDeleteDropdown">
                        Import and Delete Options
                    </button>
                    <div class="collapse" id="importDeleteDropdown">
                        <div class="card card-body mt-2">
                            <!-- Excel Import Form -->
                            <form action="{{ route('import.recovery') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center mb-3">
                                @csrf
                                <div class="custom-file">
                                    <input type="file" name="file" id="file" class="custom-file-input" accept=".xls, .xlsx, .csv" required onchange="showFileNameAndValidate()">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                                <button type="submit" class="btn btn-primary ml-3" id="importButton" disabled>Import</button>
                            </form>

                            <!-- Delete All Data Button -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteAllModal">Delete All Data</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-right"> <!-- Aligning to the right -->
                    <!-- Search Input -->
                    <div class="search-container d-flex align-items-center justify-content-end">
                        <input type="text" id="searchInput" class="form-control search-input" placeholder="Search Brokers..." onkeyup="debounceSearch()" aria-label="Search Brokers">
                        <button class="btn btn-danger clear-btn" onclick="clearSearch()">Clear</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Responsive Recoveries Table -->
        <div class="table-container">
            <table class="table table-bordered table-hover" id="recoveriesTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Percentage</th>
                        <th>Name</th>
                        <th>Broker ID</th>
                        <th>Code</th>
                        <th>Amount</th>
                        <th>Recovery Amt</th> 
                        <th>Balance</th>
                        <th>Remark</th>
                        {{-- <th>ORC Sept 2019</th>
                        <th>ORC Oct 2019</th>
                        <th>Brok Nov 2019</th>
                        <th>ORC Nov 2019</th>
                        <th>ORC Dec 2019</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recoveries as $recovery)
                    <tr>
                        <td>{{ \Illuminate\Support\Str::title($recovery->date) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->per) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->name) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->broker_id) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->code) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->amount) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->recov_amount) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->balance) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->remark) }}</td>
                        {{-- <td>{{ \Illuminate\Support\Str::title($recovery->orc_sept_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_oct_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->brok_nov_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_nov_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_dec_2019) }}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Confirming Delete All -->
        <div class="modal fade" id="confirmDeleteAllModal" tabindex="-1" aria-labelledby="confirmDeleteAllModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteAllModalLabel">Confirm Delete All</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete all records? This action cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('delete.recoveries') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete All</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function showFileNameAndValidate() {
            var fileInput = document.getElementById('file');
            var fileName = fileInput.files[0].name;
            var importButton = document.getElementById('importButton');
            document.querySelector('.custom-file-label').innerText = fileName;
    
            // Enable the button only if a file is selected
            importButton.disabled = fileInput.files.length === 0;
        }
    
        function clearSearch() {
            document.getElementById('searchInput').value = '';
            filterTable('');  // Clear filter
        }
    
        // Debounce function to limit search frequency
        function debounce(fn, delay) {
            let timer;
            return function(...args) {
                clearTimeout(timer);
                timer = setTimeout(() => fn.apply(this, args), delay);
            };
        }
    
        function filterTable(query) {
            const table = document.getElementById('recoveriesTable');
            const rows = table.getElementsByTagName('tr');
            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let found = false;
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].textContent.toLowerCase().includes(query)) {
                        found = true;
                        break;
                    }
                }
                rows[i].style.display = found ? '' : 'none';
            }
        }
    
        // Apply debounce to search function
        const debouncedSearch = debounce(() => {
            const query = document.getElementById('searchInput').value.toLowerCase();
            filterTable(query);
        }, 300);
    
        // Attach debounced search to the input
        document.getElementById('searchInput').addEventListener('keyup', debouncedSearch);
    </script>
    </body>
</html>
