<?php
// $_SESSION['previous_location'] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>

    <title>Work page</title>
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

                    <ul class="nav navbar-nav navbar-right navbar-small visible-md visible-lg">
                        <li><a href="#" title="" class="active">001</a></li>
                        <li><a href="#" title="">002</a></li>
                        <li><a href="#" title="">003</a></li>
                        <li><a href="#" title="">004</a></li>
                        <li><a href="#" title="">005</a></li>
                        <li><a href="#" title="">006</a></li>
                    </ul>


                </div>
            </div>
        </nav>
    </header>
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img src="/assets/pictures/work001-01.jpg" class="img-responsive" alt="">
                    <div class="card-container">
                        <div class="text-center">
                            <h1 class="h2">001 : Fringilla sit amet</h1>
                        </div>
                        <p>Nulla facilisi. Vivamus vestibulum, elit in scelerisque ultricies, nisl nunc pulvinar ligula, id sodales arcu sapien in nisi. Quisque libero enim, mattis non augue posuere, venenatis dapibus urna.</p>

                        <blockquote>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                            <small class="pull-right">Irina Martin</small>
                        </blockquote>
                    </div>
                </div>



                <div class="col-md-8 col-md-offset-2 section-container-spacer">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <img src="/assets/pictures/work001-02.jpg" class="img-responsive" alt="">
                            <p>Menphis skyline</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <img src="/assets/pictures/work001-03.jpg" class="img-responsive" alt="">
                            <p>Menphis skyline</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <img src="/assets/pictures/work001-04.jpg" class="img-responsive" alt="">
                </div>

            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>