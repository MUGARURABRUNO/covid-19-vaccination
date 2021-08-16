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
input[type=date]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=email]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=password]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=int]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
select[type=text]{
border-radius: 25px;
padding: 15px 50px;
margin:3px;
}
input[type=file]{
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
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="408" border="0" align="center" cellpadding="0" cellspacing="0">
    
    <tr>
      <td height="47"><strong><span class="style4">National Identity Number</span></strong> </td>
      <td><label for="Nin"></label>
      <input type="text" placeholder="NIN Number" name="Nin" /></td>
    </tr>
  
    <tr>
      <td height="33"><span class="style4"><strong>passport</strong></span></td>
      <td><label for="image_link"></label>
      <input type="file" placeholder="insert image" name="image_link" id="image_link" /></td>
      <img src="<?php echo $rows['image_link']?>">
    </tr>
    <tr>
      <td height="37"><span class="style4"><strong>First Name </strong></span></td>
      <td><label for="fname"></label>
      <input type="text" placeholder="First Name"  name="fname" /></td>
    </tr>
    <tr>
      <td height="43"><span class="style4"><strong>Last Name </strong></span></td>
      <td><label for="lname"></label>
      <input type="text" placeholder="Last Name" name="lname" /></td>
    </tr>
    <tr>
      <td height="68"><span class="style4"><strong>Gender</strong></span></td>
      <td><label for="sex"></label>
        <table width="200">
          <tr>
            <td><label>
              <input type="radio" name="sex" value="Male" />
              Male</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="sex" value="Female" />
              Female</label></td>
          </tr>
        </table>      </td>
    </tr>
    <tr>
      <td height="39"><span class="style4"><strong>Date Of Birth </strong></span></td>
      <td><label for="date_of_birth"></label>
      <input type="date"  placeholder="Choose date" name="date_of_birth" /></td>
    </tr>
    <tr>
      <td height="38"><span class="style4"><strong>Patient Occupation </strong></span></td>
      <td><label for="patientOccupation"></label>
      <input type="text" placeholder="Enter Occupation" name="patientOccupation" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Email</strong></span></td>
      <td><label for="email"></label>
      <input type="email"  name="email" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Telephone Number </strong></span></td>
      <td><label for="telNumber"></label>
      <input type="text" name="telNumber" /></td>
    </tr>
    <tr>
      <td><span class="style4"><strong>Nationality</strong></span></td>
      <td><label for="nationality"></label>
      <input type="text" name="nationality"/></td>
    </tr>
    <tr>
      <td height="31"><span class="style4"><strong>District</strong></span></td>
      <td><label for="district"></label>
      <input type="text" name="district" /></td>
    </tr>
    <tr>
      <td height="33"><span class="style4"><strong>Sub County </strong></span></td>
      <td><label for="subcounty"></label>
        <input type="text" name="subcounty" />
    </tr>
    <tr>
      <td height="50"><span class="style4"><strong>Parish</strong></span></td>
      <td><label for="parish"></label>
      <input type="text" name="parish"/></td>
    </tr>
    <tr>
      <td height="44"><span class="style4"><strong>Village</strong></span></td>
      <td><label for="village"></label>
      <input type="text" name="village" /></td>
    </tr>
     <tr>
      <td><strong>vaccination level</strong> </td>
      <td><label for="vaccinationlevel"></label>
        <label for="vaccinationlevel"></label>
        <select name="vaccinationlevel" id="select">
          <option>FIRST DOSE</option>
          <option>SECOND DOSE</option>
          <option>THIRD DOSE</option>
        </select>
      </td>
    </tr>
        <tr>
      <td height="44"><span class="style4"><strong>Username</strong></span></td>
      <td><label for="username"></label>
      <input type="text" name="username" /></td>
    </tr>
	 <tr>
      <td height="44"><span class="style4"><strong>password</strong></span></td>
      <td><label for="password"></label>
      <input type="password" name="password" /></td>
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
