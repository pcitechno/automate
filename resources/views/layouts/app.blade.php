<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maklife ERP Login</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Inter',sans-serif;
        }

        body{

            min-height:100vh;
            overflow:hidden;
            background:#020617;
            position:relative;

        }

        /* =========================
           BACKGROUND
        ========================== */

        .background{

            position:absolute;
            inset:0;

            background:
            radial-gradient(circle at top left,#1d4ed8 0%,transparent 30%),
            radial-gradient(circle at bottom right,#0891b2 0%,transparent 28%),
            #020617;

        }

        .glow{

            position:absolute;
            border-radius:50%;
            filter:blur(120px);
            opacity:.22;
            animation:move 8s infinite alternate ease-in-out;

        }

        .glow1{

            width:380px;
            height:380px;

            background:#2563eb;

            top:-100px;
            left:-80px;

        }

        .glow2{

            width:320px;
            height:320px;

            background:#06b6d4;

            bottom:-80px;
            right:-60px;

        }

        @keyframes move{

            from{
                transform:translateY(0px);
            }

            to{
                transform:translateY(25px);
            }

        }

        /* =========================
           MAIN CONTAINER
        ========================== */

        .container{

            width:100%;
            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            padding:25px;

            position:relative;
            z-index:10;

        }

        /* =========================
           GLASS CARD
        ========================== */

        .glass-card{

            width:92%;
            max-width:1250px;

            min-height:620px;

            display:flex;

            background:rgba(15,23,42,.70);

            border:1px solid rgba(255,255,255,.06);

            border-radius:32px;

            overflow:hidden;

            backdrop-filter:blur(30px);

            box-shadow:
            0 20px 60px rgba(0,0,0,.45);

        }

        /* =========================
           LEFT SIDE
        ========================== */

        .left{

            width:58%;

            padding:45px;

            display:flex;
            flex-direction:column;
            justify-content:space-between;

            position:relative;

        }

        /* LOGO */

        .brand{

            display:flex;
            align-items:center;
            gap:16px;

        }

        .logo{

            width:62px;
            height:62px;

            border-radius:18px;

            background:rgba(255,255,255,.05);

            border:1px solid rgba(255,255,255,.06);

            display:flex;
            justify-content:center;
            align-items:center;

        }

        .logo i{

            font-size:28px;
            color:#38bdf8;

        }

        .brand-text h2{

            color:white;
            font-size:24px;

        }

        .brand-text span{

            color:#94a3b8;
            font-size:14px;

        }

        /* HERO */

        .hero{

            margin-top:20px;

        }

        .tag{

            display:inline-block;

            padding:9px 16px;

            border-radius:50px;

            background:rgba(255,255,255,.05);

            border:1px solid rgba(255,255,255,.06);

            color:#cbd5e1;

            font-size:13px;

            margin-bottom:22px;

        }

        .hero h1{

            color:white;

            font-size:42px;

            line-height:1.15;

            letter-spacing:-1px;

            max-width:540px;

            margin-bottom:22px;

            font-weight:800;

        }

        .hero p{

            color:#94a3b8;

            font-size:16px;

            line-height:1.8;

            max-width:520px;

        }

        /* WIDGETS */

        .widgets{

            margin-top:35px;

            display:grid;

            grid-template-columns:repeat(2,1fr);

            gap:18px;

        }

        .widget{

            background:rgba(255,255,255,.04);

            border:1px solid rgba(255,255,255,.05);

            border-radius:24px;

            padding:24px;

            transition:.35s;

        }

        .widget:hover{

            transform:translateY(-4px);

            border-color:rgba(56,189,248,.18);

            box-shadow:
            0 10px 35px rgba(0,0,0,.25);

        }

        .widget-icon{

            width:52px;
            height:52px;

            border-radius:16px;

            background:rgba(56,189,248,.08);

            display:flex;
            justify-content:center;
            align-items:center;

            color:#38bdf8;
            font-size:20px;

            margin-bottom:18px;

        }

        .widget h3{

            color:white;
            font-size:17px;

            margin-bottom:10px;

        }

        .widget p{

            color:#94a3b8;
            font-size:13px;
            line-height:1.7;

        }

        /* MINI CHART */

        .chart{

            margin-top:18px;

            display:flex;
            align-items:flex-end;

            gap:8px;

            height:55px;

        }

        .bar{

            flex:1;

            border-radius:8px 8px 0 0;

            background:
            linear-gradient(to top,#2563eb,#38bdf8);

        }

        .bar:nth-child(1){height:22px;}
        .bar:nth-child(2){height:48px;}
        .bar:nth-child(3){height:35px;}
        .bar:nth-child(4){height:52px;}
        .bar:nth-child(5){height:40px;}

        /* =========================
           RIGHT SIDE
        ========================== */

        .right{

            width:42%;

            padding:45px;

            border-left:1px solid rgba(255,255,255,.06);

            background:rgba(255,255,255,.02);

            display:flex;
            flex-direction:column;
            justify-content:center;

            position:relative;

        }

        .support{

            position:absolute;

            top:28px;
            right:35px;

            color:#94a3b8;
            font-size:14px;

        }

        .support a{

            color:#38bdf8;
            text-decoration:none;
            font-weight:600;

        }

        /* LOGIN TITLE */

        .login-title{

            margin-bottom:35px;

        }

        .login-title h2{

            color:white;

            font-size:42px;

            margin-bottom:12px;

            line-height:1.2;

        }

        .login-title p{

            color:#94a3b8;

            font-size:15px;

            line-height:1.7;

        }

        /* FORM */

        .form-group{

            margin-bottom:22px;

        }

        .form-group label{

            display:block;

            color:#e2e8f0;

            margin-bottom:10px;

            font-size:14px;
            font-weight:500;

        }

        .input-box{

            position:relative;

        }

        .input-box i{

            position:absolute;

            top:19px;
            left:18px;

            color:#64748b;

            font-size:16px;

        }

        .input-box input{

            width:100%;
            height:56px;

            border:none;
            outline:none;

            border-radius:16px;

            background:rgba(255,255,255,.05);

            border:1px solid rgba(255,255,255,.06);

            padding:0 18px 0 52px;

            color:white;

            font-size:14px;

            transition:.3s;

        }

        .input-box input::placeholder{

            color:#64748b;

        }

        .input-box input:focus{

            border-color:#38bdf8;

            box-shadow:
            0 0 0 4px rgba(56,189,248,.10);

        }

        /* OPTIONS */

        .options{

            display:flex;
            justify-content:space-between;
            align-items:center;

            margin-top:8px;
            margin-bottom:28px;

        }

        .remember{

            display:flex;
            align-items:center;
            gap:8px;

            color:#cbd5e1;

            font-size:13px;

        }

        .options a{

            color:#38bdf8;

            text-decoration:none;

            font-size:13px;

        }

        /* BUTTON */

        .login-btn{

            width:100%;
            height:56px;

            border:none;

            border-radius:16px;

            background:
            linear-gradient(
            135deg,
            #2563eb,
            #06b6d4
            );

            color:white;

            font-size:15px;
            font-weight:700;

            cursor:pointer;

            transition:.35s;

            box-shadow:
            0 12px 35px rgba(37,99,235,.25);

        }

        .login-btn:hover{

            transform:translateY(-3px);

            box-shadow:
            0 18px 45px rgba(37,99,235,.35);

        }

        /* DIVIDER */

        .divider{

            display:flex;
            align-items:center;

            text-align:center;

            color:#64748b;

            font-size:12px;

            margin:28px 0;

        }

        .divider::before,
        .divider::after{

            content:'';

            flex:1;

            border-bottom:1px solid rgba(255,255,255,.05);

        }

        .divider::before{
            margin-right:12px;
        }

        .divider::after{
            margin-left:12px;
        }

        /* SOCIAL */

        .social{

            display:flex;
            justify-content:center;

            gap:14px;

        }

        .social a{

            width:52px;
            height:52px;

            border-radius:16px;

            background:rgba(255,255,255,.05);

            border:1px solid rgba(255,255,255,.06);

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;

            font-size:18px;

            text-decoration:none;

            transition:.35s;

        }

        .social a:hover{

            background:#2563eb;

            transform:translateY(-4px);

        }

        /* FOOTER */

        .footer{

            position:absolute;

            bottom:18px;

            width:100%;

            text-align:center;

            color:#64748b;

            font-size:12px;

            z-index:100;

        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media(max-width:1100px){

            body{
                overflow:auto;
            }

            .glass-card{

                flex-direction:column;

            }

            .left,
            .right{

                width:100%;

            }

        }

        @media(max-width:768px){

            .container{
                padding:18px;
            }

            .left,
            .right{
                padding:30px;
            }

            .hero h1{
                font-size:34px;
            }

            .widgets{
                grid-template-columns:1fr;
            }

            .login-title h2{
                font-size:34px;
            }

        }

    </style>

</head>

<body>

    <!-- BACKGROUND -->

    <div class="background"></div>

    <div class="glow glow1"></div>
    <div class="glow glow2"></div>

    <!-- MAIN -->

    <div class="container">

        <div class="glass-card">

            <!-- LEFT -->

            <div class="left">

                <div>

                    <!-- BRAND -->

                    <div class="brand">

                        <div class="logo">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>

                        <div class="brand-text">

                            <h2>Maklife ERP</h2>

                            <span>
                                Enterprise Reporting Suite
                            </span>

                        </div>

                    </div>

                    <!-- HERO -->

                    <div class="hero">

                        <div class="tag">
                            🚀 AI Powered Business Platform
                        </div>

                        <h1>
                            Smart Business
                            Analytics &
                            Reporting Platform
                        </h1>

                        <p>
                            Real-time monitoring, workflow automation,
                            reporting and enterprise-grade business
                            management in one modern dashboard.
                        </p>

                    </div>

                </div>

                <!-- WIDGETS -->

                <div class="widgets">

                    <!-- CARD -->

                    <div class="widget">

                        <div class="widget-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <h3>Revenue Analytics</h3>

                        <p>
                            Track business performance with
                            live growth insights.
                        </p>

                        <div class="chart">

                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>

                        </div>

                    </div>

                    <!-- CARD -->

                    <div class="widget">

                        <div class="widget-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <h3>Enterprise Security</h3>

                        <p>
                            Protected cloud access with secure
                            authentication systems.
                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="right">

                <div class="support">

                    Need Help?
                    <a href="#">Support</a>

                </div>

                <!-- LOGIN TITLE -->

                <div class="login-title">

                    <h2>
                        Welcome Back 👋
                    </h2>

                    <p>
                        Login to continue accessing your
                        enterprise dashboard.
                    </p>

                </div>

                <!-- FORM -->

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <!-- EMAIL -->

                    <div class="form-group">

                        <label>Email Address</label>

                        <div class="input-box">

                            <i class="fa-solid fa-envelope"></i>

                            <input
                                type="email"
                                name="email"
                                placeholder="Enter your email"
                                required
                            >

                        </div>

                    </div>

                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label>Password</label>

                        <div class="input-box">

                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                name="password"
                                placeholder="Enter your password"
                                required
                            >

                        </div>

                    </div>

                    <!-- OPTIONS -->

                    <div class="options">

                        <div class="remember">

                            <input type="checkbox">

                            Remember Me

                        </div>

                        <a href="#">
                            Forgot Password?
                        </a>

                    </div>

                    <!-- BUTTON -->

                    <button type="submit" class="login-btn">

                        Login To Dashboard

                    </button>

                </form>

                <!-- DIVIDER -->

                <div class="divider">
                    CONTINUE WITH
                </div>

                <!-- SOCIAL -->

                <div class="social">

                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- FOOTER -->

    <div class="footer">
        © 2026 Maklife ERP Suite • Enterprise Intelligence Platform
    </div>

</body>
</html>