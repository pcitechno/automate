<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Payments</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->

    <style>
        body {
            background-color: #f4f6f9;
            margin: 0;
            width: 100%;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 10px; */
            width: 100%;
             box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .custom-gradient-button {
            background: linear-gradient(to right, #e74c3c, #c0392b); /* Gradient effect */
            color: white; /* Text color */
            border: none; /* No border */
            padding: 5px 10px; Padding
            font-size: 16px; /* Font size */
            border-radius: 5px; /* Rounded corners */
            transition: background 0.3s ease; /* Transition effect */
        }

        .custom-gradient-button:hover {
            background: linear-gradient(to right, #c0392b, #e74c3c); /* Reverse gradient on hover */
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: #007bff;
            text-align: center;
            font-weight: bold;
            position: relative;
        }
        h1::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background: #28a745;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* Custom Button and Dropdown Styling */
        .btn-custom {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom:hover {
            background-color: #0069d9;
            transform: translateY(-3px);
        }
        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item {
            padding: 12px 20px;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }
        .dropdown-item i {
            margin-right: 8px;
        }

        /* Custom Search Input Styling */
        .input-group .form-control {
            border-radius: 30px 0 0 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding-left: 20px;
            height: 45px;
        }
        .input-group .btn {
            border-radius: 0 30px 30px 0;
            background-color: #28a745;
            transition: background-color 0.3s;
            height: 45px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .input-group .btn:hover {
            background-color: #218838;
        }
        .input-group .btn i {
            font-size: 1.2rem;
        }

        /* Table and Modal Styling */
        .table th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
            text-align: center;
        }
        .table td {
            text-transform: uppercase;
            vertical-align: middle;
            text-align: center;
            background-color: #f8f9fa;
        }
        .table tr:hover td {
            background-color: #e2f0f4;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .modal-header .btn-close {
            background: none;
            border: none;
            color: white;
        }


        .dashboard-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin-bottom: 10;
            border-bottom: 2px solid #0056b3;
        }
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 480px; /* Limit height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="dashboard-header text-center">Stop Payments</h1>

    <!-- Flash Message -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Action Row for Import, Export, Add Record, and Search -->
    <div class="row mb-10 align-items-center">
        <div class="col-md-9">
            <div class="dropdown">
                <button class="btn btn-primary btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-cogs"></i> Actions
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
                            <i class="fas fa-file-export"></i> Export in Excel
                        </a>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="showDeleteButtons()">
                            <i class="fas fa-trash"></i> Show Delete Button
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control search-input" placeholder="Search..." onkeyup="debounceSearch()" title="Search Records">
                <button class="btn btn-success btn-custom" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Import Form (Hidden by Default) -->
    <div class="import-form mb-3" style="display: none;">
        <form action="{{ route('stop-payments.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="file" name="file" class="form-control" required>
                <button type="submit" class="btn btn-primary btn-custom">Import</button>
            </div>
        </form>
    </div>

    <!-- Table for displaying records -->
    <table class="table table-bordered table-hover mt-4" id="stopPaymentTable">
        <thead>
            <tr>
                <th>S_No</th>
                <th>Broker ID</th>
                <th>PEF Code</th>
                <th>Name</th>
                <th>Remark</th>
                <th>Ref No</th>
                <th>Actions</th> <!-- New column for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach ($stopPayments as $stopPayment)  <!-- Correctly loop through the collection -->
            <tr >
                <td>{{ $stopPayment->s_no }}</td>
                <td>{{ $stopPayment->broker_id }}</td>
                <td>{{ $stopPayment->pef_code }}</td>
                <td>{{ $stopPayment->name }}</td>
                <td>{{ $stopPayment->remark }}</td>
                <td>{{ $stopPayment->ref_no }}</td>
                <td> 
                    <!-- Delete Button in a Form -->
                    <form action="{{ route('stop-payments.destroy', $stopPayment->s_no) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="custom-gradient-button delete-button" style="display: none;">Delete</button>
                    </form>         
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
                        <input type="text" class="form-control" id="broker_id" name="broker_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="pef_code" class="form-label">PEF Code</label>
                        <input type="text" class="form-control" id="pef_code" name="pef_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" class="form-control" id="remark" name="remark">
                    </div>
                    <div class="mb-3">
                        <label for="ref_no" class="form-label">Ref No</label>
                        <input type="text" class="form-control" id="ref_no" name="ref_no" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    // Function to toggle the visibility of the import form
    function toggleImport() {
        const importForm = document.querySelector('.import-form');
        importForm.style.display = importForm.style.display === 'none' ? 'block' : 'none';
    }

    // Function to show delete buttons
    function showDeleteButtons() {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.style.display = button.style.display === 'none' ? 'inline-block' : 'none';
        });
    }

    // Debounce function for searching
    function debounceSearch() {
        clearTimeout(window.searchTimeout);
        window.searchTimeout = setTimeout(search, 300);
    }

    // Function to perform search on the table
    function search() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('stopPaymentTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header
            const cells = rows[i].getElementsByTagName('td');
            let rowVisible = false;

            for (let j = 0; j < cells.length - 1; j++) { // Skip the last cell for actions
                if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                    rowVisible = true;
                    break;
                }
            }

            rows[i].style.display = rowVisible ? '' : 'none'; // Show or hide the row
        }
    }
</script>

</body>
</html>
