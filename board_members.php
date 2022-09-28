<!-- Start Advisor Area
    ============================================= -->
    <section id="advisor" class="advisor-area bg-gray carousel-shadow default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Board of Directors</h2>
                    <p>2021-2022</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div
                    class="repeated-html-board-members advisor-items row text-center text-light">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Advisor Area -->
<script>
    let values_array = [
        ["assets/img/img_1 (1)-modified.webp", "Alim  Shenturk", "Alim  Shenturk", "EMBA 2017",
            "#", "#", "#", "#"
        ],
        ["assets/img/gunash_h.png", "Gunash Hajiyeva", "Gunash Hajiyeva", "BSCS 2021",
            "#", "#", "#", "#"
        ],
        ["assets/img/nigar_s.png", "Nigar Suleymanova", "Nigar Suleymanova", "EMBA 2016",
            "#", "#", "#", "#"
        ],
        ["assets/img/sabina_g.png", "Sabina Guliyeva", "Sabina Guliyeva", "BSE 2019",
            "#", "#", "#", "#"
        ],
        ["assets/img/tarlan_a.png", "Tarlan Abbasova", "Tarlan Abbasova", "MAEM 2019",
            "#", "#", "#", "#"
        ],
        ["assets/img/turkan_d.png", "Turkan Devrijova", "Turkan Devrijova", "MPP 2017",
            "#", "#", "#", "#"
        ]
    ];

    let values = document.querySelector(".repeated-html-board-members");

    function create_values([img, alt, name, professional, facebook, twitter, instagram, linkedin]) {
        let code = `<div class="advisor-item col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top: 15px; padding-bottom:15px">
                        <div class="info-box">
                            <div class="member_img">
                                <img style="padding: 20px; object-fit:cover;" src="${img}" alt="${alt}">
                            </div>
                            <div class="info-title">
                                <h4>${name}</h4>
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

        values.innerHTML += code;

    };
    for (var i = 0; i < values_array.length; i++) {
        create_values(values_array[i], i);
    }
</script>