<?php
$Ref	 = $_POST[vpc_MerchTxnRef];
$Name	 = $_POST[Name];
$Email	 = $_POST[Email];
$Tel	 = $_POST[Telephone];
$Add1	 = $_POST[Address1];
$Add2	 = $_POST[Address2];
$City	 = $_POST[City];
$State	 = $_POST[State];
$Country = $_POST[Country];
$Amount	 = $_POST[Amount];
$Date 	 = date('Y-m-d');

$con = mysql_connect("localhost","ecoagycq_admin","eco123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ecoagycq_overseas", $con);

$sql="INSERT INTO main (ref, date, name, email, tel, add1, add2, city, state, country, amount)
VALUES
('$Ref','$Date','$Name','$Email','$Tel','$Add1','$Add2','$City','$State','$Country','$Amount')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
include ('vpc_php_serverhost_do.php');
mysql_close($con)
?> 
