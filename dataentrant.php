<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
-->
	.data{
    padding-bottom: 3px;
    font-size: 36px;
	}
	.dashboard{
		padding-left:20px; 
	}
	.bigtable{
		border: 2px;
	}
	.table{
		
		padding-left: 20px;
		padding-top: 10px;
	}
	.icon{
		border-radius: 50%;
	}
	.icon1:hover{
		border: 2px solid #000DFF;
		border-radius: 25%;
		padding-bottom: 5px;
	}
	.icon2:hover{
		border: 2px solid #000DFF;
		text-align: center;
		
	}
	.view{
    padding-top: 5px;
    padding-bottom: 5px;
    font-weight: 900;
    color: #FFFFFF;
	}
	.register{
		padding-top: 10px;
	}
	.background{
		background-image: url("image/hospital1.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	.link:hover{
		text-decoration-line: none;
		color: green;
		background-color: green;
	}
	.logout{
		padding-left: 10px;
	}
	.button{
			padding: 50px 50px;
			background-color: darkgray;
			margin: 10px 25px;
		}
		.pic{
		background-image:url("images/ug1.jpg");
		background-position:center;
		background-repeat:no-repeat;
		
		}
</style>
</head>

<body>
<p align="center" class="style1">&nbsp;</p>
	
	  <table width="1249" height="442" border="0" align="center" cellpadding="0" cellspacing="0" class="bigtable">
	  <tbody>
	    <tr bgcolor="#3D31AA"></tr>
	  </tbody>
      <tbody style="color: #000000">
        <tr>
          <td width="286" bgcolor="#3D31AA" style="font-weight: 900; font-size: 18px; color: #FFFFFF;"><p>&nbsp;</p>
            <p class="dashboard">DASHBOARD</p></td>
          <td width="963" align="right" bgcolor="#D3D3D3" class="logout"><span class="logout" style="color: #FFFFFF"><a href="logout.php">Logout</a></span></td>
        </tr>
        <tr>
          <td height="318" bgcolor="#3D31AA"><table width="244" border="0" cellpadding="0" cellspacing="0" class="table">
            <tbody>
              <tr>
                <td colspan="2" class="data"><strong style="color: #FFFFFF; font-size: 36px;">Data Entrant</strong></td>
              </tr>
              <tr>
                <td width="88"><img src="images/data entrant icon.png" alt="" width="50" height="50" class="icon"/></td>
                <td width="156">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#FF6600" class="register"><strong style="color: #FFFFFF; font-size: 24px;">Register</strong></td>
              </tr>
              <tr>
                <td colspan="2" class="link"><a href="healthworker.php" style="color: #FFFFFF">Healthworker</a></td>
              </tr>
              <tr>
                <td colspan="2" class="link"><a href="patient.php" style="color: #FFFFFF">Patient</a></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#FF6600" class="link"><span style="color: #FFCC00"><strong style="color: #FFFFFF; font-size: 24px;">View</strong></span></td>
              </tr>
              <tr>
                <td colspan="2" class="link"><a href="viewhealthwoerker.php" style="color: #FFFFFF">HEALTHWORKER</a></td>
              </tr>
              <tr>
                <td colspan="2" class="link"><a href="viewpatient.php" style="color: #FFFFFF">PATIENT</a></td>
              </tr>
			  <tr>
                <td colspan="2" class="link"><a href="login.php" style="color: #FFFFFF">PRINT PATIENT FORM</a></td>
              </tr>
            </tbody>
          </table></td>
          <td bgcolor="#3D31AA"><table width="951" border="0" align="left" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td colspan="2" align="center"><p class="view">REGISTER</p></td>
              </tr>
              <tr>
            <td><a href="healthworker.php"><input name="" type="submit" class="button" value="HEALTH WORKER"></a></td>
            <td><a href="patient.php"><input name="REGISTER PATIENT" type="submit" class="button" id="REGISTER PATIENT"  value="REGISTER PATIENT">
            </a></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><p class="view">VIEW</p></td>
              </tr>
              <tr>
            <td><a href="viewhealthwoerker.php"><input name="" type="submit" class="button" value=" VIEW HEALTH WORKERS"></a></td>
            <td><a href="viewpatient.php"><input name="" type="submit" class="button"  value="VIEW PATIENTS"></a></td>
            <td><a href="login.php"><input name="" type="submit" class="button" value="PRINT PATIENT FORM"></a></td>
              </tr>
            </tbody>
          </table></td>
        </tr>
        <tr bgcolor="#3D31AA">
          <td height="61">&nbsp;</td>
          <td bgcolor="#3D31AA">&nbsp;</td>
        </tr>
      </tbody>
      <tbody>
      </tbody>
	  </table>
	  <p align="center">&nbsp;</p>
</body>
</html>
