<?php require('includes/config.php'); ?>
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Blog - <?php echo $row['postTitle'];?></title>
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
    <h1 style="left:4%; text-align:left; position: relative;">The PYB Blog</h1>
    <hr />
		<?php
			try {

				$res = $db->query('SELECT postID, postTitle, postDesc, postDate, postImgPath FROM blog_posts ORDER BY postID DESC');
				while($row = $res->fetch()){ ?>
          <div class="columns small-12 medium-12 large-8 viewpostblogpost" style="position:relative;right:5%;">
            <br><br><br>
            <div style="text-align:center;max-width:80%;margin:auto;">
              <h1><a href="viewpost.php?id="<?php print($row['postID'] . $row['postTitle']);?>></a></h1>;
              <p>Posted on <?php print(date('jS M Y H:i:s', strtotime($row['postDate']))); ?></p>;
              <p><?php print($row['postDesc']); ?></p>';
              <p><a href="viewpost.php?id="<?php print($row['postID']); ?>>Read More</a></p>;
            </div>
          </div>
          <br>
          <div class="columns small-12 medium-12 large-4" style="right:5%;position:relative;">
          <img src="../../"<?php print($row['postImgPath']); ?>>
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
<footer class="footer">
<div class="after">
        <div class="row fwrapper">
            <div class="columns small-12 medium-12 large-3" id="footer1">
              <div class="content">
                <img src="../../assets/pyb_row.png" style="height:60px; width: 240px;">
                <br>
                <br>
                <h4 style="left:23px;">(989) 975-8969</h4>
                <br>
                <h4 style="left:23px;">
                  Bad Axe, Michigan
                </h4>


              </div>
            <br>
            <br>
            <br>
            <br>
              <div class="content" id="social_media_footer" style="left:23px;">
                <h4>Find Us Elsewhere</h4>
                  <a href="https://www.linkedin.com/company/10569483?trk=tyah&trkInfo=tarId%3A1459660539341%2Ctas%3Apack%20your%20back%2Cidx%3A1-1-1">
                    <img src="../../assets/social_media/linkedin.png">
                  </a>
                    <a href="https://twitter.com/packyourback">
                    <img src="../../assets/social_media/twitter.png">
                    </a>
                   <a href="https://www.facebook.com/PackYourBack/">
                    <img src="../../assets/social_media/facebook.png">
                   </a>
                    <a href="../../html/contact.php">
                      <img src="../../assets/social_media/email_white.png">
                    </a>
              </div>
            </div>
            <div class="columns small-12 medium-12 large-3" id="footer2">

                <br>
                <br>
                <br>
                <br>

          <section class="subscribe">
            <div class="subscribe-pitch">
              <h4>Join Our Newsletter</h4>
              <p>Get the latest developments straight to your inbox.<p>
            </div>
            <form action="../php/subscribe.php" method="post" class="subscribe-form">
              <input type="email" name="email" class="subscribe-input" placeholder="Email address">
              <button type="submit" class="subscribe-submit">Subscribe</button>
            </form>
          </section>

            </div>
            <div class="columns small-12 medium-12 large-3" id="footer3">
            <br>
            <br>
              <div class="content">
                <h4>Who We Are</h4>
                <ul>
                    <li><a href="../../html/leadership.php">Our People</a></li>
<!--                     <li><a href="html/financials.html" >Financial Overview</a></li>
 -->                    <li><a href="../../html/contact.php">Contact Us</a></li>
                </ul>
              </div>
            <br/>
            <br>
            <br>
<!--               <button class="footer_buttons">Privacy Policy</button>
 -->            <br/>
            </div>

          <div class="columns small-12 medium-12 large-3" id="footer4">
          <br>
          <br>
                <div class="content">
                <h4>Get Involved</h4>
                <ul>
                    <li><a href="../../html/getinvolved.php">Work With Us</a></li>
                    <li><a href="https://www.classy.org/campaign/pack-your-back/c114131">Donate</a></li>
                </ul>
                </div>
                <br>
                <br>
                <br>
                <br>
<!--              <button class="footer_buttons" id="terms_of_use">Terms of Use</button>
 -->          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row" id="footer_legal">

            <div class="columns small-12">
              <p id="org_p">PACK YOUR BACK IS A REGISTERED 501(C)(3) NONPROFIT ORGANIZATION. &copy;2016 &nbsp;&nbsp;<a href="https://server228.web-hosting.com:2096/cpsess1169873824/horde/imp/dynamic.php?page=mailbox#mbox:SU5CT1g">Member Login</a></p>
            </div>
        </div>
      </div>  <!-- close container -->
</footer>

</body>
<script src="../../js/menu.js" ></script>
</html>