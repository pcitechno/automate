<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakLife Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Arial', sans-serif;
            color: #333;
            padding: 20px;
        }
        .dashboard-container {
            max-width: 1200px; /* Increased max width for better layout */
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9); /* Slight background to make it pop */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .phase-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            position: relative;
        }
        .phase-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .phase-header {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #6a11cb; /* Color change for better visibility */
        }
        .phase-header span {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
        }
        .icon {
            font-size: 4em; /* Slightly larger icons */
            margin-bottom: 15px;
            color: #2575fc;
            transition: transform 0.3s;
        }
        .phase-description {
            font-size: 1em;
            color: #666;
            margin-bottom: 15px;
        }
        .btn-details {
            background: #2575fc;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px; /* Increased padding */
            font-size: 1em;
            transition: background 0.3s, transform 0.3s;
        }
        .btn-details:hover {
            background: #6a11cb;
            transform: scale(1.05);
        }
        .main-title {
            text-align: center;
            color: #fff;
            font-weight: 700;
            font-size: 3em; /* Increased title size */
            margin-bottom: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <div class="main-title">MakLife Dashboard</div>
    <div class="container dashboard-container">
        <div class="row">
            <!-- Phase 01 -->
            <div class="col-md-4 col-sm-6">
                <div class="phase-card">
                    <div class="phase-header">
                        <span>TASK 01</span> CM-COMMISSION
                    </div>
                    <div class="icon">💰</div> <!-- Changed to a money bag icon -->
                    <button class="btn-details" onclick="window.location.href='/import-cm'">View Details</button>
                </div>
            </div>

            <!-- TASK 02 -->
            <div class="col-md-4 col-sm-6">
                <div class="phase-card">
                    <div class="phase-header">
                        <span>TASK 02</span> BM-COMMISSION
                    </div>
                    <div class="icon">📊</div> <!-- Changed to a bar chart icon -->
                    <button class="btn-details" onclick="window.location.href='/import-bm'">View Details</button>
                </div>
            </div>

            <!-- Phase 03 -->
            <div class="col-md-4 col-sm-6">
                <div class="phase-card">
                    <div class="phase-header">
                        <span>TASK 03</span> CIR-COMMISSION
                    </div>
                    <div class="icon">📈</div> <!-- Changed to a line graph icon -->
                    <button class="btn-details" onclick="window.location.href='/import-cir'">View Details</button>
                </div>
            </div>

            <!-- Phase 04 -->
            <div class="col-md-4 col-sm-6">
                <div class="phase-card">
                    <div class="phase-header">
                        <span>TASK 04</span> BROKER REG
                    </div>
                    <div class="icon">📝</div> <!-- Changed to a clipboard icon -->
                    <button class="btn-details" onclick="window.location.href='/brokers'">View Details</button>
                </div>
            </div>

            <!-- Phase 05 -->
            <div class="col-md-4 col-sm-6">
                <div class="phase-card">
                    <div class="phase-header">
                        <span>TASK 05</span> RECOVERY FILE
                    </div>
                    <div class="icon">📂</div> <!-- Changed to a file folder icon -->
                    <button class="btn-details" onclick="window.location.href='/recoveries'">View Details</button>
                </div>
            </div>

            <!-- Phase 06 -->
            <div class="col-md-4 col-sm-6">
                <div class="phase-card">
                    <div class="phase-header">
                        <span>TASK 06</span> STOP PAYMENTS
                    </div>
                    <div class="icon">🚫</div> <!-- Changed to a prohibited sign icon -->
                    <button class="btn-details" onclick="window.location.href='/stop-payments'">View Details</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
