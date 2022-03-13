<?php
// $_SESSION['previous_location'] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>

    <title>404</title>
</head>

<body class="minimal">
    <div id="site-border-left"></div>
    <div id="site-border-right"></div>
    <div id="site-border-top"></div>
    <div id="site-border-bottom"></div>
    <!-- Add your content of header -->
    <header>
        <nav class="navbar  navbar-fixed-top navbar-inverse">
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
                        <li><a href="/" title="">02 : Back</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Add your site or app content here -->
    <div class="hero-full-container background-image-container white-text-container" style="background-image: url('/assets/pictures/space.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero-full-wrapper">
                        <div class="text-content">
                            <h1>404,<br>
                                <span id="typed-strings">
                                    <span>Server could not find the requested website</span>
                                </span>
                                <span id="typed"></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>