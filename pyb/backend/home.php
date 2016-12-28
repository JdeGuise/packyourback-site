<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<html>
  <head>
      <title>Pack Your Back - Supplying Success</title>
      
      <meta charset="utf-8"/>
      <meta name="viewport" content="initial-scale=1.0">
      <meta name="google-site-verification" content="qt_-l__afKRIRexX94lbqPj8nf87AolmgIn0vJMInSc" />
      
      <link rel="stylesheet" href="../css/style.css" type="text/css">
      <link rel="stylesheet" href="../css/foundation.css" />
      <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
      
      <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

  </head>

  <body class="body">
      <div class="row">
        
  <!-- row is from Foundation, and allows us to dynamically move elements on the page-->
         <header class="header">
  <!-- columns and small-12 are Foundation classes that split the browser window into 12 columns 
      that can actively resize themselves -->
            <div class="columns small-12 medium-12 large-12">

                 <ul class="topnav" id="myTopNav">
                  <a href="../index.html">
                    <img id="logo" src="../assets/pyb_row_270x70px.png">
                  </a>
                  <li class="menuitem"><a href="../index.html">Home</a></li>
                  <li class="menuitem"><a href="logout.php">Logout</a></li>
                 </ul>
            </div>

        </header>
    </div>

</body>
</html>
<?php ob_end_flush(); ?>