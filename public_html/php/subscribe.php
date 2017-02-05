<?php

$link = mysqli_connect("localhost", "packecoe_root", "Dug0Ng@kAManat3e?", "packecoe_packyourback");

if($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($link, $_POST['email']);
$ipaddr = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('Detroit');
$datetime = date('Y/m/d h:i:s', time());

// attempt insert query execution
$sql = "INSERT INTO
			subscriber (email, signup_datetime, signup_ipaddr)
		VALUES ('$email', '$datetime', '$ipaddr')";

if(mysqli_query($link, $sql)){

	$newURL = "http://www.packyourback.org";
	header('Location: '.$newURL, true, '303');
	die();
}
else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);

?>
