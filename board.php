<?php include_once "header.php"; ?>

<!-- Start Banner 
    ============================================= -->
<div class="banner-area content-top-heading less-paragraph text-normal">
    <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
            <div class="item active" style="height:406px">
                <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/board_of_directors.jpg);">
                </div>
                <div class="box-table shadow dark"
                    style="height:406px; display:flex; justify-content:center; align-items:center">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInLeft"><?= $lang['title']?></h3>
                                        <h1 data-animation="animated slideInUp">Structure</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                            href="#independent_committee">Independent Committee</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                            href="#advisor"><?= $lang['board_of_directors']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="item" style="height:406px">
                <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/bg_1.png);"></div>
                <div class="box-table shadow dark"
                    style="height:406px; display:flex; justify-content:center; align-items:center">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInLeft">We're glade to see you</h3>
                                        <h1 data-animation="animated slideInUp">explore our brilliant graduates</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                            href="#">Learn more</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                            href="#">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="height:406px">
                <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/bg_1.png);"></div>
                <div class="box-table shadow dark"
                    style="height:406px; display:flex; justify-content:center; align-items:center">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInLeft">The goal of education</h3>
                                        <h1 data-animation="animated slideInUp">Join the bigest comunity of eduka
                                        </h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                            href="#">Learn more</a>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                            href="#">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <!-- <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a> -->

    </div>
</div>
<!-- End Banner -->

<!-- Start Advisor Area
    ============================================= -->
<style>
    #advisor {
        padding-bottom: 0px !important;
    }
</style>
<?php include "board_members_current.php"; ?>
<div class="row" id="demo" onclick="myFunction()" style="background-color: #f9f9f9; margin: auto !important">
    <div class="more-btn col-md-12 text-center" style="margin-top: 5%">
        <a class="btn btn-dark border btn-md" style="font-size: 10px">Previous Board of Directors</a>
    </div>
</div>
<?php include "board_members_last.php"; ?>

<script>
    function myFunction() {
        document.getElementById("advisor_last").style.display = "block";
        document.getElementById("demo").style.display = "none";
    }
</script>
<!--End Advisor Area -->

<!-- Independent Committee -->
<section id="independent_committee" class="advisor-area bg-gray carousel-shadow default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="margin-top:20px">Independent Committee</h2>
                    <p>2021-2022</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="advisor-items row text-center text-light">
                    <div class="advisor-item col-lg-6 col-md-6 col-sm-6 col-xs-12"
                        style="padding-top: 15px; padding-bottom:15px">
                        <div class="info-box" style="display:flex; align-items: center">
                            <div class="member_img">
                                <img style="padding: 20px; object-fit:cover;" src="assets/img/fariz_ismayilzada.png"
                                    alt="Fariz Ismayilzada">
                            </div>
                            <div class="info-title">
                                <h4>Fariz Ismayilzada</h4>
                                <span style="display:inline-block; height:50px">Executive Vice Rector</span>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advisor-item col-lg-6 col-md-6 col-sm-6 col-xs-12"
                        style="padding-top: 15px; padding-bottom:15px">
                        <div class="info-box" style="display:flex; align-items: center">
                            <div class="member_img">
                                <img style="padding: 20px; object-fit:cover;" src="assets/img/zohra_asadova.png"
                                    alt="Zohra Asadova">
                            </div>
                            <div class="info-title">
                                <h4>Zohra Asadova</h4>
                                <span style="display:inline-block; height:50px">Alumni Affairs Specialist</span>

                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Independent Committee -->

<!-- Start Why Chose Us 
    ============================================= -->
<div class="wcs-area bg-dark text-light" style="margin-top:30px; margin-bottom: 15rem;">
    <div class="container-full">
        <div class="row">
            <div class="col-md-6 thumb bg-cover"
                style="background-image: url(https://images.unsplash.com/photo-1573164574511-73c773193279?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2069&q=80);">
            </div>
            <div class="col-md-6 content">
                <div class="site-heading text-left">
                    <h2>Structure</h2>
                    <!-- <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but
                            solicitude inhabiting projection off. Connection stimulated estimating excellence an to
                            impression.
                        </p> -->
                </div>

                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-users-between-lines"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#independent_committee"> Independent Committee </a>
                        </h4>
                        <p>
                            Independent Committee is a non-elective body of the Association consisting of 3 members
                            assigned by ADA University Leadership representing faculty/staff or administration of the
                            University for a two-year renewable term to perform role of a strategic support and guidance
                            while leading the Association to sustainable independent functionality.
                        </p>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-people-roof"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#advisor"><?= $lang['board_of_directors']?></a>
                        </h4>
                        <p>
                            The activities of the Association are governed by the Board of Directors of the Association
                            consisting of 7 elected members. The Board of Directors serves as an Executive body for the
                            Alumni Association.
                        </p>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-chess"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Treasurer </a>
                        </h4>
                        <p>
                            The Treasurer collects (via bank transfer) and records membership fees, donations, grants
                            and other financial contributions regulated by the civil code of the Republic of Azerbaijan.
                        </p>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-bars-progress"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Secretary </a>
                        </h4>
                        <p>
                            The Secretary keeps records and minutes of all meetings of the Board of Directors and
                            distributes them among Association Members, also, keeps updated about meeting details,
                            nominations, and other relevant information of different activities. </p>
                    </div>
                </div>
                <!-- item -->

            </div>
        </div>
    </div>
</div>
<!-- End Why Chose Us -->

<?php include_once "footer.php" ?>