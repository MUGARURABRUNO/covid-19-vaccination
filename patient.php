<?php 
include 'projectcontroller.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
input[type=text]{
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
</head>

<body class="patientback">
<p align="center" class="style1">PATIENT DETAILS</p>
<form id="form1" name="form1" method="POST" action="" enctype="multipart/form-data" >
  <table width="601" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#00CCCC">
    <tr>
      
      <td width="351"><label for="Nin"></label>
      <input type="text" placeholder="Nin" name="Nin" /></td>
      <td><label for="image_link"></label>
      <input type="file" name="image_link" /></td>
      <img src="image/imag">
    </tr>
    <tr>
      <td width="250"><label for="fname"></label>
      <input type="text" placeholder="First Name"  name="fname" /></td>
      <td><label for="lname"></label>
      <input type="text"  placeholder="Last Name" name="lname" /></td>
    </tr>
    <tr>
      <td><label for="sex"></label>
        <table width="200">
          <tr>
            <td><label>
              <input type="radio" name="sex" value="radio" />
              Male</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="sex" value="radio" />
              Female</label></td>
          </tr>
        </table>      </td>
    </tr>
    
    <tr>
      <td><label for="date_of_birth"></label>
      <input type="date" placeholder="Date of Birth" name="date_of_birth" /></td>
      <td><label for="patientOccupation"></label>
      <input type="text" placeholder="patientOccupation" name="patientOccupation" /></td>
    </tr>
    <tr>
      
      <td><select name="vaccinationlevel" id="select">
		  <option value="FIRST DOSE">FIRST DOSE</option>
      <option value="SECOND DOSE">SECOND DOSE</option>
      <option value="THIRD DOSE">THIRD DOSE</option>
      </select></td>
      <td><label for="email"></label>
      <input type="text" placeholder="Email" name="email" /></td>
    </tr>
    <tr>
     
      <td><label for="telNumber"></label>
      <input type="text" placeholder="Tel Number" name="telNumber" /></td>
      <td><label for="nationality"></label>
      <input type="text" placeholder="nationality" name="nationality"/></td>
    </tr>
    <tr>
   
      <td><label for="district"></label>
      <input type="text" placeholder="district" name="district" /></td>
      <td><label for="subcounty"></label>
        <input type="text" placeholder="subcounty" name="subcounty" />
    </tr>
    <tr>
      
      <td><label for="parish"></label>
      <input type="text" placeholder="parish" name="parish"/></td>
       <td><label for="village"></label>
      <input type="text" placeholder="village" name="village" /></td>
    </tr>
	 <tr>
    
      <td><label for="username"></label>
      <input type="text" placeholder="Username" name="username" /></td>
      <td><label for="password"></label>
      <input type="text" placeholder="Password" name="password" /></td>
    </tr>
	 
    <tr>
      <td height="48" colspan="2"><label for="Submit1"></label>
        <div align="center">
          <input name="Submit1" type="submit" class="buT" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>

</html>
