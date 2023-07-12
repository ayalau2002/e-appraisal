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
            <h1>Appraisal Report Search</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Appraisal Report Search</li>
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
                                    <button class="nav-link" id="search-tab" data-bs-toggle="pill" data-bs-target="#search" type="button" role="tab" aria-controls="search" aria-selected="true">
                                        Search
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="view-tab" data-bs-toggle="pill" data-bs-target="#view" type="button" role="tab" aria-controls="view" aria-selected="false" tabindex="-1">
                                        Appraisal Report
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php require "./include/searchOptions.php"; ?>
                                            <?php require "./include/appraisalListonSearchPage.php"; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="view" role="tabpanel" aria-labelledby="view-tab">

                                    <?php require "./include/pagination.php"; ?>


                                    <!-- Vertical Pills Tabs -->
                                    <div class="d-flex align-items-start">
                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-part1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part1" type="button" role="tab" aria-controls="v-pills-part1" aria-selected="true">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="PERSONAL PARTICULARS" data-bs-placement="right">Part 1</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part2" type="button" role="tab" aria-controls="v-pills-part2" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="RESPONSIBILITIES AND OBJECTIVES" data-bs-placement="right">Part 2</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part3" type="button" role="tab" aria-controls="v-pills-part3" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="PERFORMANCE ASSESSMENT" data-bs-placement="right">Part 3</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part4" type="button" role="tab" aria-controls="v-pills-part4" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="" data-bs-placement="right">Part 4</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part5" type="button" role="tab" aria-controls="v-pills-part5" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="GRANTING OF INCREMENT (if applicable)" data-bs-placement="right">Part 5</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part6" type="button" role="tab" aria-controls="v-pills-part6" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="FITNESS FOR PROMOTION" data-bs-placement="right">Part 6</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part7" type="button" role="tab" aria-controls="v-pills-part7" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="COUNTERSIGNING OFFICER’S ASSESSMENT" data-bs-placement="right">Part 7</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part8" type="button" role="tab" aria-controls="v-pills-part8" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="RECORD OF APPRAISAL INTERVIEW" data-bs-placement="right">Part 8</span>
                                            </button>
                                            <button class="nav-link" id="v-pills-part9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part9" type="button" role="tab" aria-controls="v-pills-part9" aria-selected="false" tabindex="-1">
                                                <span data-bs-toggle="tooltip" data-bs-original-title="REVIEWING OFFICER’S ASSESSMENT" data-bs-placement="right">Part 9</span>
                                            </button>
                                        </div>

                                        <div class="tab-content" id="v-pills-tabContent">
                                            <!-- PART 1 -->
                                            <div class="tab-pane fade show active" id="v-pills-part1" role="tabpanel" aria-labelledby="v-pills-part1-tab">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h3 class="card-title text-center">
                                                            PART 1
                                                        </h3>
                                                        <p class="text-center">(to be completed by department)</p>
                                                        <?php require "./include/appraisal-form/view/part1_1.php"; ?>
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
                                                        <p class="text-center">(to be completed by appraisee and agreed with the appraising officer at the beginning of appraisal period)</p>
                                                        <?php require "./include/appraisal-form/view/part2.php"; ?>
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
                                                        <p class="text-center">(to be completed by appraising officer)</p>
                                                        <?php require "./include/appraisal-form/edit/part3.php"; ?>
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
                                                        <p class="text-center">(to be completed by appraising officer)</p>
                                                        <?php require "./include/appraisal-form/edit/part4.php"; ?>
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
                                                        <?php require "./include/appraisal-form/edit/part5.php"; ?>
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
                                                        <?php require "./include/appraisal-form/edit/part6.php"; ?>
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
                                                        <?php require "./include/appraisal-form/view/part7.php"; ?>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- PART 8 -->
                                            <div class="tab-pane fade" id="v-pills-part8" role="tabpanel" aria-labelledby="v-pills-part8-tab">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h3 class="card-title text-center">
                                                            PART 8
                                                        </h3>
                                                        <p class="text-center">(to be completed by Interviewing Officer)</p>
                                                        <?php require "./include/appraisal-form/view/part8.php"; ?>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- PART 9 -->
                                            <div class="tab-pane fade" id="v-pills-part9" role="tabpanel" aria-labelledby="v-pills-part9-tab">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h3 class="card-title text-center">
                                                            PART 9
                                                        </h3>
                                                        <p class="text-center">(to be completed by reviewing officer)</p>
                                                        <?php require "./include/appraisal-form/view/part9.php"; ?>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <!-- End Vertical Pills Tabs -->
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