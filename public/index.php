<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AIP - Automated Invoice Processing</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <style type="text/css">
      body {
        background: linear-gradient(to right, #4568dc, #b06ab3);
      }

      #content {
        display: none;
      }

      .spinner {
        margin: 100px auto;
        width: 50px;
        height: 40px;
        text-align: center;
        font-size: 10px;
      }

      .spinner > div {
        background-color: rgb(255, 253, 253);
        height: 100%;
        width: 6px;
        display: inline-block;
        
        -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
        animation: sk-stretchdelay 1.2s infinite ease-in-out;
      }

      .spinner .rect2 {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
      }

      .spinner .rect3 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
      }

      .spinner .rect4 {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
      }

      .spinner .rect5 {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
      }

      @-webkit-keyframes sk-stretchdelay {
        0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
        20% { -webkit-transform: scaleY(1.0) }
      }

      @keyframes sk-stretchdelay {
        0%, 40%, 100% { 
          transform: scaleY(0.4);
          -webkit-transform: scaleY(0.4);
        }  20% { 
          transform: scaleY(1.0);
          -webkit-transform: scaleY(1.0);
        }
      }
      .sprite {
        background-image: url('./img/spritesheet.png');
        background-repeat: no-repeat;
        display: block;
      }

      .sprite-opt1 {
        width: 450px;
        height: 246px;
        background-position: -5px -5px;
      }

      .sprite-opt2 {
        width: 500px;
        height: 237px;
        background-position: -5px -261px;
      }

      .sprite-opt5 {
        width: 426px;
        height: 400px;
        background-position: -515px -5px;
      }

      a[id="loginBtn"] {
        background-color: #47827E;
      }

      a[id="invoiceBtn"] {
        background-color: #47827E;
      }

      ul {
        text-align: left;
        color: whitesmoke;
        line-height: 2.5em;
        list-style: square;
      }
    </style>

  </head>

  <body id="page-top" onload="myFunction()">
    <!-- Pre-loader Div -->
    <div id="spinner" class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>

    <!-- Content Div -->
    <div style="display: none;" id="content" class="animate-bottom">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="./img/aip_logo.png" alt="Our Logo" height="50px;" style="border-radius: 5px;">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#infovideo">What We Do?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./Dynamic-Invoice-Generator/invoice.html">Example Invoice</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Automated Invoice Processing</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">
            Automated Invoice Processing, for faster ERP and P2P cycles.
          </h2>
          <a href="./Login.php" id="loginBtn" class="btn btn-primary js-scroll-trigger">Get Started</a>
          &nbsp;&nbsp;&nbsp;
          <a href="./Dynamic-Invoice-Generator/invoice.html" id="invoiceBtn" class="btn btn-primary js-scroll-trigger">Example Invoice</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Our Motivation</h2>
            <p class="text-white-50">
              Manual data entry of generated invoices has always been a cumbersome task. We aim
              to automate and fasten your company's ERP cycle, by extracting useful information
              from generated invoices in a swift fashion.
            </p>
            <ul>
              <li>Invoice Processing</li>
              <li>Voucher Entry</li>
            </ul>
          </div>
        </div>
        <!-- CSS Sprite for multiple images gallery -->
        <div class="img_sprite">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="row" style="margin-bottom: 25px;">
                <i class="sprite sprite-opt1"></i>
              </div>
              <div class="row" style="margin-bottom: 25px;">
                <i class="sprite sprite-opt2"></i>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <i class="sprite sprite-opt5"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- What We Do? Section -->
    <section id="infovideo" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">What We Do?</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZmX9pK52lPI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br/>
            <br/>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="projects-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <center>
              <h2>Client Testimonials</h2>
            </center>
            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./img/client1.jpg" alt="First slide" height="500px;">
                  <div class="carousel-caption d-none d-md-block">
                    <h2>Jack Andressen, Oracle Cloud INC.</h2>
                    <p>
                      With AIP on board with Oracle Cloud Services, more and more
                      companies have registered with us, for easier and quicker management
                      of their ERP cycles.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/client2.jpg" alt="Second slide" height="500px;">
                  <div class="carousel-caption d-none d-md-block">
                      <h2>Norman Bates, SAP Inc.</h2>
                      <p>
                        For small-scale manufacturers like me, AIP helps reduce a lot of
                        burden and need for staff. Truly automated in every sense!
                      </p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/bg-masthead.jpg" alt="Third slide" height="500px;">
                  <div class="carousel-caption d-none d-md-block">
                      <h2>Dean Winchester, Impala Corp.</h2>
                      <p>
                        Remarkably innovative idea. True use of technology helping all scale 
                        industries in easier management of their transactions, and ultimately
                        easier accounting.
                      </p>
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Our Developer Team!</h2>

            <table class="table table-hover table-dark shadow-lg p5 mb-3 rounded">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Role</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Jimil Shah</td>
                  <td>Full-stack Developer, System Architect</td>
                  <td>Progsnob! Metal-head! Post-rock lover!</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Manan Doshi</td>
                  <td>Data Scientist, System Architect</td>
                  <td>Analyzing...</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">B-21 Pranik Chambers, Saki Naka IN</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">techsupport@aip.tech.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+1 (555) 902-8832</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; AIP 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
  </div>

  </body>

  <!-- Custom JS for pre-loader -->
  <script>
      var myVar;
      
      function myFunction() {
        myVar = setTimeout(showPage, 3000);
      }
      
      function showPage() {
        document.getElementById("spinner").style.display = "none";
        document.getElementById("content").style.display = "block";
      }
    </script>

</html>
