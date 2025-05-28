<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="oxmaint">
  <title>Get Quote | Oxmaint Software</title>
  <link rel="canonical" href="https://oxmaint.com/get_quote">
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/purple.css">

  <!-- <style>
    #loading-screen {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.7);
      justify-content: center;
      align-items: center;
      text-align: center;
      z-index: 1000;
    }

    #loading-text {
      font-size: 24px;
    }
  </style> -->
 <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the form element
        var form = document.querySelector('form');

        // Attach a submit event listener to the form
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting

            // Get form data
            var name = document.getElementById('loginName').value;
            if (name.trim() === '') {
                alert('Please enter name.');
                return;
            };
            var companyEmail = document.getElementById('loginCompanyName').value;
            if (companyEmail.trim() === '') {
                alert('Please enter Company name.');
                return;
            };

            var workMail = document.getElementById('loginEmail').value;
            if (workMail.trim() === '') {
                alert('Please enter Work Email.');
                return;
            };

            var phoneNo = document.getElementById('loginNumber').value;
            if (phoneNo.trim() === '') {
                alert('Please enter Valid Phone Number.');
                return;
            };

            // showLoadingScreen();
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://prod-106.westeurope.logic.azure.com:443/workflows/06e00f1f03794e11bf70eb76dab34650/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=ib0aqQIxkAJ7aLAWcVy2p_rZWLoSz1ZYpnvbYfXSOm0", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            var data = {
                "name": name,
                "companyName": companyEmail,
                "email": workMail,
                "phone": phoneNo,
                "area":"Get Quote"
            };

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("We have received your information. We will share Schedule Demo details on your Mail Id");
                    document.getElementById('loginName').value = "";
                    document.getElementById('loginCompanyName').value = "";
                    document.getElementById('loginEmail').value = "";
                    document.getElementById('loginNumber').value = "";
                }
            };

            xhr.send(JSON.stringify(data));
            return false; // Prevent default form submission
        });
    });
</script>

  <style>
    .btn-primary:hover {
      background-color: #fab758 !important;
      border-color: #fab758 !important;

      /* background-color: #fdc500 !important; */
      /* border-color: #fdc500 !important; */
    }

    footer a:hover {
      color: #fab758 !important;
    }

    #phone-content h1 {
      font-size: 18px;
      color: white;
    }
  </style>

</head>

<body>
  <div class="content-wrapper">
  <!-- /header -->
         <?php include "./include-2/header100.php" ?>
         
             <section class="wrapper text-dark">
      <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 text-dark mb-3">Book a Tour</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb text-dark">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Book a Tour</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col mt-n19">
            <div class="card shadow-lg">
              <div class="row gx-0 text-center">
                <div class="col-lg-6 bg-soft-primary p-15 text-start d-none d-md-block">
                  <h2 class="display-4 mb-3 text-primary">Book a Tour</h2>
                  <p class="lead fs-lg">Take a live, one-on-one tour with a product expert to see how Oxmaint’s can help
                    you</p>
                  <ul class="icon-list bullet-bg bullet-primary fs-20 mb-0">
                    <li><span><i class="uil uil-check"></i></span><span>Create and manage Work Orders digitally, without
                        the paper.</span></li>
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>IoT Sensor Integration, Custom
                        Integrations from 400＋business app,SAML-based Single Sign-On (SSO).</span></li>
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Data, Integrations, Security
                        etc.</span></li>
                  </ul>
                </div>
                <!--/column -->
                <div class="col-lg-6 card">
                  <div class="p-10 p-md-11 p-lg-13">
                    <h2 class="mb-3 text-start">Start your 30-day free trial today!</h2>
                    <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                    <form class="text-start mb-3">
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Name" id="loginName" required>
                        <label for="loginName">Name*</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Name" id="loginCompanyName" required>
                        <label for="loginCompanyName">Company Name*</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail" required>
                        <label for="loginEmail">Business Email*</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="number" class="form-control" placeholder="Phone Number" id="loginNumber">
                        <label for="loginNumber">Phone Number</label>
                      </div>
                      <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Get Quote</button>
                      <!-- <a class="btn btn-primary rounded-pill btn-login w-100 mb-2" >Get Quote</a> -->
                    </form>
                    <!-- /form -->
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper">
      <div class="container py-2 py-md-2">
        <h2 class="text-center">Trusted by over 1000+ clients across the world</h2>
        <div class="slider-container mt-8">
          <div class="slider-content my-5">
            <div class="slider-item"><img src="./assets/img/brands/c8.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c13.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c14.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c15.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c16.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c6.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c9.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c5.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c8.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c13.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c14.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c15.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c16.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c6.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c9.png" alt="brands" /></div>
            <div class="slider-item"><img src="./assets/img/brands/c5.png" alt="brands" /></div>
          </div>
        </div>
      </div>
    </section>

    <section id="home">
      <div class="wrapper">
        <div class="container pt-5 pt-md-4 pb-4 pb-md-7 text-center">
          <div class="row text-center">
            <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
              <h2 class="display-6 mb-4">Oxmaint is the best software for maintenance and operations across
                third-party review sites.</h2>
              <!-- <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10">Leading the Way to a Better Future for Maintenance Management for Teams.</p> -->
            </div>
            <!-- /column -->

            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/leader.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/best_usability.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/most_impl.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/most_likely.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->


            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/most_recommended.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/best_support.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/best_use.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col">
                <div class="h-100 align-items-center">
                  <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                    <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="./assets/img/brands/get_app.png" alt="" />
                    </figure>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->

    <section class="wrapper">
      <div class="container py-4 py-md-6 text-center">
        <!-- /.row -->
        <div class="position-relative">
          <!-- <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1"
            style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
          <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1"
            style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div> -->
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="./assets/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                  <a href="../report/app_guide.pdf">
                    <h4>App Guide</h4>
                    <p class="mb-2">Download step-by-step guide for app to uderstand software easily.</p>
                  </a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="./assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                  <a href="../report/app_overview.pdf">
                    <h4>Executive Summary</h4>
                    <p class="mb-2">Overview summary for administration/management team.</p>
                  </a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="./assets/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                  <a href="https://youtube.com/playlist?list=PLvikIsAfD2gVu72a4Li6pjBoLtq9OdqTp">
                    <h4>Video Guide</h4>
                    <p class="mb-2">Video Guide to understand software.</p>
                  </a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <div class="card-body">
                  <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                  <a href="contact">
                    <h4>Contact Us</h4>
                    <p class="mb-2">Feel free to reach us for any support.</p>
                  </a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->

          <?php include "./include-2/footer200.php" ?>r200.php" ?>

  <div class="progress-wrap" style="opacity: 1;">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
  <script src="./assets/js/number_picker.js"></script>
</body>

</html>