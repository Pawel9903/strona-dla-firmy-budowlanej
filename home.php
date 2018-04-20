<?php
include_once ('template/head.php');
include_once('template/jumbotron.php');
?>

<section class="c-welcome-page animate">
    <div class="container">
                <h5 class="c-welcome-page-header">Oferujemy usługi ogólnobudowlane</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros.</p>
    </div>

  <!--  <div class="container">
        <h5 class="c-welcome-page-header">Statystyki</h5>
        <div class="row">

            <div class="col-md-4 c-stat">
                <h4>Doświadczenie:</h4>
                <p class="c-stat-item">10</p>
            </div>
            <div class="col-md-4 c-stat">
                <h4>Wykonane projekty:</h4>
                <p class="c-stat-item" >200</p>
            </div>
            <div class="col-md-4 c-stat">
                <h4>Zadowoleni klienci:</h4>
                <p class="c-stat-item" >200</p>
            </div>

        </div>
    </div> -->

</section>

<section class="bg-light">
    <div class="container">
        <h5 class="c-welcome-page-header">Nasze usługi</h5>
        <div class="row text-center c-content-services">
            <div id="service1" class="c-item-services c-active-services col-4">
                <a>
                    <i class="d-block c-icon-services fas fa-building"></i>
                    <span class="d-block c-description-services">Budowa</span>
                </a>
            </div>
            <div id="service2" class="c-item-services col-4">
                <a>
                    <i class="d-block c-icon-services fas fa-angle-double-down"></i>
                    <span class="d-block c-description-services">Roboty ziemne</span>
                </a>
            </div>
            <div id="service3" class="c-item-services col-4">
                <a>
                    <i class="d-block c-icon-services fas fa-truck"></i>
                    <span class="d-block c-description-services">Wypożyczanie sprzętu</span>
                </a>
            </div>
                <div class="service service1 c-active-services">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <h5 class="col-12">Budowa budynków</h5>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="service-image img-fluid" src="/images/background/background2.jpg">
                        </div>
                    </div>
                </div>

                <div class="service service2">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <h5 class="col-12">Roboty Ziemne</h5>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="service-image img-fluid" src="/images/background/background1.jpg">
                        </div>
                    </div>
                </div>

                <div class="service service3">
                    <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <h5 class="col-12">Wypożyczanie sprzętu</h5>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus eu leo varius ultricies quis ut lectus. Mauris urna neque, tempus sagittis egestas sit amet, semper a felis. Mauris blandit in odio at hendrerit. Morbi malesuada magna faucibus neque rutrum, at scelerisque dui tincidunt. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum. Nullam a vehicula eros. Vestibulum cursus rutrum enim, tempus dictum tortor gravida sit amet. Suspendisse dolor ante, posuere et magna a, pretium sodales ipsum.</p>
                            </div>
                        <div class="col-md-5">
                            <img class="service-image img-fluid" src="/images/background/background3.jpg">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="bg-light animate">
    <h5 class="c-welcome-page-header col-md-10 offset-md-1">Nasze Realizacje</h5>
    <div class="container">
        <div class="row c-project">
            <a href="gallery.php?id=1" class="c-project-box c-project-left col-md-6">
                <img class="img-fluid" src="images/background/background7.jpg">
                <div class="c-project-text">
                    <h4>Najnowszy projekt</h4>
                    <h4><?php echo $projects[0]->name ;?></h4>
                    <h4><?php echo $projects[0]->investor ;?></h4>
                    <h4><?php echo $projects[0]->year ;?></h4>
                    <p><?php echo substr($projects[0]->description,0,50)."..." ;?></p>                </div>
            </a>
            <div class="c-project-box c-project-right col-md-6 row">
                    <a href="gallery.php?id=2" class="c-project-right-image col-md-6 ">
                        <img class="img-fluid" src="images/background/background1.jpg">
                        <div class="c-project-text">
                            <h4><?php echo $projects[1]->name ;?></h4>
                            <h4><?php echo $projects[1]->investor ;?></h4>
                            <h4><?php echo $projects[1]->year ;?></h4>
                            <p><?php echo substr($projects[1]->description,0,50)."..." ;?></p>
                        </div>
                    </a>
                    <a href="gallery.php?id=2" class="c-project-right-image col-md-6">
                        <img class="img-fluid" src="images/background/background9.jpg">
                        <div class="c-project-text">
                            <h4><?php echo $projects[2]->name ;?></h4>
                            <h4><?php echo $projects[2]->investor ;?></h4>
                            <h4><?php echo $projects[2]->year ;?></h4>
                            <p><?php echo substr($projects[2]->description,0,50)."..." ;?></p>
                        </div>
                    </a>
                    <a href="gallery.php?id=3" class="c-project-right-image col-md-12">
                        <img class="img-fluid" src="images/background/background11.jpg">
                        <div class="c-project-text">
                            <h4><?php echo $projects[3]->name ;?></h4>
                            <h4><?php echo $projects[3]->investor ;?></h4>
                            <h4><?php echo $projects[3]->year ;?></h4>
                            <p><?php echo substr($projects[3]->description,0,50)."..." ;?></p>
                        </div>
                    </a>
            </div>
        </div>
    </div>
</section>

    <!--<section>
        <div class="c-welcome-carousel">
            <div class="row">
                <div id="carouselExampleIndicators" class="col-md-6 offset-md-3 carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="images/background/background10.jpg" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Nasze Realizacje</h3>
                                <p>Opis</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="images/background/background12.jpg" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Usługi</h3>
                                <p>Opis</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="images/background/background11.jpg" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Praca</h3>
                                <p>Opis</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
-->
    <script type='text/javascript'>
        QueryLoader.init();
    </script>
<?php
include_once ('template/contactFormAndPartners.php');
include_once ('template/footer.php');