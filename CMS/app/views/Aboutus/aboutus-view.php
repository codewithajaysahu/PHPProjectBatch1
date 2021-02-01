<!--------------------------------------------------header image-------------------------------------------------->

<section>
    <div class="container-fulid">
        <img src="assets/frontend/img/bg_1.jpg" alt="Snow" style="width:100%; height: 500px;  opacity: .4;
        background:linear-gradient(to right, #d6471c 0%, #d37a32 0%, #f64316 100%);">
        <div id="centered">
            <h1>About Us</h1>
        </div>
        <div class="centered"><a href="index.html">Home<span><a href="about.html">/About</a></span></a></div>
    </div>
</section>

<!------------------------------------------------header image end------------------------------------------------------------------------>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <br>
                <div class="aboutpart">
                    <h2>Free College Stablished Since 1960</h2>
                    <br>
                    <div id="accordion">
<?php while($content = mysqli_fetch_assoc($contents)) {

 ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $content['id']; ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $content['id']; ?>" aria-expanded="false"
                                            aria-controls="collapse<?php echo $content['id']; ?>">
                                        <?php echo $content['title']; ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse<?php echo $content['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $content['id']; ?>" data-parent="#accordion">
                                <div class="card-body">
                                    <?php echo $content['content']; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>





                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="aboutpart1 responsive">
                    <image class="img-fulid" src="assets/frontend/img/about.jpg" style="width: 500px; height: 600px;"></image>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------------------------------------end---------------------------------------------------------------------->
<br><br>
<!--**************************three extra header div statrs****************************-->
<section class="header-extradiv">
    <div class="container">
        <div class="row">
            <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-desktop" style="color: coral;" aria-hidden="true"></i></a>
                <h2>Free Collage Features</h2>
                <p>A startlingly low graduation rate is never a good sign. The goal of college is to obtain a degree, so it
                    makes sense that a high rate of failure and/or drop-out is a red flag. </p>
            </div>

            <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-trophy" style="color: coral;" aria-hidden="true"></i></a>
                <h2>Free Collage Team</h2>
                <p>The voters went for national champions galore -- undefeated champions, one-loss champions and, at the very
                    top, rarely tested champions. But not every team here finished No. 1. The highest-ranked one-loss team, at
                    No. 31, is remembered for the game it didn't win.


                </p>
            </div>

            <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-magic" style="color: coral;" aria-hidden="true"></i></a>
                <h2>Free Collage Purpuse</h2>
                <p>Ignite desire Education number one online learning platfrom for all computer science students and every
                    leaner,
                    ignite give you more opportunity for great learning and great skiles

                </p>
            </div>
        </div>
    </div>
</section>
<!--**************************three extra header div ends****************************-->
<br>
<br>
<br>
<!----------------------------------------testimonal section start------------------------------------------------------------------------>
<section>
    <div clsss="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="testimonial">
                    <h1 class="text-center" style="font-weight: 900;">Student Says About Us</h1><br>
                    <p class="text-center">Separated they live in. A small river named Duden flows by their place and supplies
                        it with the necessary regelialia. <br>It is a paradisematic country</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonials">
                <div class="training-title">
                    <h4 class="aoe-title">Testimonials</h4>
                    <div class="line"></div>
                </div>

                <div class="col-center m-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box"><img
                                        src="https://www.eharmony.com/dating-advice/wp-content/uploads/images/goodsmile.jpg" alt=""></div>
                                <h4 class="carousel-title">Amazing Trainer!</h4>
                                <div class="carousel-line"></div>

                                <p class="testimonial"><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu
                                    sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada
                                    ante. aliquet.</p>
                                <p class="overview"><b>- Paula Wilson</b></p>
                                <h6 class="company-name">Nations Trust Bank</h6>
                            </div>

                            <div class="item carousel-item">
                                <div class="img-box"><img
                                        src="https://www.eharmony.com/dating-advice/wp-content/uploads/images/goodsmile.jpg" alt=""></div>
                                <h4 class="carousel-title">Amazing Trainer!</h4>
                                <div class="carousel-line"></div>

                                <p class="testimonial"><span>"</span> Vestibulum quis quam ut magna consequat faucibus. Pellentesque
                                    eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at
                                    mattis. facilisis gravida odio.</p>
                                <p class="overview"><b>- Antonio Moreno</b></p>
                                <h6 class="company-name">Nations Trust Bank</h6>
                            </div>

                            <div class="item carousel-item">
                                <div class="img-box"><img
                                        src="https://www.eharmony.com/dating-advice/wp-content/uploads/images/goodsmile.jpg" alt=""></div>
                                <h4 class="carousel-title">Amazing Trainer!</h4>
                                <div class="carousel-line"></div>

                                <p class="testimonial"><span>"</span> Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id
                                    lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt.
                                    Phasellus. </p>
                                <p class="overview"><b>- Michael Holz</b></p>
                                <h6 class="company-name">Nations Trust Bank</h6>
                            </div>

                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel"
                           data-slide="prev"><span>Prev</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel"
                           data-slide="next"><span>Next</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="row bg-white">
    <div class="col-sm-12">
        </br>
        <div class="row">
            <div class="col-sm-3">
                <a href="img/image_1.jpg"> <img src="assets/frontend/img/image_1.jpg" height="350px" width="400px" /></a>
            </div>
            <div class="col-sm-3">
                <a href="img/image_2.jpg"><img src="assets/frontend/img/image_2.jpg" height="350px" width="400px" /></a>
            </div>
            <div class="col-sm-3">
                <a href="img/image_3.jpg"><img src="assets/frontend/img/image_3.jpg" height="350px" width="400px" /></a>
            </div>
            <div class="col-sm-3">
                <a href="img/image_4.jpg"><img src="assets/frontend/img/image_4.jpg" height="350px" width="400px" /></a>
            </div>
        </div></br>
    </div>

</div>

<!-------------------------------------------our team starts------------------------------->

<!-- Team -->
<section id="team" class="pb-5">
    <div class="container pt-5" style="font-size: 1vw;">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid"
                                            src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image">
                                    </p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is
                                        basic card with image on top, title, description and button.This is basic card with image on top,
                                        title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.twitter.com/">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/skype">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid"
                                            src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image">
                                    </p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is
                                        basic card with image on top, title, description and button.This is basic card with image on top,
                                        title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.twitter.com/">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid"
                                            src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image">
                                    </p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is
                                        basic card with image on top, title, description and button.This is basic card with image on top,
                                        title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.twitter.com/">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->


        </div>
    </div>
</section>
<!-- Team -->
<!--------------------------------------our team ends--------------------------------------->