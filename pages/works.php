<?php
// $_SESSION['previous_location'] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>

    <title>Works page</title>
</head>

<body class="">
    <div id="site-border-left"></div>
    <div id="site-border-right"></div>
    <div id="site-border-top"></div>
    <div id="site-border-bottom"></div>
    <!-- Add your content of header -->
    <header>
        <nav class="navbar  navbar-fixed-top navbar-default">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav ">
                        <li><a href="/" title="">01 : Home</a></li>
                        <li><a href="/works" title="">02 : Works</a></li>
                        <li><a href="/about" title="">03 : About me</a></li>
                        <li><a href="/contact" title="">04 : Contact</a></li>
                        <li><a href="/components" title="">05 : Components</a></li>
                    </ul>


                </div>
            </div>
        </nav>
    </header>

    <div class="section-container">
        <div class="container">
            <div class="row">

                <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
                    <div class="text-center">
                        <h1 class="h2">02 : Works</h1>
                        <p>Nulla facilisi. Vivamus vestibulum, elit in scelerisque ultricies, nisl nunc pulvinar ligula, id sodales arcu sapien in nisi. Quisque libero enim, mattis non augue posuere, venenatis dapibus urna.</p>
                    </div>
                </div>

                <div class="col-md-12">

                    <div id="myCarousel" class="carousel slide projects-carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php  ?>

                                        <a href="/work" title="" class="black-image-project-hover">
                                            <img src="/assets/pictures/work01-hover.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="card-container card-container-lg">
                                            <h4>001/006</h4>
                                            <h3>Fringilla sit amet</h3>
                                            <p>Nulla facilisi. Vivamus vestibulum, elit in scelerisque ultricies.</p>
                                            <a href="/work" title="" class="btn btn-default">Discover</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="/work" title="" class="black-image-project-hover">
                                            <img src="/assets/pictures/work02-hover.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="card-container card-container-lg">
                                            <h4>002/006</h4>
                                            <h3>Nulla scelerisque</h3>
                                            <p>Proin pharetra metus id iaculis dignissim. In aliquet lorem ut ex ullamcorper.</p>
                                            <a href="/work" title="" class="btn btn-default">Discover</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="/work" title="" class="black-image-project-hover">
                                            <img src="/assets/pictures/work03-hover.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="card-container card-container-lg">
                                            <h4>003/006</h4>
                                            <h3>Vivamus vestibulum</h3>
                                            <p>Fusce sed hendrerit augue, a rhoncus velit. In non lorem mattis, tempor sem sit amet.</p>
                                            <a href="/work" title="" class="btn btn-default">Discover</a>
                                        </div>
                                    </div>

                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href="/work" class="black-image-project-hover">
                                            <img src="/assets/pictures/work02-hover.jpg" alt="Image" class="img-responsive">
                                        </a>
                                        <div class="card-container">
                                            <h4>004/006</h4>
                                            <h3>Nulla scelerisque</h3>
                                            <p>Proin pharetra metus id iaculis dignissim. In aliquet lorem ut ex ullamcorper.</p>
                                            <a href="/work" class="btn btn-default">Discover</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="/work" class="black-image-project-hover">
                                            <img src="/assets/pictures/work01-hover.jpg" alt="Image" class="img-responsive">
                                        </a>
                                        <div class="card-container">
                                            <h4>005/006</h4>
                                            <h3>Fringilla sit amet</h3>
                                            <p>Nulla facilisi. Vivamus vestibulum, elit in scelerisque ultricies.</p>
                                            <a href="/work" class="btn btn-default">Discover</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <a href="/work" class="black-image-project-hover">
                                            <img src="/assets/pictures/work03-hover.jpg" alt="Image" class="img-responsive">
                                        </a>
                                        <div class="card-container">
                                            <h4>006/006</h4>
                                            <h3>Vivamus vestibulum</h3>
                                            <p>Fusce sed hendrerit augue, a rhoncus velit. In non lorem mattis, tempor sem sit amet.</p>
                                            <a href="/work" class="btn btn-default">Discover</a>
                                        </div>
                                    </div>

                                </div>
                                <!--/row-->
                            </div>

                            <!--/item-->
                        </div>
                        <!--/carousel-inner-->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    </div>



                    <!--/myCarousel-->
                </div>



            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>