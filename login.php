<?php 
	require_once 'config.php';

	if ( isset($_SESSION['access_token']) ) {
		header('Location: index.php');
		exit();
	}

	$redirectURL = "http://localhost/phptest/fb-callback.php";
	$permissions = ["email"];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="text" name="email" value="">
		<input type="password" name="password" value="">
	</form>
	<input type="button" onclick="window.location='<?php echo $loginURL;?>'" value="Login with Facebook">
</body>
</html>