<?php

$con = mysql_connect("localhost","ecoagycq_admin","eco123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ecoagycq_overseas", $con);

$sql="INSERT INTO main (ref, ip, dat, name, email, tel, address1, address2, city, state, country, amount)
VALUES
('$Order_Id','$ipadd',$Dat,'$Nam','$Mail','$Telep','$Add1','$Add2','$Ct','$St','$Cnt','$Amt')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
include ('thankyou.htm');
mysql_close($con)
?> 
