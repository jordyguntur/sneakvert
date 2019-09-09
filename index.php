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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class=" ">
    <a id="start"></a>
    <div class="nav-container ">
        <nav class="bar bar-toggle bar--transparent bar--absolute bar-m" data-fixed-at="200">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="bar__module">
                            <a href="index.php">
                                <img class="logo" alt="logo" src="img/sneakvert-logo-white.png"
                                    style="min-height: 10em;" />
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="bar__module">
                            <a class="menu-toggle pull-right" href="#" data-notification-link="sidebar-menu">
                                <i class="stack-interface stack-menu"></i>
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                    <!--end columns-->
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </nav>
        <div class="notification pos-right pos-top side-menu bg--white" data-notification-link="sidebar-menu"
            data-animation="from-right">
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
                        <a class="inner-link" href="/faq.php">FAQ</a>
                    </li>
                    <br />
                    <li>
                        <a class="inner-link" href="/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!--end module-->
            <!-- <div class="side-menu__module pos-bottom pos-absolute col-12 text-right">
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
                </div> -->
        </div>
    </div>
    <div class="main-container">
        <section class="height-100 imagebg parallax p-20" data-overlay="5">
            <div id="bg-top" class="background-image-holder" style="top: 0!important">
                <img alt="background" src="img/sneaker-3.jpg" />
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <img alt="logo" src="img/sneakvert-test.png" style="max-height: 8rem"/> -->
                        <p class="h2">
                            An data-driven company specialising in analytics and conversions for sneakers. We connect
                            research, data and experimentation to help you find the perfect pair of kicks.
                        </p>
                        <div class="col-4" style="padding-left: 0;">
                            <a class="btn btn--primary-2 btn--lg" href="#convert">
                                <span class="btn__text">Try our conversion tool</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="unpad elaborate-form-1">
            <div class="row">
                <div class="col-md-6 height-50 p-mobile">
                    <div class="pos-vertical-center row no-gutters justify-content-center" id="convert"
                        style="overflow: scroll">
                        <div class="col-lg-8">
                            <span class="h1">Sneaker Conversion Tool</span>
                            <p class="lead">
                                <!-- Enter information about your <i>current sneaker</i> and <i>size</i> to find out which size you should purchase for your next pair. -->
                            </p>
                            <form autocomplete="off" action="#convert" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Auto complete input logic-->
                                        <?php
                                                // Get cURL resource
                                                $curl = curl_init();
                                                
                                                curl_setopt_array($curl, [
                                                  CURLOPT_RETURNTRANSFER => 1,
                                                  CURLOPT_URL => 'http://108.61.158.17:8080/sneakers-list',
                                                ]);

                                                // Send the request & save sneaker list response
                                                $sneakers = json_decode(curl_exec($curl));
                                                
                                                // Close request to clear up some resources
                                                curl_close($curl);
                                            ?>


                                        <!-- Store sneaker list response to JavaScript -->
                                        <?php
                                                echo '<script>';
                                                echo 'var sneakers_list = ' . json_encode($sneakers) . ';';
                                                echo '</script>';
                                            ?>

                                        <!-- END: Auto complete input logic -->
                                        <div class="autocomplete w-100">
                                            <label>Your sneaker:</label>
                                            <input id="sneakers_list_autocomplete" class="validate-required" type="text"
                                                name="sneakers_list_autocomplete" placeholder="Enter your shoe"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="autocomplete w-100">
                                            <label>Target sneaker:</label>
                                            <input id="sneakers_target_autocomplete" class="validate-required"
                                                type="text" name="sneakers_target_autocomplete"
                                                placeholder="Sneaker you're interested in" required />
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-6">
                                        <br />
                                        <div class="input-number">
                                            <input type="number" name="shoe_size" placeholder="shoe size" min="4"
                                                max="12" value="8" step="0.5" />
                                            <div class="input-number__controls">
                                                <span class="input-number__increase"><i
                                                        class="stack-up-open"></i></span>
                                                <span class="input-number__decrease"><i
                                                        class="stack-down-open"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <br />
                                        <button type="submit" name="submit" class="btn btn-top">Convert</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                                  if(isset($_POST['submit'])){
                                    $current_sneaker = $_POST['sneakers_list_autocomplete'];
                                    $target_sneaker = $_POST['sneakers_target_autocomplete'];
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
                <div class="col-md-6 height-50 bg--primary-2">
                    <div class="pos-vertical-center clearfix row no-gutters justify-content-center">
                        <div class="col-lg-8">

                            <?php
                                    if(isset($_POST['submit'])){
                                      echo '<span class="h1 target_text">You currently wear an <br /><strong>' . $current_sneaker . ' (Size  ' .  $shoe_size . ') </span>';
                                    } else {
                                      echo '<span class="h1">How it works</span>
                                      <p class="lead">
                                          Enter information about your current sneaker and size to find out which size you should purchase for your next pair.
                                      </p>';
                                    }
                                   ?>

                            <p class="lead">
                                <?php
                                      if(isset($_POST['submit'])){
                                        echo 'Based on our data, you want to get an';
                                      }
                                    ?>
                            </p>
                            <?php
                                    if(isset($_POST['submit'])){
                                      echo '<span class="h1 result_text">';
                                      echo $target_sneaker . '  (Size ' . $response->target_size . ')';
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
                <img alt="background" src="img/sneaker-4.jpg" />
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
                    <!-- <div class="col-md-5 text-right text-center-xs">
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
                        </div> -->
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
    <script>
    console.log

    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val
                    .toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val
                        .length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] +
                        "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName(
                            "input")[0].value;

                        if (inp.id === "sneakers_list_autocomplete") {
                            var current_sneaker = inp.value
                        } else if (inp.id === "sneakers_target_autocomplete") {
                            var target_sneaker = inp.value
                        }

                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }
    </script>
    <script>
    autocomplete(document.getElementById("sneakers_list_autocomplete"), sneakers_list);
    autocomplete(document.getElementById("sneakers_target_autocomplete"), sneakers_list);
    </script>
</body>

</html>