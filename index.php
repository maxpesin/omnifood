<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-99829395-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-99829395-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Built using CSS Responsive Grid, HTML and JavaScript">
        <link rel="stylesheet" type="text/css" href="_assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="_assets/css/grid.css">
        <link rel="stylesheet" type="text/css" href="_assets/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="_assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="_assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="_assets/css/media.queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">

        <title>Omnifood | Max Pesin</title>

        <link rel="apple-touch-icon" sizes="180x180" href="_assets/icons/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="_assets/icons/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="_assets/icons/favicon/favicon-16x16.png">
        <link rel="manifest" href="_assets/icons/favicon/manifest.json">
        <link rel="mask-icon" href="_assets/icons/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="_assets/icons/favicon/favicon.ico">
        <meta name="msapplication-config" content="_assets/icons/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body class="body">
        <header id="top-of-page">
            <nav>
                <div class="row nav-div-mobile">
                    <img src="_assets/img/logo-white.png" alt="Logo" class="logo">
                    <a href="#top-of-page" title="Back to top"><img src="_assets/img/logo.png" alt="Logo" class="logo-black"></a>
                    <ul class="main-nav js--main-nav">
                        <li><a href="#food-delivery">Food delivery</a></li>
                        <li><a href="#how-it-works">How it works</a></li>
                        <li><a href="#our-cities">Our cities</a></li>
                        <li><a class="sign-up" href="#sign-up">Sign up</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box js--sticky-navi-start">
                <h1>Omnifood,<br>Guilt free indulgence.</h1>
                <a class="button button-full sign-up" href="#sign-up">I'm hungry</a>
                <a class="button button-ghost js--scroll-how-it-works" href="#food-delivery">Show me more</a>
                <a class="button button-ghost" href="http://www.weborbit.ca">Back to Portfolio</a>
            </div>
        </header>

        <section class="section-features" id="food-delivery">
            <div class="row">
                <h2>Get food fast&nbsp;&mdash;&nbsp;not fast food</h2>
                <p class="long-intro-copy">Hello, we're your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!</p>
            </div>
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-android-calendar icon-big"></i>
                    <h3>Up to 365 days/year</h3>
                    <p class="long-copy">Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-android-stopwatch icon-big"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p class="long-copy">You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-social-tux icon-big"></i>
                    <h3>100% organic&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                    <p class="long-copy">All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-social-octocat icon-big"></i>
                    <h3>Order anything</h3>
                    <p class="long-copy">We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
                </div>
            </div>
        </section>

        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/7.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="_assets/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>

        <section class="section-steps js--section-how-it-works" id="how-it-works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1,&nbsp;2,&nbsp;3</h2>
            </div>
            <div class="row how-it-works-div">
                <div class="col span-1-of-2 steps-box app-screen">
                    <img src="_assets/img/app-iPhone.png" alt="App on Iphone" class="app-screen js--wp-2">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step work-flex">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step work-flex">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step work-flex">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    <div class="button-app-div">
                        <a href="javascript:void(0);" class="button-app" title="App Store"><img src="_assets/img/download-app.jpg" alt="App Store"></a>
                        <a href="javascript:void(0);" class="button-app" title="Play Store"><img src="_assets/img/download-app-android.png" alt="Play Store"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-cities" id="our-cities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box locations">
                    <img src="_assets/img/homepage/lisbon-min.jpg" alt="Lisbon" class="cities-image js--wp-3">
                    <h3><strong>Lisbon</strong></h3>
                    <table class="locations-row-division">
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-android-restaurant icon-small"></i></td>
                                <td>1600+ happy&nbsp;eaters</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-octocat icon-small"></i></td>
                                <td>60+ top chefs</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-twitter icon-small"></i></td>
                                <td><a href="javascript:void(0);">@food_lx</a></td>
                            </tr>
                        </div>
                    </table>
                </div>
                <div class="col span-1-of-4 box locations">
                    <img src="_assets/img/homepage/san-francisco-min.jpg" alt="San Francisco" class="cities-image js--wp-3">
                    <h3><strong>San Francisco</strong></h3>
                    <table class="locations-row-division">
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-android-restaurant icon-small"></i></td>
                                <td>3700+ happy&nbsp;eaters</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-octocat icon-small"></i></td>
                                <td>160+ top chefs</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-twitter icon-small"></i></td>
                                <td><a href="javascript:void(0);">@food_sf</a></td>
                            </tr>
                        </div>
                    </table>
                </div>
                <div class="col span-1-of-4 box locations">
                    <img src="_assets/img/homepage/berlin-min.jpg" alt="Berlin" class="cities-image js--wp-3">
                    <h3><strong>Berlin</strong></h3>
                    <table class="locations-row-division">
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-android-restaurant icon-small"></i></td>
                                <td class="cities-table-left-align">2300+ happy&nbsp;eaters</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-octocat icon-small"></i></td>
                                <td>110+ top chefs</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-twitter icon-small"></i></td>
                                <td><a href="javascript:void(0);">@food_berlin</a></td>
                            </tr>
                        </div>
                    </table>
                </div>
                <div class="col span-1-of-4 box locations">
                    <img src="_assets/img/homepage/london-min.jpg" alt="London" class="cities-image js--wp-3">
                    <h3><strong>London</strong></h3>
                    <table class="locations-row-division">
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-android-restaurant icon-small"></i></td>
                                <td>1200+ happy&nbsp;eaters</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-octocat icon-small"></i></td>
                                <td>50+ top chefs</td>
                            </tr>
                        </div>
                        <div class="city-feature">
                            <tr>
                                <td><i class="ion-social-twitter icon-small"></i></td>
                                <td class="cities-icon-margin"><a href="javascript:void(0);">@food_london</a></td>
                            </tr>
                        </div>
                    </table>
                </div>
            </div>
        </section>

        <section class="section-test" id="reviews">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Awesome! I just launched a startup which leaves me with no time for cooking, so this service is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                        <cite><img src="_assets/img/customer-1.jpg" alt="Alberto Duncan">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                        <cite><img src="_assets/img/customer-2.jpg" alt="Joana Silva">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with this service. Best food delivery service in the Bay Area. Keep up the great work!
                        <cite><img src="_assets/img/customer-3.jpg" alt="Milton Chapman">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="section-plans" id="sign-up">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <div class="row plan-flex">
                <div class="col span-1-of-3 plan-flex-div">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3 class="plan-box-head-div">Premium</h3>
                            <p class="plan-price plan-box-head-div">$ 399 <span>/ month</span></p>
                            <p class="plan-price-meal plan-box-head-div">That's only 13.30$ per meal</p>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>1 meal every day</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Order 24/7</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Access to newest creations</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Free delivery</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="button button-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3 plan-flex-div">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3 class="plan-box-head-div">Pro</h3>
                            <p class="plan-price plan-box-head-div">$ 149 <span>/ month</span></p>
                            <p class="plan-price-meal plan-box-head-div">That's only 14.90$ per meal</p>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>1 meal 10 days/month</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Order 24/7</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Access to newest creations</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Free delivery</td>
                                </tr>
                            </table>
                        </div>
                        <div class="plan-flex-cta-div">
                            <a href="javascript:void(0);" class="button button-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3 plan-flex-div">
                    <div class="plan-box js--wp-4">
                        <div>
                            <h3 class="plan-box-head-div">Starter</h3>
                            <p class="plan-price plan-box-head-div">$ 19 <span>/ month</span></p>
                            <p class="plan-price-meal plan-box-head-div">&nbsp;</p>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>1 meal</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Order from 8&nbsp;am&nbsp;-&nbsp;12&nbsp;pm</td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-close-empty icon-small"></i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="ion-ios-checkmark-empty icon-small"></i></td>
                                    <td>Free delivery</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="button button-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="map-box">

            <div id="map"></div>

                    <script>
                        var map, infoWindow;
                        function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: 43.6567919, lng: -79.3},
                          zoom: 12
                        });
                        }

                </script>

            <div class="form-box" id="form">
                <div class="row">
                    <h2>We're happy to hear from you</h2>
                </div>
                <div>
                    <p style="font-syle:italic;font-size:15px; text-align: center; margin-bottom: 20px;">* marked fields are required</p>
                </div>

                <div class="row">
                    <form method="post" action="mailer.php" class="contact-form">

                        <div class="row">

                            <?php
                                if($_GET['success'] == 1) {
                                    echo "<div class=\"form-messages success\">
                                Thank You! Your Message has been sent.
                            </div>";
                                }
                                if($_GET['success'] == -1) {
                                    echo "<div class=\"form-messages error\">
                                Oops! Something went wrong. Please try again!
                            </div>";
                                }
                            ?>

                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Name *</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email *</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="find-us">How did you find us?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <select name="find-us" id="find-us">
                                    <option value="Choose">Choose One</option>
                                    <option value="friends">Friends</option>
                                    <option value="search-engines">Search Engine</option>
                                    <option value="advertisement">Advertisement</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Newsletter?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="checkbox" id="news" name="newsletter" unchecked>Yes, please
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Drop us a line? *</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="comment" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3 no-show">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="send" style="cursor:pointer;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <div class="row">
                <div class="col span-2-of-3">
                    <ul class="footer-nav">
                        <li><a href="#form">Contact Us</a></li>
                        <li><a href="#how-it-works">iOS App</a></li>
                        <li><a href="#how-it-works">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-3">
                    <ul class="footer-social">
                        <li><a href="https://codepen.io/maxpesin/" target="_blank" class="ion-social-codepen"></a></li>
                        <li><a href="https://www.linkedin.com/in/maxpesin/" target="_blank" class="ion-social-linkedin"></a></li>
                        <li><a href="https://github.com/maxpesin" target="_blank" class="ion-social-github"></a></li>
                        <li><a href="https://twitter.com/pesinmax" target="_blank" class="ion-social-twitter"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>Created by <a href="http://www.maxpesin.com" target="_blank">Max Pesin</a></p>
                <p>Learned from <a href="https://codingheroes.io/" target="_blank">Jonas Schmedtmann</a></p>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.js"></script>
        <!-- Allows old browsers to understand css first-child and similar -->
        <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="_assets/js/jquery.waypoints.min.js"></script>
        <script src="_assets/js/script.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBys11BSjSZkd-w8S6s5mOPINiTr96dNP8&callback=initMap">
        </script>

   </body>
</html>
