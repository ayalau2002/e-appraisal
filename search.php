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
                                    <button class="nav-link active" id="search-tab" data-bs-toggle="pill" data-bs-target="#search" type="button" role="tab" aria-controls="search" aria-selected="true">
                                        Search
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="view-tab" data-bs-toggle="pill" data-bs-target="#view" type="button" role="tab" aria-controls="view" aria-selected="false" tabindex="-1">
                                        Appraisal Report
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade active show" id="search" role="tabpanel" aria-labelledby="search-tab">

                                    <div class="card">
                                        <div class="card-body">
                                            <?php require "./include/search/searchOptions.php"; ?>
                                            <?php require "./include/search/appraisalListonSearchPage.php"; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="view-tab">


                                    <div class="d-flex justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link">1</a></li>
                                                <li class="page-item"><a class="page-link">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>


                                    <div class="page-container">
                                        <?php require "./include/appraisal-form/form/ao_1.php"; ?>
                                    </div>

                                    <div class="page-container" style="display: none;">
                                        <?php require "./include/appraisal-form/form/ao_2.php"; ?>
                                    </div>
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


    <script>
        // Get all the pagination links and the page containers
        var paginationLinks = document.querySelectorAll(".pagination .page-link");
        var pageContainers = document.querySelectorAll(".page-container");

        // Loop through the pagination links
        for (var i = 0; i < paginationLinks.length; i++) {
            // Add a click event listener to each link
            paginationLinks[i].addEventListener("click", function(event) {
                // Prevent the default link behavior
                event.preventDefault();

                // Get the page number from the link text
                var pageNumber = parseInt(this.textContent);

                // Loop through the page containers
                for (var j = 0; j < pageContainers.length; j++) {
                    // If the page number matches the container number, show the container, otherwise hide it
                    if (j + 1 === pageNumber) {
                        pageContainers[j].style.display = "block";
                    } else {
                        pageContainers[j].style.display = "none";
                    }
                }
            });
        }
    </script>
</body>

</html>