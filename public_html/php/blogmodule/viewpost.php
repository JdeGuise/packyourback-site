<?php require('includes/config.php');

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
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
            <li>
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
         <li >
            <button id="dropdown_donatebutton" onclick="location.href='https://www.classy.org/checkout/donation?eid=81983'" style="background-color:crimson;">Donate</button></li>
        </ul>
      </div>
    </div>
  </div>

	<div id="wrapper">

		<h1>Blog</h1>
		<hr />
		<p><a href="./">Back to Blogs</a></p>
			<div>
				<h1><?php print($row['postTitle']); ?></h1>
				<p>Posted on <?php print($row['postDate']); ?></p>
				<p><?php print($row['postCont']); ?></p>
			</div>
	</div>
  <br>
  <br>

</body>
    <script src="../../js/menu.js" ></script>

</html>