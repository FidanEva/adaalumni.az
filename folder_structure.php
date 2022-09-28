<?php include_once "header.php"; ?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(assets/img/gallery/ada_background.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $lang['gallerynb']?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> <?= $lang['home']?></a></li>
                    <li class="active"><i class="fas fa-images"></i><?= $lang['gallerynb']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<style>
    body {
        background: #bed4ff4f;
    }

    .nav_folders {
        display: flex;
        margin-bottom: 30px;
        border-top: 1px #9ea3a754 solid;
        border-bottom: 1px #9ea3a754 solid;
    }

    .nav_folders>p,
    .nav_folders>i {
        margin: 10px;
    }

    .nav_folders>i {
        display: flex;
        align-items: center;
    }

    .folder-outside {
        margin: 60px;
    }

    .folder_name {
        z-index: 2;
        width: max-content;
        color: #002147;
        font-weight: 600;
        margin-top: 40%;
    }

    /* this is for the back flap of the folder */
    .folder {
        -webkit-perspective: 500px;
        perspective: 500px;
        width: 18rem;
        height: 100px;
        background: #ffd480;
        position: relative;
        border-top-right-radius: 5px;
        cursor: pointer;
        -webkit-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    /* this is for the folder's tab */
    .folder::before {
        width: 80px;
        height: 20px;
        content: '';
        background: #ffd480;
        position: absolute;
        top: -20px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    /* this is for the folder's front flap */
    .folder::after {
        width: 100%;
        height: 100%;
        position: absolute;
        content: '';
        background: #ffcb66;
        top: 40px;
        box-shadow: 0 0 20px 2px rgba(0, 0, 0, 0.3);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        /* the transform property rotates the front flap of the folder a bit t0 make it look 3D */
        -webkit-transform: rotateX(-10deg);
        transform: rotateX(-10deg);
        -webkit-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    /* this is for the piece of paper inside the folder */
    .folder-inside {
        width: 16.5rem;
        height: 100%;
        position: absolute;
        background: #fff;
        top: 20px;
        left: 10px;
        box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.05);
        -webkit-transform: rotate(-1deg);
        transform: rotate(-1deg);
        border: 1px solid #ddd;
        -webkit-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    /* this is for the lines on the paper */
    .folder-inside::before {
        content: '';
        /* we're going to use linear gradients to create the lines */
        background: -webkit-repeating-linear-gradient(145deg, #ffffff, #ffffff 10px, #333333 7px, #333333 20px);
        background: repeating-linear-gradient(0deg, #ffffff, #ffffff 10px, #333333 10px, #333333 20px);
        position: absolute;
        top: -1.3rem;
        left: 3rem;
        width: 11rem;
        height: 15rem;
        color: #343434;
        font-size: 60px;
        line-height: 30px;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0.15;
    }

    /* finally let's get this folder to rotate when we hover on it */
    .folder:hover {
        /* -webkit-transform: translate(-50%, -52%);
            transform: translate(-50%, -52%); */
    }

    .folder:hover::after {
        -webkit-transform: rotateX(-15deg);
        transform: rotateX(-15deg);
    }

    .folder:hover .folder-inside {
        -webkit-transform: rotate(-7deg) translateY(-15%);
        transform: rotate(-7deg) translateY(-15%);
    }

    @media only screen and (max-width: 425px) {
        .row {
            justify-content: space-between;
        }

        .folder-outside {
            margin: 0;
            margin-bottom: 50px;
        }

        .folder {
            width: 10rem;
            height: 5rem;
        }

        .folder:before {
            width: 35%;
            height: 20%;
            top: -20%;
        }

        .folder-inside {
            width: 80%;
            top: 15%;
        }

        .folder-inside:before {
            top: -10%;
            left: 20%;
            width: 75%;
            height: 160%;
        }

        .folder:after {
            top: 40%;
        }

        .folder-div {
            margin: auto 10px;
            padding: 45px;
        }
    }

    @media only screen and (max-width: 767.5px) {
        .nav_folders {
            justify-content: center;
        }
    }

    @media only screen and (max-width: 767px) and (min-width: 425px) {
        .folder-outside {
            margin: 0;
            margin-bottom: 100px;
        }
    }

    @media only screen and (max-width: 991.5px) and (min-width: 767px) {
        .nav_folders {
            margin-left: 60px;
        }
    }

    @media only screen and (min-width: 991.5px) {
        .divide_div {
            margin-left: -50px;
        }
    }

    /* hover over the folder to see the effect in action */
</style>
<div class="container" style="margin: 100px auto">

    <div class="nav_folders" onclick = "document.getElementById('portfolio').style.display = 'none'">
        <p id="folders">All Folders</p>
        <i id="angle" class="fa-solid fa-angle-right" style="display:none"></i>
        <p id="party_title" style="display:none">Alumni Party</p>
        <p id="forum_title" style="display:none">Alumni Forum</p>
        <p id="dinner_title" style="display:none">Alumni Dinner</p>
        <p id="iftar_title" style="display:none">Alumni İftar</p>
    </div>

    <div id="row" class="row" style="display: flex; justify-content: center;">
        <div class="divide_div">
            <div id="party_folder" class="folder-outside col-md-3 col-sm-6">
                <div class="folder">
                    <div class="folder-inside"></div>
                </div>

                <p class="folder_name">
                    Alumni Party
                </p>
            </div>
            <div id="forum_folder" class="folder-outside col-md-3 col-sm-6">
                <div class="folder">
                    <div class="folder-inside"></div>
                </div>

                <p class="folder_name">
                    Alumni Forum
                </p>
            </div>
        </div>
        <div class="divide_div">
            <div id="dinner_folder" class="folder-outside col-md-3 col-sm-6">
                <div class="folder">
                    <div class="folder-inside"></div>
                </div>

                <p class="folder_name">
                    Alumni Dinner
                </p>
            </div>
            <div id="iftar_folder" class="folder-outside col-md-3 col-sm-6">
                <div class="folder">
                    <div class="folder-inside"></div>
                </div>

                <p class="folder_name">
                    Alumni İftar
                </p>
            </div>
        </div>
    </div>

    <div id="portfolio" class="portfolio-area" style = "display: none">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <!-- <div class="mix-item-menu active-theme"> -->
                            <!-- <button class="active" data-filter="*">All</button> -->
                            <!-- <button data-filter=".campus">Alumni Party</button>
                            <button data-filter=".teachers">Alumni Forum</button> -->
                            <!-- <button data-filter=".education">Education</button>
                        <button data-filter=".ceremony">Ceremony</button>
                        <button data-filter=".students">Students</button> -->
                        <!-- </div> -->
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-4 repeated_html"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // if (document.getElementById("row").style.display = "none"){
    //     document.getElementById("folders").style.cursor = "pointer";
    // }

    
    let party_items = [
        ["assets/img/gallery/img_1.webp", "campus"],
        ["assets/img/gallery/img_2.webp", "campus"],
        ["assets/img/gallery/img_3.webp", "campus"],
        ["assets/img/gallery/img_4.webp", "campus"],
        ["assets/img/gallery/img_5.jpeg", "campus"],
        ["assets/img/gallery/img_6.jpeg", "campus"],
        ["assets/img/gallery/img_7.jpeg", "campus"],
        ["assets/img/gallery/img_8.jpeg", "campus"],
        ["assets/img/gallery/img_9.jpeg", "campus"],
        ["assets/img/gallery/img_10.jpeg", "campus"],
        ["assets/img/gallery/img_11.jpeg", "campus"],
        ["assets/img/gallery/img_12.jpeg", "campus"],
        ["assets/img/gallery/img_13.jpeg", "campus"],
        ["assets/img/gallery/img_14.jpeg", "campus"],
        ["assets/img/gallery/img_15.jpeg", "campus"],
        ["assets/img/gallery/img_16.jpeg", "campus"],
        ["assets/img/gallery/img_17.jpeg", "campus"],
        ["assets/img/gallery/img_18.jpeg", "campus"],
        ["assets/img/gallery/img_19.jpeg", "campus"],
        ["assets/img/gallery/img_20.jpeg", "campus"],
        ["assets/img/gallery/img_21.jpeg", "campus"],
        ["assets/img/gallery/img_22.jpeg", "campus"],
        ["assets/img/gallery/img_23.jpeg", "campus"],
        ["assets/img/gallery/img_24.jpeg", "campus"],
        ["assets/img/gallery/img_27.jpeg", "campus"],
        ["assets/img/gallery/img_26.jpeg", "campus"],
        ["assets/img/gallery/img_25.jpeg", "campus"],
        ["assets/img/gallery/img_28.jpeg", "campus"]
    ]

    let dinner_items = [
        ["assets/img/gallery/dinner-3.webp", "campus"],
        ["assets/img/gallery/dinner-4.webp", "campus"],
        ["assets/img/gallery/dinner-5.webp", "campus"],
        ["assets/img/gallery/dinner-6.webp", "campus"],
        ["assets/img/gallery/dinner-7.webp", "campus"],
        ["assets/img/gallery/dinner-8.webp", "campus"],
        ["assets/img/gallery/dinner-8.webp", "campus"],
        ["assets/img/gallery/dinner-9.webp", "campus"],
        ["assets/img/gallery/dinner-10.webp", "campus"],
        ["assets/img/gallery/dinner-11.webp", "campus"],
        ["assets/img/gallery/dinner-12.webp", "campus"],
        ["assets/img/gallery/dinner-13.webp", "campus"],
        ["assets/img/gallery/dinner-14.webp", "campus"],
        ["assets/img/gallery/dinner-15.webp", "campus"],
        ["assets/img/gallery/dinner-16.webp", "campus"],
        ["assets/img/gallery/dinner-17.webp", "campus"],
        ["assets/img/gallery/dinner-18.webp", "campus"],
        ["assets/img/gallery/dinner-19.webp", "campus"],
        ["assets/img/gallery/dinner-20.webp", "campus"],
        ["assets/img/gallery/dinner-21.webp", "campus"],
        ["assets/img/gallery/dinner-22.webp", "campus"],
        ["assets/img/gallery/dinner-23.webp", "campus"],
        ["assets/img/gallery/dinner-24.webp", "campus"],
        ["assets/img/gallery/dinner-25.webp", "campus"],
        ["assets/img/gallery/dinner-26.webp", "campus"],
        ["assets/img/gallery/dinner-27.webp", "campus"],
        ["assets/img/gallery/dinner-28.webp", "campus"],
        ["assets/img/gallery/dinner-29.webp", "campus"],
        ["assets/img/gallery/dinner-30.webp", "campus"],
        ["assets/img/gallery/dinner-31.webp", "campus"],
        ["assets/img/gallery/dinner-32.webp", "campus"],
        ["assets/img/gallery/dinner-33.webp", "campus"],
        ["assets/img/gallery/dinner-34.webp", "campus"],
        ["assets/img/gallery/dinner-35.webp", "campus"],
        ["assets/img/gallery/dinner-36.webp", "campus"],
        ["assets/img/gallery/dinner-37.webp", "campus"],
        ["assets/img/gallery/dinner-38.webp", "campus"],
        ["assets/img/gallery/dinner-39.webp", "campus"],
        ["assets/img/gallery/dinner-40.webp", "campus"],
        ["assets/img/gallery/dinner-41.webp", "campus"],
        ["assets/img/gallery/dinner-42.webp", "campus"],
        ["assets/img/gallery/dinner-1.webp", "campus"],
        ["assets/img/gallery/dinner-2.webp", "campus"]
    ]

    function myFunction(img_array) {
        document.getElementById("portfolio").style.display = "block"
        let div = document.getElementById("portfolio-grid");
        let code = "";
        for (var i = 0; i < img_array.length; i++) {
            code += `<div class="pf-item ${img_array[i][1]} students " style="">
                            <div class="item-effect">
                                <img src="${img_array[i][0]}" alt="thumb" />
                                <div class="overlay">
                                    <a href="${img_array[i][0]}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                    <!--<a href="#"><i class="fas fa-link"></i></a>-->
                                </div>
                            </div>
                        </div>`
        }
        console.log(code);
        div.innerHTML = code;

    }

    // document.getElementById("party_folder").onclick = function () {
        // myFunction()
    // };

    function all_folders(title) {
        document.getElementById("row").style.display = "flex";
        document.getElementById("angle").style.display = "none";
        document.getElementById(title).style.display = "none";
        // document.getElementById("forum_title").style.display = "none";     
        // document.getElementById("dinner_title").style.display = "none";     
        // document.getElementById("bla_title").style.display = "none";     
    };

    function folder_title(folder_name, title_name) {
        document.getElementById("row").style.display = "none";
        document.getElementById("angle").style.display = "flex";
        document.getElementById(title_name).style.display = "block";
        document.getElementById("folders").style.cursor = "pointer";
        document.getElementById("folders").onclick = function () {
            all_folders(title_name)
        };
    }

    document.getElementById("party_folder").onclick = function () {
        folder_title("party_folder", "party_title")
        myFunction(party_items)
    };
    document.getElementById("folders").onclick = function () {
        all_folders("party_title")
    };

    document.getElementById("forum_folder").onclick = function () {
        folder_title("forum_folder", "forum_title")
    };
    document.getElementById("folders").onclick = function () {
        all_folders("forum_title")
    };

    document.getElementById("dinner_folder").onclick = function () {
        folder_title("dinner_folder", "dinner_title")
        myFunction(dinner_items)
    };
    document.getElementById("folders").onclick = function () {
        all_folders("dinner_title")
    };

    document.getElementById("iftar_folder").onclick = function () {
        folder_title("iftar_folder", "iftar_title")
    };
    document.getElementById("folders").onclick = function () {
        all_folders("iftar_title")
    };

    // function party(){
    //     document.getElementById("row").style.display = "none";
    //     document.getElementById("angle").style.display = "flex";
    //     document.getElementById("party_title").style.display = "block";     
    // };
    // document.getElementById("party_folder").onclick = function() {party()};

    // function forum(){
    //     document.getElementById("row").style.display = "none";
    //     document.getElementById("angle").style.display = "flex";
    //     document.getElementById("forum_title").style.display = "block";     
    // };
    // document.getElementById("forum_folder").onclick = function() {forum()};

    // function dinner(){
    //     document.getElementById("row").style.display = "none";
    //     document.getElementById("angle").style.display = "flex";
    //     document.getElementById("dinner_title").style.display = "block";     
    // };
    // document.getElementById("dinner_folder").onclick = function() {dinner()};

    // function bla(){
    //     document.getElementById("row").style.display = "none";
    //     document.getElementById("angle").style.display = "flex";
    //     document.getElementById("bla_title").style.display = "block";     
    // };
    // document.getElementById("bla_folder").onclick = function() {bla()};

</script>
<?php include_once "footer.php" ?>