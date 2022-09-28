<?php include_once "header.php"; ?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Update Profile</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Students Profiel 
    ============================================= -->
    <div class="edit-profile adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 about-user">
                    <img src="assets/img/800x800.png" alt="Thumb">
                </div>
                <div class="col-md-4 update-info">
                    <h4>Update Current Info</h4>
                    <div class="row">
                        <form action="#" class="contact-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" placeholder="About Yourself"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" style="color: white;">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 update-pass">
                    <h4>Change Password</h4>
                    <div class="row">
                        <form action="#" class="contact-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Chose Password" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Retype Password" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Old Password" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" style="color: white;">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Students Profile -->

    <?php include_once "footer.php"; ?>
