<?php
	$currentfile=basename($_SERVER['PHP_SELF'],".php");
?>
<header class="main-header header-style1 flex position-relative header-inner-container" >
	<div id="header">
		<div class="header-lower background-pattern-repeat-1"> <!--  -->
			<div class="tf-container full">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-container flex justify-space align-center">
							<div class="logo-box">
								<div class="logo">
									<a href="<?php echo $websiteurl; ?>"><img src="<?php echo $headerlogo; ?>" alt="<?php echo $webname; ?>" /></a>
								</div>
							</div>
							<div class="nav-outer flex align-center">
								<nav class="main-menu show navbar-expand-md">
									<div class="navbar-collapse collapse clearfix header-inner" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<?php if($currentfile=="index") { ?>
											<li class="current"><a href="<?php echo $websiteurl; ?>">HOME</a></li>
											<?php } else { ?>
											<li><a href="<?php echo $websiteurl; ?>">HOME</a></li>
											<?php } ?>
											
											<?php if($currentfile=="about-us") { ?>
											<li class="current"><a href="about-us">ABOUT US</a></li>
											<?php } else { ?>
											<li><a href="about-us">ABOUT US</a></li>
											<?php } ?>
											
											<?php if($currentfile=="beyond-experiences") { ?>
											<li class="current"><a href="beyond-experiences">BEYOND EXPERIENCES</a></li>
											<?php } else { ?>
											<li><a href="beyond-experiences">BEYOND EXPERIENCES</a></li>
											<?php } ?>
											
											<li class="dropdown2">
												<a href="#">OUR HOTELS</a>
												<ul class="properties-with-us">
													<li><a href="rajasthan">Rajasthan</a></li>
													<li><a href="himachal">Himachal Pradesh</a></li>
													<li><a href="goa">Goa</a></li>
													<li><a href="gujarat">Gujarat</a></li>
													<li><a href="delhi">Delhi</a></li>
													<!--<li><a href="haryana">Haryana</a></li>
													<li><a href="maharastra">Maharastra</a></li>-->
													<li><a href="uttrakhand">Uttrakhand</a></li>
												</ul>
											</li>
											
											
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
							<div class="cstmmbtn">
								<ul>
									<li>
										<a href="tel:+91-9818906360<?php echo $phonenum1; ?>"><i class="icon-Group-9"></i> GET A CALL BACK</a>
									</li>
								</ul>
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