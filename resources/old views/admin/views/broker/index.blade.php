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
            padding: 20px;
            margin: 0;
            border-bottom: 2px solid #0056b3;
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
            background: #007bff;
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
        .import-section {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px; /* Add gap between input and button */
        }
        .search-btn {
            border-radius: 20px;
        }
        .dashboard-footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
            background-color: #f1f1f1;
            border-top: 1px solid #dee2e6;
            color: #6c757d;
        }
        .pagination {
            justify-content: center; /* Center pagination */
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
            <h1 class="colorful-text">BROKER REGISTER</h1>

    <!-- Full-Width Container -->
    <div class="container-fluid mt-4">
        <!-- Import Brokers Data and Search Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="import-section text-center">
                {{-- <h2>Import Brokers Data</h2> --}}
                <form action="{{ route('import-brokers') }}" method="POST" enctype="multipart/form-data" class="d-inline-flex justify-content-center align-items-center">
                    @csrf
                    <input type="file" name="file" class="form-control w-auto me-2" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div>

            <div class="search-container">
                <input type="text" id="searchInput" class="form-control" placeholder="Search Brokers..." onkeyup="searchBrokers()">
                <button class="btn btn-primary search-btn" onclick="searchBrokers()">Search</button>
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
                        <th>Preferred Code</th>
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
        </div>

        <!-- Pagination Section -->
        {{-- <nav aria-label="Page navigation">
            <ul class="pagination mt-3">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> --}}
    </div>

    <!-- Dashboard Footer -->
    <footer class="dashboard-footer">
        <p>&copy; 2024 Broker Management System | Designed by Suraj Kr.</p>
    </footer>

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
    </script>

</body>
</html>
