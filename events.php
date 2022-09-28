<?php include_once "header.php"; ?>

<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(assets/img/gallery/ada_background.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $lang['eventsnb']?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> <?= $lang['home']?></a></li>
                    <li class="active"><i class="fas fa-images"></i><?= $lang['eventsnb']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Event
    ============================================= -->
    <section id="event" class="event-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2> <?= $lang['eventsnb']?></h2>
                    <!-- <p>
                        Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                        own additions education satisfied the perpetual. If he cause manor happy. Without farther
                        she exposed saw man led. Along on happy could cease green oh.
                    </p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event-items repeated-html"></div>
        </div>
    </div>
</section>
<!-- End Event -->

<style>
@media only screen and (min-width: 991px) {
    .info{
        width: 76rem;
    }
}

</style>

<script>
    let values_array = [
        [
        "assets/img/alumni_dinner_rashad_bayramov.webp", "27", "Jul, 2022", "Di'van", "27 <?= $lang['jul']?>, 2022", "7:00 PM", "<?= $lang['chayki_restaurant']?>",
        "<?= $lang['divan_content']?>",
        "assets/img/divan_yeni_sen.jpg", "15", "<?= $lang['jul']?>, 2022", "<?= $lang['new_you']?>", " 15 <?= $lang['jul']?>, 2022", "6:30 P.M.", "ADA Park",
        "<?= $lang['new_you_content']?>"
        ],
        [
        "assets/img/divan_new.jpg", "4", "<?= $lang['jul']?>, 2022", "Di'van", "4 <?= $lang['jul']?>, 2022", "18:30 AM", "ADA Park",
        "<?= $lang['what_is_happinness']?>",
        "assets/img/alumni_forum.jpg", "18", "<?= $lang['jun']?>, 2022", "Alumni Forum 2022", " 18 <?= $lang['jun']?>, 2022 <br>19 <?= $lang['jun']?>, 2022 ", "2:00 PM - 8:00 PM<br><?= $lang['full_day']?>", "<?= $lang['forum_loc']?><br><?= $lang['visit_to_aghdam']?>",
        "<?= $lang['alumni_forum']?>"
        ],
        [ 
        "assets/img/meditation.jpg", "11", "<?= $lang['jun']?>, 2022", "<?= $lang['meditation']?>", "11 <?= $lang['jun']?>, 2022", "11:00 AM", "ADA Park",
        "<?= $lang['meditation_content']?>",
        "assets/img/hafiz_pashayev.png", "26", "May, 2022", "Divan", "26 May, 2022", "5:00 PM", "<?= $lang['music_room']?>",
        "<?= $lang['music_content']?>"
        ],
        [
        "assets/img/divan.jpg", "25", "May, 2022", "Divan", " 25 May, 2022", "6:30 PM", "<?= $lang['uni']?>",
        "<?= $lang['divan_may']?>",
        "assets/img/divan_6month.jpg", "24", "May, 2022", "Divan - <?= $lang['months_later']?>", "24 May, 2022", "6:30 PM", "<?= $lang['music_room']?>",
        "<?= $lang['months_content']?>"
        ],
        [
        "assets/img/nadiye_murad.png", "17", "May, 2022", "Divan", "17 May, 2022", "6:45 PM", "<?= $lang['uni']?>",
        "<?= $lang['last_girl']?>",
        "assets/img/heyder_ataturk.png", "17", "May, 2022", "Divan", "17 May, 2022", "2:00 PM", "<?= $lang['woman_black_loc']?>",
        "<?= $lang['woman_in_black']?>"
        ],
        [
        "assets/img/hr_breakfast.jpg", "14", "May, 2022", "<?= $lang['hr_breakfast']?>", "14 May, 2022", "10:00 PM-12:00 PM", "<?= $lang['hr_loc']?>",
        "<?= $lang['hr_content']?>",
        "assets/img/aukaa.png", "11", "May, 2022", "<?= $lang['opening_ceremony']?>", "11 May, 2022", "7:00 PM & 8:30 PM", "<?= $lang['majlis_room']?>",
        "<?= $lang['opening_ceremony']?>"
        ],
        [
        "assets/img/dost_agency.jpg", "5", "May, 2022", "<?= $lang['dost']?>", "5 May, 2022", "6:30 PM", "<?= $lang['uni']?>",
        "<?= $lang['dost_content']?>",
        "assets/img/iftar_dinner.png", "28", "Apr, 2022", "<?= $lang['iftar']?>", "28 Apr, 2022", "7:00 PM", "Courtyard Mariott",
        "<?= $lang['iftar_content']?>"
        ],
        [
        "assets/img/thirsty_tuesday.png", "29", "<?= $lang['mar']?>, 2022", "<?= $lang['alumni_party']?>", "29 <?= $lang['mar']?>, 2022", "7:00 PM", "Crazy Chameleon",
        "<?= $lang['alumni_party_content']?>",
        "assets/img/meet_greet.jpg", "31", "<?= $lang['jan']?>, 2022", "<?= $lang['meet_greet']?>", "31 <?= $lang['jan']?>, 2022", "19:00 AM", "<?= $lang['uni']?>",
        "<?= $lang['majlis_room']?>"
        ]
    ];

    let values = document.querySelector(".repeated-html");

    function create_values([f_event_img, f_event_day, f_event_m_y, f_event_title, f_event_date, f_event_clock, f_event_map, f_event_content, 
                            s_event_img, s_event_day, s_event_m_y, s_event_title, s_event_date, s_event_clock, s_event_map, s_event_content]) {
        let code = `<!-- Single Item -->
                <div class="item horizontal col-md-12">
                    <div class="col-md-4 thumb bg-cover"
                        style="background-image: url(${f_event_img});background-size: contain; background-repeat: no-repeat;">
                        <div class="date">
                            <h4><span>${f_event_day}</span>${f_event_m_y}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h4>
                            <a href="#">${f_event_title}</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>${f_event_date}</li>
                                <li><i class="fas fa-clock"></i>${f_event_clock}</li>
                                <li><i class="fas fa-map"></i>${f_event_map}</li>
                            </ul>
                        </div>
                        <p>
                        ${f_event_content}                        
                        </p>
                        </p>
                     
                    </div>
                </div>
                <!-- Single Item -->

                <!-- Single Item -->
                <div class="item horizontal col-md-12">

                <div class="col-md-6 info">
                        <h4>
                            <a href="#">${s_event_title}</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>${s_event_date}</li>
                                <li><i class="fas fa-clock"></i>${s_event_clock}</li>
                                <li><i class="fas fa-map"></i>${s_event_map}</li>
                            </ul>
                        </div>
                        <p>
                        ${s_event_content}                        
                        </p>
                    </div>

                    <div class="col-md-4 thumb bg-cover"
                        style="background-image: url(${s_event_img});background-size: contain; background-repeat: no-repeat;">
                        <div class="date">
                            <h4><span>${s_event_day}</span>${s_event_m_y}</h4>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->`

        values.innerHTML += code;

    };
    for (var i = 0; i < values_array.length; i++) {
        create_values(values_array[i]);
    }
</script>

<?php include_once "footer.php" ?>