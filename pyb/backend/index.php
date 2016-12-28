<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: home.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
  
 }
?>
  <head>
    <title>Pack Your Back - Supplying Success</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/foundation.css" />
    
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
  </head>
   <body class="body">
      <div class="row">
        
  <!-- row is from Foundation, and allows us to dynamically move elements on the page-->
         <header class="header">
  <!-- columns and small-12 are Foundation classes that split the browser window into 12 columns 
      that can actively resize themselves -->
            <div class="columns small-12">

                 <ul class="topnav" id="myTopNav">
                <a href="../index.html">
                  <img id="logo" src="../assets/pyb_row_270x70px.png">
                </a>
                  <li class="menuitem"><a href="../index.html">Home</a></li>
                  <li class="menuitem"><a href="leadership.html">Staff</a></li>                  
                  <li class="menuitem"><a href="blog.html">Causes</a></li>
                  <li class="menuitem"><a href="getinvolved.html">Get Involved</a></li>
                    <li class="menuitem"><a href="login.php">Login</a></li>
                 </ul>
            </div>
        </header>     
      </div>
    <br>
    <br>
    <br>




            



<div class="container">

 <div id="login-form" style="background-color: lightgray; margin:0 auto; max-width: 600px; min-height: 200px; max-height: 400px;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="columns medium-12">
        
              <div class="field" style="margin: 0 auto;">
                    <br>
                      <img src="../assets/pyb_row_270x70px.png" style="display:block; margin: 0 auto;" />
                      <br>
              </div>  

         <div class="form-group">
             <h2 class="">Sign In.</h2>
        </div>
        
         <div class="form-group">
             <hr />
        </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="email" class="form-control" placeholder="Email" style="text-align:left; margin-left: 45px; max-width: 510px; max-height:30px" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" style="text-align:left; margin-left: 45px; max-width: 510px; max-height:30px" placeholder="Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" style="margin-left:45px; width: 510px;" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="register.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>

<?php ob_end_flush(); ?>