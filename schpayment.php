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
Electricity Bill Payment
</title>
<style>
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}

#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.header
{
		position:fixed;
		top:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;	
		opacity:.8;
		text-align:center;
}
		.footer
		{
		position:fixed;
		bottom:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;
		
		}
		.footer a
		{
color:#fff;
		}
		.container
		{
			padding-top:140px;
		}
</style>
</head>
<body>
<center>
<?php
include("includes/header.php");
?>
<div class="container">
<i>Note: Hover Over the Bank or Services Icon</i><br>
<img src="image/everestbank.jpg" width="80" title="Everest Bank">&nbsp;&nbsp;&nbsp;
<img src="image/global.jpg" width="90" title="Global IME Bank Ltd">&nbsp;&nbsp;&nbsp;
<img src="image/himalyan.jpg" width="100" title="Himalyan Bank">&nbsp;&nbsp;&nbsp;
<img src="image/laxmi.jpg" width="90" title="Laxmi Bank">&nbsp;&nbsp;&nbsp;
<img src="image/megabank.jpg" width="80" title="Mega Bank">&nbsp;&nbsp;&nbsp;
<img src="image/nabilbank.jpeg" width="80" title="Nabil Bank">&nbsp;&nbsp;&nbsp;
<img src="image/ncc.jpg" width="80" title="Nepal Credit & commerce Bank Ltd.">&nbsp;&nbsp;&nbsp;
<img src="image/nepal.jpg" width="80" title="Nepal Bank Ltd.">&nbsp;&nbsp;&nbsp;
<img src="image/nepalsbi.jpg" width="80" title="Nepal SBI Bank">&nbsp;&nbsp;&nbsp;
<img src="image/nic.jpg" width="80" title="NIC ASIA Bank">
<hr>
<p>Online Payment Services Supported</p>
<a href="https://www.esewa.com.np"><img src="image/esewa.png" width="80" title="eSewa Payment Service"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.khalti.com"><img src="image/khalti.png" width="80" title="Khalti Payment Service"></a>
<br>
<hr>
<h4>Choose Your Payment Method</h4>
<form action="payment.php" method="post">
<select name="bank" id="txt">
<option value="">Select Your bank</option>
 <?php
 $sql = "SELECT * FROM bank";
					$result = mysqli_query($con, $sql);
					while($rows=mysqli_fetch_array($result))
{ 
          ?>
              <option value="<?php echo $rows['bnk_name']?>"><?php echo $rows['bnk_name']?></option>
			  
    <?php
	}
?>
</select>
<input type="submit" name="ok" id="btn" value="Proceed">
</form>
<a href="cancel.php"><input type="submit"id="btn" value="Cancel"></a>
</div>
<center>
<?php
include("includes/footer.php");
?>
</center>
</body>
</html>
<?php
}
?>