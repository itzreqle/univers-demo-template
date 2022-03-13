<?php
// $_SESSION['previous_location'] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>

    <title>Components page</title>
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

        <!-- Add your site or app content here -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="section-container-spacer text-center">
                        <h1 class="h2">05 : Components</h1>
                    </div>
                    <div class="template-example">
                        <h2 class="template-title-example">Text</h2>
                        <p>This is bold and this is semi bold and <b>this is extra bold</b>. This is italic and this is extra light and this is light
                            and this is regular. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>

                        </p>
                    </div>

                    <div class="template-example">
                        <h2 class="template-title-example">Headings</h2>

                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <h1>H1: Heading 1</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2>H2: Heading 2</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>H3: Heading 3</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>H4: Heading 4</h4>
                                </td>
                            </tr>
                        </table>

                    </div>


                    <div class="template-example">
                        <h2 class="template-title-example">List</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="template-title-example">Ordered</h3>
                                <ul>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="template-title-example">Number</h3>
                                <ol>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="template-example">
                        <h2 class="template-title-example">Icons</h2>

                        <div class="row">

                            <div class="col-md-6">
                                <h3 class="template-title-example">Basic Icons</h2>
                                    <ul class="list-icons">
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa-facebook"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa-twitter"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa-linkedin"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa-instagram"></i>
                                            </span>
                                        </li>
                                    </ul>
                            </div>

                        </div>





                    </div>

                    <div class="template-example">
                        <h2 class="template-title-example">Buttons</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="template-title-example">Primary</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><a href="" class="btn btn-primary btn-lg">Primary Large</a></p>
                                            <p><a href="" class="btn btn-primary">Primary </a></p>
                                            <p><a href="" class="btn btn-primary btn-sm">Primary Small</a></p>
                                        </div>
                                    </div>


                            </div>

                            <div class="col-md-6">
                                <h3 class="template-title-example">Default</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><a href="" class="btn btn-default btn-lg">Default Large</a></p>
                                            <p><a href="" class="btn btn-default">Default </a></p>
                                            <p><a href="" class="btn btn-default btn-sm">Default Small</a></p>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="template-example">
                        <h2 class="template-title-example">Inputs</h2>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Email me a copy
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option2"> I am a human
                            </label>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                        </div>

                        <div class="alert alert-success" role="alert">Your message was successfully sent</div>
                        <div class="alert alert-danger" role="alert">Your message has not been sent, restart</div>
                    </div>




                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>