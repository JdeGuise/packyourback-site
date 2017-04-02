<?php require('includes/config.php'); ?>
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <title>PY Blog</title>
      <link rel="stylesheet" href="style/normalize.css">
      <link rel="stylesheet" href="style/main.css">
      <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
      <link rel="stylesheet" href="../../css/style.css" type="text/css">
      <link rel="stylesheet" href="../../css/foundation.css" />
      <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
      <script type="text/javascript" src="../js/main.js"></script>
      <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />
  </head>

<body class="body">

  <!-- row is from Foundation, and allows us to dynamically move elements on the page-->
    <header class="header">
          <!-- columns and small-12 are Foundation classes that split the browser window into 12 columns
              that can actively resize themselves -->
              <div class="columns small-12">

                <ul class="topnav" id="myTopNav">
                  <a href="../../index.php"><img id="logo" src="../../assets/pyb_row_270x70px.png"></a>
                  <li class="menuitem" onclick="location.href='../../index.php';">
                    <a href="../../index.php">Home</a></li>
                  <li class="menuitem" onclick="location.href='index.php';"><a href="index.php">Blog</a></li>
                  <li class="menuitem" onclick="location.href='../../html/leadership.php';">
                    <a href="../../html/leadership.php">Leadership</a></li>
                  <li class="menuitem" onclick="location.href='../../html/ourcause.php';">
                    <a href="../../html/ourcause.php">Our Cause</a></li>
                  <li class="menuitem" onclick="location.href='../../html/getinvolved.php';">
                    <a href="../../html/getinvolved.php">Get Involved</a></li>
          <!--                     <li class="menuitem"><a href="html/login.php">Login</a></li>
           -->      <li>
                    <button id="donatebutton" onclick="location.href='https://www.classy.org/checkout/donation?eid=81983'" style="background-color:crimson;">Donate</button></li>
                  <ul>
                    <img id="hamburger" src="../../assets/hamburgermenu-blue.png">
                  </ul>
                </ul>
              </div>
    </header>

    <div id="dropdownOverlay">
      <div class="thedropdown">
        <ul class="dropdown" id="myDropdown" >
          <li class="dropdown_menuitem" onclick="location.href='../../index.php';">
            <a href="../../index.php">Home</a></li>
             <li class="dropdown_menuitem" onclick="location.href='index.php';"><a href="index.php">Blog</a></li>
          <li class="dropdown_menuitem" onclick="location.href='../../html/leadership.php';">
            <a href="../../html/leadership.php">Leadership</a></li>
          <li class="dropdown_menuitem"onclick="location.href='../../html/ourcause.php';">
            <a href="../../html/ourcause.php">Our Cause</a></li>
          <li class="dropdown_menuitem" onclick="location.href='../../html/getinvolved.php';">
            <a href="../../html/getinvolved.php">Get Involved</a></li>
<!--                <li class="dropdown_menuitem"><a href="backend/index.php">Login</a></li>
-->         <li >
            <button id="dropdown_donatebutton" onclick="location.href='https://www.classy.org/campaign/pack-your-back/c114131'" style="background-color:crimson;">Donate</button></li>
        </ul>
      </div>
    </div>

<div class="row">
	<div class="columns small-12 medium-12 large-12">
  <br>
  <br>
    <br>
    <br>
    <h1 style="left:4%; text-align:left; position: relative;">PYBlog</h1>
    <hr />
		<?php
			try {

				$res = $db->query('SELECT postID, postTitle, postDesc, postDate, postImgPath FROM blog_posts ORDER BY postID DESC');
				while($row = $res->fetch()){ ?>
          <div class="columns small-12 medium-12 large-8 viewpostblogpost" style="position:relative;right:5%;">
            <br><br><br>
            <div style="text-align:center;max-width:80%;margin:auto;">
              <h1><a href="viewpost.php?id=<?php print($row['postID'] . $row['postTitle']);?>"></a></h1>
              <p>Posted on <?php print(date('jS M Y H:i:s', strtotime($row['postDate']))); ?></p>
              <p><?php print($row['postDesc']); ?></p>
              <p><a href="viewpost.php?id=<?php print($row['postID']); ?>">Read More</a></p>
            </div>
          </div>
          <br>
          <div class="columns small-12 medium-12 large-4" style="right:5%;position:relative;">
          <img src="../../<?php print($row['postImgPath']); ?>">
          <br>
          <br>
          <br>
          </div>
          <hr>
        <?php }
			}
      catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>
	</div>
</div>
  <br>
  <br>



  <? include("../../html/includes/footer.php") ?>


</body>
<script src="../../js/menu.js" ></script>
</html>