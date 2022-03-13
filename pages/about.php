<?php
// $_SESSION['previous_location'] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>

    <title>About page</title>
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
                <div class="col-xs-12">
                    <div class="section-container-spacer text-center">
                        <h1 class="h2">03 : About me</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h3>Consectetur adipiscing elit</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices hendrerit nisl.</p>
                                    <h3>Ut enim ad minim </h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <h3>Maecenas luctus at sem quis varius</h3>
                                    <p>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis magna sagittis elit sagittis, at hendrerit lorem venenatis. Morbi accumsan iaculis blandit. Cras ultrices hendrerit nisl.</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="/assets/pictures/profil.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>