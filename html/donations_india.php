<?php
require("libfuncs.php3");
$Merchant_Id = "M_ECJCD_13492" ;//This id(also User Id)  available at "Generate Working Key" of "Settings & Options" 
$Redirect_Url = "http://www.ecoagri.org/html/thankyou.htm" ;//your redirect URL where your customer will be redirected after authorisation from CCAvenue
$WorkingKey = "lrdi6cbxpelloqg2bp"  ;//put in the 32 bit alphanumeric key in the quotes provided here.Please note that get this key ,login to your CCAvenue merchant account and visit the "Generate Working Key" section at the "Settings & Options" page. 
$Order_Id = date('ymd').'RD'.date('His');
$Amount = $_POST['txtAmount'];
$Checksum = getCheckSum($Merchant_Id,$Amount,$Order_Id ,$Redirect_Url,$WorkingKey);

$billing_cust_name=$_POST['txtbilling_cust_name'];
$billing_cust_address=$_POST['txtbilling_cust_address'];
$billing_city =$_POST['txtbilling_cust_city'];
$billing_cust_state=$_POST['txtbilling_cust_state'];
$billing_cust_country=$_POST['txtbilling_cust_country'];
$billing_zip =$_POST['txtbilling_zip_code'];
$billing_cust_tel=$_POST['txtbilling_cust_tel'];
$billing_cust_email=$_POST['txtbilling_cust_email'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/ecoagriORG.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Eco-Agri Research Foundation, India</title>
<!-- InstanceEndEditable -->
<script type="text/javascript" src="../ajones_styles/p7_eqCols_15.js"></script> 
<script type="text/javascript" src="../p7pm/p7popmenu.js"></script>
<style type="text/css" media="screen">
<!--
@import url("../p7pm/p7pmv16.css");
@import url("../ajones_styles/aj_3colcssp.css");
-->
</style>
<!--[if IE 5]>
<style type="text/css">
body {text-align: center;}
#masthead, #layoutwrapper {text-align: left;}
#c1 {width: 182px;}
</style>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<link href="formstyle.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
</head>

<body onLoad="P7_initPM(0,16,1,-20,10);P7_equalCols('c1','c2','c3')">

<div id="pagewrapper">
<div id="masthead"> <a href="../index.htm"><img src="../assets/eco_agri.gif" alt="Logo" width="748" height="80"></a></div>
<div id="layoutwrapper">
<div id="rightbox"><!-- InstanceBeginEditable name="contentArea" -->
  <div id="c2">
    <div class="c2-text">
      <h1>Donations from India</h1>
<form method="post" action="https://www.ccavenue.com/shopzone/cc_details.jsp">
<input type="hidden" name="Merchant_Id" value="<?php echo $Merchant_Id; ?>">
<input type="hidden" name="Amount" value="<?php echo $Amount; ?>">
<input type="hidden" name="Order_Id" value="<?php echo $Order_Id; ?>">
<input type="hidden" name="Redirect_Url" value="<?php echo $Redirect_Url; ?>">
<input type="hidden" name="Checksum" value="<?php echo $Checksum; ?>">
    
<input type="hidden" name="billing_cust_name" value="<?php echo $billing_cust_name; ?>"> 
<input type="hidden" name="billing_cust_address" value="<?php echo $billing_cust_address; ?>"> 
<input type="hidden" name="billing_cust_city" value="<?php echo $billing_city; ?>"> 
<input type="hidden" name="billing_cust_state" value="<?php echo $billing_cust_state; ?>">
<input type="hidden" name="billing_cust_country" value="<?php echo $billing_cust_country; ?>"> 
<input type="hidden" name="billing_zip_code" value="<?php echo $billing_zip; ?>"> 
<input type="hidden" name="billing_cust_tel" value="<?php echo $billing_cust_tel; ?>"> 
<input type="hidden" name="billing_cust_email" value="<?php echo $billing_cust_email; ?>"> 

<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
  <td height="26" colspan="3" align="center" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td width="20%" height="26" class="formphptextstyle">Amount *</td>
  <td width="5%" class="formtextstylebold">:</td>
  <td width="75%" height="26" class="formtextstylebold"><?php echo $Amount; ?></td></tr>
<tr>
  <td height="26" class="formphptextstyle">Name  *</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_cust_name; ?></td></tr>
<tr>
  <td height="26" class="formphptextstyle">Address</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_cust_address; ?></td></tr>
<tr><td height="26" class="formphptextstyle">City</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_city; ?></td></tr>
<tr><td height="26" class="formphptextstyle">State</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_cust_state; ?></td></tr>
<tr><td height="26" class="formphptextstyle">Country</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_cust_country; ?></td></tr>
<tr><td height="26" class="formphptextstyle">Zip Code</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_zip; ?></td></tr>
<tr>
  <td height="26" class="formphptextstyle">Telephone</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_cust_tel; ?></td></tr>
<tr>
  <td height="26" class="formphptextstyle">Email *</td>
  <td class="formtextstylebold">:</td>
  <td height="26" class="formtextstylebold"><?php echo $billing_cust_email; ?></td></tr>
<tr><td height="40" align="left" valign="bottom" class="formtextstyle">&nbsp;</td>
  <td height="40" align="left" valign="bottom" class="formtextstyle">&nbsp;</td>
  <td height="40" align="left" valign="bottom" class="formtextstyle"><input type="submit" value="Proceed To Payment" style="color:#663366;background-color:#e7d1e7; height:25px; font-weight:bold; border-color:#cdb2cd;"></td>
</tr>
</table>
</form>
    </div>
  </div>
<!-- InstanceEndEditable -->
  <div id="c3">
<p><img src="../assets/ecoagri.gif" width="140" height="234"></p>
<div class="c3-text">
  <h2><span class="col-topheading">Support us</span></h2>
<p>We welcome the world community to liberally contribute to  make a change in the way we deal of our natural resources,&nbsp; the Land, Water, Biodiversity and the  Environment.&nbsp; Through this you also  contribute to better the life of a rural farmer and encourage him.</p>
<p>You will also support the process of converting the way  agriculture is done from the chemical farming system to a natural and organic  way.</p>
<p><strong><a href="contribute.htm">Contribute Now ! &raquo;</a></strong></p>
</div>
</div>
</div>
<div id="c1">
<p class="pictureprgh"><a href="../index.htm"><img src="../assets/stone.jpg" alt="image 1" width="180" height="117" border="0"></a></p>
<ul id="p7PMnav">
  <li><a href="../index.htm">Home</a></li>
  <li><a href="#" class="p7PMtrg">Mission</a>
    <ul>
      <li><a href="vision.htm">Vision</a></li>
      <li><a href="goals.htm">Goals</a></li>
      <li><a href="milestones.htm">Milestones</a></li>
      <li><a href="primeMovers.htm">Prime Movers</a></li>
    </ul>
  </li>
  <li><a href="#" class="p7PMtrg">Outreach</a>
    <ul>
      <li><a href="projects.htm">Projects</a></li>
      <li><a href="associations.htm">Associations</a></li>
      <li><a href="standards_certifications.htm">Standards and Certification</a></li>
      <li><a href="practises.htm">Practices &amp; Tips</a></li>
      <li><a href="usefullinks.htm">Useful links</a></li>
    </ul>
  </li>
  <li><a href="#" class="p7PMtrg">Organic Living</a>
    <ul>
      <li><a href="whatisOrganic.htm">What is Organic?</a></li>
      <li><a href="biodynamic.htm">Biodynamic farming</a></li>
      <li><a href="pureFood.htm">Pure Food</a></li>
      <li><a href="animalHusbandry.htm">Animal husbandry</a></li>
      <li><a href="ruraldevelopment.htm">Rural development</a></li>
      <li><a href="FAQ.htm">FAQ</a></li>
    </ul>
  </li>
  <li><a href="#" class="p7PMtrg">Training</a>
    <ul>
      <li><a href="basilAcademy.htm">BASIL Academy</a></li>
      <li><a href="faculty.htm">Faculty</a></li>
    </ul>
  </li>
  <li><a href="contribute.htm">Contribute</a></li>
  <li><a href="contact.htm">Contact</a></li>
  <!--[if lte IE 6]><style>#p7PMnav a{height:1em;}#p7PMnav li{height:1em;float:left;clear:both;width:100%}</style><![endif]-->
  <!--[if IE 6]><style>#p7PMnav li{clear:none;}</style><![endif]-->
  <!--[if IE 7]><style>#p7PMnav a{zoom:100%;}#p7PMnav li{float:left;clear:both;width:100%;}</style><![endif]-->
</ul>
<div class="c1-text">
  <h4 class="zeromargin">&nbsp;</h4>
</div>
</div>

<br class="clearit">
</div>
</div>
<div id="footer">
<div id="footertext">
&copy;2010 Eco-Agri Research Foundation - <a href="terms.htm">Terms &amp; Condition, Refund &amp; cancellation Policy</a>  | <a href="privacyPolicy.htm">Privacy Policy</a></div>
</div>

</body>
<!-- InstanceEnd --></html>
