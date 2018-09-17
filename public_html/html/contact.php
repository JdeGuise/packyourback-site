<title>Contact Us - Pack Your Back</title>
<?php include('includes/head.php'); ?>
<body class="body">
		<?php include('includes/htmlheader.php'); ?>

	<br>
	<br>
	<br>

	<div class="columns small-12 medium-12 large-12">

	<br>
	<br>

		<div class="login_wrapper" style="background-color: lightgray; margin:0 auto; max-width: 600px; min-height: 200px;">

		  <form method="post">
			  <div style="margin-left: 10px; margin-right: 10px;">
				  <label for="name">Name:</label>
				  <input type="text" id="name" name="user_name" />
			  </div>
			  <div style="margin-left: 10px; margin-right: 10px;">
				  <label for="mail">E-mail:</label>
				  <input type="email" id="mail" name="user_mail" />
			  </div>
			  <div style="margin-left: 10px; margin-right: 10px;">
				  <label for="msg">Message:</label>
				  <textarea id="msg" name="user_message"></textarea>
			  </div>

			  <div class="button" style="left: 20px; width:180px; height:80px;">
				  <button type="submit">Submit</button>
			  </div>
		  </form>

		</div>

	</div
  <br>
  <br>
    <? include("includes/footer.php");?>

	</body>
	<script src="../js/menu.js" ></script>


	</html>
