<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <?php require "include/header.php"; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php require "include/sidebar.php"; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-overview"
                    >
                      Overview
                    </button>
                  </li>
                </ul>
                <div class="tab-content pt-2">
                  <div
                    class="tab-pane fade show active profile-overview"
                    id="profile-overview"
                  >
                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (1) Name of department:
                      </div>
                      <div class="col-lg-9 col-md-8">Lands Department</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (2) Full name of officer (surname first):
                      </div>
                      <div class="col-lg-9 col-md-8">Chan, Siu-Wai</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Chinese Name:</div>
                      <div class="col-lg-9 col-md-8">陳兆偉</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (3) Month and year of birth:
                      </div>
                      <div class="col-lg-9 col-md-8">April 1985</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (4) Date and rank of first appointment:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        1st July 2008, Land Surveyor
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (5) Terms of appointment:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Permanent and pensionable
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (6) Present substantive rank and date of appointment to
                        it:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Senior Land Surveyor, 1st June 2020
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (7) Present post and date of posting:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Survey and Mapping Office, 1st July 2022
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (8) Substantive salary pay point:
                      </div>
                      <div class="col-lg-9 col-md-8">MPS Point 34</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (9) Incremental date (if applicable):
                      </div>
                      <div class="col-lg-9 col-md-8">1st June 2023</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (10) Commendations/Disciplinary offences during
                        appraisal period:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Commendation for outstanding performance in land
                        boundary demarcation project, February 2023
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (11) Any acting appointments during the appraisal
                        period, regardless of duration, with dates:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Acting Chief Land Surveyor, 1st September 2022 - 31st
                        October 2022
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (12) Period and nature of leave lasting more than 1
                        month with dates:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Maternity leave, 1st March 2023 - 30th April 2023
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (13) Qualifications (academic, professional, technical,
                        proficiency in language)acquired during the appraisal
                        period:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Certificate in Advanced GIS Applications, HKU SPACE,
                        December 2022
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (14) Training courses attended during the appraisal
                        period:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        Remote Sensing and Photogrammetry Training Course, 10th
                        - 14th January 2023
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">
                        (15) Views on future posting and / or training:
                      </div>
                      <div class="col-lg-9 col-md-8">
                        I am interested in further developing my skills in GIS
                        and remote sensing technologies. I would like to attend
                        more advanced training courses on these subjects and
                        explore opportunities to apply them in my current and
                        future postings.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer"></footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
