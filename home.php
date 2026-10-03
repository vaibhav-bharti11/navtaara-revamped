<?php include "includes/constant.php";  ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Awaiken" />
        <title><?php echo $websitetitle; ?></title>
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
        <div class="hero hero-video">
            <div class="hero-bg-video">
                <video autoplay muted loop id="myVideo">
                    <source src="images/Navtara-hero-video.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Redefining Luxury</h3>
                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                    Slow down. Breathe. Live naturally again.
                                </h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    A premium village-based stay for mentally tired individuals seeking calm, privacy, and dignity. Remove noise, release pressure, and gently return to your natural rhythm.
                                </p>
                            </div>
                            <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                <div class="hero-btn">
                                    <a href="#" class="btn-default">join us today</a>
                                </div>
                                <div class="video-play-button">
                                    <p>Instagram</p>
                                    <a href="<?php echo $instagramurl; ?>" target="_blank" data-cursor-text="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="down-arrow-circle">
                <a href="#home-about"
                    ><img src="images/down-circle.svg" alt="" /><i class="fa-solid fa-arrow-down"></i
                ></a>
            </div>
        </div>
        <div class="about-us" id="home-about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-images">
                            <div class="about-image">
                                <figure><img src="images/about-us-img.png" alt="" /></figure>
                            </div>
                            <div class="about-image-title"><h2>about us</h2></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">about us</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque"> Redefining modern rest through <span> quiet village living</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    <?php echo $webname; ?> offers a premium village-based slow living space for mentally tired individuals, providing a calm, pressure-free environment to disconnect from modern stress and naturally restore clarity, balance, and rhythm.
                                </p>
                            </div>
                            <div class="about-content-body">
                                <div class="about-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box"><img src="images/icon-1.png" alt="Mental Clarity Restored" /></div>
                                    <div class="about-benefit-item-content">
                                        <h3>Mental Clarity Restored</h3>
                                        <p>Experience reduced mental noise, improved focus, deeper sleep, and emotional balance by living slowly in a calm, pressure-free village environment.</p>
                                    </div>
                                </div>
                                <div class="about-benefit-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box"><img src="images/icon-2.png" alt="Natural Rhythm Recovery" /></div>
                                    <div class="about-benefit-item-content">
                                        <h3>Natural Rhythm Recovery</h3>
                                        <p>Disconnect from urgency and expectations, allowing your body and mind to reset gently through simple routines, nature, and unstructured rest.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-content-btn wow fadeInUp" data-wow-delay="0.8s">
                                <a href="about-us" class="btn-default">more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-services">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Offerings</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Simple stays designed for <span>deep restoration</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="services" class="btn-default">view all services</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item wow fadeInUp">
                            <div class="service-header">
                                <div class="icon-box"><img src="images/retreat-icon-1.png" alt="Antar Yatra — The Inward Journey" /></div>
                                <div class="service-btn">
                                    <a href="upcoming-experiences"><img src="images/arrow-white.svg" alt="Antar Yatra — The Inward Journey" /></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3><a href="upcoming-experiences">Antar Yatra — The Inward Journey</a></h3>
                                <p>A 3-day Himalayan retreat in Uttarakhand designed for presence, clarity & deep renewal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-header">
                                <div class="icon-box"><img src="images/service-1.png" alt="Extended Stay Living Programs" /></div>
                                <div class="service-btn">
                                    <a href="extended-stay-living-programs"><img src="images/arrow-white.svg" alt="Extended Stay Living Programs" /></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3><a href="extended-stay-living-programs">Extended Stay Living Programs</a></h3>
                                <p>Premium long-duration stays designed for deep renewal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-header">
                                <div class="icon-box"><img src="images/service-2.png" alt="Life Transition & Sabbatical Experiences" /></div>
                                <div class="service-btn">
                                    <a href="life-transition-sabbatical-experiences"><img src="images/arrow-white.svg" alt="Life Transition & Sabbatical Experiences" /></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3><a href="life-transition-sabbatical-experiences">Life Transition & Sabbatical Experiences</a></h3>
                                <p>Intentional retreats supporting clarity during major life transitions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-header">
                                <div class="icon-box"><img src="images/service-3.png" alt="Nature-Based Immersive Environments" /></div>
                                <div class="service-btn">
                                    <a href="nature-based-immersive-environments"><img src="images/arrow-white.svg" alt="Nature-Based Immersive Environments" /></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3><a href="nature-based-immersive-environments">Nature-Based Immersive Environments</a></h3>
                                <p>Carefully selected natural settings fostering calm and reflection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="section-footer-text wow fadeInUp" data-wow-delay="0.2s">
                            <p>
                                Begin Your Journey Back to <span>Natural Living</span>. <a href="contact-us">Get Free Quote</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="what-we-do">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="what-we-image">
                            <figure><img src="images/what-we-image.png" alt="" /></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="what-we-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">what we do</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">
                                    Restoring natural pace through <span>quiet village living</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Step away from constant noise, urgency, and performance pressure. Quiet Living Concept offers a calm, village-based slow living experience designed to help mentally tired individuals reset gently. By removing stimulation and expectations, we create an environment where clarity, deeper rest, and emotional balance naturally return.
                                </p>
                            </div>
                            <div class="what-we-body wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>Pressure-Free Slow Living</li>
                                    <li>Environmental Mental Reset</li>
                                    <li>Long-Stay Restoration Spaces</li>
                                    <li>Privacy With Dignity</li>
                                </ul>
                            </div>
                            <div class="what-we-btn wow fadeInUp" data-wow-delay="0.6s">
                                <a href="contact-us" class="btn-default">contact now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 order-3">
                        <div class="what-we-benefits-box">
                            <div class="what-we-benefits-list">
                                <div class="what-we-item wow fadeInUp">
                                    <div class="icon-box"><img src="images/wellness-icon-1.png" alt="Holistic Wellness Programs" /></div>
                                    <div class="what-we-item-content">
                                        <h3>Holistic Wellness Programs</h3>
                                        <p>Integrated slow living for complete mind-body balance.</p>
                                    </div>
                                </div>
                                <div class="what-we-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-box"><img src="images/meditation-icon-1.png" alt="Group Meditation Sessions" /></div>
                                    <div class="what-we-item-content">
                                        <h3>Group Meditation Sessions</h3>
                                        <p>Guided quiet sessions fostering calm awareness.</p>
                                    </div>
                                </div>
                                <div class="what-we-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box"><img src="images/relaxation-icon-1.png" alt="Relaxation Techniques" /></div>
                                    <div class="what-we-item-content">
                                        <h3>Relaxation Techniques</h3>
                                        <p>Gentle practices reducing stress and restoring balance.</p>
                                    </div>
                                </div>
                                <div class="what-we-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box"><img src="images/breadthwork-icon-1.png" alt="Breathwork Practices" /></div>
                                    <div class="what-we-item-content">
                                        <h3>Breathwork Practices</h3>
                                        <p>Conscious breathing for mental clarity.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="what-we-benefit-image">
                                <figure class="image-anime">
                                    <img src="images/what-we-benefit-image.jpg" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-choose-us">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">why choose us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Where slowing down becomes <span>natural</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>
                                We provide a private, pressure-free village environment designed for deep mental reset, dignity, sustainability, and long-term restoration without programs or expectations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="why-choose-content">
                            <div class="why-choose-image">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-image.jpg" alt="" />
                                </figure>
                            </div>
                            <div class="why-choose-item wow fadeInUp">
                                <div class="icon-box"><img src="images/village-icon-1.png" alt="Village Rhythms" /></div>
                                <div class="why-choose-item-content">
                                    <h3>Village Rhythms</h3>
                                    <p>Experience peaceful village mornings, simple routines, and authentic rural traditions that gently reconnect you with slower living and mindful daily rhythms.</p>
                                </div>
                            </div>
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box"><img src="images/village-icon-2.png" alt="Farm Living" /></div>
                                <div class="why-choose-item-content">
                                    <h3>Farm Living</h3>
                                    <p>Spend time in natural farm environments, observing seasonal cycles and village practices that encourage grounding, simplicity, and appreciation for nature.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-benefits">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Benefits</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Experience balance through <span>calm rural living</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="contact-us" class="btn-default">contact now</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 order-1">
                        <div class="our-benefits-box">
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box"><img src="images/instructor-icon-1.png" alt="Expert Instructors" /></div>
                                <div class="benefit-item-content">
                                    <h3>Expert Instructors</h3>
                                    <p>
                                        We focus on connection, offering a complete wellness experience that nurtures
                                        your physical
                                    </p>
                                </div>
                            </div>
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box"><img src="images/stress-icon-1.png" alt="Stress Reduction" /></div>
                                <div class="benefit-item-content">
                                    <h3>Stress Reduction</h3>
                                    <p>
                                        We focus on connection, offering a complete wellness experience that nurtures
                                        your physical
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-md-3 order-2">
                        <div class="our-benefits-image">
                            <figure><img src="images/benefits-image.png" alt="" /></figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 order-lg-3 order-md-2 order-3">
                        <div class="our-benefits-box">
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box"><img src="images/emotion-icon-1.png" alt="Emotional Balance" /></div>
                                <div class="benefit-item-content">
                                    <h3>Emotional Balance</h3>
                                    <p>
                                        We focus on connection, offering a complete wellness experience that nurtures
                                        your physical
                                    </p>
                                </div>
                            </div>
                            <div class="benefit-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box"><img src="images/harmony-icon-1.png" alt="Mind-Body Harmony" /></div>
                                <div class="benefit-item-content">
                                    <h3>Mind-Body Harmony</h3>
                                    <p>
                                        We focus on connection, offering a complete wellness experience that nurtures
                                        your physical
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-video">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="intro-video-box">
                            <div class="intro-bg-video">
                                <video autoplay muted loop id="introVideo">
                                    <source src="images/Navtaara-BG-1.mp4" type="video/mp4" />
                                </video>
                            </div>
                            <div class="video-play-button">
                                <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">Play</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Begin your journey toward calm, clarity, renewal
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="section-btn wow fadeInUp">
                            <a href="contact-us" class="btn-default btn-highlighted">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forest Revealing Full-Viewport Scroll Sequence (4 Interactive Stages) -->
        <div class="forest-scroll-wrapper" id="forestScrollContainer">
            <div class="forest-sticky-stage">
                <!-- Canvas Video Frames & Seamless Cross-Fade -->
                <canvas id="forestCanvas" class="forest-canvas"></canvas>

                <!-- Soft Ambient Overlay & Edge Feathers -->
                <div class="forest-ambient-overlay"></div>
                <div class="forest-feather-top"></div>
                <div class="forest-feather-bottom"></div>

                <!-- Scroll-Driven Animated Clouds -->
                <div class="forest-clouds-layer">
                    <div class="forest-cloud-blob forest-cloud-1" id="forestCloud1"></div>
                    <div class="forest-cloud-blob forest-cloud-2" id="forestCloud2"></div>
                    <div class="forest-cloud-blob forest-cloud-3" id="forestCloud3"></div>
                </div>

                <!-- Scroll Down Cinematic Experience Indicator -->
                <div class="forest-scroll-indicator" id="forestScrollIndicator">
                    <div class="forest-scroll-indicator-inner">
                        <div class="forest-mouse-icon">
                            <span class="forest-mouse-wheel"></span>
                        </div>
                        <span class="forest-scroll-text">Scroll down for cinematic experience</span>
                        <div class="forest-scroll-arrows">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                </div>

                <!-- Stage 1: Foundation, Elevation & Intention -->
                <div class="forest-stage-container" id="forestStage1" style="opacity: 0;">
                    <div class="forest-stage-inner text-center">
                        <div class="forest-badge-pill">
                            <svg viewBox="0 0 64 64" width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" style="color: #b99a5b; filter: drop-shadow(0 0 2px rgba(255,250,235,0.9)) drop-shadow(0 0 6px rgba(217,169,79,0.85));">
                                <path d="M32,34 L32,14" stroke-width="2.2" />
                                <path d="M32,34 Q24,30 23,22 Q22.4,17 25,13" stroke-width="2.2" />
                                <path d="M32,34 Q40,30 41,22 Q41.6,17 39,13" stroke-width="2.2" />
                                <path d="M32,34 L32,54" stroke-width="2.4" />
                                <line x1="22" y1="42" x2="42" y2="42" stroke-width="2" />
                                <circle cx="32" cy="12" r="1.8" fill="currentColor" />
                                <circle cx="25" cy="11.5" r="1.5" fill="currentColor" />
                                <circle cx="39" cy="11.5" r="1.5" fill="currentColor" />
                            </svg>
                            <span>Foundation, Elevation &amp; Intention</span>
                        </div>
                        <h2 class="forest-stage-1-title">
                            Navtaara is not one place, but a practice — found for you, wherever your stillness calls you.
                        </h2>
                        <div class="forest-bento-grid">
                            <div class="forest-bento-card">
                                <h3>Foundation</h3>
                                <p>The essentials handled before you arrive: the right property, practitioner, and pace.</p>
                            </div>
                            <div class="forest-bento-card">
                                <h3>Elevation</h3>
                                <p>Deepen it, if you want to. Additional sessions, extended time, layered modalities.</p>
                            </div>
                            <div class="forest-bento-card">
                                <h3>Intention</h3>
                                <p>Tell us what you're stepping away from. We build around that answer.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 2: The Circle -->
                <div class="forest-stage-container" id="forestStage2" style="opacity: 0;">
                    <div class="forest-stage-inner text-center forest-stage-2-content">
                        <div class="forest-badge-pill forest-badge-gold">
                            <span>The Circle</span>
                        </div>
                        <h2 class="forest-stage-2-title">
                            We don't own these places. We chose them.
                        </h2>
                        <p class="forest-stage-2-desc">
                            A circle of partner properties across India, each visited and vetted directly — for silence, for light, for a stillness that can't be staged for a photograph. The circle grows slowly, on purpose.
                        </p>
                    </div>
                </div>

                <!-- Stage 3: Who Guides You (Knowledge Library) -->
                <div class="forest-stage-container" id="forestStage3" style="opacity: 0;">
                    <div class="forest-stage-inner">
                        <div class="forest-knowledge-card">
                            <div class="forest-knowledge-grid">
                                <div class="forest-knowledge-left">
                                    <div class="forest-badge-pill" style="margin-bottom: 14px;">
                                        <i class="fa-solid fa-sparkles" style="color: #b99a5b; font-size: 12px;"></i>
                                        <span>Who Guides You — Lineage &amp; Stillness</span>
                                    </div>
                                    <h2 class="forest-knowledge-title">
                                        The practitioner <span class="italic">matters more</span> than the property.
                                    </h2>
                                    <p class="forest-knowledge-desc">
                                        Every modality is led by someone we've vetted personally — their training, their years of practice, the tradition they were taught in, paired with scientific research &amp; retreat toolkits.
                                    </p>
                                    <div>
                                        <a href="about-us" class="forest-animated-line-link">
                                            <span class="line-bar"></span>
                                            <span>Explore Practitioner Guides &rarr;</span>
                                        </a>
                                    </div>
                                    <div class="forest-toolkits-section">
                                        <div class="forest-toolkits-title">Retreat &amp; Practice Toolkits</div>
                                        <a href="extended-stay-living-programs" class="forest-toolkit-item">
                                            <div>
                                                <div class="forest-toolkit-name">Personal Modality Planner</div>
                                                <span class="forest-toolkit-meta">Interactive Self-Check • 5 min</span>
                                            </div>
                                            <div class="forest-toolkit-icon"><i class="fa-solid fa-arrow-right"></i></div>
                                        </a>
                                        <a href="about-us" class="forest-toolkit-item">
                                            <div>
                                                <div class="forest-toolkit-name">Bio-Individual Nadi &amp; Sound Guide</div>
                                                <span class="forest-toolkit-meta">Research Paper • PDF Download</span>
                                            </div>
                                            <div class="forest-toolkit-icon"><i class="fa-solid fa-download"></i></div>
                                        </a>
                                        <a href="upcoming-experiences" class="forest-toolkit-item">
                                            <div>
                                                <div class="forest-toolkit-name">Upcoming Experiences (Antar Yatra)</div>
                                                <span class="forest-toolkit-meta">Seasonal Uttarakhand Departures</span>
                                            </div>
                                            <div class="forest-toolkit-icon"><i class="fa-solid fa-calendar"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="forest-knowledge-right">
                                    <div class="forest-gallery-stack">
                                        <img src="images/practitioner_sanctuary_base.png" alt="Sanctuary Garden" class="forest-gallery-main" />
                                        <img src="images/practitioner_guidance_overlap.png" alt="Guidance Session" class="forest-gallery-sub-1" />
                                        <img src="images/incense_accent_small.png" alt="Incense Detail" class="forest-gallery-sub-2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 4: The Process -->
                <div class="forest-stage-container" id="forestStage4" style="opacity: 0;">
                    <div class="forest-stage-inner text-center forest-stage-4-content">
                        <div class="forest-badge-pill">
                            <svg viewBox="0 0 64 64" width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" style="color: #b99a5b; filter: drop-shadow(0 0 2px rgba(255,250,235,0.9)) drop-shadow(0 0 6px rgba(217,169,79,0.85));">
                                <path d="M32,12 Q40,26 38,40 Q36,50 32,55 Q28,50 26,40 Q24,26 32,12 Z" stroke-width="1.8" />
                                <path d="M32,15 L32,53" stroke-width="1.4" />
                                <line x1="31" y1="21" x2="26.5" y2="18.5" stroke-width="1.3" />
                                <line x1="33" y1="21" x2="37.5" y2="18.5" stroke-width="1.3" />
                                <line x1="31" y1="27" x2="25" y2="24.5" stroke-width="1.3" />
                                <line x1="33" y1="27" x2="39" y2="24.5" stroke-width="1.3" />
                                <line x1="31" y1="33" x2="24.3" y2="31" stroke-width="1.3" />
                                <line x1="33" y1="33" x2="39.7" y2="31" stroke-width="1.3" />
                                <circle cx="32" cy="12" r="1.8" fill="currentColor" />
                            </svg>
                            <span>The Process</span>
                        </div>
                        <h2 class="forest-stage-4-title">How this begins.</h2>
                        <div class="forest-steps-stack">
                            <div class="forest-step-card" id="forestStep1" style="opacity: 0;">
                                <div class="forest-step-header">
                                    <span class="forest-step-num">01</span>
                                    <h3>Apply &amp; Align</h3>
                                </div>
                                <p>A short conversation, not a form. We learn what you're stepping away from before we decide where you should step.</p>
                            </div>
                            <div class="forest-step-card" id="forestStep2" style="opacity: 0;">
                                <div class="forest-step-header">
                                    <span class="forest-step-num">02</span>
                                    <h3>Arrive &amp; Disconnect</h3>
                                </div>
                                <p>No welcome packet, no schedule. Just the space, and permission to do nothing with it.</p>
                            </div>
                            <div class="forest-step-card" id="forestStep3" style="opacity: 0;">
                                <div class="forest-step-header">
                                    <span class="forest-step-num">03</span>
                                    <h3>Reset &amp; Renew</h3>
                                </div>
                                <p>Quieter than dramatic. That's usually why it lasts long after you return.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--<div class="our-features">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our features</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Rediscover peace through <span>simple village living</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Discover how village slow living gently restores balance, reduces mental noise, and reconnects you with nature, simplicity, and meaningful daily rhythms that support emotional well being and inner clarity.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="features-item wow fadeInUp">
                            <div class="features-item-content">
                                <p>Nature Walks</p>
                                <h3>Peaceful village walks through fields, trees, and fresh countryside air.</h3>
                            </div>
                            <div class="features-item-image">
                                <figure><img src="images/features-image-1.png" alt="Nature Walks" /></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="our-features-boxes">
                            <div class="features-box box-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="features-box-content">
                                    <p>Farm Activities</p>
                                    <h3>Participate in simple farming routines and connect with rural life.</h3>
                                </div>
                                <div class="features-box-image">
                                    <figure><img src="images/features-image-2.jpg" alt="Farm Activities" /></figure>
                                </div>
                            </div>
                            <div class="features-box box-2 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="features-box-content">
                                    <p>Farm Activities</p>
                                    <h3>Quiet evenings under open skies with calm conversations and tea.</h3>
                                </div>
                                <div class="features-box-image">
                                    <figure><img src="images/features-image-3.jpg" alt="Farm Activities" /></figure>
                                </div>
                            </div>
                            <div class="features-item features-box box-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="features-box-content">
                                    <p>Local Traditions</p>
                                    <h3>Experience authentic village customs, culture, and everyday rural living moments.</h3>
                                </div>
                                <div class="features-item-image">
                                    <figure><img src="images/features-image-4.png" alt="Local Traditions" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="scrolling-ticker">
            <div class="scrolling-ticker-box">
                <div class="scrolling-content">
                    <span><img src="images/icon-asterisk.svg" alt="Serene Flow" />Serene Flow</span
                    ><span><img src="images/icon-asterisk.svg" alt="Mindful Movement" />Mindful Movement</span
                    ><span><img src="images/icon-asterisk.svg" alt="Yoga Journey" />Yoga Journey</span
                    ><span><img src="images/icon-asterisk.svg" alt="Flex & Relax" />Flex & Relax</span
                    ><span><img src="images/icon-asterisk.svg" alt="Calm & Balance" />Calm & Balance</span
                    ><span><img src="images/icon-asterisk.svg" alt="Serene Flow" />Serene Flow</span
                    ><span><img src="images/icon-asterisk.svg" alt="Mindful Movement" />Mindful Movement</span
                    ><span><img src="images/icon-asterisk.svg" alt="Yoga Journey" />Yoga Journey</span
                    ><span><img src="images/icon-asterisk.svg" alt="Flex & Relax" />Flex & Relax</span
                    ><span><img src="images/icon-asterisk.svg" alt="Calm & Balance" />Calm & Balance</span>
                </div>
                <div class="scrolling-content">
                    <span><img src="images/icon-asterisk.svg" alt="Serene Flow" />Serene Flow</span
                    ><span><img src="images/icon-asterisk.svg" alt="Mindful Movement" />Mindful Movement</span
                    ><span><img src="images/icon-asterisk.svg" alt="Yoga Journey" />Yoga Journey</span
                    ><span><img src="images/icon-asterisk.svg" alt="Flex & Relax" />Flex & Relax</span
                    ><span><img src="images/icon-asterisk.svg" alt="Calm & Balance" />Calm & Balance</span
                    ><span><img src="images/icon-asterisk.svg" alt="Serene Flow" />Serene Flow</span
                    ><span><img src="images/icon-asterisk.svg" alt="Mindful Movement" />Mindful Movement</span
                    ><span><img src="images/icon-asterisk.svg" alt="Yoga Journey" />Yoga Journey</span
                    ><span><img src="images/icon-asterisk.svg" alt="Flex & Relax" />Flex & Relax</span
                    ><span><img src="images/icon-asterisk.svg" alt="Calm & Balance" />Calm & Balance</span>
                </div>
                <div class="scrolling-ticker-images">
                    <div class="scrolling-ticker-image">
                        <figure class="image-anime"><img src="images/scrolling-ticker-image-1.jpg" alt="" /></figure>
                    </div>
                    <div class="scrolling-ticker-image">
                        <figure class="image-anime"><img src="images/scrolling-ticker-image-2.jpg" alt="" /></figure>
                    </div>
                    <div class="scrolling-ticker-image">
                        <figure class="image-anime"><img src="images/scrolling-ticker-image-3.jpg" alt="" /></figure>
                    </div>
                    <div class="scrolling-ticker-image">
                        <figure class="image-anime"><img src="images/scrolling-ticker-image-4.jpg" alt="" /></figure>
                    </div>
                    <div class="scrolling-ticker-image">
                        <figure class="image-anime"><img src="images/scrolling-ticker-image-5.jpg" alt="" /></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-testimonials">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-image-content">
                            <div class="testimonial-image">
                                <figure class="image-anime reveal">
                                    <img src="images/testimonial-image.jpg" alt="<?php echo $webname; ?>" />
                                </figure>
                            </div>
                            <div class="testimonial-review-box wow fadeInUp">
                                <div class="testimonial-review-header">
                                    <div class="testimonial-review-title"><h3>Private Stay Consultation</h3></div>
                                    <div class="testimonial-review-counter">
                                        <span>Curated Cohorts</span>
                                    </div>
                                </div>
                                <div class="testimonial-review-body">
                                    <div class="testimonial-review-content">
                                        <p>
                                            Every Navtaara journey begins with an unhurried conversation to understand what you are stepping away from and match you with the right sanctuary.
                                        </p>
                                    </div>
                                    <div class="testimonial-review-btn">
                                        <a href="contact-us"><img src="images/arrow-white.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="our-testimonial-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Guest Reflections</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">
                                   <span>Real reflections</span> from those who chose stillness
                                </h2>
                            </div>
                            <div class="our-testimonial-box">
                                <!-- Reflection 1 -->
                                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="testimonial-author">
                                        <div class="author-profile-group">
                                            <div class="author-monogram">AM</div>
                                            <div class="author-content">
                                                <h3>Aarav Mehta</h3>
                                                <p>Founder &amp; Angel Investor • Bengaluru</p>
                                            </div>
                                        </div>
                                        <span class="testimonial-stay-badge"><i class="fa-solid fa-circle-check"></i> 14-Day Sabbatical</span>
                                    </div>
                                    <div class="testimonial-item-content">
                                        <p>
                                            In tech leadership, uninterrupted silence is essentially nonexistent. Navtaara gave me two full weeks without an inbox, an agenda, or artificial urgency. My sleep latency dropped from 45 minutes to falling asleep within 5, and the chronic cognitive fog that built up over seven years lifted naturally.
                                        </p>
                                    </div>
                                </div>
                                <!-- Reflection 2 -->
                                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="testimonial-author">
                                        <div class="author-profile-group">
                                            <div class="author-monogram">ER</div>
                                            <div class="author-content">
                                                <h3>Dr. Elena Rostova</h3>
                                                <p>Neuroscience Researcher &amp; Author • Zurich</p>
                                            </div>
                                        </div>
                                        <span class="testimonial-stay-badge"><i class="fa-solid fa-circle-check"></i> Nature Immersion</span>
                                    </div>
                                    <div class="testimonial-item-content">
                                        <p>
                                            The absence of programmatic pressure is what makes Navtaara genuinely rare. You aren't hurried through scheduled wellness regimens; the village rhythms, honest organic meals, and vetted lineage practitioners gently de-escalate your nervous system.
                                        </p>
                                    </div>
                                </div>
                                <!-- Reflection 3 -->
                                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="testimonial-author">
                                        <div class="author-profile-group">
                                            <div class="author-monogram">DS</div>
                                            <div class="author-content">
                                                <h3>Devika Singhania</h3>
                                                <p>Architecture &amp; Design Principal • Mumbai</p>
                                            </div>
                                        </div>
                                        <span class="testimonial-stay-badge"><i class="fa-solid fa-circle-check"></i> Extended Stay Living</span>
                                    </div>
                                    <div class="testimonial-item-content">
                                        <p>
                                            I was skeptical of 'slow living' claims until the third evening. The silence here is physical, deep, and grounding. Unhurried orchard walks and genuine quiet restored my creative focus and emotional equilibrium far more than any conventional commercial retreat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-faqs">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">FAQs</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Answers to common questions about <span>quiet living</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="#" class="btn-default">view all faqs</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="our-faqs-content">
                            <div class="faq-accordion" id="accordion">
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1" >
                                            What is <?php echo $webname; ?> ?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion" >
                                        <div class="accordion-body">
                                            <p>
                                                <?php echo $webname; ?> is a premium village-based slow living space designed for mentally tired individuals seeking calm, privacy, and a pressure-free environment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" >
                                            Is this a retreat or wellness program ?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion" >
                                        <div class="accordion-body">
                                            <p>
                                                No. We are not a retreat, therapy center, or structured wellness program. We simply provide a quiet environment for natural mental reset.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" >
                                            Who is this space designed for ?
                                        </button>
                                    </h2>
                                    <div
                                        id="collapse3"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="heading3"
                                        data-bs-parent="#accordion"
                                    >
                                        <div class="accordion-body">
                                            <p>
                                                Professionals, business owners, founders, senior executives, foreign visitors, and seniors who are mentally exhausted but functioning externally.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" >
                                            How is this different from a resort ?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Resorts focus on entertainment and activity. We focus on silence, simplicity, slow living, and environmental calm.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" >
                                            Do you provide therapy or medical treatment ?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion" >
                                        <div class="accordion-body">
                                            <p>
                                                No. We do not offer medical services, therapy, or psychological treatment. We provide a peaceful living environment only.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faqs-image">
                            <figure class="image-anime reveal"><img src="images/faqs-image.jpg" alt="" /></figure>
                            <div class="faqs-contact-box">
                                <div class="icon-box"><i class="fa-solid fa-phone-volume"></i></div>
                                <div class="faqs-contact-box-content">
                                    <h3>Still have Question?</h3>
                                    <p><a href="tel:<?php echo $phonenum1; ?>"></a><?php echo $phonenum1; ?></p>
                                </div>
                            </div>
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
        <script src="js/forest-scroll-sequence.js"></script>
    </body>
</html>
