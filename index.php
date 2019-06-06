<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SneakVert</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SneakVert Society">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-roboto.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class=" ">
        <a id="start"></a>
        <div class="nav-container ">
            <nav class="bar bar-toggle ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="bar__module">
                                <a href="index.php">
                                    <img class="logo-dark" alt="logo" src="img/sneakvert-logo.png" style="max-height: 8em;"/>
                                    <!-- <img class="logo logo-light" alt="logo" src="img/logo-light.png" /> -->
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="bar__module">
                                <a class="menu-toggle pull-right" href="#" data-notification-link="sidebar-menu">
                                    <i class="stack-interface stack-menu"></i>
                                </a>
                                <div class="notification pos-right pos-top side-menu bg--white notification--reveal notification--dismissed" data-notification-link="sidebar-menu" data-animation="from-right">
                                    <div class="side-menu__module pos-vertical-center text-right">
                                        <ul class="menu-vertical">
                                            <li>
                                                <a class="inner-link" href="/index.php">Home</a>
                                            </li>
                                            <br />
                                            <li>
                                                <a class="inner-link" href="/about.php">About Us</a>
                                            </li>
                                            <br />
                                            <li>
                                                <a class="inner-link" href="/contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end module-->
                                    <div class="side-menu__module pos-bottom pos-absolute col-12 text-right">
                                        <ul class="social-list list-inline text-right list--hover">
                                            <li>
                                                <a href="#">
                                                    <i class="socicon socicon-google icon icon--xs"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="socicon socicon-twitter icon icon--xs"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="socicon socicon-facebook icon icon--xs"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="socicon socicon-instagram icon icon--xs"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                  <div class="notification-close-cross notification-close"></div>
                                </div>
                            </div>
                            <!--end module-->
                        </div>
                        <!--end columns-->
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
        </div>
        <div class="main-container">
            <section class="cover height-60">
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-11 col-lg-8">
                            <span class="h2">
                                <span class="color--primary">Hi, we're SneakVert</span> a data-driven firm specialising in sneaker conversions. We help you find the perfect pair of kicks.
                            </span>
                            <!--end of modal instance-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="unpad elaborate-form-1">
                <div class="row row--gapless">
                    <div class="col-md-6 height-50 bg--primary">
                        <div class="pos-vertical-center clearfix row no-gutters justify-content-center">
                            <div class="col-lg-8">
                                <span class="h1">Sneaker Information</span>
                                <p class="lead">
                                    Enter information about your <i>current sneaker</i> and <i>size</i> to find out which size you should purchase for your next pair.
                                </p>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                          <div class="input-select">
                                              <?php
                                                // Get cURL resource
                                                $curl = curl_init();
                                                // Set some options - we are passing in a useragent too here
                                                curl_setopt_array($curl, [
                                                  CURLOPT_RETURNTRANSFER => 1,
                                                  CURLOPT_URL => 'http://108.61.158.17:8080/sneakers-list',
                                                ]);
                                                // Send the request & save response to $resp
                                                $sneakers = json_decode(curl_exec($curl));
                                                // Close request to clear up some resources
                                                curl_close($curl);
                                              ?>
                                            	<select name="current_sneaker" required>
                                            		<option value="">Select current sneaker</option>
                                                <?php
                                                  foreach($sneakers as $key => $value):
                                                    echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                  endforeach;
                                                ?>
                                            	</select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="input-select">
                                              <select name="target_sneaker" required>
                                                <option value="">Select target sneaker</option>
                                                <?php
                                                  foreach($sneakers as $key => $value):
                                                    echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                  endforeach;
                                                ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-6">
                                          <div class="input-number">
                                            <input type="number" name="shoe_size" placeholder="shoe size" min="4" max="12" value="4" step="0.5"/>
                                            <div class="input-number__controls">
                                              <span class="input-number__increase"><i class="stack-up-open"></i></span>
                                              <span class="input-number__decrease"><i class="stack-down-open"></i></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <button type="submit" name="submit" class="btn btn--primary-1">Convert</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                  if(isset($_POST['submit'])){
                                    $current_sneaker = $_POST['current_sneaker'];
                                    $target_sneaker = $_POST['target_sneaker'];
                                    $shoe_size = $_POST['shoe_size'];

                                    $target_sneaker_trimmed = str_replace('+', '%2B', $target_sneaker);
                                    $current_sneaker_trimmed = str_replace('+', '%2B', $current_sneaker);

                                    // Post request to Sneakvert API
                                    $ch = curl_init();

                                    curl_setopt($ch, CURLOPT_URL,"http://108.61.158.17:8080/conversion");
                                    curl_setopt($ch, CURLOPT_POST, 1);
                                    curl_setopt($ch, CURLOPT_POSTFIELDS,
                                                "current=" . $current_sneaker_trimmed . "&target=" . $target_sneaker_trimmed . "&size=" . $shoe_size);

                                    // Receive server response ...
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    $server_output = curl_exec($ch);

                                    // Parse json
                                    $jsonData = rtrim($server_output, "\0");
                                    $response = json_decode($jsonData);

                                    curl_close ($ch);
                                  }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 height-50 bg--primary-1">
                        <div class="pos-vertical-center clearfix row no-gutters justify-content-center">
                            <div class="col-lg-8">
                                <span class="h1 target_text">
                                  <?php
                                    if(isset($_POST['submit'])){
                                      echo 'You currently wear an <br /><strong>' . $current_sneaker . ' (Size  ' .  $shoe_size . ') ';
                                    }
                                   ?>
                                </span>
                                <p class="lead">
                                    <?php
                                      if(isset($_POST['submit'])){
                                        echo 'Based on our data and sneaker conversion analysis, we recommend an:';
                                      }
                                    ?>
                                </p>
                                  <?php
                                    if(isset($_POST['submit'])){
                                      echo '<span class="h1 result_text">';
                                      echo $target_sneaker . ' <br/>  (Size ' . $response->target_size . ')';
                                      echo '</span>';
                                    }
                                   ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="video video-1 text-center imagebg space--lg" data-overlay="3">
                <div class="background-image-holder">
                    <img alt="background" src="img/cowork-1.jpg" />
                </div>
                <div class="container">
                </div>
                <!--end of container-->
            </section>

            <!-- <section class="text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                      <h2>Join our email newsletter</h2>
                    </div>
                    <form action="http://mrare.us8.list-manage.com/subscribe/post-json?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8&amp;c=?" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Please provide your email address." class="row justify-content-center form--active" novalidate="true">
                        <div class="col-lg-7 col-md-8">
                            <input class="validate-required validate-email" type="text" name="EMAIL" placeholder="Enter your email for our newsletter">
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <button type="submit" class="btn btn--primary type--uppercase">Subscribe</button>
                        </div>
                        <div class="col-md-12">
                            <div class="input-checkbox"><input class="validate-required" type="checkbox" name="group[13737][1]" id="input-assigned-0"><label for="input-assigned-0"></label></div>
                            <span>I have read and agree to the
                                <a href="#">terms and conditions</a>
                            </span>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value="">
                        </div>
                    </form>
                  </div>
                </div>
            </section> -->

            <footer class="text-center-xs space--xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <ul class="list-inline">
                                <li>
                                    <a href="/about.php">
                                        <span class="h6 type--uppercase">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact.php">
                                        <span class="h6 type--uppercase">Support</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 text-right text-center-xs">
                            <ul class="social-list list-inline list--hover">
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-google icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-facebook icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-instagram icon icon--xs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-md-7">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> SneakVert LLC.</span>
                            <a class="type--fine-print" href="#">Privacy Policy</a>
                            <a class="type--fine-print" href="#">Legal</a>
                        </div>
                        <div class="col-md-5 text-right text-center-xs">
                            <p class="type--fine-print" href="#">info@sneakvertsociety.com</p>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/flickity.min.js"></script>
        <script src="js/easypiechart.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/granim.min.js"></script>
        <script src="js/jquery.steps.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
