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
  justify-content: flex-start;  /* Align content to the right */
  text-align: left;
  position: relative;
  padding: 80px;
  min-height: 79.5vh;
  background-image: url('https://pcitechno.com/uploads/download_material/24/DownoadMateriall_123034115_24.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #f4faff; 
}

    

    .hero-text {
      background: rgba(254, 254, 254, 0.8);
      /* padding: 30px; */
     border-radius: 30px;
      max-width: 700px;
      height: 410px;
      z-index: 10;
    }

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

    #header4{

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





        header a {
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        .main-content {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }
        h1 {
            color: #2ecc71;
            text-align: center;
        }
        h2 {
            color: #eb5f02; /* Apply orange color to h2 elements */
        }
        .content {
            margin-bottom: 30px;
        }
        .images {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .images img {
            max-width: 100%;
            height:200px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
        }
        .outlet-heading {
            text-align: center;
            font-weight: bold;
            color: #2ecc71;
            margin-top: 20px;
        }
        .highlight {
            color: #eb5f02; /* This class can be used for specific highlighted text */
        }





    /* Default styles for larger screens (above 1366px) */
@media (min-width: 1366px) {
  .hero {
    padding: 70px 90px;
    text-align: left;
  }

  .hero-text {
  background: none;
  padding: 30px;
  border-radius: 20px;
  max-width: 750px;
  height: 330px;
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
            <li id="header4" class="nav-item">
              <button class="nav-link btn" onclick="location.href='/home4'">Dairy</button>
            </li>
            <li id="header5" class="nav-item">
              <button class="nav-link btn" onclick="location.href='/home2'">About</button>
            </li>
            <li style="background-color: #378a03" id="header5" class="nav-item">
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
  
    
    <div class="container main-content">
        <div class="content">
            <h2 style="font-weight: 800; font-family: 'Roboto', sans-serif; color:#039e44">Dairy Farming</h2>
            <p style="font-family: 'Roboto', sans-serif"><span class="highlight">Dairy farming</span> in India is a very much profitable business. It provides an excellent opportunity for self-employment of unemployed youth. It is also an important source of income generation to small/marginal farmers and agricultural laborers. India is one of the largest milk producers of the world...</p>
            <p style="font-family: 'Roboto', sans-serif">We have been open our milk outlet in <span class="highlight">Bhatinda</span>, <span class="highlight">Barnala</span>, <span class="highlight">Ludhiana</span>, <span class="highlight">Mansa</span>, <span class="highlight">Sangrur</span>, <span class="highlight">Talwandi</span> & other cities of Punjab. Our outlet name is <span class="highlight">MAK LIFE DAIRY</span>. MAK LIFE is our brand name...</p>
            <p style="font-family: 'Roboto', sans-serif">We have a one processing unit at <span class="highlight">Barnala</span> city and 150+ milk collection centers...</p>
        </div>
        
        <h2 style="color:#039e44; font-family: 'Roboto', sans-serif" class="outlet-heading">Mak Life Dairy Products</h2>
        <div class="images">
            <img src="https://maklife.in/images/product/Paneer_new.png" alt="Outlet Image 1">
            <img src="https://maklife.in/images/product/Milk_Blue.png" alt="Outlet Image 2">
            <img src="https://maklife.in/images/product/dahi_180.png" alt="Outlet Image 3">
            <img src="https://maklife.in/images/product/Dahi_Blue_Cup.png" alt="Outlet Image 4">
        </div>
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
