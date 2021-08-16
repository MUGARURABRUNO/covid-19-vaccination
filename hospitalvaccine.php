<?php include 'projectcontroller.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
input[type=text]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=int]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
.style1 {
  color: #FF6600;
  font-weight: bold;
  font-size: 36px;
}
.style2 {
  color: #000000;
  font-weight: bold;
}
.style4 {color: #000000}
.buT{
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
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body class="hospitalvaaccine">
<p align="center" class="style1">HOSPITAL VACCINE</p>
<form id="form1" name="form1" method="post" action="">
  <table width="489" height="258" border="0" align="center" cellpadding="0" cellspacing="0">
    <!-- <tr>
      <td width="212" height="38"><strong>Hospital Vaccine Identity </strong></td>
      <td width="157"><label for="hospitalVaccineId"></label>
      <input type="int" name="hospitalVaccineId" /></td>
    </tr>
    <tr>
      <td height="44"><strong>Hospital Identity Number </strong></td>
      <td><label for="hospitalId"></label>
      <input type="text" name="hospitalId" /></td>
    </tr> -->
    <tr>
      <td height="45"><strong>Vaccine Identity </strong></td>
      <td><label for="vaccineid"></label>
      <input type="text" name="vaccineid" /></td>
    </tr>
    <tr>
      <td height="45"><strong>Manufacturer Identiy Number </strong></td>
      <td><label for="manufactureid"></label>
      <input type="text" name="manufactureid" /></td>
    </tr>
    <tr>
      <td height="56"><strong>Vaccine Qantity Suplied </strong></td>
      <td><label for="quantity"></label>
      <input type="int" name="quantity" /></td>
    </tr>
    <tr>
      <td colspan="2"><label for="Submit4"></label>
      <input type="submit" name="Submit4" class="buT" value="Submit" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
