<?php
	$currentfile=basename($_SERVER['PHP_SELF'],".php");
?>
<div class="preloader">
	<div class="loading-container">
		<div class="loading"></div>
		<div id="loading-icon"><img src="images/loader.svg" alt="" /></div>
	</div>
</div>
<header class="main-header">
	<div class="header-sticky">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="<?php echo $websiteurl; ?>"><img src="<?php echo $headerlogo; ?>" alt="<?php echo $webname; ?>" /></a>
				<div class="collapse navbar-collapse main-menu">
					<div class="nav-menu-wrapper">
						<ul class="navbar-nav mr-auto" id="menu">
							<li class="nav-item"><a class="nav-link" href="<?php echo $websiteurl; ?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us">About Us</a></li>
							<li class="nav-item submenu">
								<a class="nav-link" href="#">What We Offer</a>
								<ul>
									<li class="nav-item"><a class="nav-link" href="extended-stay-living-programs">Extended Stay Living Programs</a></li>
									<li class="nav-item"><a class="nav-link" href="life-transition-sabbatical-experiences">Life Transition & Sabbatical Experiences</a></li>
									<li class="nav-item"><a class="nav-link" href="nature-based-immersive-environments">Nature-Based Immersive Environments</a></li>
									<li class="nav-item"><a class="nav-link" href="curated-property-partnerships-across-india">Curated Property Partnerships Across India</a></li>
									<li class="nav-item"><a class="nav-link" href="structured-guest-screening-guided-onboarding">Structured Guest Screening & Guided Onboarding</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
							<li class="nav-item highlighted-menu"><a class="nav-link" href="#">Book Appointment</a></li>
						</ul>
					</div>
					<div class="header-contact-btn">
						<a href="tel:<?php echo $phonenum1; ?>" class="header-contact-now"
							><i class="fa-solid fa-phone-volume"></i><?php echo $phonenum1; ?></a
						><a href="#" class="btn-default">Get Started</a>
					</div>
				</div>
				<div class="navbar-toggle"></div>
			</div>
		</nav>
		<div class="responsive-menu"></div>
	</div>
</header>