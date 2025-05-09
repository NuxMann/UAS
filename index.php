<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Booking Hotel</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style3.css">
</head>

<body id="page-top">
  <div id="wrapper" >
    <!-- Sidebar -->
    
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column" >
      <div id="content" >
        <!-- TopBar -->
        <nav id="navbar" class="navbar navbar-expand navbar-light  topbar mb-4 static-top" >
        <a class="navbar-brand" href="#">
          <img src="img/logo/logo-web.png" width="100%" height="100%" class="d-inline-block align-top" alt="">
        </a>

        <!-- Navbar -->
        <nav>
         
          <ul class="navbar-nav ml-auto ml-5">
            
            
            <li class="nav-item d-flex  pr-5 ml-5 ">
              <li class="nav-item">
                <a class="nav-item text-success nav-link active pr-1 ml-5 " href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-item nav-link text-dark pr-1 ml-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Master
              </a>
                <ul class="dropdown-menu pr-5 ml-5">
                  <li><a class="dropdown-item" href="#">Hotel</a></li>
                  <li><a class="dropdown-item" href="#">Kamar</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-item nav-link text-dark pr-1 ml-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Transaksi
              </a>
                <ul class="dropdown-menu pr-5 mr-2">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-item nav-link text-dark pr-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Laporan
              </a>
                <ul class="dropdown-menu pr-5">
                  <li><a class="dropdown-item " href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </li>
            <div class="topbar-divider d-flex d-sm-flex "></div>
            <li class="nav-item dropdown no-arrow d-flex align-items-center ">
                <!-- Button Group -->  
                <div class="d-flex ml-5 mt-5">
                    <a href="login-page.php" class="btn btn-primary me-2">Gabung</a>
                    <a href="register-page.php" class="btn btn-primary ml-3">Daftar</a>
                </div>
            </li>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php"  >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <hr class="text-dark">
      <!-- Body -->
       <!-- Banner -->
      <div id="carouselExample" class="carousel crs-banner slide pb-5">
        <div class="carousel-inner">
          <div class="carousel-item banner active">
            <img src="img/img-banner.jpg" alt="...">
            <h1 class="searchtext">Find Your Hotel Here!</h1> 

            <div class="search-form-container">
              <form class="search-bar mt-4">
                <input type="text" placeholder="Enter location">
                <input type="text" id="checkin" placeholder="Check-in date">
                <input type="text" id="checkout" placeholder="Check-out date">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="roomGuestBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    1 Room, 1 Guest
                  </button>
                  <div class="dropdown-menu mr-4 ml-2 mt-2 pr-auto " aria-labelledby="roomGuestBtn">
                    <!-- Baris Room -->
                    <div class="d-flex flex-row gap-2 mb-2" id="room-options">
                      <a class="dropdown-item px-2 py-1" href="#">1 Room</a>
                      <a class="dropdown-item px-2 py-1" href="#">2 Room</a>
                      <a class="dropdown-item px-2 py-1" href="#">3 Room</a>
                    </div>
                    <!-- Baris Guest -->
                    <div class="d-flex flex-row gap-2" id="guest-options">
                      <a class="dropdown-item px-2 py-1" href="#">1 Guest</a>
                      <a class="dropdown-item px-2 py-1" href="#">2 Guest</a>
                      <a class="dropdown-item px-2 py-1" href="#">3 Guest</a>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-success">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Popular Hotel -->
      <!-- Popular Hotel -->
      <div class="popular-area pt-5 ml-5">
        <div class="title-popular mb-3">
          <h3 class="text-success">Popular Hotel Area</h3>
        </div>

        <div class="d-flex gap-5 mr-4">
          <!-- Item 1 -->
          <div class="text-center mr-4">
            <img src="img/tangerang.jpg" alt="Gambar Lingkaran" class="circle-image mb-2">
            <h4 class="mb-0">Tangerang</h4>
          </div>
          <!-- Item 2 -->
          <div class="text-center mr-4">
            <img src="img/jakarta-2.jpg" alt="Gambar Lingkaran" class="circle-image mb-2">
            <h4 class="mb-0">Jakarta</h4>
          </div>
          <!-- Item 3 -->
          <div class="text-center mr-4">
            <img src="img/bandung.jpg" alt="Gambar Lingkaran" class="circle-image mb-2">
            <h4 class="mb-0">Bandung</h4>
          </div>
        </div>
      </div>


      <!-- Hotel Recomendation -->
      <div class="hotelrecom-area pt-5 ml-5">
        <div class="title-recom">
          <h3 class="text-success">Hotel Recomendation</h3>
        </div>
        <div class="row">
          <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card d-flex flex-column pt-5" style="width: 18rem; height: 100%;">
              <img src="img/novotel-hotel.avif" class="card-img-top" alt="...">
              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <h5 class="card-title" style="color:#198754; font-weight: bold;">Novotel Tangerang</h5>
                  <p class="card-city" style="color:#105B38;">Tangerang</p>
                  <p class="card-text" style="color:#198754;">Starts From php harga/night</p>
                </div>
                <a href="#" class="btn btn-primary mt-3">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card d-flex flex-column pt-5" style="width: 20rem; height: 100%;">
              <img src="img/narita-hotel.jpg" class="card-img-top" alt="...">
              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <h5 class="card-title" style="color:#198754; font-weight: bold;">Narita Hotel</h5>
                  <p class="card-city" style="color:#105B38;">Tangerang</p>
                  <p class="card-text" style="color:#198754;">Starts From php harga/night</p>
                </div>
                <a href="#" class="btn btn-primary mt-3">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <!-- Customer Review -->
      <div class="cusreview-area pt-5 ml-5">
        <div class="title-custrev">
          <h3 class="text-success">Customer Reviews</h3>
        </div>
      </div>
      <div class="reviews ml-5 pt-4">
        <div class="review-box">
          <div class="review-text">Hotel bagus dan nyaman..</div>
        </div>
        <div class="review-box">
          <div class="review-text">Terbaikkk</div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer mt-5">
    <div class="footer-container">

      <!-- Logo dan Deskripsi -->
       <div class="logo-sec">
        <img src="img/logo/logo-footer.png" alt="NuRy Hotel Logo" class="logo-img">
       </div>
      <div class="footer-section">
        <h3>The Best......</h3>
        <h4>GOGreen Hotel</h4>
        <p>PT. Indonesia Semesta Hijau</p>
      </div>

      <!-- Navigation -->
      <div class="footer-section">
        <h4 class="nav-title">NuRy Navigation</h4>
        <ul class="footer-nav">
          <li><a href="#navbar">Home</a></li>
          <li><a href="#">Hotel</a></li>
          <li><a href="#carouselExample">Search</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-section">
        <h4 class="contact-title">Our Contact</h4>
        <i class="loc-footer"><img src="img/location.png" alt="" srcset=""><span>Tangerang,Indonesia</span></i>
        <i class="loc-footer"><img src="img/instagram.png" alt="" srcset=""><span>NuRy Hotel</span></i>
      </div>
      
    </div>

    <div class="footer-bottom">
      <p>©2025 NuRy Hotel.com</p>
    </div>
  </footer>


  

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    flatpickr("#checkin", { dateFormat: "Y-m-d" });
    flatpickr("#checkout", { dateFormat: "Y-m-d" });

    function selectRoomGuest(room, guest) {
      document.getElementById('roomGuestBtn').innerText = `${room} Room, ${guest} Guest`;
    }

    let selectedRoom = "1 Room";
    let selectedGuest = "1 Guest";

    const btn = document.getElementById("roomGuestBtn");

    // Update text function
    function updateButton() {
      btn.innerText = `${selectedRoom}, ${selectedGuest}`;
    }

    // Room options
    document.querySelectorAll("#room-options a").forEach(el => {
      el.addEventListener("click", (e) => {
        e.preventDefault();
        selectedRoom = el.innerText;
        updateButton();
      });
    });

    // Guest options
    document.querySelectorAll("#guest-options a").forEach(el => {
      el.addEventListener("click", (e) => {
        e.preventDefault();
        selectedGuest = el.innerText;
        updateButton();
      });
    });
  </script>
</body>

</html>