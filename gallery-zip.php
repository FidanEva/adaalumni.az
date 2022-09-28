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
                    <li><a href="news.php">
                            <i class="fas fa-newspaper"></i><?= $lang['newsnb']?></a></li>
                    <li class="active">
                        <i class="fas fa-images"></i><?= $lang['gallerynb']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Portfolio
    ============================================= -->
<div id="portfolio" class="portfolio-area default-padding">
    <div class="container">
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <!-- <div class="mix-item-menu active-theme">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".campus">Campus</button>
                            <button data-filter=".teachers">Teachers</button>
                            <button data-filter=".education">Education</button>
                            <button data-filter=".ceremony">Ceremony</button>
                            <button data-filter=".students">Students</button>
                        </div> -->
                    <!-- End Mixitup Nav-->

                    <div class="row magnific-mix-gallery masonary text-light">
                        <div id="portfolio-grid" class="portfolio-items col-4 repeated_html"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio -->

<script>
    let gal_items = [
        ["assets/img/gallery/img_1.webp"],
        ["assets/img/gallery/img_2.webp"],
        ["assets/img/gallery/img_3.webp"],
        ["assets/img/gallery/img_4.webp"],
        ["assets/img/gallery/img_5.jpeg"],
        ["assets/img/gallery/img_6.jpeg"],
        ["assets/img/gallery/img_7.jpeg"],
        ["assets/img/gallery/img_8.jpeg"],
        ["assets/img/gallery/img_9.jpeg"],
        ["assets/img/gallery/img_10.jpeg"],
        ["assets/img/gallery/img_11.jpeg"],
        ["assets/img/gallery/img_12.jpeg"],
        ["assets/img/gallery/img_13.jpeg"],
        ["assets/img/gallery/img_14.jpeg"],
        ["assets/img/gallery/img_15.jpeg"],
        ["assets/img/gallery/img_16.jpeg"],
        ["assets/img/gallery/img_17.jpeg"],
        ["assets/img/gallery/img_18.jpeg"],
        ["assets/img/gallery/img_19.jpeg"],
        ["assets/img/gallery/img_20.jpeg"],
        ["assets/img/gallery/img_21.jpeg"],
        ["assets/img/gallery/img_22.jpeg"],
        ["assets/img/gallery/img_23.jpeg"],
        ["assets/img/gallery/img_24.jpeg"],
        ["assets/img/gallery/img_27.jpeg"],
        ["assets/img/gallery/img_26.jpeg"],
        ["assets/img/gallery/img_25.jpeg"],
        ["assets/img/gallery/img_28.jpeg"]
    ]
    let div = document.querySelector(".repeated_html");

    function create_item(img) {
        let code = `                                
            <div class="pf-item ceremony students " style="">
                                    <div class="item-effect">
                                        <img src="${img}" alt="thumb" />
                                        <div class="overlay">
                                            <a href="${img}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <!--<a href="#"><i class="fas fa-link"></i></a>-->
                                        </div>
                                    </div>
                                </div>`
        div.innerHTML += code;
    }

    for (var i = 0; i < gal_items.length; i++) {
        create_item(gal_items[i]);
    }
</script>

<?php include_once "footer.php" ?>

