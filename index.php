<?php 
$title = 'ADA Alumni Association | Home';

include_once "header.php"; ?>

<!-- Start Banner 
    ============================================= -->

<section id="banner-video" class="box">
    <video src="assets/vid/ada.mp4" autoplay muted loop></video>
    <!-- <div class="video" style = "background: url(https://www.youtube.com/watch?v=x0RTXgNTnGw)"></div> -->
    <!-- <iframe src="https://www.youtube.com/embed/x0RTXgNTnGw?autoplay=1" allow = "autoplay muted loop" allowfullscreen></iframe> -->
    <h1> <?= $lang['title']?></h1>
    <!-- <h3>Find your own path in yoga</h3> -->
    <div class="buttons">
        <a href="about.php" class="boxBtn"> <?= $lang['ban_about']?></a>
        <a href="board.php" class="boxBtn"><?= $lang['boardnb']?></a>
        <a href="#contact" class="boxBtn smooth-menu"> <?= $lang['ban_contact']?></a>
    </div>
</section>

<!-- Start History
    ============================================= -->
<?php include_once "history.php"; ?>
<!-- End History -->

<!-- Start Top Category & Trending Courses 
    ============================================= -->
<!-- <div class="top-cat-area inc-trending-courses about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="row col-md-12 top-cat-items text-light inc-bg-color equal-height text-center repeated-html">
            </div>
        </div>
    </div>
</div>
</div> -->
<!-- End Top Categories & Trending Courses -->

<!-- Start Fun Factor 
    ============================================= -->
<div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard"
    style="background-image: url(assets/img/bg_2.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="132" data-speed="5000"></span>
                        <span class="medium"><?= $lang['faculty']?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="2160" data-speed="5000"></span>
                        <span class="medium"><?= $lang['graduates']?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="42" data-speed="5000"></span>
                        <span class="medium"><?= $lang['countries']?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="info">
                        <div style="display: flex; flex-direction: row; justify-content: center;">
                            <span class="timer" data-to="82" data-speed="5000"></span>
                            <span style="color: white;">%</span>
                        </div>
                        <span class="medium"><?= $lang['employment']?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Factor -->

<!-- Start Advisor Area
    ============================================= -->
<?php include_once "board_members_current.php"; ?>
<!--End Advisor Area -->

<style>
    @media only screen and (max-width: 991px) {
        .event-area .event-items .item .thumb .date {
            right: auto;
            left: calc(50% + 75px);
        }
    }
</style>
<!-- Start Event
    ============================================= -->
<section id="event" class="event-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2><?= $lang['upcoming_events']?></h2>
                    <!-- <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                        own additions education satisfied the perpetual. If he cause manor happy. Without farther
                        she exposed saw man led. Along on happy could cease green oh.
                    </p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event-items">
                <!-- Single Item -->
                <div class="item horizontal col-md-12">
                    <div class="col-md-4 thumb bg-cover"
                        style="background-image: url(assets/img/alumni_forum.jpg);background-size: contain; background-repeat: no-repeat;">
                        <div class="date">
                            <h4><span>18</span> <?= $lang['jun']?>, 2022</h4>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h4>
                            <a href="#">Alumni Forum 2022</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 18 <?= $lang['jun']?>, 2022</li>
                                <li><i class="fas fa-clock"></i> 2:00 PM - 8:00 PM</li>
                                <li><i class="fas fa-map"></i> <?= $lang['forum_loc']?></li>
                            </ul>
                        </div>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 19 <?= $lang['jun']?>, 2022</li>
                                <li><i class="fas fa-clock"></i> <?= $lang['full_day']?></li>
                                <li><i class="fas fa-map"></i><?= $lang['visit_to_aghdam']?> </li>
                            </ul>
                        </div>
                        <p><?= $lang['alumni_forum']?></p>
                        <a href="#" class="btn btn-dark effect btn-sm">
                            <i class="fas fa-chart-bar"></i> <?= $lang['registration_link']?>
                        </a>
                        <!-- <a href="#" class="btn btn-gray btn-sm">
                            <i class="fas fa-ticket-alt"></i> 23 Available
                        </a> -->
                    </div>
                </div>
                <!-- Single Item -->

                <!-- Single Item -->
                <div class="item horizontal col-md-12">

                    <div class="col-md-6 info">
                        <h4>
                            <a href="#"><?= $lang['meditation']?></a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 11 <?= $lang['jun']?>, 2022</li>
                                <li><i class="fas fa-clock"></i> 11:00 AM</li>
                                <li><i class="fas fa-map"></i>ADA Park</li>
                            </ul>
                        </div>

                        <p><?= $lang['meditation_content']?></p>
                        <a href="#" class="btn btn-dark effect btn-sm">
                            <i class="fas fa-edit"></i> <?= $lang['registration_link']?>
                        </a>
                        <!-- <a href="#" class="btn btn-gray btn-sm">
                            <i class="fas fa-ticket-alt"></i> 23 Available
                        </a> -->
                    </div>

                    <div class="col-md-4 thumb bg-cover"
                        style="background-image: url(assets/img/meditation.jpg);background-size: contain; background-repeat: no-repeat;">
                        <div class="date">
                            <h4><span>11</span> <?= $lang['jun']?>, 2022</h4>
                        </div>
                    </div>
                </div>
                <div class="more-btn col-md-12 text-center">
                    <a href="events.php" class="btn btn-dark border btn-md"><?= $lang['view_all_events']?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Event -->

<!-- Start Blog 
    ============================================= -->
<div id="blog" class="blog-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Latest News</h2>
                    <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                        own additions education satisfied the perpetual. If he cause manor happy. Without farther
                        she exposed saw man led. Along on happy could cease green oh.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-items">

                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>24</span> Nov, 2018</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Objection happiness something</a>
                            </h4>
                            <p>
                                Sitting mistake towards his few country ask. You delighted two rapturous six
                                depending objection happiness something the partiality unaffected
                            </p>
                            <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Author</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>12</span> Sep, 2018</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Meant to learn of vexed</a>
                            </h4>
                            <p>
                                Sitting mistake towards his few country ask. You delighted two rapturous six
                                depending objection happiness something the partiality unaffected
                            </p>
                            <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Author</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>29</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Delightful up dissimilar</a>
                            </h4>
                            <p>
                                Sitting mistake towards his few country ask. You delighted two rapturous six
                                depending objection happiness something the partiality unaffected
                            </p>
                            <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Author</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->

                <div class="more-btn col-md-12 text-center" style="margin-top: 5%">
                    <a href="news.php" class="btn btn-dark border btn-md">View All News</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->


<!-- Start Contact Info
    ============================================= -->
<?php include_once "contact_section.php"; ?>
<!-- End Contact Info -->

<section class="reklam">
    <a href="https://recruitment.az/" target="_blank"> <img class="desktop" src="assets/img/recruitment_reklam_d.png"
            style="width:100%"></a>
    <a href="https://recruitment.az/" target="_blank"> <img class="mobile" src="assets/img/recruitment_reklam_m.png"
            style="width:100%"></a>
</section>

<script>
    let values_array = [
        ["transparency", "assets/img/transparency.png", "<?= $lang['transparency']?>",
            "<?= $lang['trans_cont']?>"
        ],
        ["innovation", "assets/img/innovation.png", "<?= $lang['innovation']?>",
            "<?= $lang['inno_cont']?>"
        ],
        ["collaboration", "assets/img/collaboration.png", "<?= $lang['collaboration']?>",
            "<?= $lang['collab_cont']?>"
        ],
        ["integrity", "assets/img/integrity.png", "<?= $lang['integrity']?>",
            "<?= $lang['integ_cont']?>"
        ],
        ["equality", "assets/img/equality.png", "<?= $lang['equality']?>",
            "<?= $lang['equ_cont']?>​"
        ],
        ["contribution", "assets/img/contribution.png", "<?= $lang['contribution']?>",
            "<?= $lang['contr_cont']?>"
        ],
        ["respect", "assets/img/respect.png", "<?= $lang['respect']?>",
            "<?= $lang['res_cont']?>"
        ]
    ];

    let values = document.querySelector(".repeated-html");

    function create_values([classname, icon, title, content], id) {
        let code = `<div class="${id == values_array.length-1 ? "row" : ""} col-md-${id != values_array.length-1 ? "6" : "12"} col-sm-${id != values_array.length-1 ? "6" : "12"} equal-height" style="${id == values_array.length-1 ? "display:flex;" : ""} ${id == values_array.length-1 ? "justify-content:center; width: auto;" : ""}">
                    <div class="item ${classname} ${id == values_array.length-1 ? "col-md-6 " : ""}">
                        <!-- style="background-image: url(assets/img/800x600.png);" -->

                        <a href="#" style = "height: 315px;display:flex;align-items:center; justify-content:center;">
                            <!-- <i class="flaticon-feature"></i> -->
                            <img class="icon" src='${icon}' style = "margin:15px;">
                            <div class="info">
                                <h4>${title} </h4>
                                <span>${content}</span>
                            </div>
                        </a>
                    </div>
                </div>`

        values.innerHTML += code;

    };
    for (var i = 0; i < values_array.length; i++) {
        create_values(values_array[i], i);
    }
</script>

<?php include_once "footer.php" ?>