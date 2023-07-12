<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ======= meta ======= -->
  <?php require "./include/meta.php"; ?>
  <!-- End meta -->

  <!-- ======= stylesheet ======= -->
  <?php require "./include/stylesheet.php"; ?>
  <!-- End stylesheet -->

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
  <?php require "./include/header.php"; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require "./include/sidebar.php"; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                    Overview
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#supporting-document">
                    Supporting Document
                  </button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Name of department:
                    </div>
                    <div class="col-lg-9 col-md-8">Lands Department</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Full name of officer (surname first):
                    </div>
                    <div class="col-lg-9 col-md-8">Chan Tai Man</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Chinese Name:</div>
                    <div class="col-lg-9 col-md-8">陳大文</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Month and year of birth:
                    </div>
                    <div class="col-lg-9 col-md-8">07.1970</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Date and rank of first appointment:
                    </div>
                    <div class="col-lg-9 col-md-8">
                      Assistant Land Surveyor,01.01.1995
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Terms of appointment:
                    </div>
                    <div class="col-lg-9 col-md-8">
                      New Permanent Terms
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Present substantive rank and date of appointment to
                      it:
                    </div>
                    <div class="col-lg-9 col-md-8">
                      Land Surveyor, 01.01.2000
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Present post and date of posting:
                    </div>
                    <div class="col-lg-9 col-md-8">
                      XXX, 2020-01-01
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">
                      Substantive salary pay point:
                    </div>
                    <div class="col-lg-9 col-md-8">44</div>
                  </div>
                </div>

                <div class="tab-pane fade show supporting-document" id="supporting-document">
                  <table class="table table-hover">
                    <thead>
                      <th>#</th>
                      <th>Supporting Document</th>
                      <th>Upload Date</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Cerificate of Appreciation <a href="#"><i class="bi bi-paperclip"></i></a></td>
                        <td>10.02.2022</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>XXXX Training Cerificate <a href="#"><i class="bi bi-paperclip"></i></a></td>
                        <td>31.12.2019</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Award of XXXX <a href="#"><i class="bi bi-paperclip"></i></a></td>
                        <td>10.07.2018</td>
                      </tr>
                    </tbody>
                  </table>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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