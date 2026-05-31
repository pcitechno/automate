<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Manage your commission reports with ease. Track earnings, automate calculations, and enhance financial transparency with our tools.">
  <meta name="keywords" content="commission, reports, automation, finance, tracking, business growth">
  <title>Manage Your Folder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Add favicon -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4faff;
      color: #333;
      overflow-x: hidden;
    }

    /* Header Section */
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 15px 50px;
      background-color: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      z-index: 10;
      position: relative;
    }

    .header a {
      color: #005ea6;
      text-decoration: none;
      background-color: rgb(242, 241, 238);
      border-radius: 25px;
      margin-inline: 10px;
      padding: 10px 20px;
      font-size: 18px;
      box-shadow: 0 4px 8px #00b8ff;
      text-transform: uppercase;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .header a:hover {
      background-color: #005ea6;
      color: #ffffff;
    }

    .company-logo {
      font-size: 24px;
      color: #00b8ff;
      font-weight: bold;
      display: flex;
      align-items: center;
    }

    .company-logo img {
      height: 80px;
      width: 290px;
      margin-right: 10px;
    }

        /* Hero Section */ 
    .hero {
      display: flex;
      align-items: center;  /* Center vertically */
      justify-content: flex-end;  /* Align content to the right */
      text-align: left;
      position: relative;
      padding: 20px;
      min-height: 79.5vh;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f4faff; 
    }

    /* .hero-text {
      background: rgba(255, 255, 255, 0.8);
      max-width: 700px;
      height: 400px;
      z-index: 10;
    } */

    .hero-text h1 {
      font-size: 48px;
      color: #005ea6;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .hero-text p {
      font-size: 18px;
      margin-top: 20px;
      color: #555;
      line-height: 1.6;
    }

    .hero-buttons {
      margin-top: 20px;
    }

    .hero img {
      position: absolute;
      right: 0;
      bottom: 0;
      z-index: 5;
      width: 100%;
      height: 100%;
    }

    .hero-buttons .btn {
      background-color: rgb(206, 17, 52);
      color: white;
      padding: 10px 20px;
      text-transform: uppercase;
      font-weight: bold;
      border-radius: 5px;
      border: none;
      margin-right: 10px;
      transition: background-color 0.3s;
    }

    .hero-buttons .btn:hover {
      background-color: #005ea6;
    }

    .hero-buttons .btn-learn {
      background-color: white;
      color: #005ea6;
      border: 2px solid #005ea6;
      transition: background-color 0.3s, color 0.3s;
    }

    .hero-buttons .btn-learn:hover {
      background-color: #005ea6;
      color: white;
    }

     /* Footer Section */
     footer {
      padding: 5px;
      text-align: center;
      background-color: #00b8ff;
      color: white;
      z-index: 10;
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    /* Background Shapes */
    .background-shape {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: linear-gradient(135deg, #f4faff 25%, #a4d8fc 100%);
      z-index: -1;
    }

    #header2{
      .nav-link {
        color: #ffffff; /* Change text color on hover */
            }
        background-color: #005ea6; 
      }

    .nav-item {
      text-decoration: none;
      border-radius: 20px;
      background-color: rgb(238, 239, 242);
      padding-inline: 18px;
      font-weight: 700;
      margin: 10px;
      box-shadow: 0 4px 8px #00b8ff;
      transition: background-color 0.3s;
    }

    .nav-item:hover{
      .nav-link {
         color: #ffffff; /* Change text color on hover */
      }
        background-color: #005ea6; /* Color change on hover */
      }

   /* Default styles for larger screens (above 1366px) */
@media (min-width: 1366px) {
  .hero {
    padding: 70px 90px;
    text-align: left;
  }

  .hero-text {
  background: none;
  /* padding: 30px; */
  border-radius: 20px;
  max-width:600px;
  height: 400px;  
  z-index: 10;
  text-align: center;
  margin-left: auto; 
}

  .hero-text h1 {
    font-size: 48px;
  }
  .hero-text p {
    background: white;
    margin-left: 20px;
    font-size: 18px;
  }
  .hero-buttons .btn {
    padding: 10px 20px;
    font-size: 16px;
  }
}


/* For medium devices (between 768px and 1024px) */
@media (max-width: 1024px) {
  .hero {
    padding: 60px;
  }
  .hero-text h1 {
    font-size: 36px;
  }
  .hero-text p {
    font-size: 16px;
  }
  .hero-buttons .btn {
    padding: 10px 18px;
    font-size: 14px;
  }
}


/* For small devices (between 480px and 768px) */
@media (max-width: 768px) {
  .hero {
    padding: 40px;
    text-align: center;
  }

  .hero-text {
    max-width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);

}
  .hero-text h1 {
    font-size: 28px;
  }
  .hero-text p {
    font-size: 15px;
  }
  .hero-buttons .btn {
    padding: 8px 15px;
    font-size: 14px;
  }
  .company-logo img {
    height: 80px;
    width: 250px;
  }
  .graphic-1, .graphic-2 {
    display: none;
  }
}

/* For very small devices (below 480px) */
@media (max-width: 480px) {
  .hero {
    padding: 40px 25px;
    text-align: center;
    .hero-text h1 {
      text-align: center;
    }
  }
  .hero-text {
    padding: 10PX;
    max-width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    }
    
  .hero img {
    /* display: none; */
  }
  .hero-text h1 {
    font-size: 22px;
  }
  .hero-text p {
    font-size: 14px;
    text-align: center;
  }
  .hero-buttons .btn {
    padding: 8px 12px;
    font-size: 12px;
   
  }
  .company-logo img {
    height: 80px;
    width: 250px;
  }
}

  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <nav class="navbar navbar-expand-md bg-white shadow">
      <div class="container">
        <a class="navbar-brand company-logo" href="#">
          {{-- <img src="LOGO.png" alt="Maklife Company Logo"> --}}
          <img src="{{ asset('storage/images/logotrans.png') }}" alt="Maklife Company Logo">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li id="header1" class="nav-item">
              <button class="nav-link btn" onclick="location.href='/'">Home</button>
            </li>
            <li id="header2" class="nav-item">
              <button class="nav-link btn" onclick="location.href='/home1'">Service</button>
            </li>
            <li id="header3" class="nav-item">
              <button class="nav-link btn" onclick="location.href='/home4'">Dairy</button>
            </li>
            <li id="header5" class="nav-item">
              <button class="nav-link btn" onclick="location.href='/home2'">About</button>
            </li>
            <li style="background-color: #378a03" id="header4" class="nav-item">
              <button style=" color:#ffffff" class="nav-link btn" onclick="location.href='/login'">Login</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Background Shape -->
  <div class="background-shape"></div>
  <div class="graphic-1"></div>
  <div class="graphic-2"></div>

  <!-- Hero Section -->
  <main>
    
    <div class="hero">
      
      <div class="hero-text" style="background-color: #eaf7fa; padding: 20px; border-radius: 8px;">
        <h1 style="color: #055872; font-size: 2.5em; font-weight: bold; text-align: center; margin-bottom: 20px;">
          Our Farming & Products
        </h1>
        <div class="farming-container" style="background-color: #ffffff; padding: 15px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
            <h2 style="color: #057288; font-weight: 700; margin-top: 0;">
                <i class="fas fa-leaf" style="color: #32a852;"></i> Farming Types
            </h2>
            <ul style="color: #005ea6; font-size: 1.1em; margin-bottom: 15px;">
                {{-- <li style="margin-bottom: 8px;">
                    <b>Organic Farming</b>
                </li>
                <li style="margin-bottom: 8px;">
                    <i class="fas fa-chicken" style="color: #d4a017;"></i> 
                    <b>Poultry Farming</b>
                </li> --}}

                <p style="color: #333; font-style: italic; margin-top: 10px;">
                    Dairy farming in India is a very profitable business. It provides an excellent opportunity for self-employment of unemployed youth.The demand for milk & milk products is increasing rapidly.
                </p>
            </ul>
            <h2 style="color: #057288; font-weight: 700;">
                <i class="fas fa-glass-cheers" style="color: #d4a017;"></i> Dairy Products
            </h2>
                <p style="color: #333; font-style: italic; margin-top: 10px;">
                    We have a processing unit at Barnala city and 150+ milk collection centers in nearby villages of Bhatinda and Barnala. Approximately 15,000+ farmers are associated with our company.
                </p>
            </ul>
        </div>
    </div>
    
      <img class="img_axp" src="{{ asset('storage/images/bacground2.png') }}" alt="Illustration of Folder Management">
    </div>
  </main>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2024 Maklife All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('.nav-link').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>
