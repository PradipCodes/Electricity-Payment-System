<?php
$con = mysqli_connect("localhost","root","","electribill");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 