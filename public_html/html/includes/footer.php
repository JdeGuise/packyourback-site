<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/foundation.css" />
</head>

<body>

	<!-- START: ToS/PP CSS --> 
		<style type="text/css">

			.modal {
			    display: none; /* Hidden by default */
			    position: fixed; /* Stay in place */
			    z-index: 1; /* Sit on top */
			    padding-top: 100px; /* Location of the box */
			    left: 0;
			    top: 0;
			    width: 100%; /* Full width */
			    height: 100%; /* Full height */
			    overflow: auto; /* Enable scroll if needed */
			    background-color: rgb(0,0,0); /* Fallback color */
			    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
			}

			/* The Close Button */
			.tos_close, .pp_close{
			    color: #aaaaaa;
			    float: right;
			    font-size: 28px;
			    font-weight: bold;
			}

			.pp_close:hover, .tos_close:hover,
			.pp_close:focus, .tos_close:focus {
			    color: #000;
			    text-decoration: none;
			    cursor: pointer;
			}
			.modal div .pp_close, .modal div .tos_close{
				position:relative;
				right: 60px;
			}

		</style>
	<!-- END: ToS/PP CSS -->

	<footer class="footer">

		<div class="row">
			<div class="columns small-7 medium-7 large-7 footer_top">			
				<div class="row el3">
					<div class="columns large-7 medium-12 el1">

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
					
					<div class="columns large-5 medium-12 footer_soc_media el2">
						<div class="floatright">

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
				</div>

				<hr id="undertoprow">
					<div class="row ">
						<div class="columns large-7 medium-12 el4">
							<div class="sitelinks">

								<a href="#" id="tos_btn">Terms of Service</a> <b>|</b>
								<a href="#" id="pp_btn">Privacy Policy</a> <b>|</b> 
									<a href="html/contact.php">Contact Us</a> <b>|</b>
									<a href="index.php">Site Map</a> <b>|</b>
									<a href="https://www.classy.org/campaign/pack-your-back/c114131/">Donate</a>

							</div>



							<!-- Can we refactor this down to load the message, whether TOS or privacy policy?-->
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
						<!-- <div style="display: none"></div> -->
						<div class="columns medium-12 lines_shift">
							<hr class="lines_shift el4">
						</div>
						<div class="columns large-5 medium-12">
							<div class="floatright">
								<h2> ©2017 Pack Your Back </h2>
							</div>
						</div>
					</div>
					<hr class="hrstyle">
					<div class="row">
						<div class="contactinfo">
							<h2>Pack Your Back <b>|</b> (877) 932-5277 <b>|</b> Bad Axe, Michigan</h2>
							<br>
							<a href="https://server228.web-hosting.com:2096/cpsess1169873824/horde/imp/dynamic.php?page=mailbox#mbox:SU5CT1g">Member Login</a>
						</div>
					</div>
				</div>
				<div class="columns small-5 medium-5 large-5 sidebar" style="text-align: center;">
					<br>
					<img id="footer_pyb" src="assets/pyb_row_270x70px.png">
					<br>

					<p style="color: black"><b>2017/2018 Organizational Sponsors:</b></p>
					      <div class="row footer_sponsor" style="text-align:center;" >
						      <div class="columns small-4 medium-4 large-4" id="sponsora">
							      <a href="http://www.cmufa.com/"><img src="assets/logos/cmufa_logo.png"/></a>
						      </div>
						      <div class="columns small-4 medium-4 large-4" id="sponsorb">
						      		<a href="https://www.concentra.com"><img src="assets/logos/concentra.png"></a>
						      </div>
						      <div class="columns small-4 medium-4 large-4" id="sponsorc">
						      		<a href="http://www.brightsidedental.com"><img src="assets/logos/brightsidedental.png"></a>
						      </div>
					      </div>
				</div>
			</div>
	</footer> <!-- close footer content -->
	<script src="js/modal_ctrl.js"></script>
</body>