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
                  <h5 class="card-title">
                    According to our record, it is noted that the following appraisal reports are still pending your input.
                  </h5>

                  <table class="table table-hover">

                    <thead>
                      <tr>
                        <th scope="col" width="50%"></th>
                        <th scope="col" width="50%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Number of appraisal report to be filled</th>
                        <td>
                          <a href="appraisal-report-appraisee.php">1</a>
                        </td>
                      </tr>
                      <tr>
                        <th>Number of assessment to be provided (AO)</th>
                        <td>
                          <a href="appraisal-report-ao.php">4</a>
                        </td>
                      </tr>
                      <tr>
                        <th>Number of assessment to be provided (CO)</th>
                        <td>
                          0
                        </td>
                      </tr>
                      <tr>
                        <th>Number of assessment to be provided (RO)</th>
                        <td>
                          0
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="messageBox" role="tabpanel" aria-labelledby="messageBox-tab">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                        <th scope="col">Subject</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>10.12.2022</td>
                        <td><i class="ri-mail-line"></i></td>
                        <td>
                          <a href="appraisal-form-appraisee.php">Outstanding Appraisal Report</a>
                        </td>
                      </tr>
                      <tr>
                        <td>01.05.2022</td>
                        <td><i class="ri-mail-open-line"></i></td>
                        <td><a href="appraisal-form-appraisee.php">Up-to-date Appraisal Report</a></td>
                      </tr>
                      <tr>
                        <td>01.12.2021</td>
                        <td><i class="ri-mail-line"></i></td>
                        <td>
                          <a href="appraisal-form-appraisee.php">Annual Performance Appraisal on Land Surveyor for the peiod ending (30.11.2022)</a>
                        </td>
                      </tr>
                      <tr>
                        <td>01.12.2021</td>
                        <td><i class="ri-mail-open-line"></i></td>
                        <td>
                          <a href="appraisal-form-appraisee.php">2021 - 2022 Annual Performance Appraisals on Land Surveyor</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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