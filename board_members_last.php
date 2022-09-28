<!-- Start Advisor Area
    ============================================= -->
<style>
    #advisor_last{
        display: none;
    }
</style>

<section id="advisor_last" class="advisor-area bg-gray carousel-shadow default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Board of Directors</h2>
                    <p>2020-2021</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="repeated-html-board-members-2 advisor-items row text-center text-light">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Advisor Area -->
<script>
    let values_array_1 = [
        ["assets/img/anastasia_lavrina.png", "Anastasia Lavrina", "Anastasia Lavrina", "MADIA 2016",
            "#", "#", "#", "#"
        ],
        ["assets/img/aytan_zeynalli.png", "Aytan Zeynalli", "Aytan Zeynalli", "MPP 2019",
            "#", "#", "#", "#"
        ],
        ["assets/img/azim_ashrafli.png", "Azim Ashrafli", "Azim Ashrafli", "BAPA 2019",
            "#", "#", "#", "#"
        ],
        ["assets/img/gunay_mammadova.png", "Gunay Mammadova", "Gunay Mammadova", "BAPA 2019",
            "#", "#", "#", "#"
        ],
        ["assets/img/kanan_azimov.png", "Kanan Azimov", "Kanan Azimov", "BAPA 2019",
            "#", "#", "#", "#"
        ],
        ["assets/img/nigar_suleymanova.png", "Nigar Suleymanova", "Nigar Suleymanova", "EMBA 2016",
            "#", "#", "#", "#"
        ],
        ["assets/img/noemi_s_rabbia.png", "Noemi S. Rabbia", "Noemi S. Rabbia", "MADIA 2015",
            "#", "#", "#", "#"
        ],
        ["assets/img/tofig_bayramov.png", "Tofig Bayramov", "Tofig Bayramov", "BBA 2018",
            "#", "#", "#", "#"
        ]
    ];

    let values_1 = document.querySelector(".repeated-html-board-members-2");

    function create_values_1([img, alt, name, professional, facebook, twitter, instagram, linkedin]) {
        let code_1 = `<div class="advisor-item col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-top: 15px; padding-bottom:15px">
                        <div class="info-box">
                            <div class="member_img">
                                <img style="padding: 20px; object-fit:cover;" src="${img}" alt="${alt}">
                            </div>
                            <div class="info-title">
                                <h4 style="height: 43px;">${name}</h4>
                                <span>${professional}</span>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="${facebook}"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="${twitter}"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="${instagram}"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="${linkedin}"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>`

        values_1.innerHTML += code_1;

    };
    for (var i = 0; i < values_array_1.length; i++) {
        create_values_1(values_array_1[i], i);
    }
</script>