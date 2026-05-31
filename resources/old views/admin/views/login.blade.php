<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Manage your commission reports with ease. Track earnings, automate calculations, and enhance financial transparency with our tools.">
  <meta name="keywords" content="commission, reports, automation, finance, tracking, business growth">
  <title>Manage Your Folder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <style>
    /* General Body and Background */
    body, html {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
      overflow-x: hidden;
      background: radial-gradient(circle, #e0f7ff, #f4faff);
      position: relative;
    }

    /* Floating Dots for Background Animation */
    .dot {
      position: absolute;
      background: rgba(0, 174, 255, 0.2);
      border-radius: 50%;
      animation: floatDots 8s ease-in-out infinite;
    }

    .dot.dot-1 { width: 50px; height: 50px; top: 20%; left: 10%; animation-delay: 2s; }
    .dot.dot-2 { width: 80px; height: 80px; bottom: 20%; right: 15%; animation-delay: 4s; }
    .dot.dot-3 { width: 30px; height: 30px; top: 70%; left: 50%; animation-delay: 6s; }

    @keyframes floatDots {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }

    /* Header Section */
    .navbar {
      background: linear-gradient(135deg, #003d6a, #00a3e0);
      color: white;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
      z-index: 1000;
      padding: 15px;
    }

    .navbar-brand img {
      height: 60px;
      filter: drop-shadow(4px 10px 25px rgb(255, 255, 255));
    }

    .navbar-nav .nav-link {
      color: white;
      font-weight: bold;
      margin: 0 10px;
      transition: color 0.3s;
      text-transform: uppercase;
      position: relative;
    }

    .navbar-nav .nav-link:hover {
      color: #f4faff;
    }

    /* Login Container Styling */
    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 120px 20px 60px;
      min-height: 80vh;
      text-align: left;
      color: #005ea6;
      overflow: hidden;
      position: relative;
    }


    .login-container {
      background: white;
      padding: 30px;
      width: 400px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
      z-index: 10;
      transition: transform 0.3s ease;
    }



.mb-3{
  text-align: left;
}

    .login-container:hover {
      transform: translateY(-5px);
    }

    .login-container {
      background: white;
      padding: 30px;
      width: 400px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
      z-index: 10;
      transition: transform 0.3s ease;
    }

    .login-container:hover {
      transform: translateY(-5px);
    }

    .btn-custom {
      background: linear-gradient(135deg, #003d6a, #00a3e0);
      border: none;
      color: white;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .btn-custom:hover {
      background: linear-gradient(135deg, #00a3e0, #003d6a);
      color: #fff;
    }

    #hed1{
      text-align: center;
      padding-bottom: 20px;
    }

    /* Footer Section */
    footer {
      background: linear-gradient(135deg, #00b8ff, #005ea6);
      color: white;
      text-align: center;
      padding: 20px;
      position: relative;
    }

    footer .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 20px;
      transition: transform 0.3s, color 0.3s;
    }

    footer .social-icons a:hover {
      color: #f4faff;
      transform: scale(1.2);
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .navbar-brand img { height: 40px; }
      .hero { padding: 80px 20px; }
      .login-container { width: 100%; }
    }
  </style>
</head>
<body>

  <!-- Floating Dots in Background -->
  <div class="dot dot-1"></div>
  <div class="dot dot-2"></div>
  <div class="dot dot-3"></div>

  <!-- Header Section -->
  <header>
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="/">

          <img src="{{ asset('storage/images/newlogo.png') }}" alt="Logo" width="65">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="login-container">
        <h1 id="hed1"><i id="loginid" class="fas fa-user-lock"></i> Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="cont" for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="cont" for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
            <div class="text-center mt-3">
                <a href="#" class="text-primary">Forgot Password?</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2024 Maklife. All rights reserved.</p>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
