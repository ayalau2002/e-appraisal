<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ======= meta ======= -->
  <?php require "./include/meta.php"; ?>
  <!-- End meta -->

  <!-- ======= stylesheet ======= -->
  <?php require "./include/stylesheet.php"; ?>
  <!-- End stylesheet -->
  <style>
    .nav-pills .nav-link {
      width: 100px;
    }
  </style>

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
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">
            Dashboard
          </li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <!-- Tabs -->
              <ul class="nav nav-tabs my-3" id="tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="appraisalReport-tab" data-bs-toggle="pill" data-bs-target="#appraisalReport" type="button" role="tab" aria-controls="appraisalReport" aria-selected="true">
                    Appraisal Report
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="messageBox-tab" data-bs-toggle="pill" data-bs-target="#messageBox" type="button" role="tab" aria-controls="messageBox" aria-selected="false" tabindex="-1">
                    Message Box
                  </button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade active show" id="appraisalReport" role="tabpanel" aria-labelledby="appraisalReport-tab">

                  <div class="card">
                    <div class="card-body">
                      <div>
                        <h5 class="card-title">According to our record, it is noted that the following appraisal reports are still pending your input for the apparaisee part.</h5>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Appraisal Report</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="appraisal-form-appraisee.php">Performance Appraisal Form (01.12.2021 - 30.11.2022)</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div>
                        <h5 class="card-title">
                          The following are the appraisal reports that required assessment form your appraising officer and/or countersinging officer.
                        </h5>

                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Appraisal Report (Pending Assessment)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="appraisal-form-appraisee-pending.php">Performance Appraisal Form (01.12.2020 - 30.11.2021)</a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="memo-form-appraisee.php">Memo-form Appraisal (01.02.2022 - 30.04.2022)</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="messageBox" role="tabpanel" aria-labelledby="messageBox-tab">
                  <?php require "./include/appraisal-report/messageBox.php"; ?>
                </div>
              </div>
              <!-- End Tabs -->
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