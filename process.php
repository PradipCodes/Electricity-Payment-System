<?php
session_start();
include("connect.php");
if(!(isset($_SESSION['log_user'])))
{
	header("location:check.php");
}
else
{	
	$user_name=$_SESSION['log_user'];
?>
<html>
<head>
<title>
Nepal Electric Authority
</title>
<meta http-equiv="refresh" content="10; url=schpayment.php">
</head>
<body>
<center>
<h1>Nepal Electricity Bill Payment</h1>
<hr>
<p>
Your Will be redirect to payment<br>
Note: Do not refresh or close this page
</p>
Please wait...
</center>
</body>
</html>
<?php
}
?>