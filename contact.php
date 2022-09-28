<?php include_once "header.php"; ?>

<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(assets/img/gallery/ada_background.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $lang['contactnb']?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> <?= $lang['home']?></a></li>
                    <li class="active"><i class="fas fa-newspaper"></i><?= $lang['contactnb']?></a></li>
                    <li><a href="about.php"><i class="fas fa-images"></i><?= $lang['aboutnb']?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Info
    ============================================= -->
<?php include_once "contact_section.php"; ?>
<!-- End Contact Info -->

<?php include_once "footer.php" ?>