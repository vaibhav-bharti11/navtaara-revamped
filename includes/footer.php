<footer class="footer-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer-header">
					<div class="footer-about">
						<div class="footer-logo"><img src="<?php echo $footerlogo; ?>" alt="<?php echo $webname; ?>" /></div>
						<div class="about-footer-content">
							<p>Holistic practices for inner peace, focus, and overall well-being.</p>
						</div>
					</div>
					<div class="footer-social-links">
						<ul>
							<li><a href="<?php echo $facebookurl; ?>" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="<?php echo $instagramurl; ?>" target="_blank" ><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="<?php echo $linkedinurl; ?>" target="_blank" ><i class="fa-brands fa-linkedin"></i></a></li>
							<li><a href="<?php echo $twitterurl; ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="footer-links">
					<h3><?php echo $webname; ?></h3>
					<p><?php echo $companybrief; ?></p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
				<div class="footer-links">
					<h3>Important link</h3>
					<ul>
						<li><i class="fa fa-angle-right"></i> <a href="<?php echo $websiteurl; ?>">Home</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="about-us">About us</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="gallery">Gallery</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="faqs">FAQs</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="contact-us">Contact Us</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="privacy-policy">Privacy Policy</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="terms-conditions">Terms & Conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="footer-links">
					<h3>Our Offerings</h3>
					<ul>
						<li><i class="fa fa-angle-right"></i> <a href="extended-stay-living-programs">Extended Stay Living Programs</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="life-transition-sabbatical-experiences">Life Transition & Sabbatical Experiences</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="nature-based-immersive-environments">Nature-Based Immersive Environments</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="curated-property-partnerships-across-india">Curated Property Partnerships Across India</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="structured-guest-screening-guided-onboarding">Structured Guest Screening <!--& Guided Onboarding--></a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3">
				<div class="footer-links footer-contact-links">
					<h3>Contact</h3>
					<ul>
						<li><i class="fa fa-phone"></i> <a href="tel:<?php echo $phonenum1; ?>"><?php echo $phonenum1; ?></a> </li>
						<li><i class="fa fa-phone"></i> <a href="tel:<?php echo $phonenum2; ?>"><?php echo $phonenum2; ?></a></li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $emailid1; ?>"><?php echo $emailid1; ?></a></li>
						<li><i class="fa fa-map-marker"></i> <?php echo $coreaddress; ?></li>
						<li><i class="fa fa-globe"></i> <?php echo $domainname; ?></li>
					</ul>
				</div>
			</div>
			<!--<div class="col-lg-3 col-md-3">
				<div class="footer-newsletter-box">
					<div class="section-title">
						<h2 class="text-anime-style-2" data-cursor="-opaque">
							Subscribe for Yoga Tips and Inspiration
						</h2>
					</div>
					<div class="newsletter-form">
						<form id="newsletterForm" action="#" method="POST">
							<div class="form-group">
								<input
									type="email"
									name="email"
									class="form-control"
									id="mail"
									placeholder="Enter Your Email"
									required
								/><button type="submit" class="newsletter-btn">
									<i class="fa-solid fa-paper-plane"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>-->
			<div class="col-lg-12">
				<div class="footer-copyright">
					<div class="footer-copyright-text"><p>Copyright © <?php echo $currentyear; ?> All Rights Reserved. Developed By <a href="https://www.sparshitsolutions.com" target="_blank" >Sparsh IT Solutions</a></p></div>
					<div class="footer-privacy-policy">
						<ul>
							<li><a href="privacy-policy">Privacy policy</a></li>
							<li><a href="terms-conditions">Terms & condition</a></li>
							<!--<li><a href="#">help</a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?php echo $whatsappnumber; ?>", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->