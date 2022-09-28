
<?php 
    if(isset($_GET['action'])){
        echo "
        <script>
            let action = '$_GET[action]';
        </script>
        ";
    } else{
        echo "
        <script>
            let action = '';
        </script>
        ";
    }
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    @media only screen and (max-width: 991px) {
        .login-social {
            display: flex;
            justify-content: center;
        }

        .login-area img {
            width: 24%;
        }
    }
</style>

<!-- Start Login 
    ============================================= -->
<div class="login-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="/inc/add.php?type=1" id="register-form" class="white-popup-block" method="POST">
                    <div class="col-md-2 login-social">
                        <img src="assets/img/ada-logo.png" class="logo" alt="Logo">

                        <!-- <h4>Register with social</h4>
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul> -->
                    </div>
                    <div class="col-md-10 login-custom">
                        <h4><?= $lang['become_a_member']?></h4>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input required class="form-control" placeholder="<?= $lang['first_name']?>*" type="text"
                                        name="firstName">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input required class="form-control" placeholder="<?= $lang['last_name']?>*" type="text"
                                        name="lastName">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input required class="form-control" placeholder="<?= $lang['date_of_birth']?>*"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name="dateOfBirth">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input required class="form-control" placeholder="<?= $lang['personal_email']?>*" type="email"
                                        name="pEmail">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" placeholder="<?= $lang['ada_email']?>" type="email" name="uEmail">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <!-- <input required class="form-control" placeholder="Graduation Year*"
                                        onfocus="(this.type='date')"> -->

                                    <select id="gYear" style="height:30px;" name="gYear">
                                        <!-- style="heigth: auto; display:flex !important; flex-direction:column !important;"> -->
                                        <option selected="true" disabled="disabled" value=""><?= $lang['graduation_year']?>*</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input required class="form-control" placeholder="<?= $lang['faculty']?>*" type="text"
                                        name="faculty">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input required class="form-control" placeholder="<?= $lang['specialty']?>*" type="text"
                                        name="spesiality">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <!-- <input required class="form-control" placeholder="Do you work?*" type="text"> -->

                                    <select id="workselect" name="workStatus">
                                        <!-- style="heigth: auto; display:flex !important; flex-direction:column !important;"> -->
                                        <option selected="true" disabled value="123"><?= $lang['do_you_work']?>?*</option>
                                        <option value="1"><?= $lang['yes']?></option>
                                        <option value="0"><?= $lang['no']?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 com">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" placeholder="<?= $lang['company']?>*" type="text" name="company">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 pos">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" placeholder="<?= $lang['position']?>*" type="text" name="position">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" style="color: white">
                                    <?= $lang['sign_up']?>
                                </button>
                            </div>
                        </div>
                        <!-- <p class="link-bottom">Are you a member? <a href="#">Login now</a></p> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Login Area -->

<style>
    .nice-select.open .list {
        height: 140px;
        display: flex;
        flex-direction: column;
    }
</style>

<script>
    console.log(action);
    $(".com, .pos").hide();
    $(document).ready(function () {
        if (action == "ok") {
            swal("Congratulations!",
                "Your registration to the ADA University Alumni Association has been successfully completed.",
                "success");
        }
        $("#workselect").on('change', function () {
            let val = $("#workselect").val();
            if (val == 1) {
                $(".com, .pos").show();
                $(".com input, .pos input").attr("required");
            } else {
                $(".com, .pos").hide();
                $(".com input, .pos input").removeAttr("required");
            }

        });
    })
</script>
