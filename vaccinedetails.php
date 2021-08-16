<?php include 'projectcontroller.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
input[type=text]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=date]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style6 {font-size: 18px; font-weight: bold; }
.button{
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
</head>

<body class="vaccinedetailsback">
<p align="center" class="style1">VACCINE DETAILS FORM</p>
<form id="form1" name="form1" method="post" action="">
  <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="48"><span class="style6">Vaccine Identity Number </span></td>
      <td><label for="vaccineid"></label>
      <input type="text" name="vaccineid"  /></td>
    </tr>
    <tr>
      <td height="38"><span class="style6">Vaccine Name </span></td>
      <td><label for="vaccineName"></label>
      <input type="text" name="vaccineName" /></td>
    </tr>
    <tr>
      <td height="31"><span class="style6">Manufacture Date </span></td>
      <td><label for="manufacturedate"></label>
      <input type="date" name="manufacturedate" /></td>
    </tr>
    <tr>
      <td height="40"><span class="style6">Expiry Date </span></td>
      <td><label for="expirydate"></label>
      <input type="date" name="expirydate"  /></td>
    </tr>
    <tr>
      <td><span class="style6">Manufacture Identity Number </span></td>
      <td><label for="manufactureid"></label>
      <input type="text" name="manufactureid"  /></td>
    </tr>
    <tr>
      <td height="71" colspan="2"><label for="Submit5"></label>
        <div align="center">
          <input name="Submit5" type="submit" class="button" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
