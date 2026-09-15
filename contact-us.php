<?php include "includes/constant.php";  ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="Contact Navtaara to plan your slow living retreat in India. Get guidance on village stays, long-term programs, and personalized onboarding for a peaceful experience." />
        <meta name="keywords" content="contact Navtaara, book slow living retreat India, village stay booking India, wellness retreat contact India, long stay retreats India inquiry, nature retreat booking India, sabbatical retreat contact" />
        <meta name="author" content="Sparsh Kochar" />
        <title>Contact Navtaara | Book Slow Living Retreats India</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Sora:wght@100..800&amp;display=swap" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <link href="css/slicknav.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <link href="css/all.min.css" rel="stylesheet" media="screen" />
        <link href="css/animate.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <link rel="stylesheet" href="css/mousecursor.css" />
        <link href="css/custom.css" rel="stylesheet" media="screen" />
    </head>
    <body>
        <?php include "includes/header.php"; ?>
        <div class="page-header parallaxie breadcum-banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-header-box">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Contact us</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $websiteurl; ?>">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-contact-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-us-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">contact us</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">
                                    Get in touch <span>with us</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    We're here to support your journey to better health and well-being. Reach out today
                                    to ask questions, schedule a consultation.
                                </p>
                            </div>
                            <div class="contact-info-list">
                                <div class="contact-info-item wow fadeInUp">
                                    <div class="icon-box"><img src="images/icon-phone.svg" alt="" /></div>
                                    <div class="contact-item-content">
                                        <h3>contact us</h3>
                                        <p><a href="tel:<?php echo $phonenum1; ?>"><?php echo $phonenum1; ?></a></p>
                                    </div>
                                </div>
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box"><img src="images/icon-mail.svg" alt="" /></div>
                                    <div class="contact-item-content">
                                        <h3>email us</h3>
                                        <p><a href="mailto:<?php echo $emailid1; ?>"><?php echo $emailid1; ?></a></p>
                                    </div>
                                </div>
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box"><img src="images/icon-location.svg" alt="" /></div>
                                    <div class="contact-item-content">
                                        <h3>location</h3>
                                        <p><?php echo $topaddress; ?></p>
                                    </div>
                                </div>
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box"><img src="images/icon-clock.svg" alt="" /></div>
                                    <div class="contact-item-content">
                                        <h3>open</h3>
                                        <p>Mon - Sat(10 AM - 8 PM)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-social-list wow fadeInUp" data-wow-delay="0.8s">
                                <h3>Follow On Social :</h3>
                                <ul>
                                    <li><a href="<?php echo $facebookurl; ?>" target="_blank" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $instagramurl; ?>" target="_blank" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a href="<?php echo $linkedinurl; ?>" target="_blank" class="social-icon"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $twitterurl; ?>" target="_blank" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Send us a <span>message</span></h2>
                            </div>
                            <div class="contact-form">
                                <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s" >
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-4">
                                            <input
                                                type="text"
                                                name="fname"
                                                class="form-control"
                                                id="fname"
                                                placeholder="First name"
                                                required
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <input
                                                type="text"
                                                name="lname"
                                                class="form-control"
                                                id="lname"
                                                placeholder="Last name"
                                                required
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                id="email"
                                                placeholder="E-mail"
                                                required
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <input
                                                type="text"
                                                name="phone"
                                                class="form-control"
                                                id="phone"
                                                placeholder="Phone"
                                                required
                                            />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-12 mb-5">
                                            <textarea
                                                name="message"
                                                class="form-control"
                                                id="message"
                                                rows="3"
                                                placeholder="Write Message..."
                                            ></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default">book An appointment</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-map">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map-iframe">
                            <iframe src="<?php echo $googlemaplink; ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validator.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/parallaxie.js"></script>
        <script src="js/gsap.min.js"></script>
        <script src="js/magiccursor.js"></script>
        <script src="js/SplitText.js"></script>
        <script src="js/ScrollTrigger.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/function.js"></script>
    </body>
</html>
