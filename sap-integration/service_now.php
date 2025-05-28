<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Asset management is a critical aspect of running an educational institution. Effective management of physical, financial, and human resources can enhance operational efficiency, improve student outcomes, and support long-term sustainability. In this article, we explore the key strategies and tools that educational leaders can use to optimize their asset management practices and achieve their organizational goals." />
  <meta name="keywords"
    content="asset management, education industry, physical resources, financial resources, human resources, operational efficiency, student outcomes, sustainability, strategies, tools, organizational goals" />
  <meta name="author" content="oxmaint" />
  <title>Oxmaint - ServiceNow Integration</title>
  <link rel="canonical" href="https://oxmaint.com/sap-integration/service_now">
  <link rel="shortcut icon" href="./../assets/img/favicon.png" />
  <link rel="stylesheet" href="./../assets/css/plugins.css" />
  <link rel="stylesheet" href="./../assets/css/style.css" />
  <link rel="stylesheet" href="./../assets/css/colors/purple.css" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-Y6M0T9NLP4");
  </script>

  <style>
    @media (max-width: 576px) {
      .bg-xs-none {
        background-image: none !important;
      }
    }

    .btn-primary:hover {
      background-color: #fab758 !important;
      border-color: #fab758 !important;
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
  <!-- Navbar starts -->
  <div class="content-wrapper">
    <!-- /header -->
         <?php include "../include-2/header100.php" ?>
    <!-- navbar over -->

    <!-- Main Header Section -->
    <section class="wrapper">
      <div class="container pt-18">
        <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-12 align-items-center mx-auto">
          <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true">
            <h1 class="display-2 mb-5 text-primary" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
              Seamless Integration of ServiceNow and Oxmaint for Enhanced Maintenance Management</h1>
            <p class="lead fs-22 lh-sm mb-7 px-md-10 px-lg-0" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
              Streamline Your Maintenance Operations with Real-Time Data Synchronization and Automation</p>
            <div class="d-flex mx-auto justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="200"
              data-cue="slideInDown" data-disabled="true" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
              <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="200" data-show="true"
                style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 500ms; animation-direction: normal; animation-fill-mode: both;">
                <a target="_blank" href="https://apps.apple.com/us/app/maintenance-workorder-oxmaint/id1568268027" class="me-2"><img loading="lazy"
                    src="../assets/img/photos/button-appstore.svg" class="h-8 rounded-xl" alt="button-appstore"></a>
              </span>
              <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="200" data-show="true"
                style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 800ms; animation-direction: normal; animation-fill-mode: both;">
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.jrs.oxmaint"><img loading="lazy"
                    src="../assets/img/photos/button-google-play.svg" class="h-8 rounded-xl" alt="button-google-play"></a>
              </span>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-6 mx-auto position-relative order-lg-2" data-cue="zoomIn"
            style="align-items: center; justify-content: center; animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"
            data-show="true">
            <figure class="rounded"><img src="./images/servicenow_hero.png" alt="maintainance-management"></figure>
          </div>
          <!--/column -->
        </div>
        <!-- /.row -->
      </div>
    </section>

    <!-- Benefits -->
    <section class="wrapper" data-cues="slideInDown" data-disabled="true">
      <div class="container py-6 py-md-12" data-cue="slideInDown" data-show="true"
        style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h4 class="display-4 mb-10 px-xl-10 text-primary">The benefits we offer is specifically designed to meet your needs</h4>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative mb-4 mb-md-6">
          <div class="row gx-md-5 gy-5 text-center" data-cues="slideInDown" data-disabled="true">
            <div class="col-md-6 col-xl-3" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card">
                <div class="card-body bg-gray">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-phone-volume"></i>
                  </div>
                  <h4 class="text-primary">Centralized Incident Management</h4>
                  <p class="mb-2">Integrating ServiceNow with Oxmaint centralizes incident management by funneling all maintenance requests from Oxmaint into
                    ServiceNow.</p>

                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card">
                <div class="card-body bg-gray">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-shield-exclamation"></i> </div>
                  <h4 class="text-primary">Automated Workflows</h4>
                  <p class="mb-2">The integration leverages ServiceNow's powerful workflow automation capabilities to streamline maintenance processes with
                    Oxmaint.</p>

                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card">
                <div class="card-body bg-gray">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-laptop-cloud"></i>
                  </div>
                  <h4 class="text-primary">Real-Time Data Synchronization</h4>
                  <p class="mb-2">Real-time data synchronization ensures that both systems have the latest information on maintenance activities, and work
                    orders.</p>

                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card">
                <div class="card-body bg-gray">
                  <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3"> <i class="uil uil-chart-line"></i>
                  </div>
                  <h4 class="text-primary">Comprehensive Reporting and Analytics</h4>
                  <p class="mb-2">Data from both ServiceNow and Oxmaint is aggregated, allowing for the creation of comprehensive reports and dashboards.</p>
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
    </section>

    <!-- Working -->
    <section id="home">
      <div class="wrapper">
        <div class="container pt-15 pt-md-14 pb-4 pb-md-4 text-center">
          <div class="row text-center">
            <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200" data-disabled="true">
              <h2 class="display-1 mb-4" data-cue="zoomIn" data-interval="-200" data-group="welcome" data-show="true"
                style="font-size: 40px;animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                Working of this Seamless Integration
              </h2>
              <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10" data-cue="zoomIn" data-interval="-200" data-group="welcome" data-show="true"
                style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 500ms; animation-direction: normal; animation-fill-mode: both;">
                The bidirectional communication between Oxmaint and ServiceNow ensures seamless workflow automation and data consistency across both platforms.
              </p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div class="row text-center mt-10">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2" data-cues="zoomIn" data-group="welcome" data-interval="-200" data-disabled="true">
              <figure data-cue="zoomIn" data-interval="-200" data-group="welcome" data-show="true"
                style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1000ms; animation-direction: normal; animation-fill-mode: both;">
                <img class="w-auto" src="./images/servicenow_working.png" alt="">
              </figure>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>

    <!-- Features -->
    <section class="wrapper">
      <div class="container py-4 py-md-6" style="margin-top: 10%; margin-bottom: 5%;">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-5 order-lg-2" data-cues="slideInDown" data-disabled="true">
            <figure data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <img src="./images/servicenow_features.png" alt="">
            </figure>
          </div>
          <!--/column -->
          <div class="col-lg-6" data-cues="slideInDown" data-disabled="true">
            <h2 class="fs-15 text-uppercase text-line text-primary mb-3" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              Features and Solutions
            </h2>
            <h3 class="display-5 mb-7" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              ServiceNow Integration feature provide solutions that simplify and improve your operations.
            </h3>
            <div class="accordion accordion-wrapper" id="accordionExample" data-cue="slideInDown" data-show="true"
              style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card icon accordion-item">
                <div class="card-header" id="headingOne">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                    aria-controls="collapseOne">
                    Seamless Incident Creation
                  </button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      Maintenance requests logged in Oxmaint are automatically converted into incidents in ServiceNow, ensuring that every issue is tracked and
                      managed within the IT service management framework without manual intervention.
                    </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card icon accordion-item">
                <div class="card-header" id="headingTwo">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Real-Time Status Updates
                  </button>
                </div>
                <!--/.card-header -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      As maintenance tasks progress, status changes in ServiceNow are instantly reflected in Oxmaint. This bidirectional communication ensures
                      both systems are always synchronized, providing up-to-date information to all stakeholders.
                    </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card icon accordion-item">
                <div class="card-header" id="headingThree">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Automated Task Assignments
                  </button>
                </div>
                <!--/.card-header -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      ServiceNow's workflow automation capabilities automatically assign maintenance tasks to the appropriate personnel based on predefined
                      criteria such as expertise and availability, reducing the time spent on manual task distribution.
                    </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card icon accordion-item">
                <div class="card-header" id="headingFour">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Unified Asset Management
                  </button>
                </div>
                <!--/.card-header -->
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>
                      Integrating asset data from Oxmaint into ServiceNow creates a comprehensive view of all assets, including their maintenance history and
                      current status, enabling better decision-making and efficient resource allocation.
                    </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
            </div>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Customer Testimonials -->
    <section class="wrapper">
      <div class="container-card pt-4 pt-md-6">
        <div class="card" style="background-color: #061748;">
          <!-- <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 pb-15"
      data-image-src="./assets/img/photos/bg2.jpg"> -->
          <div class="card-body pb-18 pt-4 px-0">
            <div class="container">
              <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                <div class="col-lg-4 text-center text-lg-start">
                  <h4 class="display-4 mb-3 pe-xxl-15" style="color: #fff">We are proud of our works</h4>
                  <p class="lead fs-lg mb-0 pe-xxl-10" style="color: #fff">We bring solutions to make life easier for our customers.</p>
                </div>
                <!-- /column -->
                <div class="col-lg-8 mt-lg-2">
                  <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-4">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256.1 256.01" data-inject-url="https://oxmaint.com/assets/img/icons/solid/target.svg"
                        loading="lazy" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-yellow mb-3">
                        <path class="fill-secondary"
                          d="M178.66 79.37L166.93 91.1a76.68 76.68 0 014.91 11.52 85.77 85.77 0 0114.93-1.28h1.39a93.65 93.65 0 00-9.5-21.97zM0 128a96.1 96.1 0 00109.65 95 82.93 82.93 0 01-5.65-15.42 67 67 0 01-8 .43A80 80 0 0196 48a79 79 0 0137 9.17l11.73-11.73A94.73 94.73 0 0096 32a96.14 96.14 0 00-96 96z">
                        </path>
                        <path class="fill-secondary"
                          d="M37.33 128A58.78 58.78 0 0096 186.68a47.26 47.26 0 005.44-.32A82.71 82.71 0 01103 170a37.32 37.32 0 01-7 .64 42.67 42.67 0 010-85.34 32.88 32.88 0 018 .84l12.91-12.91a57 57 0 00-20.91-4A58.81 58.81 0 0037.33 128z">
                        </path>
                        <path class="fill-secondary"
                          d="M96 106.68A21.33 21.33 0 10117.33 128 21.39 21.39 0 0096 106.68zm0 26.66a5.33 5.33 0 115.33-5.33 5.28 5.28 0 01-5.33 5.33z"></path>
                        <path class="fill-primary" d="M96.1 136a8 8 0 01-5.67-13.65L159.76 53a8 8 0 0111.31 11.31l-69.33 69.33A8 8 0 0196.1 136z"></path>
                        <path class="fill-primary"
                          d="M194.77 64H168.1a8 8 0 01-8-8V29.34a8.08 8.08 0 012.33-5.67l21.33-21.33A8 8 0 01197.42 8v18.68h18.68a8 8 0 015.66 13.66l-21.33 21.33a8 8 0 01-5.66 2.33zm-8 53.34a69.34 69.34 0 1069.33 69.34 69.4 69.4 0 00-69.33-69.34zm29.87 56.11L182 210.78a8 8 0 01-11.09.64l-18.67-16a8 8 0 1110.41-12.15l12.84 11 29.44-31.69a8 8 0 0111.74 10.88z">
                        </path>
                      </svg>
                      <h3 class="counter" style="color: rgb(255, 255, 255); visibility: visible;">1000+</h3>
                      <p class="mb-0" style="color: #fff">Completed Projects</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 245.34"
                        data-inject-url="https://oxmaint.com/assets/img/icons/solid/bar-chart.svg" loading="lazy"
                        class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-yellow mb-3">
                        <path class="fill-secondary"
                          d="M32 106.67A10.67 10.67 0 0124.91 88l48-42.67a10.62 10.62 0 018.37-2.61l83 10.07 47-44.56A10.66 10.66 0 01226 23.74l-50.67 48a10.73 10.73 0 01-8.61 2.85L83.49 64.5 39.09 104a10.61 10.61 0 01-7.09 2.7z">
                        </path>
                        <path class="fill-secondary"
                          d="M226.67 53.34A8 8 0 01221 51l-37.32-37.34A8 8 0 01189.33 0h37.33a8 8 0 018 8v37.33a8 8 0 01-4.95 7.39 7.66 7.66 0 01-3.04.62z">
                        </path>
                        <path class="fill-primary"
                          d="M74.67 184v29.33h-64V184A13.33 13.33 0 0124 170.67h37.33A13.34 13.34 0 0174.67 184zM160 120v93.33H96V120a13.33 13.33 0 0113.33-13.33h37.33A13.33 13.33 0 01160 120zm85.33 21.34v72h-64v-72A13.32 13.32 0 01194.66 128H232a13.31 13.31 0 0113.33 13.34z">
                        </path>
                        <path class="fill-secondary" d="M248 245.34H8a8 8 0 010-16h240a8 8 0 010 16z"></path>
                      </svg>
                      <h3 class="counter" style="color: rgb(255, 255, 255); visibility: visible;">50%</h3>
                      <p class="mb-0" style="color: #fff">Reduce Breakdown</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://oxmaint.com/assets/img/icons/solid/employees.svg"
                        loading="lazy" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-yellow mb-3">
                        <path class="fill-secondary"
                          d="M72.11 86.51l-3.52-21 1.41-1.4-4.36-4.48a24.12 24.12 0 01-5.78-24.43c.11-.32.2-.53.32-.85l-1.4-.21-9-18.88a8 8 0 00-14.49 0l-8.88 19-19.69 3.07a8 8 0 00-6.29 5.44 7.94 7.94 0 001.92 8.11l14.51 14.83-3.42 21A8.07 8.07 0 0021.33 96a8.33 8.33 0 004-1l17.49-9.81 17.6 9.6a8.2 8.2 0 008.53-.43 8 8 0 003.21-7.89zm183.46-44.06a7.85 7.85 0 00-6.4-5.33l-19.73-3-9-18.88a8 8 0 00-14.5 0l-8.86 19-1.17.21c0 .11.11.21.11.32a23.76 23.76 0 01-5.44 24.32L185.81 64l1.71 1.71-3.41 21A8.07 8.07 0 00192 96a8.33 8.33 0 004-1l17.49-9.81 17.6 9.6a8.2 8.2 0 008.53-.43 8.06 8.06 0 003.2-7.89l-3.52-21 14.51-14.92a8.09 8.09 0 001.81-8.13z">
                        </path>
                        <path class="fill-primary"
                          d="M100.18 106.67a8 8 0 01-7.91-9.25l4.61-28.8L77 48.37a8 8 0 014.46-13.51l27.09-4.22 12.11-26a8 8 0 017.2-4.64 8 8 0 017.23 4.58l12.29 25.9 27.12 4.05A8 8 0 01179.09 48l-19.78 20.38 4.8 28.77a8 8 0 01-11.74 8.34l-24.19-13.25-24.12 13.42a7.94 7.94 0 01-3.88 1z">
                        </path>
                        <circle class="fill-secondary" cx="42.67" cy="160" r="21.33"></circle>
                        <path class="fill-secondary"
                          d="M71.15 196.27A44.71 44.71 0 0053.34 232v2.67H8a8.06 8.06 0 01-8-8v-5.33A29.32 29.32 0 0129.33 192H56a29.13 29.13 0 0115.15 4.27z">
                        </path>
                        <circle class="fill-secondary" cx="213.33" cy="160" r="21.33"></circle>
                        <path class="fill-secondary"
                          d="M256 221.33v5.33a8.07 8.07 0 01-8 8h-45.33V232a44.69 44.69 0 00-17.81-35.73A29.07 29.07 0 01200 192h26.67A29.32 29.32 0 01256 221.33z">
                        </path>
                        <circle class="fill-primary" cx="128" cy="154.67" r="32"></circle>
                        <path class="fill-primary"
                          d="M157.33 202.67H98.66A29.35 29.35 0 0069.33 232v16a8 8 0 008 8h101.33a8 8 0 008-8v-16a29.35 29.35 0 00-29.33-29.33z"></path>
                      </svg>
                      <h3 class="counter" style="color: rgb(255, 255, 255); visibility: visible;">99.7%</h3>
                      <p class="mb-0" style="color: #fff">Customer Satisfaction</p>
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!-- /.container-card -->
      <div class="container">
        <div class="position-relative mt-n18">
          <!-- <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div> -->
          <div class="carousel owl-carousel gap-small blog grid-view owl-loaded owl-drag" data-margin="0" data-dots="true" data-autoplay="false"
            data-autoplay-timeout="5000"
            data-responsive="{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;992&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;1200&quot;:{&quot;items&quot;: &quot;3&quot;}}">

            <!-- /.item -->

            <!-- /.item -->

            <!-- /.item -->

            <!-- /.item -->
            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(-345px, 0px, 0px); transition: all 0s ease 0s; width: 1381px;">
                <div class="owl-item" style="width: 345.2px;">
                  <div class="item">
                    <div class="item-inner">
                      <article>
                        <div class="card">
                          <div class="card-body">
                            <div class="post-content">
                              <p>“With OX-Maint it's easy to follow and track your
                                work orders and supplies. You can keep everyone
                                updated on where work orders stand and have multiple
                                users so everyone is accountable for their
                                assigned tasks.”</p>
                              <div class="info ps-0">
                                <h5 class="mb-1">Hanson</h5>
                                <p class="mb-0">Australia</p>
                              </div>
                            </div>
                            <!-- /.post-content -->
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!-- /.item-inner -->
                  </div>
                </div>
                <div class="owl-item active" style="width: 345.2px;">
                  <div class="item">
                    <div class="item-inner">
                      <article>
                        <div class="card">
                          <div class="card-body">
                            <div class="post-content">
                              <p>“Easy to use! love this i,m trying to get the company
                                I work for to go paperless. Easy to create
                                work order always available on cloud. Schedule helps
                                soo much to get reminder of maintenance
                                tasks.”</p>
                              <div class="info ps-0">
                                <h5 class="mb-1">Ramky</h5>
                                <p class="mb-0">India</p>
                              </div>
                            </div>
                            <!-- /.post-content -->
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!-- /.item-inner -->
                  </div>
                </div>
                <div class="owl-item" style="width: 345.2px;">
                  <div class="item">
                    <div class="item-inner">
                      <article>
                        <div class="card">
                          <div class="card-body">
                            <div class="post-content">
                              <p>“Using OXmaint has been an easy process, and it helps
                                keep everything in one place. I also like
                                that our Operations Manager sees everything that I
                                do.”</p>
                              <div class="info ps-0">
                                <h5 class="mb-1">TTCFL</h5>
                                <p class="mb-0">USA</p>
                              </div>
                            </div>
                            <!-- /.post-content -->
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!-- /.item-inner -->
                  </div>
                </div>
                <div class="owl-item" style="width: 345.2px;">
                  <div class="item">
                    <div class="item-inner">
                      <article>
                        <div class="card">
                          <div class="card-body">
                            <div class="post-content">
                              <p>“Great program and customer service has been awesome.
                                if you have a fleet of asset, especially
                                larger assets, this app is great.”</p>
                              <div class="info ps-0">
                                <h5 class="mb-1">RCLEAMA</h5>
                                <p class="mb-0">Brazil</p>
                              </div>
                            </div>
                            <!-- /.post-content -->
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!-- /.card -->
                      </article>
                      <!-- /article -->
                    </div>
                    <!-- /.item-inner -->
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="uil-arrow-left"></i></button><button
                type="button" role="presentation" class="owl-next"><i class="uil-arrow-right"></i></button></div>
            <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
                class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button></div>
          </div>
          <!-- /.owl-carousel -->
        </div>
      </div>
    </section>

    <!-- FAQ's -->
    <section class="wrapper">
      <div class="container pt-8 pb-4 pt-md-8 pb-md-10 text-center">
        <h2 class="display-4 mb-3 text-center" data-cues="slideInDown" data-disabled="true">FAQ</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0" data-cues="slideInDown" data-disabled="true">If you don't see an answer to your question, you can
          send us
          an email from our contact form.</p>
        <div class="row mb-4 mb-md-8 text-start" data-cues="slideInDown" data-disabled="true">
          <div class="col-lg-6 mb-0" data-cue="slideInDown" data-show="true"
            style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
            <div id="accordion-1" class="accordion-wrapper">
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false"
                    aria-controls="accordion-collapse-1-1"> How does the integration improve efficiency?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>It automates incident creation and task assignments, reducing manual work and speeding up resolution.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false"
                    aria-controls="accordion-collapse-1-2">Can it handle real-time data sync?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1" style="">
                  <div class="card-body">
                    <p>Yes, updates in one system are immediately reflected in the other.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.accordion-wrapper -->
          </div>
          <!--/column -->
          <div class="col-lg-6" data-cue="slideInDown" data-show="true"
            style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
            <div id="accordion-2" class="accordion-wrapper">
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-2-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false"
                    aria-controls="accordion-collapse-2-1">Is the integration scalable?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2" style="">
                  <div class="card-body">
                    <p>Yes, it supports additional users, assets, and tasks as needs grow.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-2-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false"
                    aria-controls="accordion-collapse-2-2">How does it enhance asset management?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                  <div class="card-body">
                    <p>It provides a unified view of asset information, maintenance history, and performance metrics.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->

      </div>
      <!-- /.container -->
    </section>
  </div>

  <!-- Footer -->
   
        <?php include "../include-2/footer200.php" ?>
  <script type="module">
    // Import the franc function directly
    import { franc } from 'https://esm.sh/franc@6?bundle';

    // A simple mapping of ISO 639-3 codes to language names
    const languageNames = {
      "als": "Albanian",
      "afr": "Afrikaans",
      "sqi": "Albanian",
      "amh": "Amharic",
      "arb": "Arabic",
      "hye": "Armenian",
      "asm": "Assamese",
      "aym": "Aymara",
      "aze": "Azerbaijani",
      "bam": "Bambara",
      "eus": "Basque",
      "bel": "Belarusian",
      "ben": "Bengali",
      "bho": "Bhojpuri",
      "bos": "Bosnian",
      "bul": "Bulgarian",
      "cat": "Catalan",
      "ceb": "Cebuano",
      "nya": "Chichewa",
      "zho": "Chinese",
      "cos": "Corsican",
      "cmn": "chinese",
      "hrv": "Croatian",
      "ces": "Czech",
      "dan": "Danish",
      "div": "Dhivehi",
      "doi": "Dogri",
      "nld": "Dutch",
      "eng": "English",
      "epo": "Esperanto",
      "est": "Estonian",
      "ewe": "Ewe",
      "fil": "Filipino",
      "fin": "Finnish",
      "fra": "French",
      "fry": "Frisian",
      "glg": "Galician",
      "kat": "Georgian",
      "deu": "German",
      "ell": "Greek",
      "grn": "Guarani",
      "guj": "Gujarati",
      "hat": "Haitian Creole",
      "hau": "Hausa",
      "haw": "Hawaiian",
      "heb": "Hebrew",
      "hin": "Hindi",
      "mag": "Hindi",
      "hmn": "Hmong",
      "hun": "Hungarian",
      "isl": "Icelandic",
      "ibo": "Igbo",
      "ilo": "Ilocano",
      "ind": "Indonesian",
      "gle": "Irish",
      "ita": "Italian",
      "jpn": "Japanese",
      "jav": "Javanese",
      "kan": "Kannada",
      "kaz": "Kazakh",
      "khm": "Khmer",
      "kin": "Kinyarwanda",
      "kok": "Konkani",
      "kor": "Korean",
      "kri": "Krio",
      "kmr": "Kurdish",
      "ckb": "Kurdish",
      "kir": "Kyrgyz",
      "lao": "Lao",
      "lat": "Latin",
      "lav": "Latvian",
      "lin": "Lingala",
      "lit": "Lithuanian",
      "lug": "Luganda",
      "ltz": "Luxembourgish",
      "mkd": "Macedonian",
      "mai": "Maithili",
      "mlg": "Malagasy",
      "msa": "Malay",
      "mal": "Malayalam",
      "mlt": "Maltese",
      "mri": "Maori",
      "mar": "Marathi",
      "mni": "Meiteilon",
      "lus": "Mizo",
      "mon": "Mongolian",
      "mya": "Myanmar",
      "nep": "Nepali",
      "nor": "Norwegian",
      "ori": "Odia",
      "npi": "Sanskrit",
      "orm": "Oromo",
      "pus": "Pashto",
      "fas": "Persian",
      "pol": "Polish",
      "por": "Portuguese",
      "pan": "Punjabi",
      "prs": "kurdish",
      "que": "Quechua",
      "ron": "Romanian",
      "rus": "Russian",
      "smo": "Samoan",
      "san": "Sanskrit",
      "gla": "Scots Gaelic",
      "nso": "Sepedi",
      "srp": "Serbian",
      "sot": "Sesotho",
      "sna": "Shona",
      "snd": "Sindhi",
      "sin": "Sinhala",
      "slk": "Slovak",
      "slv": "Slovenian",
      "som": "Somali",
      "spa": "Spanish",
      "sun": "Sundanese",
      "swa": "Swahili",
      "swe": "Swedish",
      "tgk": "Tajik",
      "tam": "Tamil",
      "tat": "Tatar",
      "tel": "Telugu",
      "tgl": "Philippines",
      "tha": "Thai",
      "tir": "Tigrinya",
      "tiv": "Irish",
      "tso": "Tsonga",
      "tur": "Turkish",
      "tuk": "Turkmen",
      "twi": "Twi",
      "ukr": "Ukrainian",
      "urd": "Urdu",
      "uig": "Uyghur",
      "uzb": "Uzbek",
      "vie": "Vietnamese",
      "cym": "Welsh",
      "xho": "Xhosa",
      "yid": "Yiddish",
      "yor": "Yoruba",
      "zlm": "indonesian",
      "zul": "Zulu"
    }

    // Global variable to store language code
    var languageCode;

    // Select the target node
    var targetNode = document.querySelector('p');

    // Create an observer instance
    var observer = new MutationObserver(function (mutations) {
      mutations.forEach(function (mutation) {
        // Check if mutation involves translation
        if (mutation.type === 'childList') {
          // Process the mutation
          // console.log('Paragraph content changed:', targetNode.textContent);
          var content = targetNode.textContent;
          var newLanguageCode = franc(content); // Detect language code
          // console.log("Detected language code: ", newLanguageCode);
          var languageName = languageNames[newLanguageCode] || 'Unknown language';
          // Check if the languageCode has changed
          if (newLanguageCode !== languageCode) {
            // Update the global languageCode variable
            languageCode = newLanguageCode;
            console.log('Calling chatbot.js function with new language code:', languageCode);
            // Call the function in chatbot.js with the new languageCode
            handleLanguageCodeChange(languageName);
          }
        }
      });
    });

    // Configuration of the observer
    var config = { childList: true, subtree: true };

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

    // Function to handle language code change
    function handleLanguageCodeChange(languageName) {
      // Call the function in chatbot.js with the new language name
      if (typeof chatbotLanguageCodeChanged === 'function') {
        chatbotLanguageCodeChanged(languageName);
      }
    }

  </script>

  <div class="progress-wrap" style="opacity: 1">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="./../assets/js/plugins.js"></script>
  <script src="./../assets/js/theme.js"></script>
  <script src="./../assets/js/number_picker.js"></script>
</body>

</html>