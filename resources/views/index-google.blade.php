<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broker Dashboard</title>
    <!-- Bootstrap 5 CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



    <!-- Custom CSS for the dashboard -->
    <style>
        body {
            /* background-color: #f8f9fa; */
            margin: 0;
            padding: 0;
        }
        .dashboard-header {
            background-color: #007bff;
            color: white;
            /* padding: 20px;
            margin: 0;
            /* border-bottom: 2px solid #0056b3; */
        }



        .pagination {
            justify-content: center; /* Center pagination */
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

        }

        .container {
            /* margin-top: 30px; */
            /* background: #ffffff; */
            border-radius: 10px;
            /* padding: 20px; */
            padding-bottom: 40px;
            /* box-shadow: 0 4px 20px rgba(48, 47, 47, 0.2); */
        }
        .main-content {
            margin-left: 260px;
            padding: 10px;

        }

        .container {
            /* margin-top: 30px; */
            /* background: #ec7f7f; */
            border-radius: 10px;
            padding-LEFT: 12px;
            padding-right: 12px;
            padding-bottom: 40px;
            /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); */
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
    background: linear-gradient(135deg, #f7018c, #005bbc,#f7018c);
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
    /* width: 100%; */
    max-width: 800px;
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
    /*font-style: italic;*/
}



        .form-table-container {
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 700px;
        }

        .form-table th {
            background-color: #007bff;
            color: white;
            padding: 10px;
        }

        .form-table td {
            padding: 10px;
        }

         .form-control {
            width: 100%;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .hidden {
            display: none;
        }

        body {
            /* background-color: #f8f9fa; */
            margin: 0;
            padding: 0;
        }
        .dashboard-header {
            color: #fff;
            padding: 20px;
            margin: 0;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff24a0, #2155ff);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 480px;
            overflow-y: auto;
            display: none; /* Initially hidden */
        }
        .table th {
            background: #007bff;
            color: white;
            text-transform: uppercase;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .table th, .table td {
            padding: 10px 15px;
            white-space: nowrap;
        }
        .search-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .form-control, .btn {
            border-radius: 20px;
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




.recoveries-title {
    color: rgb(255, 255, 255);    /* White text color */
    font-weight: 750;               /* Bold text */
    font-size: 2.6rem;              /* Adjust size as needed */
    margin-bottom: 20px;            /* Space below the title */
    text-align: center;             /* Center the title (optional) */
}

.dashboard-header {
    /* font-size: 2.5rem;    */
    margin-bottom: 25px;
    text-align: center;
    font-weight: 900;
    padding: 10px;
    border-bottom-left-radius: 90px;
    border-bottom-right-radius: 90px;
    background: linear-gradient(90deg, #ff24a0,#b4b000,#b4b000,#007bff,#ff24a0);
    box-shadow: 0 14px 20px rgba(0, 0, 0, 0.2);
}

.col-md-6 p{
    color: black;
}
.col-md-12 p{
    color: black;
}

.toast-large {
        min-width: 400px; /* Adjust width as needed */
        padding: 20px;
        font-size: 1.25rem; /* Increase text size */
        border-radius: 1rem; /* Rounded corners */
    }

    /* Larger icon */
    .toast-large .fa-2x {
        font-size: 2rem; /* Adjust size */
    }

    /* Smooth fade-in and scale animation */
    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .toast-large {
        animation: fadeInScale 0.5s;
    }

    .btn-close-black {
        filter: invert(100%);
    }

    .custom-toast {
        position: fixed;
        top: 50%; /* Set vertical position in px */
        left: 55%; /* Center horizontally */
        transform: translateX(-50%); /* Adjust for perfect centering */
        z-index: 11;
    }

    /* Larger Toast Style */
    .toast-large {
        min-width: 400px; /* Adjust width */
        padding: 20px;
        font-size: 1.25rem; /* Increase text size */
        border-radius: 1rem; /* Rounded corners */
    }

    .btn-close-black {
        filter: invert(100%);
    }

    .search-container {
    justify-content: center; /* Centers the contents horizontally */
  }

  .search-container input#searchInput {
    width: 800px; /* Adjust the width as needed */
    padding: 10px;
  }

  .search-container button {
    padding: 8px 16px;
  }

  .centered-container {
    display: flex;
    justify-content: center; /* Centers the search-container itself */
    align-items: center;
  }

  .centered-container {
    display: flex;
    justify-content: center; /* Centers the content horizontally */
    align-items: center;     /* Centers the content vertically (optional) */
    width: 100%;            /* Makes the container span the full width */

  }

  .search-container input#searchInput {
    width: 600px; /* Adjust width as needed */
    padding: 10px;
  }

  .search-container button {
    padding: 8px 16px;
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



.search-input::placeholder {
    color: #aaa;                    /* Lighter color for the placeholder */
    opacity: 1; /* Make it fully opaque */
    transition: color 0.3s ease;   /* Smooth transition for color change */
}

.search-input:focus::placeholder {
    color: #007bff;                 /* Change color on focus to match input */
    opacity: 0.7;                   /* Slightly reduce opacity on focus */
}


/* Centering the container */


/* Styling the search container */
.search-container {
    /* background-color: #ffffffa2; */
    padding: 15px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    margin-top: 150px;
    /* transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; */
}

/* .search-container:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
} */

/* Styling the input field */
.search-input {
    flex: 1;
    border: 2px solid #ff0062;
    border-radius: 5px;
    padding: 10px;
    padding-left:20px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.search-input:focus {
    border-color: #ff00bf;
    outline: none;
}

/* Styling the button */
.search-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.search-btn:hover {
    background-color: #0056b3;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Icon styling inside the button */
.search-btn i {
    margin-right: 8px;
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


.dashboard-header {
    /* font-size: 2.5rem;    */
    /* margin-bottom: 25px; */
    text-align: center;
    font-weight: 900;
     padding: 10px;
    border-bottom-left-radius: 90px;
    border-bottom-right-radius: 90px;
    background: linear-gradient(315deg, rgb(100, 1, 94) 10%, rgba(0, 123, 255,1) 58%, rgba(242, 15, 121,1) 68%, rgba(15, 32, 39,1) 98%);
    box-shadow: 0 14px 20px rgba(0, 0, 0, 0.2);
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

h6 {
    font-size: 1.1rem;
    font-weight: bold;
}

p {
    margin: 0.5rem 0;
    font-size: 0.95rem;
}

.bg-danger-subtle {
    background-color: #fdecea;
    border-left: 5px solid #f77c73;
}

.bg-light {
    background-color: #f7f7f7;
}

.shadow-sm {
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
}

hr {
    border: 0;
    border-top: 1px solid #ddd;
}



/*strong{*/
/*    text-transform:uppercase;*/
/*}*/

        .text-spinner {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .loading-text {
            font-size: 1.5rem;
            color: #6c757d;
        }


        /* Container for the icon */
        .pro-icon {
          position: relative;
          width: 100px;
          height: 100px;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        /* Animated orbit */
        .orbit {
          position: absolute;
          width: 100%;
          height: 100%;
          border: 5px solid transparent;
          border-top: 5px solid #64b5f6; /* Blue */
          border-right: 5px solid #ff6f61; /* Red */
          border-radius: 50%;
          animation: spin 2s linear infinite;
        }

        /* Inner core with gradient */
        .core {
          position: absolute;
          width: 40%;
          height: 40%;
          background: radial-gradient(circle, #ffd54f, #ff6f61);
          border-radius: 50%;
          box-shadow: 0 0 15px rgba(255, 111, 97, 0.6),
                      0 0 30px rgba(100, 181, 246, 0.4);
        }

        /* Spin animation */
        @keyframes spin {
          0% {
            transform: rotate(0deg);
          }
          100% {
            transform: rotate(360deg);
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
            <i class="fas fa-home" style="color: #3498db;"></i> Control Center
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
            <i class="fas fa-user-friends fa-lg" style="color: #8e44ad; margin-right: 10px;"></i>Trainer Register <!-- Purple -->
        </a>

        <a href="/coming1" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sliders-h fa-lg" style="color: #f39c12; margin-right: 8px;"></i> Control Panel
        </a>

        <a href="/login" style="color: #ecf0f1; display: block;">
            <i class="fas fa-sign-out-alt fa-lg" style="color: #16a085; margin-right: 8px;"></i> Logout <!-- Teal -->
        </a>
    </div>


    </div>
    <body>
    <div class="main-content">
        <div class="container">
            <div class="dashboard-header">
                <div>
                    <h1 class="recoveries-title">Trainer Register</h1>
                </div>
            </div>
       <!-- Main Container -->
       <div class="container-fluid mt-4">

 <!-- Toast Notification -->
<div class="custom-toast" style="z-index: 11">
    <div id="noMatchToast" class="toast align-items-center text-bg-warning border-0 shadow-lg toast-large" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body d-flex align-items-center">
                <i class="fas fa-exclamation-triangle me-3 fa-2x text-danger"></i>
                <span class="text-dark fs-5">
                    <strong>No Match Found!</strong> The Trainer you're searching for doesn't exist. Please try again with different criteria.
                </span>
            </div>
            <button type="button" class="btn-close btn-close-black me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>



        <!-- Import and Search Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            {{-- <div class="import-section">
                <form action="{{ route('import-brokers') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center">
                    @csrf
                    <input type="file" name="file" class="form-control w-auto me-2" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div> --}}
                  <div class="centered-container">
                <div class="search-container d-flex align-items-center">
                    <input type="text"
                           id="searchInput"
                           class="search-input form-control me-2"
                           placeholder="Search by: Trainer ID / Referral Code / PAN Number"
                           style="margin-right: 100px; padding-left: 25px; line-height: 1.5;">
                    <button class="btn btn-primary search-btn" onclick="searchAndShowPopup()"
                            style="padding: 10px 15px;">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>



        <!-- Modal (Dynamic Content) -->
        <div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="dynamicModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="dynamicModalLabel">
                            <i class="fas fa-user-circle me-2"></i> Broker Details
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalContent">
                        <!-- Content will be populated dynamically -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Search and Modal -->
    <script>


    // Preloader script
        window.addEventListener("load", function () {
            const preloader = document.getElementById("preloader");
            const mainContent = document.querySelector(".main-content");
            preloader.style.display = "none"; // Hide the preloader
            mainContent.style.display = "block"; // Show the main content
        });


        const brokers = @json($brokers); // Pass brokers data from the backend to JavaScript

        function searchAndShowPopup() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const matchedBroker = brokers.find(broker =>
        broker.broker_id.toLowerCase().includes(input) ||
        broker.broker_name.toLowerCase().includes(input) ||
        broker.preffered_code.toLowerCase().includes(input)
    );

    if (matchedBroker) {
        populateModal(matchedBroker);
        const modal = new bootstrap.Modal(document.getElementById('dynamicModal'));
        modal.show();
    } else {
        // Show the "No Match Found" toast
        const toast = new bootstrap.Toast(document.getElementById('noMatchToast'));
        toast.show();
    }
}


        function populateModal(broker) {
            const modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = `
   <!-- General Information -->
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-secondary border-bottom pb-2">
                            <i class="fas fa-info-circle me-2"></i> General Information
                        </h6>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Broker ID:</strong> ${broker.broker_id}</p>

                        <p> <strong>Broker Name:</strong> ${broker.broker_name}
                        </p>

                    </div>
                    <div class="col-md-6">
                        <p><strong>Preferred Code:</strong> ${broker.preffered_code}</p>
                        <p>
                        <strong>Date of Joining:</strong> ${broker.doj}</p>

                    </div>

                </div>
                <hr>
                <!-- Personal Details -->
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-primary border-bottom pb-2">
                            <i class="fas fa-user me-2"></i> Personal Details
                        </h6>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Aadhar No:</strong> ${broker.driving_lic_no}</p>
                        <p><strong>Gender:</strong> ${broker.gender}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>SO/DO/WO:</strong> ${broker.so_do_wo}</p>
                        <p><strong>Phone No:</strong> ${broker.phone_no}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Date of Birth:</strong> ${broker.dob}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>PAN No:</strong> ${broker.pan_no}</p>
                    </div>
                    <div class="col-md-12">
                        <p><strong>Address:</strong> ${broker.address}</p>
                    </div>
                </div>
                <hr>
                <!-- Bank Details -->
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-success border-bottom pb-2">
                            <i class="fas fa-university me-2"></i> Bank Details
                        </h6>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Bank Name:</strong> ${broker.bank_name}</p>
                        <p><strong>Bank Account:</strong> ${broker.bank_account}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>IFSC Code:</strong> ${broker.ifsc_code}</p>
                    </div>
                </div>
            `;
        }
    </script></body>

</html>
