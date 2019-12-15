<?php
session_start();
include("includes/connect.php");
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
Nepal Electricty Bill Payment || Home
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/menustyle.css" type="text/css" />
</head>
<body>
<?php
include("includes/header.php");
?>
<div class="container">
<?php
include("includes/menu.php");
?>

<div class="bd">
<br>
<table border="1" width="900" id="customers">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>House Number</th>
			<th>Phone</th>
			<th>Bill No</th>
			<th>Amount</th>
			<th>Date</th>
			<th>Pending Payment</th>
		</tr>

			<?php
	 $query1="select * from bill join custumer on bill.cus_id=custumer.cus_id where bill.cus_id='$user_name'";
	 $result1=mysqli_query($con,$query1);
	 
?>
	 
        
		<?php
while($rows=mysqli_fetch_array($result1))
{
	?>
 <tr>
    <td><?php echo $rows['name']?></td>
    <td><?php echo $rows['address']?></td>
	 <td><?php echo $rows['houseno']?></td>
	 <td><?php echo $rows['phone']?></td>
	 <td><?php echo $rows['billno']?></td>  
	 <td><?php echo $rows['amount']?></td>  
	 <td><?php echo $rows['date']?></td>  
	 <td><?php echo $rows['payment']?></td> 
  </tr>
<?php
		}
?>
  </table>
</div>
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