<?php include_once "header.php"; ?>

<style>
    .default-padding-top {
        padding-top: 60px;
    }

    .course-offer-area {
        margin-bottom: auto !important;
    }
</style>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(assets/img/gallery/ada_background.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $lang['aboutnb']?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> <?= $lang['home']?></a></li>
                    <li><a href="news.php"><i class="fas fa-newspaper"></i><?= $lang['contactnb']?></a></li>
                    <li class="active"><i class="fas fa-images"></i><?= $lang['aboutnb']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start History
    ============================================= -->
<?php include_once "history.php"; ?>
<!-- End History -->


<div class="container" style="margin-top: 70px; margin-bottom: 70px;">
    <div class="row">

        <div class="col-md-12 ">
            <!-- <h5>Introduction</h5> -->
            <h1>Mission</h1>
            <p>
                The functions of the ADA University Alumni Association include those of linking the alumni
                to their alma mater, the fostering of mutually beneficial relationships, building loyalty
                towards the University and promoting a sense of cohesiveness among alumni globally.
            </p>
            <p>
                The Alumni Association is dedicated to advancing the mission, vision, and values of
                Association. This strives to build, strengthen, and maintain strong, mutually beneficial
                relationships between the alumni and all facets of the University. They connect with alumni
                across the country, advance the reputation of the University and develop a pipeline to build
                capacity for future fundraising.
            </p>
        </div>

    </div>
</div>
<?php include_once "footer.php" ?>