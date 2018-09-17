<title>Contact Us - Pack Your Back</title>
<?php include('includes/head.php'); ?>
<body class="body">
	<?php include('includes/header.php'); ?>

	<br>
	<br>
	<br>

	<div class="columns small-12 medium-12 large-12">

		<br>
		<br>

		<div id="contact-wrapper">
		  <form method="post" id="contact-form">
			  <div>
				  <label for="name">Name:</label>
				  <input type="text" id="name" name="user_name" />
			  </div>
			  <div>
				  <label for="mail">E-mail:</label>
				  <input type="email" id="mail" name="user_mail" />
			  </div>
			  <div>
				  <label for="msg">Message:</label>
				  <textarea id="msg" name="user_message"></textarea>
			  </div>

			  <div class="button">
				  <button type="submit">Submit</button>
			  </div>
		  </form>
		</div>
	</div>

  <br>
  <br>

	<? include("includes/footer.php");?>
	<script src="../js/menu.js" ></script>
</body>
</html>
