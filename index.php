<?php
include("includes/connect.php");
?>
<html>
<head>
<title>
Electricity Bill Payment || Home
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/menustyle.css" type="text/css" />
</head>
<body>
<?php
include("includes/header.php");
?>
<div class="contain">
<div class="section">
<div class="loginpad">
	<br>
	<form action="" method="post">
		<input type="text" name="c_id" id="txt" placeholder="Enter Your Customer ID" required>
		<br>
		<br>
		<input type="submit" name="btnlogin" id="btn" value="Enter">
	</form>
	<br>
	<br>
	<br>
	<label>Note: Your Customer Id located with your bill.<br>(Namely: Customer ID)</label><br>
	
	</div>
</div>
</div>
<center>
<?php
include("includes/footer.php");
?>
</center>
<?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$c_id = validate_input($_POST["c_id"]);
		if($c_id =="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
			$sql = "SELECT * FROM custumer where cus_id='$c_id'";
					$result = mysqli_query($con, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
   						session_start();
						$_SESSION['log_user']=$c_id;
						setcookie('user_n',$c_id,time() + 86400*30,'/');
						header("location:home.php");
					} 
					else
					{  				
						echo mysqli_error($con);
						return;
					}		
}
}
?>
</body> 
</html>