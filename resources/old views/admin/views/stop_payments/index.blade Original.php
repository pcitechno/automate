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
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f4f6f9;
            padding-top: 5px;
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
        .table tr {
            transition: transform 0.3s ease;
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
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 500px; /* Set a maximum height */
            /* overflow-y: auto; Enable vertical scrolling */
            overflow-x: hidden; /* Disable horizontal scrolling */
            margin-top: 20px; /* Space between header and table */
        }
        .table {
            width: 100%; /* Make the table take the full width of its container */
            table-layout: auto; /* Allow table layout to adjust */
        }
        .table th {
            position: sticky; /* Make header sticky */
            top: 0;
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
        /* Enhanced Heading Style */
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
        .table th, .table td {
            padding: 6px 8px; /* Compact padding */
            font-size: 16px; /* Smaller font for compactness */
            text-align: center; /* Center-align text */
            vertical-align: middle; /* Vertically center text */
            width: 14%;            
        }
       /* Fixed width for S_No column */
   .table th:nth-child(1), .table td:nth-child(1) {
        width: 5%; /* Fixed width for S_No column */
    }

   /* Fixed width for S_No column */
   .table th:nth-child(2), .table td:nth-child(2) {
        width: 8%; /* Fixed width for S_No column */
    }

     /* Fixed width for S_No column */
   .table th:nth-child(3), .table td:nth-child(3) {
        width: 8%; /* Fixed width for S_No column */
    }

     /* Fixed width for S_No column */
   .table th:nth-child(4), .table td:nth-child(4) {
        width: 10%; /* Fixed width for S_No column */
    }


  /* Fixed width for S_No column */
  .table th:nth-child(5), .table td:nth-child(5) {
        width: 10%; /* Fixed width for S_No column */
    }

  /* Fixed width for S_No column */
  .table th:nth-child(7), .table td:nth-child(7) {
        width: 4%; /* Fixed width for S_No column */
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





    </style>
</head>
<body>

<div class="container-fluid">
    <h1 class="dashboard-header">Stop Payments</h1>

    <!-- Flash Message -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Action Row for Import, Export, Add Record, and Search -->
    <div class="row mb-9 align-items-center">
        <div class="col-md-9">
            <div class="dropdown">
                <button  class="btn btn-primary btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <th>Name</th>
                    <th>Remark</th>
                    <th>Ref No</th>
                    <th>Actions</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                @foreach ($stopPayments as $stopPayment)
                <tr>
                    <td>{{ $stopPayment->s_no }}</td>
                    <td>{{ $stopPayment->broker_id }}</td>
                    <td>{{ $stopPayment->pef_code }}</td>
                    <td>{{ $stopPayment->name }}</td>
                    <td>{{ $stopPayment->remark }}</td>
                    <td>{{ $stopPayment->ref_no }}</td>
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
