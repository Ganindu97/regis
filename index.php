<!DOCTYPE html>


<?php 
	session_start(); 

	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sea Side South Park</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    

    <!-- Header Section Begin -->
    <header class="header">
        
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li class="active"><a href="./">Home</a></li>
                                    <li><a href="./seasidehotel/index.html">About Us</a></li>
                                    <li><a href="about.html">Other Hotels</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./seasidehotel/index.html">About Us</a></li>
                                            <li><a href="./about.html">Other Hotels</a></li>
                                            <li><a href=".login.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./login.php">Login</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                               <!-- <a href="#">Book Now <span class="arrow_right"></span></a> -->
								
								
								<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<input type="hidden" class="UserIsLogged" /> <!-- this output if user logged in-->
			
		<?php endif ?>
								
								
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hd.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>WELCOME TO </h5>
                        <h2>Sea Side South Park</h2>
						
						
						
                    </div>
                   <div class="bookingwrapper" >
				   
				   <?php include('book.php') ?>
				   
				   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>ABOUT US</h5>
                            <h2>Welcome Sea Side South Park Hotel</h2>
                        </div>
                        <p class="first-para">The story of Sea Side South Park Hotel Colombo which opened its doors in 2010 is a splendid tale of continual improvement of product and the highest standards of quality in hospitality.<br>
Having embraced over 3 decades of expertise in hospitality our vision and beliefs are firmly grounded in extending a true personalized service to all our guests, laced with an unforgettable luxury hotel experience.
The brand has enticed many elite personalities from around the world including heads of government, prime ministers of leading nations, royalty, well known sports and entertainment personalities and many more.</p>
                        <img src="img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="img/home.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Services Section Begin -->
    
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>OUR ROOM</h5>
                        <h2>Explore Our Hotel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/sd.jpg">
                        <div class="home__room__title">
                            <h4>Single Room</h4>
                            <h2><sup>LKR</sup>20,000<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/sd7.jpg">
                        <div class="home__room__title">
                            <h4>Queen Room</h4>
                            <h2><sup>LKR</sup>35,000<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/sd3.jpg">
                        <div class="home__room__title">
                            <h4>King Room</h4>
                            <h2><sup>LKR</sup>42,000<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg" data-setbg="img/home-room/sd4.jpg">
                        <div class="home__room__title">
                            <h4>Double Room</h4>
                            <h2><sup>LKR</sup>62,000<span>/day</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="home__explore">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3>Planning your next trip? Save up to 25% on your hotel</h3>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__pic">
                        <img src="img/ww.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__text">
                        <div class="section-title">
                            <h5>Sea Side South Park</h5>
                            <h2>What do customers say about us?</h2>
                        </div>
                        <div class="testimonial__slider__content">
                            <div class="testimonial__slider owl-carousel">
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Awesome location,excellent choice of food across a diverse range of cuisine, courteous and friendly staff, strong systems in place, fast check-in and checkout ..all in all a home away from home experience.,</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Sachithra Prabodhi</h5>
                                                    <span>Customer</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>They offer delicious food, good customer service. Good surroundings. Front facing the Galle Face green. Located in an urban area in Sri Lanka. Luxury hotel with good food. Perfect location for weddings as well.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Manusha Umayanga</h5>
                                                    <span>Customer</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="slide-num" id="snh-1"></div>
                            <div class="slider__progress"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="img/chooseus-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>WHY CHOOSE US</h5>
                            <h2>Contact us now to get the latest deals and for the next booking</h2>
                        </div>
                        <a href="#" class="primary-btn">Booking Now</a>
						
						
						
						
						
                    </div>
                </div>
            </div>
			
			
			<div class="eventss" >
						
						<?php include 'widget.php';?>
						
						</div>
			
			
			
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>OUR GALLERY</h5>
                            <h2>Explore The Most Beautiful In The Hotel</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>The story of Sea Side South Park Hotel Colombo which opened its doors in 2010 is a splendid tale of continual improvement of product and the highest standards of quality in hospitality.
Having embraced over 3 decades of expertise in hospitality our vision and beliefs are firmly grounded in extending a true personalized service to all our guests, laced with an unforgettable luxury hotel experience.
The brand has enticed many elite personalities from around the world including heads of government, prime ministers of leading nations, royalty, well known sports and entertainment personalities and many more.</p>
                            <a href="#" class="primary-btn">View About Us <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="img/gallery/gallery-1.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-2.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-3.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-4.jpg"></div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>NEWS & EVENT</h5>
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                    <div class="latest__blog__pic set-bg" data-setbg="img/blog1.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                    <div class="latest__blog__text">
                        <div class="label">Family Style</div>
                        <h5>Family style dining, also known as casual style dining in the United States, offers moderately priced entrees from menus featuring a mix of classics cuisines, individualized with signature sauces, dips or other toppings.</h5>
                        <p><i class="fa fa-clock-o"></i> 19th March, 2020</p>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    <div class="latest__blog__pic set-bg" data-setbg="img/blog2.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                    <div class="latest__blog__text">
                        <div class="label">Fine Dining</div>
                        <h5>The term Fine Dining brings to mind all kinds of images, from crisp white tablecloths to waiters in tuxedos. Fine dining, just as the name suggests, offers patrons the finest in food, service, and atmosphere. </h5>
                        <p><i class="fa fa-clock-o"></i> 22th March, 2020</p>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="img/blog3.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                    <div class="latest__blog__text">
                        <div class="label">Fast Food</div>
                        <h5>Fast food service attracted customers for its speed, convenience, and cheap prices.</h5>
                        <p><i class="fa fa-clock-o"></i> 25th September, 2020</p>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                    <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                        data-setbg="img/blog4.jpg"></div>
                </div>
                <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                    <div class="latest__blog__text">
                        <div class="label">Café or Bistro</div>
                        <h5>A café is a restaurant that does not offer table service. Customers order their food from a counter and serve themselves. </h5>
                        <p><i class="fa fa-clock-o"></i> 29th April, 2020</p>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                            <h4>0112555555</h4>
                            <ul>
                                <li>96, Sea Side South Park, Colombo</li>
                                <li>Info.seasidesouth@gmail.com</li>
                            </ul>
                            <div class="footer__social">
                                <a href="https://www.facebook.com/seasidehotelandspa/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/seasidehs"><i class="fa fa-twitter"></i></a>
                                <a href="https://in.linkedin.com/company/seasideofficiel"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.youtube.com/watch?v=SCM4o_lnZf4"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Multiple Hotels</h4>
                            <ul>
                                <li><a href="#">Sea Side South Park</a></li>
                                <li><a href="#">Sea Side South Beach</a></li>
                                <li><a href="#">Sea Beach Hotel</a></li>
                               
                            </ul>
                          
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                           <!--   <h4>Subscribe our newlatester</h4>
                          <form action="#">
                                <input type="text" placeholder="Your E-mail Address">
                                <button type="submit">Subscribe</button>
                            </form> -->
                            
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>