<?php include_once "header.php"; ?>

<style>
    .navbar-nav .language{
        margin-top: 35px !important;
    }
</style>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light mb-5"
    style="background-image: url('assets/img/membs_bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $lang['membershipnb']?></h1>
                <ul class="breadcrumb">
                <li><a href="index.php"><i class="fas fa-home"></i> <?= $lang['home']?></a></li>
                    <li class="active"><i class="fas fa-images"></i><?= $lang['membershipnb']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Login 
    ============================================= -->
<?php include_once "become_a_member.php"; ?>
<!-- End Login Area -->

<!-- Start Board Gallery -->
<div class="board_gallery">
    <div class="conteiner" style="display:flex; justify-content:center">
        <div class="element active" style="background-image:url(assets/img/gallery/ada_mezun_1.jpg);"></div>
        <div class="element" style="background-image:url(assets/img/gallery/ada_mezun_2.jpg);"></div>
        <div class="element" style="background-image:url(assets/img/gallery/ada_mezun_3.jpg);"></div>
        <div class="element" style="background-image:url(assets/img/gallery/ada_mezun_4.jpg);"></div>
        <div class="element" style="background-image:url(assets/img/gallery/ada_mezun_5.jpg);"></div>
    </div>
</div>

<script>
    $(".element").hover(function () {
        $(".element").removeClass("active")
        $(this).addClass('active');;
    });
</script>
<!-- End Board Gallery -->

<?php include_once "footer.php" ?>