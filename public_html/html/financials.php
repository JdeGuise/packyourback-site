<!DOCTYPE html>
<html>
  <head>
	<title>Pack Your Back - Supplying Success</title>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/foundation.css" />

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

	  <h2 style="text-align: center;">Financial Overview</h2>
	  <p style="text-align:center;">blahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblah</p>

	  <br/>

	  <h3>Accounting</h3>

	  <!--  fill out with two column paragraphs on revenues, expenses, and plans for the money.  wrap it up with some hyperlinks-->
	  <!--  to recent financial documents relevant to the org-->
	  <div>
	  </div>

		<div class="row">
		  <h3>Join the Conversation</h3>

		  <div class="columns small-12">
			<div class="columns small-3">
			  <div class="sm_circles"></div>
			</div>

			<div class="columns small-3">
			  <div class="sm_circles"></div>
			</div>

			<div class="columns small-3">
			  <div class="sm_circles"></div>
			</div>

			<div class="columns small-3">
			  <div class="sm_circles"></div>
			</div>
		 </div>
		</div>

	<br/>
	<!-- Footer Section -->
		<? include("includes/footer.php");?> 
	<!-- close footer content -->

	</body>
	<script src="../js/menu.js" ></script>
  </html>