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
Nepal Electricity Bill Payment
</title>
<style>
body
{
	background-color:#ccc;
}
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}
#sl
{
	width:125px;
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
			padding-top:120px;
		}
		table
		{
			text-align:center;
		}
		.section
		{
			
		background-color:#fff;
		width:700px;
		height:490px;
		border-radius:10px;
		
		}
</style>
</head>
<body>
<?php
include("includes/header.php");
?>
<center>
<div class="container">
<div class="section">
<?php
$bank=$_POST["bank"];
echo "You have Choose: ".$bank."<br>";
$dt=date("m/d/Y");
$query1="select * from bill join custumer on bill.cus_id=custumer.cus_id where payment='Not Complete'";
$result1=mysqli_query($con,$query1);
$rows=mysqli_fetch_array($result1);
	echo "Name: ".$rows['name']."<br>";
	echo "Bill NO: ".$rows['billno']."<br>";
	echo "Amount: ".$rows['amount']."<br>";
	$amount=$rows['amount'];
?>
		<br>
<form action="" method="post">
		<input type="text" name="ch" id="txt" placeholder="Card Holder" required>
		<br>
		<br>
		<input type="text" name="cn" id="txt" placeholder="Card Number" required>
		<br>
		<br>
		<input type="text" name="cvs" id="txt" placeholder="CVS" required>
		<br>
		<br>
		<select name="card" id="txt">
		<option value="">Select Your Card</option>
		<?php
		$sql = "SELECT * FROM card";
					$result = mysqli_query($con, $sql);
					while($rows=mysqli_fetch_array($result))
		{ 
          ?>
              <option value="<?php echo $rows['card_name']?>"><?php echo $rows['card_name']?></option>  
		<?php
		}
		?>
</select>
<br>
<label>Card Expire On</label><br>
<select name="mm" id="sl">
		<option value="">Select Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
          ?>
              <option value="<?php echo $i?>"><?php echo $i?></option>  
		<?php
		}
		?>
</select>
<select name="yy" id="sl">
		<option value="">Select Month</option>
		<?php
		$dy=date("Y");
		for($jk=$dy;$jk<=2050;$jk++)
		{
          ?>
              <option value="<?php echo $jk?>"><?php echo $jk?></option>  
		<?php
		}
		?>
</select>
		<br>
		<br>
		<input type="submit" name="btnpro" id="btn" value="Pay Now">
	</form>
	<a href="cancel.php"><input type="submit"id="btn" value="Cancel"></a><br>
	<?php
	echo "Confirm Your Payment of Rs.".$amount." By clicking The Button Pay Now<br>";
	?>
  </center>
  </div>
  </div>
  <?php
  if(isset($_POST["btnpro"]))
  {
	  function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$ch = validate_input($_POST["ch"]);
			$cn = validate_input($_POST["cn"]);
			$cvs = validate_input($_POST["cvs"]);
			$mm = validate_input($_POST["mm"]);
			$yy = validate_input($_POST["yy"]);
			$month=$mm."/".$yy;
		if($ch =="" || $cn=="" || $cvs=="" || $mm=="" || $yy=="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
		$query="update bill set date='$dt', payment='Complete' where cus_id='$user_name'";
		if(mysqli_query($con,$query))
		{
			?>	
				<script type="text/javascript">
				window.location.href = 'complete.php';
				</script>
			<?php
		}
		else
		{
			echo "<script> alert('Check if the field conatin special charecter or contact administrator');</script>";
		}	
		}
  }
  ?>
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