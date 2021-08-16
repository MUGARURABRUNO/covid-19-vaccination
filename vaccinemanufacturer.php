<?php include 'projectcontroller.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
input[type=text]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=text]{

border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
.but{
align-content: center;
font-size: 15px;
font-style: bold;
font-weight:bold;
background-color: darkorange;
padding: 30px 70px;
margin: 20px;
border-radius: 12px 12px;

}
-->
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body class="vaccimanufact">
<p align="center" class="style2">VACCINE MANUFACTURER FORM</p>
<form id="form1" name="form1" method="post" action="">
  <table width="483" height="277" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="254"><span class="style1">Vaccine Manufacturer Identity Number </span></td>
      <td width="229"><label for="manufactureid"></label>
      <input type="text" name="manufactureid" /></td>
    </tr>
    <tr>
      <td><span class="style1">Vaccine Manufacturer Name </span></td>
      <td><label for="name"></label>
      <input type="text" name="name" /></td>
    </tr>
    <tr>
      <td><span class="style1">Vaccine Counrty </span></td>
      <td><label for="country"></label>
      <input type="text" name="country"  /></td>
    </tr>
    <tr>
      <td><span class="style1">Vaccine Manufacturer Email </span></td>
      <td><label for="email"></label>
      <input type="email" name="email"/></td>
    </tr>
    <tr>
      <td><span class="style1">Contact</span></td>
      <td><label for="telNo"></label>
      <input type="text" name="telNo" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><label for="Submit"></label></td>
      <td>
        <input name="submit6" type="submit" class="button" value="Submit">
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
