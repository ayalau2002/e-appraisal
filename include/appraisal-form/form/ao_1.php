<!-- Vertical Pills Tabs -->
<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-ao_1-part1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part1" type="button" role="tab" aria-controls="v-pills-ao_1-part1" aria-selected="true">
            <span data-bs-toggle="tooltip" data-bs-original-title="PERSONAL PARTICULARS" data-bs-placement="right">Part 1</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part2" type="button" role="tab" aria-controls="v-pills-ao_1-part2" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="RESPONSIBILITIES AND OBJECTIVES" data-bs-placement="right">Part 2</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part3" type="button" role="tab" aria-controls="v-pills-ao_1-part3" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="PERFORMANCE ASSESSMENT" data-bs-placement="right">Part 3</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part4" type="button" role="tab" aria-controls="v-pills-ao_1-part4" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="" data-bs-placement="right">Part 4</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part5" type="button" role="tab" aria-controls="v-pills-ao_1-part5" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="GRANTING OF INCREMENT (if applicable)" data-bs-placement="right">Part 5</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part6" type="button" role="tab" aria-controls="v-pills-ao_1-part6" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="FITNESS FOR PROMOTION" data-bs-placement="right">Part 6</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part7" type="button" role="tab" aria-controls="v-pills-ao_1-part7" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="COUNTERSIGNING OFFICER’S ASSESSMENT" data-bs-placement="right">Part 7</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part8" type="button" role="tab" aria-controls="v-pills-ao_1-part8" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="RECORD OF APPRAISAL INTERVIEW" data-bs-placement="right">Part 8</span>
        </button>
        <button class="nav-link" id="v-pills-ao_1-part9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ao_1-part9" type="button" role="tab" aria-controls="v-pills-ao_1-part9" aria-selected="false" tabindex="-1">
            <span data-bs-toggle="tooltip" data-bs-original-title="REVIEWING OFFICER’S ASSESSMENT" data-bs-placement="right">Part 9</span>
        </button>
    </div>

    <div class="tab-content" id="v-pills-tabContent">
        <!-- PART 1 -->
        <div class="tab-pane fade show active" id="v-pills-ao_1-part1" role="tabpanel" aria-labelledby="v-pills-ao_1-part1-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 1
                    </h3>
                    <p class="text-center">(to be completed by department)</p>
                    <?php require "./include/appraisal-form/view/part1_1.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                </div>
            </div>
        </div>

        <!-- PART 2 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part2" role="tabpanel" aria-labelledby="v-pills-ao_1-part2-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 2
                    </h3>
                    <p class="text-center">(to be completed by appraisee and agreed with the appraising officer at the beginning of appraisal period)</p>
                    <?php require "./include/appraisal-form/view/part2.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/edit/ao.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 3 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part3" role="tabpanel" aria-labelledby="v-pills-ao_1-part3-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 3
                    </h3>
                    <p class="text-center">(to be completed by appraising officer)</p>
                    <?php require "./include/appraisal-form/edit/part3.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/edit/ao.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 4 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part4" role="tabpanel" aria-labelledby="v-pills-ao_1-part4-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 4
                    </h3>
                    <p class="text-center">(to be completed by appraising officer)</p>
                    <?php require "./include/appraisal-form/edit/part4.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/edit/ao.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 5 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part5" role="tabpanel" aria-labelledby="v-pills-ao_1-part5-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 5
                    </h3>
                    <p class="text-center">(to be completed by appraising officer)</p>
                    <?php require "./include/appraisal-form/edit/part5.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/edit/ao.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 6 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part6" role="tabpanel" aria-labelledby="v-pills-ao_1-part6-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 6
                    </h3>
                    <p class="text-center">(to be completed by appraising officer)</p>
                    <?php require "./include/appraisal-form/edit/part6.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/edit/ao.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 7 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part7" role="tabpanel" aria-labelledby="v-pills-ao_1-part7-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 7
                    </h3>
                    <p class="text-center">(to be completed by countersigning officer)</p>
                    <?php require "./include/appraisal-form/view/part7.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/view/co.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 8 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part8" role="tabpanel" aria-labelledby="v-pills-ao_1-part8-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 8
                    </h3>
                    <p class="text-center">(to be completed by Interviewing Officer)</p>
                    <?php require "./include/appraisal-form/view/part8.php"; ?>
                    <?php require "./include/signature/signed/appraisee_1.php"; ?>
                    <?php require "./include/signature/view/io.php"; ?>
                </div>
            </div>
        </div>



        <!-- PART 9 -->
        <div class="tab-pane fade" id="v-pills-ao_1-part9" role="tabpanel" aria-labelledby="v-pills-ao_1-part9-tab">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        PART 9
                    </h3>
                    <p class="text-center">(to be completed by reviewing officer)</p>
                    <?php require "./include/appraisal-form/view/part9.php"; ?>
                    <?php require "./include/signature/view/ro.php"; ?>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- End Vertical Pills Tabs -->