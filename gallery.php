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

<!-- Start Portfolio
    ============================================= -->
<div id="portfolio" class="portfolio-area default-padding">
    <div class="container">
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <div class="mix-item-menu active-theme">
                        <!-- <button class="active" data-filter="*">All</button> -->
                        <button data-filter=".campus">Alumni Party</button>
                        <button data-filter=".teachers">Alumni Forum</button>
                        <!-- <button data-filter=".education">Education</button>
                        <button data-filter=".ceremony">Ceremony</button>
                        <button data-filter=".students">Students</button> -->
                    </div>
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
    
    function myFunction() {
        let div = document.getElementById("repeated_html");
        let code="";
        for (var i = 0; i < gal_items.length; i++) {
            code += `<div class="pf-item ${gal_items[i][1]} " style="">
                            <div class="item-effect">
                                <img src="${gal_items[i][0]}" alt="thumb" />
                                <div class="overlay">
                                    <a href="${gal_items[i][0]}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                    <!--<a href="#"><i class="fas fa-link"></i></a>-->
                                </div>
                            </div>
                        </div>`
        }
        console.log(code);
        div.innerHTML = code;

    }

    window.onload = function () {
        myFunction()
    };

</script>

<?php include_once "footer.php" ?>