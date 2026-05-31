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
        /* h1::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background: #28a745;
            margin: 10px auto 0;
            border-radius: 2px;
        } */
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
            height: 45px;
        }
        .input-group .btn {
            border-radius: 0 30px 30px 0;
            background-color: #28a745;
            height: 45px;
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
            transition: transform 0.3s ease; /* Smooth transition for scaling */
        }
        .table tr:hover {
            transform: scale(1.02); /* Scale up slightly on hover */
            background-color: #e2f0f4; /* Keep the existing background color change */
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
        .dashboard-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            padding-bottom: 12px;
            margin-bottom: 10px;
            border-bottom: 2px solid #0056b3;
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
        .table {
            width: 100%; /* Make the table take the full width of its container */
            table-layout: auto; /* Allow table layout to adjust */
        }

        .table-container {
    position: relative;
    max-height: 500px; /* Adjust this height as needed */
    overflow-y: auto; /* Enable vertical scrolling */
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

/* .table th, .table td {
    padding: 10px; 
    text-align: left; 
    border: 1px solid #dee2e6; 
} */


.table th, .table td {
        padding: 6px 8px; /* Reduce padding to decrease row height */
        font-size: 14px;  /* Adjust font size for a compact look */
        vertical-align: middle; /* Vertically center-align text */
        text-align: center; /* Center-align text horizontally */
    }


        /* Equal column width */
    .table th, .table td {
        padding: 6px 8px;      /* Compact padding */
        font-size: 14px;       /* Smaller font for compactness */
        /* text-align: left;    Center-align text */
        vertical-align: middle;/* Vertically center text */
        width: auto;            
        }

        

            /* Table styling */
    .table {
        width: 100%; /* Full width */
        table-layout: fixed; /* Fixes column widths */
    }

    /* Column width settings */
    .table th, .table td {
        padding: 6px 8px;
        font-size: 14px;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        position: relative;
        text-transform: capitalize; /* Makes the first letter uppercase */
    }

    /* Fixed width for S_No column */
    .table th:nth-child(1), .table td:nth-child(1) {
        width: 6%; /* Fixed width for S_No column */
    }

    /* Equal width for remaining columns */
    .table th:nth-child(n+2), .table td:nth-child(n+2) {
        width: 15.33%; /* Adjust based on remaining columns (92% / 6 = 15.33%) */
    }

    /* Tooltip styling on hover */
    .table td:hover::after {
        content: attr(data-fulltext); /* Display full text on hover */
        position: absolute;
        bottom: 100%; /* Position tooltip above cell */
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(0, 0, 0, 0.8); /* Tooltip background color */
        color: #fff;
        padding: 5px;
        border-radius: 4px;
        white-space: nowrap;
        z-index: 10;
        font-size: 12px;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Arrow for tooltip */
    .table td:hover::before {
        content: '';
        position: absolute;
        bottom: 90%;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent rgba(0, 0, 0, 0.8) transparent;
        z-index: 10;
    }
    /* .col_1{
        width: 8%; 
        text-align: center;
    } */

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
                <button class="btn btn-success" type="button">
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
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </div>

    <!-- Table for displaying records -->
    <div class="table-container">
        <table class="table table-bordered table-hover mt-4" id="stopPaymentTable">
            <thead>
                <tr>
                    <th class="col_1" style=" text-align: center">S_No</th>
                    <th class="col_1">Broker ID</th>
                    <th class="col_1">PEF Code</th>
                    <th>Name</th>
                    <th>Remark</th>
                    <th>Ref No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stopPayments as $stopPayment)
                <tr>
                    <td class="col_1" style=" text-align: center">{{ $stopPayment->s_no }}</td>
                    <td class="col_1">{{ $stopPayment->broker_id }}</td>
                    <td class="col_1">{{ $stopPayment->pef_code }}</td>
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
                        <input type="text" class="form-control" name="remark" required>
                    </div>
                    <div class="mb-3">
                        <label for="ref_no" class="form-label">Reference No</label>
                        <input type="text" class="form-control" name="ref_no" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Stop Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
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
        }, 300);
    }

    function showDeleteButtons() {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.style.display = button.style.display === 'none' ? 'inline-block' : 'none';
        });
    }
</script>

<!-- Bootstrap 5 and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
