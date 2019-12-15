<center>
<h1>Nepal Electricity Bill Payment</h1>
<hr>
<?php
session_start();
session_destroy();
setcookie("user", "", time()-3600);
echo "Your Have Been Logout <br><a href='index.php'> Click Here</a> To Exit";
?>
</center>