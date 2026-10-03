<?php include "includes/constant.php";  ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="Explore Navtaara’s gallery showcasing peaceful village life, nature stays, and slow living experiences across India designed for calm, clarity, and mindful living." />
        <meta name="keywords" content="Navtaara gallery, slow living India images, village life India photos, nature retreat India gallery, eco stays India visuals, peaceful living India, countryside retreats India, wellness retreat images India" />
        <meta name="author" content="Sparsh Kochar" />
        <title>Navtaara Gallery | Slow Living & Nature Stays India</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Sora:wght@100..800&amp;display=swap"
            rel="stylesheet" />
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
        <div class="page-header parallaxie breadcum-banner-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-header-box">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Image Gallery</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $websiteurl; ?>">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">image gallery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-gallery" style="padding: 80px 0;">
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="color: #b99a5b; letter-spacing: 0.15em; text-transform: uppercase; font-size: 14px; font-weight: 600;">Authentic Sanctuaries &amp; Moments</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque" style="font-family: 'Marcellus', serif; font-size: 38px; color: #1e2119; margin-top: 10px;">Experience the Stillness of Navtaara</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: #5c6253; font-size: 16px; line-height: 1.7; margin-top: 15px;">A visual journey through our natural mountain retreats, intentional spaces, organic living, and guided restorative practices across India.</p>
                        </div>
                    </div>
                </div>
                <div class="row gallery-items page-gallery-box g-4">
                    <?php
                    $retreat_images = glob("images/gallery/navtaara-retreat-*.jpg");
                    if (empty($retreat_images)) {
                        $retreat_images = glob("images/gallery/*.{jpg,png,jpeg}", GLOB_BRACE);
                    }
                    sort($retreat_images);
                    foreach ($retreat_images as $idx => $imgPath):
                        $delay = ($idx % 6) * 0.12;
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="photo-gallery wow fadeInUp" data-wow-delay="<?php echo number_format($delay, 2); ?>s">
                            <a href="<?php echo $imgPath; ?>" class="gallery-popup-item" data-cursor-text="View" title="Navtaara Retreat Space <?php echo $idx + 1; ?>">
                                <figure class="image-anime gallery-card-figure">
                                    <img src="<?php echo $imgPath; ?>" alt="Navtaara Retreat Experience - Moment <?php echo $idx + 1; ?>" loading="lazy" class="gallery-img-fluid" />
                                    <div class="gallery-hover-overlay">
                                        <div class="gallery-zoom-icon"><i class="fa-solid fa-expand"></i></div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
