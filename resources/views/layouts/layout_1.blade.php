<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body >
    
    <section class="main_body"  >
      <div class="overlay" id="stars" style="position: fixed"></div>
      {{-- header start --}}
     <header class="" >

      <nav class="navbar navbar-expand-lg bg-body-tertiary light container-fluid" data-bs-theme="dark" style="background:rgba(0, 0, 0, 0.568) !important;">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand me-5 p-0 text-light" href="#" >
            <img class="logo_img m-0" src="images/logo_animated.gif"  alt="" width="100px">
          </a>
          
          <a class="navbar-toggler custom-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
          </a>
          
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#"><i class='bx bx-home'></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#footer"><i class='bx bx-user'></i> About</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link text-light" href="#"><i class='bx bx-slideshow'></i> Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#"><i class='bx bx-file'></i> Resume</a>
              </li>
              <li class="nav-item navBar_icons" style="padding:0 !important;">
                  <a class="nav-link btn btn-outline-dark btn-sm m-0" href="#">
                    {{-- <i class='bx bxl-git'></i> --}}
                    <i class='bx bxl-git bx-tada' style='color:#fdfdfd'  ></i>
                  </a>
                  <a class="nav-link btn btn-outline-dark btn-sm m-0" href="#">
                    <i class='bx bxl-linkedin text-primary' ></i>
                  </a>
                  <a class="nav-link btn btn-outline-dark btn-sm m-0" href="#">
                    <i class='bx bxl-whatsapp text-success' ></i>
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      
      
     </header>
     {{-- header End --}}

      @yield('main-body')



      <footer class="row m-0 d-flex justify-content-between">
          <div class="col-12 col-md-4 text-center">Designed & Developed by Rohit Patel</div>
          <div class="col-12 col-md-4 text-center">Copyright@ 2025 Rohit Patel</div>
          <div class="col-12 col-md-4 d-flex justify-content-center navBar_icons">
            <a class="nav-link btn btn-outline-dark btn-sm m-0" href="#">
              <i class='bx bxl-git'></i>
            </a>
            <a class="nav-link btn btn-outline-dark btn-sm m-0" href="#">
              <i class='bx bxl-linkedin text-primary' ></i>
            </a>
            <a class="nav-link btn btn-outline-dark btn-sm m-0" href="#">
              <i class='bx bxl-whatsapp text-success' ></i>
            </a>
          </div>
      </footer>


    </section>

     

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>
</html>