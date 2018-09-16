<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/tos_pp.css">
</head>
<body>
	<footer class="footer">
			<div class="columns small-12 medium-8 large-8 footer_top">
				<div class="row el3">
					<div class="columns small-12 medium-12 large-7 el1">
						<br>
						<h4>Join Our Newsletter</h4>
						<form action="index.php" method="post" class="subscribe-form">
							<input type="email" name="email" class="subscribe-input" placeholder="Email address">
								<button type="submit" class="subscribe-submit">Subscribe</button>
						</form>
						<br>
					</div>

					<div class="columns medium-12 lines_shift">
						<hr class="lines_shift">
					</div>
					<div class="columns small-12 medium-12 large-5 footer_soc_media el2">
							<br>
							<h4>Find Us Elsewhere</h4>
							<a href="https://www.linkedin.com/company/10569483?trk=tyah&trkInfo=tarId%3A1459660539341%2Ctas%3Apack%20your%20back%2Cidx%3A1-1-1"><img id="soc_med_foot" src="assets/social_media/linkedin.png"></a>

							<a href="https://twitter.com/packyourback">
								<img src="assets/social_media/twitter.png">
							</a>
							<a href="https://www.facebook.com/PackYourBack/">
								<img src="assets/social_media/facebook.png">
							</a>
							<a href="#">
								<img src="assets/social_media/email_white.png">
							</a>
					</div>
				</div>

				<hr id="undertoprow">
				<div class="row">
						<div class="columns small-12 medium-12 large-12 el4">
							<div class="sitelinks">
								<a href="#" id="tos_btn">Terms of Service</a> <b>|</b>
								<a href="#" id="pp_btn">Privacy Policy</a> <b>|</b>
								<a href="html/contact.php">Contact Us</a> <b>|</b>
								<a href="https://www.paypal.me/PackYourBack">Donate</a>

								<div id="tos_modal" class="modal">
									<div class="tos_modal_content">
										<span class="tos_close">&times;</span>
										<p><?php include('html/tos.html'); ?></p>
									</div>
								</div>

								<div id="pp_modal" class="modal">
									<div class="privacy_modal_content">
										<span class="pp_close">&times;</span>
										<p><?php include('html/pp.html'); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="columns medium-12 lines_shift">
							<hr class="lines_shift el4">
						</div>

						<br>
						<br>
						<div class="columns small-12 medium-12 large-12">
							<h2>Pack Your Back <b>|</b> (877) 932-5277 <b>|</b> Bad Axe, Michigan</h2>
						</div>
				</div>

				<hr class="hrstyle">
			</div>
			<div class="row">
				<div class="columns small-12 medium-12 large-12">
						<h2 style="left: 50px; position: relative;"> ©2018 Pack Your Back </h2>
						<h6 style="color: rgb(110, 110, 110); text-align: center;">Site by <a href="mailto:john.r.deguise@gmail.com" class="mail">John deGuise</a></h6>
				</div>
			</div>
	</footer> <!-- close footer content -->
	<script src="js/modal_ctrl.js"></script>
</body>
