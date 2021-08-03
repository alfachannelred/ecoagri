<?php
require("../libfuncs.php3");
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
<script type="text/javascript" src="../../ajones_styles/p7_eqCols_15.js"></script> 
<script type="text/javascript" src="../../p7pm/p7popmenu.js"></script>
<style type="text/css" media="screen">
<!--
@import url("../../p7pm/p7pmv16.css");
@import url("../../ajones_styles/aj_3colcssp.css");
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
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function KW_getVal(o){ //v1.2
	var retVal="0";if (o.type=="select-one")
	{retVal=(o.selectedIndex==-1)?0:o.options[o.selectedIndex].value;}
	else if (o.length>1){for (var i=0;i<o.length;i++) if (o[i].checked) retVal=o[i].value;
	} else if (o.type=="checkbox") {retVal=(o.checked)?o.value:0;} else {
	retVal=Number(o.value)}return parseFloat(retVal);
}

function KW_calcForm() { //v1.2
	var str="",a=KW_calcForm.arguments; for (var i=3;i<a.length;i++)
	str+=(a[i].indexOf("#")==-1)?a[i]:KW_getVal(MM_findObj(a[i].substring(1)));
	t=Math.round(a[1]*eval(str))/a[1];tS=t.toString();if(a[2]>0){tSp=tS.indexOf(".");
	if(tSp==-1)	tS+=".";tSp=tS.indexOf(".");while(tSp!=(tS.length-1-a[2])){tS+="0";
	tSp=tS.indexOf(".");}} MM_findObj(a[0]).value=tS;
}
</script>
<!-- InstanceEndEditable -->
</head>

<body onLoad="P7_initPM(0,16,1,-20,10);P7_equalCols('c1','c2','c3')">

<div id="pagewrapper">
<div id="masthead"> <a href="../../index.htm"><img src="../../assets/eco_agri.gif" alt="Logo" width="748" height="80"></a></div>
<div id="layoutwrapper">
<div id="rightbox"><!-- InstanceBeginEditable name="contentArea" -->
  <div id="c2">
    <div class="c2-text">
      <h1>Donations from foreigners and NRIs *</h1>
      <p>&nbsp;</p>
      <form name="form1" method="post" action="../insert.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="6">
          <tr>
            <td colspan="2"><input type="hidden" name="Title" value="PHP VPC 3-Party">              <input type="hidden" name="virtualPaymentClientURL" size="63" value="https://migs.mastercard.com.au/vpcpay" maxlength="250">
              <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8">
              <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16">
              <input type="hidden" name="vpc_AccessCode" value="1B9C5D8E" size="20" maxlength="8">
              <input type="hidden" name="vpc_MerchTxnRef" value="<?php echo $Order_Id; ?>" size="20" maxlength="40">
              <input type="hidden" name="vpc_Merchant" value="ECOAGRIFOUND" size="20" maxlength="16">
              <input type="hidden" name="vpc_OrderInfo" value="VPC Example" size="20" maxlength="34">
              <input type="hidden" name="vpc_Locale" value="en" size="20" maxlength="5">
              <input type="hidden" name="vpc_ReturnURL" size="63" value="http://ecoagri.org/html/thankyou.php" maxlength="250">
              <input type="hidden" name="vpc_TicketNo" maxlength="15"></td>
            </tr>
          <tr>
            <td>Name</td>
            <td><label for="Name"></label>
              <input type="text" name="Name" id="Name"></td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td><label for="textfield"></label>
              <input type="text" name="Telephone" id="Telephone"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><label for="Email"></label>
              <input type="text" name="Email" id="Email"></td>
          </tr>
          <tr>
            <td>Address1</td>
            <td><label for="Address1"></label>
              <input type="text" name="Address1" id="Address1"></td>
          </tr>
          <tr>
            <td>Address2</td>
            <td><label for="Address2"></label>
              <input type="text" name="Address2" id="Address2"></td>
          </tr>
          <tr>
            <td>City</td>
            <td><label for="City"></label>
              <input type="text" name="City" id="City"></td>
          </tr>
          <tr>
            <td>State</td>
            <td><label for="State"></label>
              <input type="text" name="State" id="State"></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><label for="Country"></label>
              <input type="text" name="Country" id="Country"></td>
          </tr>
          <tr>
            <td width="22%">Amount</td>
            <td width="78%"><label for="Passport Number"></label>
              <input type="hidden" name="vpc_Amount" value="" size="20" maxlength="10">
              <label for="Amount"></label>
              <input type="text" name="Amount" id="Amount">
              INR *</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="c2-text">*The amount must not contain any separators or currency symbols. This value cannot be negative or zero.</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="SubButL" type="submit" onClick="MM_validateForm('Name','','R','Telephone','','R','Email','','RisEmail','Address1','','R','Address2','','R','City','','R','State','','R','Country','','R','Amount','','RinRange1000:1000000000');KW_calcForm('vpc_Amount',1,-1,'#Amount','*','100');return document.MM_returnValue" value="Pay Now!"></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
      <a href="../donation_india.htm">Click here if you are an Indian citizen staying in India*</a></div>
  </div>
<!-- InstanceEndEditable -->
  <div id="c3">
<p><img src="../../assets/ecoagri.gif" width="140" height="234"></p>
<div class="c3-text">
  <h2><span class="col-topheading">Support us</span></h2>
<p>We welcome the world community to liberally contribute to  make a change in the way we deal of our natural resources,&nbsp; the Land, Water, Biodiversity and the  Environment.&nbsp; Through this you also  contribute to better the life of a rural farmer and encourage him.</p>
<p>You will also support the process of converting the way  agriculture is done from the chemical farming system to a natural and organic  way.</p>
<p><strong><a href="../contribute.htm">Contribute Now ! &raquo;</a></strong></p>
</div>
</div>
</div>
<div id="c1">
<p class="pictureprgh"><a href="../../index.htm"><img src="../../assets/stone.jpg" alt="image 1" width="180" height="117" border="0"></a></p>
<ul id="p7PMnav">
  <li><a href="../../index.htm">Home</a></li>
  <li><a href="#" class="p7PMtrg">Mission</a>
    <ul>
      <li><a href="../vision.htm">Vision</a></li>
      <li><a href="../goals.htm">Goals</a></li>
      <li><a href="../milestones.htm">Milestones</a></li>
      <li><a href="../primeMovers.htm">Prime Movers</a></li>
    </ul>
  </li>
  <li><a href="#" class="p7PMtrg">Outreach</a>
    <ul>
      <li><a href="../projects.htm">Projects</a></li>
      <li><a href="../associations.htm">Associations</a></li>
      <li><a href="../standards_certifications.htm">Standards and Certification</a></li>
      <li><a href="../practises.htm">Practices &amp; Tips</a></li>
      <li><a href="../usefullinks.htm">Useful links</a></li>
    </ul>
  </li>
  <li><a href="#" class="p7PMtrg">Organic Living</a>
    <ul>
      <li><a href="../whatisOrganic.htm">What is Organic?</a></li>
      <li><a href="../biodynamic.htm">Biodynamic farming</a></li>
      <li><a href="../pureFood.htm">Pure Food</a></li>
      <li><a href="../animalHusbandry.htm">Animal husbandry</a></li>
      <li><a href="../ruraldevelopment.htm">Rural development</a></li>
      <li><a href="../FAQ.htm">FAQ</a></li>
    </ul>
  </li>
  <li><a href="#" class="p7PMtrg">Training</a>
    <ul>
      <li><a href="../basilAcademy.htm">BASIL Academy</a></li>
      <li><a href="../faculty.htm">Faculty</a></li>
    </ul>
  </li>
  <li><a href="../contribute.htm">Contribute</a></li>
  <li><a href="../contact.htm">Contact</a></li>
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
&copy;2010 Eco-Agri Research Foundation - <a href="../terms.htm">Terms &amp; Condition, Refund &amp; cancellation Policy</a>  | <a href="../privacyPolicy.htm">Privacy Policy</a></div>
</div>

</body>
<!-- InstanceEnd --></html>
