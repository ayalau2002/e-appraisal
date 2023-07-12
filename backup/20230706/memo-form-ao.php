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

    textarea.form-control {
      min-height: calc(6em + 0.75rem + calc(var(--bs-border-width) * 2));
    }

    pre {
      font-family: "Open Sans", sans-serif;
      font-size: 16px;
      white-space: pre-wrap;
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
      <h1>Memo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Memo Report (AO)</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">
                Staff memo Report on
                Land Surveyors (for the period from [01.02.2021] to [30.4.2022])
              </h2>
              <!-- Vertical Pills Tabs -->
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-part1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part1" type="button" role="tab" aria-controls="v-pills-part1" aria-selected="true">
                    Part 1
                  </button>
                  <button class="nav-link" id="v-pills-part2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part2" type="button" role="tab" aria-controls="v-pills-part2" aria-selected="false" tabindex="-1">
                    Part 2
                  </button>
                  <button class="nav-link" id="v-pills-part3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part3" type="button" role="tab" aria-controls="v-pills-part3" aria-selected="false" tabindex="-1">
                    Part 3
                  </button>
                  <button class="nav-link" id="v-pills-part4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part4" type="button" role="tab" aria-controls="v-pills-part4" aria-selected="false" tabindex="-1">
                    Part 4
                  </button>
                  <button class="nav-link" id="v-pills-part5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part5" type="button" role="tab" aria-controls="v-pills-part5" aria-selected="false" tabindex="-1">
                    Part 5
                  </button>
                  <button class="nav-link" id="v-pills-part6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part6" type="button" role="tab" aria-controls="v-pills-part6" aria-selected="false" tabindex="-1">
                    Part 6
                  </button>
                  <button class="nav-link" id="v-pills-part7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part7" type="button" role="tab" aria-controls="v-pills-part7" aria-selected="false" tabindex="-1">
                    Part 7
                  </button>
                </div>

                <div class="tab-content flex-fill" id="v-pills-tabContent">
                  <!-- PART 1 -->
                  <div class="tab-pane fade show active" id="v-pills-part1" role="tabpanel" aria-labelledby="v-pills-part1-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 1
                        </h3>
                        <?php require "./include/memo-form/edit/part1.php"; ?>
                        <?php require "./include/signature/ao.php"; ?>
                      </div>
                    </div>
                  </div>

                  <!-- PART 2 -->
                  <div class="tab-pane fade" id="v-pills-part2" role="tabpanel" aria-labelledby="v-pills-part2-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 2
                        </h3>
                        <?php require "./include/memo-form/view/part2.php"; ?>
                      </div>
                    </div>
                  </div>



                  <!-- PART 3 -->
                  <div class="tab-pane fade" id="v-pills-part3" role="tabpanel" aria-labelledby="v-pills-part3-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 3
                        </h3>
                        <?php require "./include/memo-form/view/part3.php"; ?>
                      </div>
                    </div>
                  </div>



                  <!-- PART 4 -->
                  <div class="tab-pane fade" id="v-pills-part4" role="tabpanel" aria-labelledby="v-pills-part4-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 4
                        </h3>
                        <p class="text-center">(to be completed by Confidential Registry)</p>
                        <?php require "./include/memo-form/view/part4.php"; ?>
                      </div>
                    </div>
                  </div>



                  <!-- PART 5 -->
                  <div class="tab-pane fade" id="v-pills-part5" role="tabpanel" aria-labelledby="v-pills-part5-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 5
                        </h3>
                        <p class="text-center">(to be completed by appraising officer)</p>
                        <?php require "./include/memo-form/edit/part5.php"; ?>
                        <?php require "./include/signature/ao.php"; ?>
                      </div>
                    </div>
                  </div>



                  <!-- PART 6 -->
                  <div class="tab-pane fade" id="v-pills-part6" role="tabpanel" aria-labelledby="v-pills-part6-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 6
                        </h3>
                        <p class="text-center">(to be completed by appraising officer)</p>
                        <?php require "./include/memo-form/edit/part6.php"; ?>
                        <?php require "./include/signature/ao.php"; ?>
                      </div>
                    </div>
                  </div>



                  <!-- PART 7 -->
                  <div class="tab-pane fade" id="v-pills-part7" role="tabpanel" aria-labelledby="v-pills-part7-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title text-center">
                          PART 7
                        </h3>
                        <p class="text-center">(to be completed by countersigning officer)</p>
                        <?php require "./include/memo-form/view/part7.php"; ?>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <!-- End Vertical Pills Tabs -->
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