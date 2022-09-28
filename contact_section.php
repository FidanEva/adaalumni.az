<div class="contact-info-area default-padding" id="contact">
    <div class="container d-md-flex">
        <div class="row">
            <!-- Start Contact Info -->
            <div class="contact-info">
                <div class="col-md-4 col-sm-4">
                    <div class="item" style="height:26.5rem">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info">
                            <h4><?= $lang['address']?></h4>
                            <!-- <span>9RVX+RQ Baku</span> -->
                            <a href="https://www.google.com/maps/place/ADA+University/@40.394599,49.8471913,17z/data=!3m1!4b1!4m5!3m4!1s0x40307d6ee857fa47:0x67993e393222e8e2!8m2!3d40.394599!4d49.84938"
                                target="_blank">Ahmadbey Aghaoglu str. 61 Baku, 1008</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">

                    <div class="item" style="height:26.5rem">
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="info">
                            <h4><?= $lang['call']?></h4>
                            <a href="tel:+994124373235">(+994 12) 437 32 35</a>
                            <br>
                            <a href="tel:+994124373236">(+994 12) 437 32 36</a>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item" style="height:26.5rem">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h4><?= $lang['mail_us']?></h4>
                            <a href="mailto:info@adaalumni.az">info@adaalumni.az</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Info -->

            <div class="seperator col-md-12">
                <span class="border"></span>
            </div>

            <!-- Start Maps & Contact Form -->
            <div class="maps-form">
                <div class="col-md-6 maps">
                    <h3> <?= $lang['location']?></h3>
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12154.572944782069!2d49.84938!3d40.394599!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67993e393222e8e2!2sADA%20University!5e0!3m2!1sen!2s!4v1649744862972!5m2!1sen!2s"></iframe>
                    </div>
                </div>
                <div class="col-md-6 form">
                    <div class="heading">
                        <h3><?= $lang['ban_contact']?></h3>
                        <p><?= $lang['sugg_comm']?>
                        </p>
                    </div>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="<?= $lang['name']?>"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email"
                                        placeholder="<?= $lang['email']?>*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone"
                                        placeholder="<?= $lang['phone']?>" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="<?= $lang['message']?>*"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    <?= $lang['send']?> <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Maps & Contact Form -->

        </div>
    </div>
</div>