<?php
require("libfuncs.php3");
$Order_Id = date('ymd').'RD'.date('His');
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
<!-- InstanceEndEditable -->
</head>

<body onLoad="P7_initPM(0,16,1,-20,10);P7_equalCols('c1','c2','c3')">

<div id="pagewrapper">
<div id="masthead"> <a href="../index.htm"><img src="../assets/eco_agri.gif" alt="Logo" width="748" height="80"></a></div>
<div id="layoutwrapper">
<div id="rightbox"><!-- InstanceBeginEditable name="contentArea" -->
  <div id="c2">
    <div class="c2-text">
      <h1>Donations from foreigners and NRIs *</h1>
      <p>&nbsp;</p>
      <form name="form1" method="post" action="vpc_php_serverhost_do.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="6">
          <tr>
            <td colspan="2"><input type="hidden" name="Title" value="PHP VPC 3-Party">              
	      <input type="hidden" name="virtualPaymentClientURL" size="63" value="https://migs.mastercard.com.au/vpcpay" maxlength="250">
              <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8">
              <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16">
              <input type="hidden" name="vpc_AccessCode" value="1B9C5D8E" size="20" maxlength="8">
              <input type="hidden" name="vpc_MerchTxnRef" value="<?php echo $Order_Id; ?>" size="20" maxlength="40">
              <input type="hidden" name="vpc_Merchant" value="ECOAGRIFOUND" size="20" maxlength="16">
              <input type="hidden" name="vpc_OrderInfo" value="VPC Example" size="20" maxlength="34">
              <input type="hidden" name="vpc_Locale" value="en" size="20" maxlength="5">
              <input type="hidden" name="vpc_ReturnURL" size="63" value="http://192.168.2.14/ecoagri_org/html/vpc_php_serverhost_dr.php" maxlength="250">
              <input type="hidden" name="vpc_TicketNo" maxlength="15"></td>
            </tr>
          <tr>
            <td width="22%">Amount</td>
            <td width="78%"><label for="Passport Number"></label>
              <input type="text" name="vpc_Amount" value="1000" size="20" maxlength="10"></td>
          </tr>
          <tr>
            <td>Passport No.</td>
            <td><label for="textfield2"></label>
              <input type="text" name="Passport Number" id="textfield2"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="SubButL" value="Pay Now!"></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
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
