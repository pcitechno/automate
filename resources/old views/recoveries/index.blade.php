<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoveries List and Import Excel File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General Body Styling */
        body {
            background-color: #f8f9fa;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
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
            margin-bottom: 25px;
            text-align: center;
            font-weight: bold;
            padding: 20px; /* Padding for spacing */
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
    </style>
</head>
<body>
    <div class="container-fluid">
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
                        <th>Recovery Amount</th> 
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
            debounceSearch();
        }

        // Debouncing function for search input
        function debounceSearch() {
            let timer;
            return function() {
                clearTimeout(timer);
                timer = setTimeout(() => {
                    const query = document.getElementById('searchInput').value.toLowerCase();
                    filterTable(query);
                }, 300);
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
    </script>
</body>
</html>
