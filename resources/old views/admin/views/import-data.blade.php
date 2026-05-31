<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakLife Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            background: linear-gradient(315deg, rgb(100, 1, 94) 10%, rgba(0, 123, 255, 1) 58%, rgba(242, 15, 121, 1) 68%, rgba(15, 32, 39, 1) 98%);
            color: #fff;
            font-family: 'Arial', sans-serif;
            overflow: auto;
            animation: gradient 40s ease infinite;
            background-size: 210% 210%;
            background-attachment: fixed;
        }

        @keyframes gradient {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
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
        }
        
        .sidebar h4 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
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

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
            transform: translateX(10px);
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero-heading {
            font-size: 3.5rem;
            animation: fadeIn 2s ease;
        }

        .hero-subheading {
            font-size: 1.5rem;
            animation: fadeInUp 3s ease;
        }

        .btn-hero {
            margin-top: 20px;
            animation: fadeInUp 4s ease;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
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
.sidebar a i {
    margin-right: 5px; /* Increased margin for more space between icon and text */
    font-size: 20px;
    transition: transform 0.3s;
}

.hero-heading {
    font-size: 3em; /* Increased size for prominence */
    font-weight: bold; /* Make the text bold */
    color: #ffffff; /* White color for contrast */
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add a shadow for better visibility */
}

.hero-subheading {
    font-size: 1.5em; /* Slightly larger for emphasis */
    font-weight: bold; /* Make the text bold */
    color: #ffffff; /* White color for contrast */
    text-align: center;
    margin-bottom: 30px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Add a shadow for better visibility */
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
        <a href="/admin/views/commission" style="color: #ecf0f1; display: block;">
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
    
    
    <div class="main-content">
        <section class="hero-section">
            <div>
                <h1 class="hero-heading">Welcome to Maklife Producer Pvt. Company</h1>
                <p class="hero-subheading">Crafting Stories, Creating Experiences</p>
                <a href="#about" class="btn btn-primary btn-hero">Explore Our Work</a>
                <a href="#contact" class="btn btn-outline-light btn-hero">Contact Us</a>
            </div>
        </section>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
