
<!DOCTYPE html>
<html>
  <head>
	<title>Pack Your Back - Supplying Success</title>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="../css/contact.css">


	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />
  </head>

   <body class="body">
      <div class="row">

  <!-- row is from Foundation, and allows us to dynamically move elements on the page-->
         <header class="header">
  <!-- columns and small-12 are Foundation classes that split the browser window into 12 columns
      that can actively resize themselves -->
      <div class="columns small-12">

        <ul class="topnav" id="myTopNav">
          <a href="../index.php"><img id="logo" src="../assets/pyb_row_270x70px.png"></a>
          <li class="menuitem" onclick="location.href='../index.php';">
            <a href="../index.php">Home</a></li>
<!--             <li class="menuitem" onclick="location.href='../php/blogmodule/index.php';"><a href="../php/blogmodule/index.php">Blog</a></li>
 -->          <li class="menuitem" onclick="location.href='leadership.php';">
            <a href="leadership.php">Leadership</a></li>
          <li class="menuitem" onclick="location.href='ourcause.php';">
            <a href="ourcause.php">Our Cause</a></li>
          <li class="menuitem" onclick="location.href='getinvolved.php';">
            <a href="getinvolved.php">Get Involved</a></li>
  <!--                     <li class="menuitem"><a href="html/login.php">Login</a></li>
   -->      <li>
            <button id="donatebutton" onclick="location.href='https://www.classy.org/campaign/pack-your-back/c114131'" style="background-color:crimson;">Donate</button></li>
          <ul>
            <img id="hamburger" src="../assets/hamburgermenu-blue.png">
          </ul>
        </ul>
      </div>
    </header>

    <div id="dropdownOverlay">
      <div class="thedropdown">
        <ul class="dropdown" id="myDropdown" >
          <li class="dropdown_menuitem" onclick="location.href='../index.php';">
          <br>
            <a href="../index.php">Home</a></li>
<!--             <li class="dropdown_menuitem" onclick="location.href='../php/blogmodule/index.php';"><a href="../php/blogmodule/index.php">Blog</a></li>
 -->          <li class="dropdown_menuitem" onclick="location.href='leadership.php';">
            <a href="leadership.php">Leadership</a></li>
          <li class="dropdown_menuitem"onclick="location.href='ourcause.php';">
            <a href="ourcause.php">Our Cause</a></li>
          <li class="dropdown_menuitem" onclick="location.href='getinvolved.php';">
            <a href="getinvolved.php">Get Involved</a></li>
<!--                <li class="dropdown_menuitem"><a href="backend/index.php">Login</a></li>
-->         <li >
            <button id="dropdown_donatebutton" onclick="location.href='https://www.classy.org/campaign/pack-your-back/c114131'" style="background-color:crimson;">Donate</button></li>
        </ul>
      </div>
    </div>
    </div>

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

	</div>

	</body>
	<script src="../js/menu.js" ></script>

	</html>