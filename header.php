<?php

session_start();

$titleNameKey = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$langs = array('az','en');
// echo "<pre>", print_r($_SERVER), "</pre>";
// die;

if(isset($_GET['lang']) && $_GET['lang']!=''){
    if(in_array($_GET['lang'], $langs)){       
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}

if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'en';
    
}

function lang_active($l){
    if($l== $_SESSION['lang']){
        echo 'class="active"';
    }else{
        echo "";
    }
}

// $lang_id=$_GET['lang'];

// if($lang_id=='az'){
//     $lang_id='';
// }
include('lang/'.$_SESSION['lang'].'.php');
// die("asd");

// dynamic title
$title = basename($_SERVER['PHP_SELF'], ".php");
// end dynamik title

// $language1 = ""; 
// $language2 = "";
// $language3 = "";
// $language4 = "";


                                     
    //                         switch ($_SESSION['lang']) {
    // case 'az':
    //     $language1 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
    //     $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
    //     $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='assets/images/russia.webp' alt='rus'/></a>";
    //     $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
    //     break;
    // case 'tr':
    //     $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
    //     $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
    //     $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='assets/images/russia.webp' alt='rus'/></a>";
    //     $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
    //     break;
    // case 'rus':
    //     $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/russia.webp' alt='rus'/></a>";
    //     $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
    //     $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
    //     $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
    //     break;
    // case 'en':
    //     $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
    //     $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
    //     $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='assets/images/russia.webp' alt='rus'/></a>";
    //     $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
    //     break;
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ADA Alumni Association">
    <meta property="og:image" content="/assets/img/ada-logo.jpeg" />

    <!-- ========== Page Title ========== -->

    <title>
        <?= $lang[$title];?>
    </title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/ada-logo.png" type="image/x-icon">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://adaalumni.az/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $lang[$title];?>">
    <meta property="og:description" content="ADA Alumni Association">
    <meta property="og:image" content="https://adaalumni.az/assets/img/ada-logo.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="adaalumni.az">
    <meta property="twitter:url" content="https://adaalumni.az/">
    <meta name="twitter:title" content="ADA Alumni Association | Home">
    <meta name="twitter:description" content="ADA Alumni Association">
    <meta name="twitter:image" content="https://adaalumni.az/assets/img/ada-logo.png">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->
    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css?<?php echo time() ?>" rel="stylesheet" />
    <link href="style.css?<?php echo time() ?>" rel="stylesheet">
    <link href="assets/css/responsive.css?<?php echo time() ?>" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e6a48f2a8c.js" crossorigin="anonymous"></script>
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <!-- ========== Bootsrap  ========== -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-9 col-sm-12 col-xs-12 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <!-- Have any question?    -->
                                <!-- <div style="  display: flex;
                                flex-direction: column;">
                                    <div> -->
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:+994124373235">(+994 12) 437 32 35</a>
                                <!-- </div>
                                    <div> -->
                            </li>
                            <li>
                                <i class="fa fa-fax" aria-hidden="true"></i>
                                <a href="tel:+994124373236">(+994 12) 437 32 36</a>
                                <!-- </div>

                                </div> -->


                            </li>
                            <!-- <li 
                            style="width: 60%; padding: 10px;"
                            > -->
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:info@adaalumni.az">info@adaalumni.az</a>
                            </li>
                            <!-- </li> -->

                        </ul>
                    </div>
                </div>
                <div class="simple-link col-sm-12 col-xs-12 text-right col-md-3">
                    <a class="in-simple-link" href="register.php"><i class="fas fa-edit"></i>
                        <?= $lang['registernb']?></a>
                    <div class="in-simple-link" style="display: inline-block">
                        <a href="login.php"><i class="fas fa-user"></i> <?= $lang['loginnb']?></a>
                    </div>
                    <!-- <li style="margin-top:30px">
                        <div class="sl-nav">
                            <ul>
                                <li>
                                    <a>Profile</a>
                                    <i class=" fa fa-angle-down" aria-hidden="true"></i>
                                    <div class="triangle"></div>
                                    <ul class="d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="edit-profile.php">
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span>Log out</span>
                                        </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <style>
        @media only screen and (min-width: 1024px) {
            header .container{
                display: flex;
                justify-content: space-between;
                align-items:center;
            }
            #mobile_lang{
                display: none;
            }
        }
        @media only screen and (max-width: 1024px) {
            #mobile_lang{
                display: block !important;
            }
            #desktop_lang{
                display: none;
            }
        }
    </style>
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/ada-alumni-logo-1.svg" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- <div style="display: flex; justify-content: space-evenly;"> -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li <?php echo ($titleNameKey == "index")?'class="active"':''; ?>>
                            <a href="index.php"><?= $lang['home']?></a>
                        </li>
                        <li <?php echo ($titleNameKey == "about")?'class="active"':''; ?>>
                            <a href="about.php"><?= $lang['aboutnb']?></a>
                        </li>
                        <li <?php echo ($titleNameKey == "board")?'class="active"':''; ?>>
                            <a href="board.php"><?= $lang['boardnb']?></a>
                        </li>
                        <li <?php echo ($titleNameKey == "membership")?'class="active"':''; ?>>
                            <a href="membership.php"><?= $lang['membershipnb']?></a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="courses.html">Courses Carousel One</a></li>
                                <li><a href="courses-2.html">Courses Grid One</a></li>
                                <li><a href="courses-3.html">Courses Grid Two</a></li>
                                <li><a href="courses-4.html">Courses Carousel Two</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul> -->
                        </li>
                        <!-- <li>
                            <a href="career.php" class="dropdown-toggle active"
                                data-toggle="dropdown"><?= $lang['careernb']?></a> -->
                        <!-- <ul class="dropdown-menu">
                                <li><a href="teachers.html">Advisor</a></li>
                                <li><a href="teachers-details.html">Advisor Details</a></li>
                            </ul> -->
                        <!-- </li> -->
                        <li <?php echo ($titleNameKey == "events")?'class="active"':''; ?>>
                            <a href="events.php"><?= $lang['eventsnb']?></a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="event.html">Event Mixed Colum</a></li>
                                <li><a href="event-2.html">Event Grid Colum</a></li>
                                <li><a href="event-3.html">Event Carousel</a></li>
                            </ul> -->
                        </li>
                        <!-- <li <?php echo ($titleNameKey == "news")?'class="active"':''; ?>>
                            <a href="news.php"><?= $lang['newsnb']?></a> -->
                        <!-- <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single-standard.html">Single Standard</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                            </ul> -->
                        <!-- </li> -->
                        <li <?php echo ($titleNameKey == "gallery")?'class="active"':''; ?>>
                            <a href="folder_structure.php"><?= $lang['gallerynb']?></a>
                        </li>
                        <li <?php echo ($titleNameKey == "contact")?'class="active"':''; ?>>
                            <a href="contact.php"><?= $lang['contactnb']?></a>
                        </li>
                        <!-- <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/azerbaijan.png" alt=""></a>
                        </li> -->
                        <!-- <li class="nav-wrapper d-inline-block d-inline"> -->
                        <li id="mobile_lang" class="language" style="display:none; margin-top:30px">
                            <!-- <li  style = "display:flex; justify-content:center;align-items:center"> -->
                            <!-- <div class="nav-wrapper d-inline-block d-inline"> -->
                            <div class="sl-nav">
                                <ul>
                                    <li>
                                        <b><?= $lang[$_SESSION["lang"]]?></b>
                                        <i class=" fa fa-angle-down" aria-hidden="true"></i>
                                        <div class="triangle"></div>
                                        <ul class="d-flex justify-content-center align-items-center">
                                            <li>
                                                <a href="?lang=az">
                                                    <img src="assets/img/azerbaijan.png" alt="Azerbaijan Flag">
                                                    <span <?php lang_active("az");?>><?= $lang['az_lang']?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?lang=en">
                                                    <i class="sl-flag flag-usa"></i>
                                                    <span <?php lang_active("en");?>><?= $lang['en_lang']?></span></li>
                                            </a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- </div> -->
                        </li>

                    </ul>

                </div><!-- /.navbar-collapse -->

                <div id="desktop_lang" class="language" style="margin-top: 8px">
                    <!-- <li  style = "display:flex; justify-content:center;align-items:center"> -->
                    <!-- <div class="nav-wrapper d-inline-block d-inline"> -->
                    <div class="sl-nav">
                        <ul>
                            <li>
                                <b><?= $lang[$_SESSION["lang"]]?></b>
                                <i class=" fa fa-angle-down" aria-hidden="true"></i>
                                <div class="triangle"></div>
                                <ul class="d-flex justify-content-center align-items-center">
                                    <li>
                                        <!-- <i class="sl-flag flag-az"> -->
                                        <!-- <div id="germany"></div> -->
                                        <a href="?lang=az">
                                            <img src="assets/img/azerbaijan.png" alt="">

                                            </i> <span <?php lang_active("az");?>><?= $lang['az_lang']?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?lang=en">
                                            <i class="sl-flag flag-usa">
                                                <!-- <div id="germany"></div> -->
                                            </i> <span <?php lang_active("en");?>><?= $lang['en_lang']?></span></li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- </div> -->

            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->