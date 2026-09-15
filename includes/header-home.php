<?php
	$currentfile=basename($_SERVER['PHP_SELF'],".php");
?>
<header class="main-header header-style1 flex">
	<div id="header">
	<!--<div class="header-top">
			<div class="header-top-wrap flex-two">
				<div class="header-top-right">
					<ul class="flex-three">
						<li class="flex-three"><i class="icon-mail"></i><span><?php echo $emailid1; ?></span></li>
						<li class="flex-three"><i class="icon-phone"></i><span><?php echo $phonenum1; ?> / <?php echo $phonenum2; ?></span></li>
					</ul>
				</div>
				<div class="header-top-left flex-two">
					<div class="follow-social flex-two">
						<span>Follow Us :</span>
						<ul class="flex-two">
							<li><a href="<?php echo $facebookurl; ?>" target="_blank" ><i class="icon-icon-2"></i></a></li>
							<li><a href="<?php echo $facebookurl; ?>" target="_blank" ><i class="icon-icon_03"></i></a></li>
							<li><a href="<?php echo $twitterurl; ?>" target="_blank" ><i class="icon-x"></i></a></li>
							<li><a href="<?php echo $linkedinurl; ?>" target="_blank" ><i class="icon-icon"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>-->
		<div class="header-lower" style="position: absolute;" >
			<div class="tf-container full">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-container flex justify-space align-center">
							
							<div class="nav-outer flex align-center">
								<nav class="main-menu show navbar-expand-md">
									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<?php if($currentfile=="index") { ?>
											<li class="current"><a href="<?php echo $websiteurl; ?>">HOME</a></li>
											<?php } else { ?>
											<li><a href="<?php echo $websiteurl; ?>">HOME</a></li>
											<?php } ?>
											
											<?php if($currentfile=="why-veda") { ?>
											<li class="current"><a href="why-veda">WHY VEDA ?</a></li>
											<?php } else { ?>
											<li><a href="why-veda">WHY VEDA ?</a></li>
											<?php } ?>
											
											<?php if($currentfile=="weddings") { ?>
											<li class="current"><a href="weddings">WEDDINGS</a></li>
											<?php } else { ?>
											<li><a href="weddings">WEDDINGS</a></li>
											<?php } ?>
											
											<?php if($currentfile=="corporate-events") { ?>
											<li class="current"><a href="corporate-events">CORPORATE EVENTS</a></li>
											<?php } else { ?>
											<li><a href="corporate-events">CORPORATE EVENTS</a></li>
											<?php } ?>
											
											<?php if($currentfile=="special-events") { ?>
											<li class="current"><a href="special-events">SPECIAL EVENTS</a></li>
											<?php } else { ?>
											<li><a href="special-events">SPECIAL EVENTS</a></li>
											<?php } ?>
											<?php if($currentfile=="gallery") { ?>
											<li class="current"><a href="gallery">GALLERY</a></li>
											<?php } else { ?>
											<li><a href="gallery">GALLERY</a></li>
											<?php } ?>
											
											<?php if($currentfile=="contact-us") { ?>
											<li class="current"><a href="contact-us">CONTACT US</a></li>
											<?php } else { ?>
											<li><a href="contact-us">CONTACT US</a></li>
											<?php } ?>
										</ul>
									</div>
								</nav>
							</div>
							<!--<div class="header-account flex align-center">
								<div class="icon-bar-header">
									<a href="#" class="flex-three" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="icon-Vector3"></i></a>
								</div>
							</div>-->
							<div class="mobile-nav-toggler mobile-button"><i class="icon-bar"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
	<div class="mobile-menu">
		<div class="menu-backdrop"></div>
		<nav class="menu-box">
			<div class="nav-logo">
				<a href="<?php echo $websiteurl; ?>"><img src="<?php echo $headerlogo; ?>" alt="<?php echo $webname; ?>" /></a>
			</div>
			<div class="bottom-canvas"><div class="menu-outer"></div></div>
		</nav>
	</div>
</header>