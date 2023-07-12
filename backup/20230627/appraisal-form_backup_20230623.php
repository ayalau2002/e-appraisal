<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Components / Tabs - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <style>
    .nav-pills .nav-link {
      width: 100px;
    }

    textarea.form-control {
      min-height: calc(6em + 0.75rem + calc(var(--bs-border-width) * 2));
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
  <?php require "include/header.php"; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require "include/sidebar.php"; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Appraisal</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Appraisal Report (Appraisee)</li>
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
                Lands Department PERFORMANCE APPRAISAL (Land Surveyor) for the
                period [01/01/2022] to [31/12/2022]
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
                  <button class="nav-link" id="v-pills-part8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part8" type="button" role="tab" aria-controls="v-pills-part8" aria-selected="false" tabindex="-1">
                    Part 8
                  </button>
                  <button class="nav-link" id="v-pills-part9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part9" type="button" role="tab" aria-controls="v-pills-part9" aria-selected="false" tabindex="-1">
                    Part 9
                  </button>
                </div>

                <div class="tab-content" id="v-pills-tabContent">
                  <!-- PART 1 -->
                  <div class="tab-pane fade show active" id="v-pills-part1" role="tabpanel" aria-labelledby="v-pills-part1-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          PART 1 (to be completed by department)
                        </h3>

                        <h4>PERSONAL PARTICULARS</h4>
                        <form class="row g-3">
                          <label for="inputPart1_1" class="col-sm-3 form-label">(1) Name of department:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPart1_1" value="Lands Department" />
                          </div>
                          <label for="inputPart1_2_1" class="col-sm-3 form-label">(2) Full name of officer (surname first):
                          </label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputPart1_2_1" value="陳大文" />
                          </div>
                          <label for="inputPart1_2_2" class="col-sm-3 form-label">Chinese Name:</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputPart1_2_2" value="Chan Tai Man" />
                          </div>
                          <label for="inputPart1_3" class="col-sm-3 form-label">(3) Month and year of birth:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPart1_3" value="07/1970" />
                          </div>
                          <label for="inputPart1_4" class="col-sm-3 form-label">(4) Date and rank of first appointment:</label>
                          <div class="col-sm-4">
                            <input type="date" class="form-control" id="inputPart1_4_1" value="01/01/1995" />
                          </div>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputPart1_4_2" value="Assistant Land Surveyor" />
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart1_5" class="form-label">(5) Terms of appointment:</label>
                            <textarea type="text" class="form-control" id="inputPart1_5">
Prepare a topographical survey of the property, including contours, spot elevations, and other relevant features.
Produce a report detailing the survey results and providing any necessary recommendations or conclusions.</textarea>
                          </div>
                          <label for="inputPart1_6" class="col-sm-3 form-label">Present substantive rank and date of appointment to it:</label>
                          <div class="col-sm-4">
                            <input type="date" class="form-control" id="inputPart1_6_1" value="01/01/2000" />
                          </div>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputPart1_6_2" value="Land Surveyor" />
                          </div>
                          <label for="inputPart1_7" class="col-sm-3 form-label">(7) Present post and date of posting:</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPart1_7_1" value="XXX" />
                          </div>
                          <div class="col-sm-5">
                            <input type="date" class="form-control" id="inputPart1_7_2" value="01/01/2020" />
                          </div>
                          <label for="inputPart1_8" class="col-sm-3 form-label">(8) Substantive salary pay point:</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputPart1_8" value="44" />
                          </div>
                          <label for="inputPart1_9" class="col-sm-3 form-label">(9) Incremental date (if applicable):</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputPart1_9" />
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart1_10" class=" form-label">(10) Commendations/Disciplinary offences during
                              appraisal period:</label>
                            <textarea type="text" class="form-control" col="4" id="inputPart1_10">
1. Exhibited a strong work ethic and commitment to quality. 
2. Proactively identified opportunities for improvement and took action to implement changes. 
3. Consistently demonstrated a high level of professionalism and dedication to the job.
                              </textarea>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart1_11" class="form-label">(11) Any acting appointments during the
                              appraisal period, regardless of duration, with
                              dates:</label>
                            <textarea type="text" class="form-control" id="inputPart1_11">
Senior Land Surveyor (01/02/2023 - 30/04/2023)
                            </textarea>
                          </div>
                          <label for="inputPart1_12" class="col-sm-3 form-label">(12) Period and nature of leave lasting more than
                            1 month with dates:</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputPart1_12_1" value="XXX" />
                          </div>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputPart1_12_2" value="(01/05/2022 - 15/06/2022)" />
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart1_13" class="form-label">(13) Qualifications (academic, professional,
                              technical, proficiency in language) acquired
                              during the appraisal period:</label>
                            <textarea type="text" class="form-control" id="inputPart1_13">
1. XXXX
2. YYYY
3. ZZZ
                              </textarea>
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart1_14" class="form-label">(14) Training courses attended during the
                              appraisal period:</label>
                            <textarea type="text" class="form-control" id="inputPart1_14">
1. XXXX
2. YYYY
3. ZZZ
                            </textarea>
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart1_15" class="form-label">(15) Views on future posting and / or
                              training:</label>
                            <textarea type="text" class="form-control" id="inputPart1_15">
1. Opportunities for leadership positions within the Lands Department.
2. Continued professional development and training to stay current on industry advancements and best practices.
                            </textarea>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart1_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart1_sign_1_1" value="Chan Tai Man" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart1_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart1_sign_1_2" value="02/01/2023" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart1_sign_2_1" class="form-label">Signature of Appraising Officer</label>
                                <input type="text" class="form-control" id="inputPart1_sign_2_1" value="Wong Siu Man" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart1_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart1_sign_2_2" value="03/01/2023" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 2 -->
                  <div class="tab-pane fade" id="v-pills-part2" role="tabpanel" aria-labelledby="v-pills-part2-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          PART 2 RESPONSIBILITIES AND OBJECTIVES
                        </h3>

                        <label class="form-label">
                          (1) Please state your
                          roles/responsibilities/objectives during the
                          appraisal period. Please confine the list to six
                          broad items.
                        </label>
                        <form class="row g-3">
                          <div class="col-md-12">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">
                                    Roles/Responsibilities/Objectives
                                  </th>
                                  <th scope="col">
                                    Percentage of time spent
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>
                                    <textarea class="form-control" id="inputPart2_1_1_1"></textarea>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" id="inputPart2_1_1_2" />
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>
                                    <textarea class="form-control" id="inputPart2_1_2_1"></textarea>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" id="inputPart2_1_2_2" />
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>
                                    <textarea class="form-control" id="inputPart2_1_3_1"></textarea>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" id="inputPart2_1_3_2" />
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>
                                    <textarea class="form-control" id="inputPart2_1_4_1"></textarea>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" id="inputPart2_1_4_2" />
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>
                                    <textarea class="form-control" id="inputPart2_1_5_1"></textarea>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" id="inputPart2_1_5_2" />
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">6</th>
                                  <td>
                                    <textarea class="form-control" id="inputPart2_1_6_1"></textarea>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" id="inputPart2_1_6_2" />
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart2_2" class="form-label">(2) Significant changes to the list of
                              Responsibilities and Objectives</label>
                            <small class="form-label">You should review the list of
                              responsibilities/objectives with the appraising
                              officer from time to time. If there have been
                              any significant changes to the list during the
                              appraisal period, please indicate such changes
                              below. This should be agreed with your
                              appraising officer.</small>
                            <textarea class="form-control" id="inputPart2_2"></textarea>
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart2_3_1" class="form-label">(3) Please indicate any special tasks or
                              aspects of your work which you would like to
                              mention.</label>
                            <textarea class="form-control" id="inputPart2_3_1"></textarea>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart2_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart2_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart2_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart2_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart2_sign_2_1" class="form-label">Signature of Appraising Officer</label>
                                <input type="text" class="form-control" id="inputPart2_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart2_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart2_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 3 -->
                  <div class="tab-pane fade" id="v-pills-part3" role="tabpanel" aria-labelledby="v-pills-part3-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          PART 3 (to be completed by appraising officer)
                          PERFORMANCE ASSESSMENT
                        </h3>

                        <p>
                          (a) Where an officer is acting in a post at a higher
                          rank, he/she should be assessed against the
                          requirements at the higher rank.
                        </p>
                        <p>
                          (b) If the appraising officer is of the same
                          substantive rank (although acting in a higher rank)
                          as the appraisee, he/she should discuss the report
                          with the next most senior officer and submit the
                          report in draft for approval. He/She should state
                          that this has been done in the faired version of the
                          report.
                        </p>

                        <h4>(1) Appraisal of Performance</h4>

                        <p>
                          Please assess the appraisee’s performance for each
                          responsibility listed in Part 2 against the
                          following ratings. No allowance should be made for
                          factors such as ill health, personal problems or
                          circumstances outside the officer’s control which
                          may have affected the appraisee’s performance. Any
                          such factors should be mentioned in Section 2 ii on
                          page 7.
                        </p>
                        <p>Please tick the appropriate box.</p>
                        <p>
                          A Outstanding performance, far exceeds requirements
                        </p>
                        <p>
                          B More than meets requirements, achieving
                          consistently more than what is expected of that
                          particular objective/responsibility in quality and
                          quantity
                        </p>
                        <p>
                          C Fully meets requirements, achieving in full or
                          occasionally above the requirements in quality and
                          quantity
                        </p>
                        <p>
                          D Barely meets the lowest requirements with need for
                          improvement
                        </p>
                        <p>
                          E Lowest requirements not met in full, and
                          performance occasionally fallen short of the
                          required standard in terms of quantity or quality or
                          both
                        </p>
                        <p>
                          F Lowest requirements not met; there have been
                          serious performance deficiencies
                        </p>
                        <p>
                          “Comments on Performance” and ratings should be
                          consistent with each other and supported by
                          justification.
                        </p>
                        <form class="row g-3">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">
                                  Responsibility / Objective
                                </th>
                                <th scope="col">Comments on Performance</th>
                                <th scope="col">Rating</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_1_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_1_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_2_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_2_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_3_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_3_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_4_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_4_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_5_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_5_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_6_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_6_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Others / Special Tasks</th>
                                <td>
                                  <textarea class="form-control" id="inputPart3_7_1"></textarea>
                                </td>
                                <td>
                                  <select id="inputPart3_7_2" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                  </select>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <h4>
                            (2) Please give an overall grading on the
                            appraisee’s performance in his/her present post
                            against the following scale:
                          </h4>

                          <p>
                            1. Outstanding, distinguished from others in
                            excellence, markedly superior than the rest
                          </p>
                          <p>
                            2. Very effective performance which more than
                            meets requirements consistently
                          </p>
                          <p>
                            3. Effective performance which fully meets
                            requirements, and occasionally exceeds such
                            requirements
                          </p>
                          <p>
                            4. Moderate performance which barely meets the
                            lowest acceptable standard with need for
                            improvement
                          </p>
                          <p>
                            5. Unsatisfactory performance with much room for
                            improvement
                          </p>
                          <p>
                            6. Poor performance which falls seriously short of
                            requirements
                          </p>
                          <p>
                            “Outstanding” grading should be given only
                            sparingly and, if awarded, the justification of
                            which must be fully elaborated. Elaboration should
                            also be provided for ratings at “moderate” or
                            below.
                          </p>

                          <div>
                            <select class="form-control" id="inputPart3_2">
                              <option selected="">Choose...</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                            </select>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart3_2_i" class="form-label">2.i Please give an overall assessment of the
                              appraisee’s performance and comment on the
                              notable strengths and weaknesses of the
                              appraisee in support of the overall grading
                              given above.</label>
                            <textarea class="form-control" id="inputPart3_2_i"></textarea>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart3_2_ii" class="form-label">2.ii Please indicate below factors, such as ill
                              health, personal problems or other
                              circumstances, which have affected the officer’s
                              performance. Where the appraising officer
                              considers that the officer’s performance during
                              the appraisal period has been affected by
                              his/her sick leave, the officer’s sick leave
                              record should be included here as supporting
                              information.</label>
                            <textarea class="form-control" id="inputPart3_2_ii"></textarea>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart3_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart3_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart3_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart3_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart3_sign_2_1" class="form-label">Signature of Appraising Officer</label>
                                <input type="text" class="form-control" id="inputPart3_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart3_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart3_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 4 -->
                  <div class="tab-pane fade" id="v-pills-part4" role="tabpanel" aria-labelledby="v-pills-part4-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          PART 4 (to be completed by appraising officer)
                        </h3>

                        <h4>(1) ASSESSMENT OF COMPETENCIES</h4>

                        <p>
                          Appraising officer should assess whether the
                          appraisee has demonstrated the required competencies
                          of his/her substantive rank and displays potential
                          to perform at the next higher rank. The competency
                          profile has adopted an incremental approach, i.e. an
                          officer at a promotion rank should have fully met
                          the requirements of the junior rank(s) and should
                          fulfill new and progressively complex requirements
                          at his/her own rank. The rating scale is as follows:
                        </p>
                        <p>
                          1 Demonstrates competence to perform strongly at the
                          next higher rank
                        </p>
                        <p>
                          2 Displays potential and ability to perform well at
                          the next higher rank
                        </p>
                        <p>
                          3 Performs well in the current rank, with some
                          potential for higher responsibilities
                        </p>
                        <p>
                          4 Performs adequately and is consolidating at the
                          current rank
                        </p>
                        <p>5 Does not yet perform well at the current rank</p>
                        <p>N.A. Not tested/Not applicable</p>

                        <form class="row g-3">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Core Competencies</th>
                                <th scope="col">
                                  <p>Substantive Rank:</p>
                                  <p>Land Surveyor</p>
                                  <p>(MPS 30 – 44)</p>
                                </th>
                                <th scope="col">
                                  <p>Next Higher Rank:</p>
                                  <p>Senior Land Surveyor</p>
                                  <p>(MPS 45 – 49)</p>
                                </th>
                                <th scope="col">Rating</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">A. Leadership</th>
                                <td>
                                  <ol>
                                    <li>
                                      Translates organizational goals into
                                      operational plans; mobilizes staff to
                                      work towards such plans
                                    </li>
                                    <li>
                                      Sets clear and attainable targets for
                                      effective implementation of operational
                                      plans; reviews targets and seeks
                                      improvements
                                    </li>
                                    <li>
                                      Assists and motivates staff in the
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <ol>
                                    <li>
                                      Contributes to organizational goals and
                                      objectives; aligns workable plans with
                                      such goals and objectives
                                    </li>
                                    <li>
                                      Seeks and copes well with strategy
                                      formulation responsibilities
                                    </li>
                                    <li>
                                      Co-ordinates concerted efforts; leads,
                                      motivates and energizes staff towards
                                      achieving work goals; reviews results
                                      and seeks to improve
                                    </li>
                                    <li>
                                      Upholds a high standard of integrity and
                                      honesty
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_A">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <th rowspan="3">
                                  B. Analysis, Judgement and Political Acumen
                                </th>
                                <td>
                                  <b>Analysis</b>
                                  <ol>
                                    <li>
                                      Examines and researches into complex
                                      issues thoroughly and objectively
                                    </li>
                                    <li>
                                      Selects relevant data and applies
                                      logical and critical thinking in
                                      analyzing research findings and drawing
                                      meaningful conclusions
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Analysis</b>
                                  <ol>
                                    <li>
                                      Understands and analyzes complex issues;
                                      applies logical and critical thinking;
                                      displays good analytical skills
                                    </li>
                                    <li>
                                      Presents research and analysis
                                      accurately, convincingly and with depth
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_B_1">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <b>Judgement</b>
                                  <ol>
                                    <li>
                                      Identifies and gets to the root of
                                      problems; recommends logical and
                                      practical options
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Judgement</b>
                                  <ol>
                                    <li>
                                      Recognizes key issues and gets to the
                                      heart of the problem; adopts rational
                                      problem-solving approaches; takes
                                      precautionary measures
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_B_2">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <b>Political Acumen</b>
                                  <ol>
                                    <li>
                                      Is able to gauge clients’ needs;
                                      addresses conflicting concerns of
                                      different parties in making
                                      recommendations
                                    </li>
                                    <li>
                                      Looks for wider implications when
                                      dealing with a problem and be alert for
                                      cues for latent issues
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Political Acumen</b>
                                  <ol>
                                    <li>
                                      Shows political sensitivity in
                                      appraising clients’ needs, situations
                                      and problems
                                    </li>
                                    <li>
                                      Minimizes the negative aspects of
                                      policies and delivers controversial
                                      messages in a diplomatic manner
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_B_3">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <th rowspan="4">C. Staff Management</th>
                                <td>
                                  <b>Delegation</b>
                                  <ol>
                                    <li>
                                      Delegates tasks to staff with clear
                                      instructions, guidance and realistic
                                      deadlines
                                    </li>
                                    <li>
                                      Allocates work sensibly; monitors and
                                      reviews progress
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Delegation</b>
                                  <ol>
                                    <li>
                                      Delegates tasks to staff with clear
                                      instructions, guidance and realistic
                                      deadlines
                                    </li>
                                    <li>
                                      Allocates work sensibly; regularly
                                      monitors and reviews progress to ensure
                                      objectives and deadlines are met
                                    </li>
                                    <li>Gives staff sufficient latitude</li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_C_1">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <b>Team Work</b>
                                  <ol>
                                    <li>
                                      Cultivates and sustains co-operation
                                      among team members
                                    </li>
                                    <li>
                                      Leads and motivates team members to
                                      achieve results
                                    </li>
                                    <li>
                                      Knows strengths and weaknesses of team
                                      members and makes the most of individual
                                      abilities
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Team Work</b>
                                  <ol>
                                    <li>
                                      Motivates and sustains team operation
                                      and collaboration
                                    </li>
                                    <li>
                                      Commands respect, inspires staff;
                                      creates and encourages team spirit;
                                      leads team towards results
                                    </li>
                                    <li>
                                      Provides proper balance of guidance and
                                      latitude to staff
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_C_2">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <b>Staff Development</b>
                                  <ol>
                                    <li>
                                      Develops staff’s skills, competence and
                                      potential for enhancing current
                                      performance and meeting future job needs
                                    </li>
                                    <li>
                                      Identifies training needs in support of
                                      organizational objectives
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Staff Development </b>
                                  <ol>
                                    <li>
                                      Identifies staff development needs in
                                      support of work and organizational
                                      objectives; implements plans to meet
                                      such needs
                                    </li>
                                    <li>
                                      Develops staff for enhancing current
                                      performance and meeting future job needs
                                    </li>
                                    <li>
                                      Encourages and facilitates staff
                                      continuous development
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_C_3">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <b>Performance Management</b>
                                  <ol>
                                    <li>
                                      Provides honest, specific and
                                      constructive feedback at appraisals
                                    </li>
                                    <li>
                                      Sets good example in prompt appraisals
                                    </li>
                                    <li>
                                      Provides on-going feedback outside
                                      appraisals
                                    </li>
                                    <li>
                                      Identifies strengths and weaknesses of
                                      staff and proposes
                                      enhancement/development plans, and
                                      follow up actions
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Performance Management </b>
                                  <ol>
                                    <li>
                                      Provides honest, specific and
                                      constructive feedback at appraisals
                                    </li>
                                    <li>
                                      Sets good example in prompt appraisals
                                      and providing on-going feedback
                                    </li>
                                    <li>
                                      Identifies strengths and weaknesses of
                                      staff; proposes and implements staff
                                      enhancement/ development plans
                                    </li>
                                    <li>
                                      Takes resolute actions on sub-standard
                                      performance
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_C_4">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <th rowspan="3">D. Communication</th>
                                <td>
                                  <b>Presentation skills</b>
                                  <ol>
                                    <li>
                                      Presents complex issues logically,
                                      effectively and clearly
                                    </li>
                                    <li>Gets the facts right</li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Presentation skills</b>
                                  <ol>
                                    <li>
                                      Presents complex issues logically,
                                      effectively, clearly and convincingly
                                    </li>
                                    <li>Ensures accuracy of information</li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_D_1">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <b>Interpersonal skills</b>
                                  <ol>
                                    <li>
                                      Builds rapport and wins support from
                                      colleagues, working contacts and clients
                                    </li>
                                    <li>
                                      Be open to ideas and views of others;
                                      shows flexibility in accommodating
                                      requests
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Interpersonal skills</b>
                                  <ol>
                                    <li>
                                      Builds rapport and gains respect from
                                      colleagues, working contacts and clients
                                    </li>
                                    <li>
                                      Be open to ideas and views of others;
                                      achieves sensible adjustments to plans
                                      having regard to those ideas/views
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_D_2">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <b>Use of influence</b>
                                  <ol>
                                    <li>
                                      Gets agreement and co-operation through
                                      reasoning and persuasion
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <b>Use of influence</b>
                                  <ol>
                                    <li>
                                      Is able to resolve conflicts and ensures
                                      co-operation through persuasion,
                                      reasoning and influence
                                    </li>
                                    <li>
                                      Is able to contribute to negotiation
                                      tactics
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_D_3">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <th>E. Personal Effectiveness</th>
                                <td>
                                  <ol>
                                    <li>
                                      Is aware of own strengths and
                                      weaknesses; seeks self-development on a
                                      continuous basis
                                    </li>
                                    <li>
                                      Prioritizes work and executes work
                                      effectively; meets deadlines and
                                      schedules
                                    </li>
                                    <li>
                                      Accepts and adjusts to change readily;
                                      resilient in face of pressure
                                    </li>
                                    <li>
                                      Exercises self-control and continues to
                                      work calmly under pressure
                                    </li>
                                    <li>Shows drive and commitment</li>
                                  </ol>
                                </td>
                                <td>
                                  <ol>
                                    <li>
                                      Is able to appraise own strengths and
                                      weaknesses; seeks improvement on a
                                      continuous basis
                                    </li>
                                    <li>
                                      Prioritizes and schedules own and
                                      subordinates’ work effectively; meets
                                      deadlines and schedules
                                    </li>
                                    <li>
                                      Is responsive to change and versatile
                                      towards new requirements
                                    </li>
                                    <li>
                                      Works effectively under pressure and
                                      unexpected circumstances
                                    </li>
                                    <li>
                                      Exercises self-control and continues to
                                      work calmly under pressure
                                    </li>
                                    <li>Shows drive and commitment</li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_E">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th>
                                  F. Resource and Information Management
                                </th>
                                <td>
                                  <ol>
                                    <li>
                                      Manages resources responsibly and
                                      effectively, having regard to set
                                      priorities
                                    </li>
                                    <li>
                                      Uses information technology in
                                      day-to-day work effectively
                                    </li>
                                    <li>
                                      Uses information technology to improve
                                      work procedures and practices
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <ol>
                                    <li>
                                      Contributes to assessment and monitoring
                                      of resource requirement
                                    </li>
                                    <li>
                                      Manages and monitors resources
                                      responsibly and effectively, having
                                      regard to set priorities
                                    </li>
                                    <li>
                                      Uses information technology in
                                      day-to-day work effectively and to
                                      enhance organization’s performance
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_F">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th>G. Work / Professional Knowledge</th>
                                <td>
                                  <ol>
                                    <li>
                                      Has sound professional knowledge and
                                      skills; applies such knowledge and
                                      skills to work and planning effectively
                                    </li>
                                    <li>
                                      Seeks continuous improvement to
                                      professional knowledge and skills
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <ol>
                                    <li>
                                      Has solid and updated professional
                                      knowledge and skills in own field;
                                      applies such knowledge and skills to
                                      work and planning effectively
                                    </li>
                                    <li>
                                      Keeps abreast of developments in own
                                      work/ professional areas
                                    </li>
                                  </ol>
                                </td>
                                <td>
                                  <select class="form-control" id="inputPart4_G">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <h4>H. Language Proficiency</h4>

                          <p>
                            Please assess the appraisee’s language
                            proficiency, i.e. fluency, presentation and
                            comprehension, by using the following scale:
                          </p>
                          <p>1. Excellent</p>
                          <p>2. Very effective</p>
                          <p>3. Effective</p>
                          <p>4. Weak</p>
                          <p>5. Little understanding of the language</p>
                          <p>N.T. Not tested</p>

                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Written</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Oral</th>
                                <th scope="col">Rating</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">English</th>
                                <td>
                                  <select class="form-control" id="inputPart4_H_1_1">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                                <th scope="row">English</th>
                                <td>
                                  <select class="form-control" id="inputPart4_H_1_2">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Chinese</th>
                                <td>
                                  <select class="form-control" id="inputPart4_H_1_3">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                                <th scope="row">Chinese</th>
                                <td>
                                  <select class="form-control" id="inputPart4_H_1_4">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row"></th>
                                <td></td>
                                <th scope="row">Putonghua</th>
                                <td>
                                  <select class="form-control" id="inputPart4_H_1_5">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="N.A.">N.A.</option>
                                  </select>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <div class="col-md-12">
                            <label for="inputPart4_H_1_6" class="form-label">Additional comments</label>
                            <small class="form-label">Please elaborate on the competencies rated
                              above if necessary.</small>
                            <textarea class="form-control" id="inputPart4_H_1_6"></textarea>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart4_H_2_2" class="form-label">(2) POTENTIAL AND AREAS FOR
                              IMPROVEMENT/DEVELOPMENT NEEDS</label>
                            <small class="form-label">Please comment on the appraisee’s potential and
                              areas for improvement/development needs. Please
                              also give your views on the appraisee’s future
                              posting and training plan.</small>
                            <textarea class="form-control" id="inputPart4_H_2_2"></textarea>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart4_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart4_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart4_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart4_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart4_sign_2_1" class="form-label">Signature of Appraising Officer</label>
                                <input type="text" class="form-control" id="inputPart4_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart4_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart4_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 5 -->
                  <div class="tab-pane fade" id="v-pills-part5" role="tabpanel" aria-labelledby="v-pills-part5-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          Part 5 (to be completed by appraising officer)
                        </h3>

                        <h4>GRANTING OF INCREMENT (if applicable)</h4>

                        <form class="row g-3">
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_1">
                              (1) Please tick this box if this part is not
                              applicable or the officer is on maximum pay
                              scale.
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_1" />
                          </div>

                          <p>
                            (2) Please indicate by ticking in the appropriate
                            box your recommendation on whether the officer
                            being appraised should be granted an increment
                            under CSR 451 on his/her next incremental date.
                          </p>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_2_1">
                              I recommend that the officer be granted an
                              increment on his/her next incremental date.
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_2_1" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_2_2">
                              I recommend that the increment of the officer be
                              stopped for
                              <input type="text" id="inutPart5_2_3" /> months.
                              (Please recommend the duration, in the range of
                              3 to 6 months.)
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_2_2" />
                          </div>

                          <p>
                            (3) For Officers Currently on Stoppage/Deferment
                            of Increment
                          </p>

                          <p>
                            The officer is currently on stoppage/deferment
                            (delete as appropriate) of increment for
                            <input type="text" id="inutPart5_3_1" /> months
                            since <input type="text" id="inutPart5_3_2" /> (to
                            be completed by the Personnel Section).
                          </p>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_3_3">
                              I recommend that the appraisee be granted an
                              increment after his/her current
                              stoppage/deferment (delete as appropriate) of
                              increment has ended.
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_3_3" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_3_4">
                              I recommend converting the stoppage of increment
                              of the appraisee to deferment with retrospective
                              effect and impose a further deferment of
                              increment for
                              <input type="text" id="inutPart5_3_4_1" />
                              months. (Please recommend the duration, in the
                              range of 3 to 6 months.)
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_3_4" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_3_5">
                              I recommend that the increment of the appraisee
                              be deferred for a further
                              <input type="text" id="inutPart5_3_5_1" />
                              months. (Please recommend the duration of the
                              deferment, in the range of 3 to 6 months.)
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_3_5" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart5_3_6">
                              I recommend that the appraisee be granted an
                              increment on his/her next incremental date.
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart5_3_6" />
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart5_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart5_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart5_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart5_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart5_sign_2_1" class="form-label">Signature of Appraising Officer</label>
                                <input type="text" class="form-control" id="inputPart5_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart5_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart5_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 6 -->
                  <div class="tab-pane fade" id="v-pills-part6" role="tabpanel" aria-labelledby="v-pills-part6-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          Part 6 (to be completed by appraising officer)
                        </h3>

                        <h4>FITNESS FOR PROMOTION</h4>

                        <form class="row g-3">
                          <p>Please tick the appropriate box.</p>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart6_1">
                              (1) Displays exceptional potential for
                              responsibilities at the next higher level
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart6_1" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart6_2">
                              (2) Suitable for testing at the next higher
                              level
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart6_2" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart6_3">
                              (3) Yet to display clear potential for the next
                              higher level
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart6_3" />
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="inputPart6_4">
                              (4) Needs consolidating at the current rank
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart6_4" />
                          </div>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart6_4">
                              (5) Not applicable as there is no promotion rank
                              for the rank Other reason(s):
                              <input id="inputPart6_4_1" />
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart6_4" />
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart6_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart6_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart6_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart6_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart6_sign_2_1" class="form-label">Signature of Appraising Officer</label>
                                <input type="text" class="form-control" id="inputPart6_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart6_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart6_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 7 -->
                  <div class="tab-pane fade" id="v-pills-part7" role="tabpanel" aria-labelledby="v-pills-part7-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">PART 7</h3>
                        <h4>COUNTERSIGNING OFFICER’S ASSESSMENT</h4>

                        <form class="row g-3">
                          <div class="col-md-12">
                            <label for="inputPart7_1" class="form-label">1. What is your assessment of the appraisee’s
                              overall performance? If your assessment is
                              different from the appraising officer’s
                              assessment, please explain.</label>

                            <textarea class="form-control" id="inputPart7_1"></textarea>
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart7_2" class="form-label">2. What is your assessment of the appraisee’s
                              core competencies? If you do not agree with the
                              appraising officer’s assessment on core
                              competencies, please specify.</label>

                            <textarea class="form-control" id="inputPart7_2"></textarea>
                          </div>

                          <p>
                            3. Assess Fitness for Promotion / Potential by
                            ticking the appropriate box
                          </p>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart7_3_1">
                              (1) Displays exceptional potential for
                              responsibilities at the next higher level
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart7_3_1" />
                          </div>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart7_3_2">
                              (2) Suitable for testing at the next higher
                              level
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart7_3_2" />
                          </div>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart7_3_3">
                              (3) Yet to display clear potential for the next
                              higher level
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart7_3_3" />
                          </div>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart7_3_4">
                              (4) Needs consolidating at the current rank
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart7_3_4" />
                          </div>

                          <div class="form-check">
                            <label class="form-check-label" for="inputPart7_3_5">
                              (5) Not applicable as there is no promotion rank
                              for the rank Other reason(s):
                              <input type="text" id="inputPart7_3_5_1" />
                            </label>
                            <input class="form-check-input" type="checkbox" id="inputPart7_3_5" />
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart7_4" class="form-label">Granting of Increment (if applicable)
                              <br />
                              I agree / disagree (delete as appropriate) with
                              the appraising officer’s recommendation on the
                              granting, stoppage or deferment of increment. If
                              disagree, my recommendation is:</label>

                            <textarea class="form-control" id="inputPart7_4"></textarea>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart7_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart7_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart7_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart7_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart7_sign_2_1" class="form-label">Signature of Countersigning Officer</label>
                                <input type="text" class="form-control" id="inputPart7_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart7_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart7_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 8 -->
                  <div class="tab-pane fade" id="v-pills-part8" role="tabpanel" aria-labelledby="v-pills-part8-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">PART 8</h3>

                        <h4>RECORD OF APPRAISAL INTERVIEW</h4>

                        <form class="row g-3">
                          <p>
                            The countersigning officer should decide who
                            should conduct the appraisal interview. Normally
                            the appraising officer should conduct the
                            interview. The countersigning officer should
                            complete his/her assessment before the interview.
                            If, in exceptional circumstances, the appraisal
                            interview cannot be conducted, the reasons should
                            be stated below.
                          </p>

                          <p>
                            The interviewing officer is required to show the
                            assessment in Parts 3 - 7 to the appraisee before
                            the appraisal interview.
                          </p>

                          <div class="col-md-12">
                            <label for="inputPart8_2" class="form-label">A summary of the interview and the comments of
                              the appraisee should be recorded below.</label>
                            <textarea class="form-control" id="inputPart8_2"></textarea>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart8_3" class="form-label">Date of Interview:</label>
                            <input type="text" class="form-control" id="inputPart8_3" />
                          </div>
                          <div class="col-md-12">
                            <label for="inputPart8_4" class="form-label">The appraisee has read the assessments made by
                              both the appraising and the countersigning
                              officers.</label>
                            <select id="inputPart8_4" class="form-select">
                              <option selected="">Choose...</option>
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart8_sign_1_1" class="form-label">Signature of Appraisee</label>

                                <input type="text" class="form-control" id="inputPart8_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart8_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart8_sign_1_2" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart8_sign_2_1" class="form-label">Signature of Interviewing Officer</label>
                                <input type="text" class="form-control" id="inputPart8_sign_2_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart8_sign_2_2" class="form-label">Date</label>

                                <input type="text" class="form-control" id="inputPart8_sign_2_2" />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- PART 9 -->
                  <div class="tab-pane fade" id="v-pills-part9" role="tabpanel" aria-labelledby="v-pills-part9-tab">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">
                          PART 9 (to be completed by reviewing officer)
                        </h3>

                        <h4>REVIEWING OFFICER’S ASSESSMENT</h4>

                        <form class="row g-3">
                          <div class="col-md-12">
                            <label for="inputPart9_1" class="form-label">(1) Month/year of last career development
                              interview:</label>
                            <input type="text" class="form-control" id="inputPart9_1" />
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart9_2" class="form-label">(2) Please make an overall assessment of the
                              appraisee’s current competencies and long-term
                              potential, having regard to the job complexity,
                              the reporting standards of the appraising and
                              countersigning officers, circumstantial factors
                              which may have affected the appraisee’s
                              performance, etc. If there is a major difference
                              in view between the reviewing officer and the
                              appraising/countersigning officer on the
                              performance of an appraisee, the reviewing
                              officer should bring it to the attention of the
                              countersigning officer and/or the appraising
                              officer, as well as the appraisee.</label>
                            <textarea class="form-control" id="inputPart9_2"></textarea>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart9_3" class="form-label">(3) Irrespective of seniority, is the officer
                              now ready to perform duties at the next higher
                              rank?</label>
                            <select id="inputPart9_3" class="form-select">
                              <option selected="">Choose...</option>
                              <option>Yes</option>
                              <option>
                                Shows potential, can be tested at the next
                                higher rank
                              </option>
                              <option>Not yet</option>
                            </select>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart9_4" class="form-label">(4) What is your assessment of the officer’s
                              long-term potential?</label>

                            <div class="form-check">
                              <label class="form-check-label" for="inputPart9_4_1">
                                has exceptional potential for responsibilities
                                at higher levels
                              </label>
                              <input class="form-check-input" type="checkbox" id="inputPart9_4_1" />
                            </div>
                            <div class="form-check">
                              <label class="form-check-label" for="inputPart9_4_2">
                                has the potential to shoulder responsibilities
                                at the next higher rank
                              </label>
                              <input class="form-check-input" type="checkbox" id="inputPart9_4_2" />
                            </div>
                            <div class="form-check">
                              <label class="form-check-label" for="inputPart9_4_3">
                                yet to display clear potential for the next
                                higher level
                              </label>
                              <input class="form-check-input" type="checkbox" id="inputPart9_4_3" />
                            </div>
                            <div class="form-check">
                              <label class="form-check-label" for="inputPart9_4_4">
                                needs further consolidation at the current
                                rank
                              </label>
                              <input class="form-check-input" type="checkbox" id="inputPart9_4_4" />
                            </div>
                            <div class="form-check">
                              <label class="form-check-label" for="inputPart9_4_5">
                                not applicable as there is no promotion rank
                                for this rank
                              </label>
                              <input class="form-check-input" type="checkbox" id="inputPart9_4_5" />
                            </div>
                          </div>

                          <div class="col-md-12">
                            <label for="inputPart9_5" class="form-label">(5) Other comments (including career
                              development and training needs)</label>
                            <textarea class="form-control" id="inputPart9_5"></textarea>
                          </div>

                          <div class="col-md-6">
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart9_sign_1_1" class="form-label">Signature of Reviewing Officer</label>

                                <input type="text" class="form-control" id="inputPart9_sign_1_1" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <label for="inputPart9_sign_1_2" class="form-label">Date</label>
                                <input type="text" class="form-control" id="inputPart9_sign_1_2" />
                              </div>
                            </div>
                          </div>
                        </form>
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