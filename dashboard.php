<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		.background{
			background-image: url("images/hospital1.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.button{
			padding: 50px 50px;
			background-color: darkgray;
			margin: 10px 25px;
		}
		.button1{
			padding: 50px 50px;
			
		}
		.button2{
			padding: 50px 50px
		}
		.icon:hover{
			border: 2px solid  red;
		}
		.vaccine{
			padding: 50px 90px;
			background-color: darkgray;
			margin: 10px 25px;
		}
		.patientreport{
			padding: 50px 80px;
			background-color: darkgray;
			margin: 10px 25px;
		}
		.dashicon{
			padding-top: 3px;
			padding-bottom: 3px;
			border-radius: 25%;
		}
		.body{
    padding-top: 5px;
    padding-bottom: 3px;
    font-weight: 900;
    font-size: 24px;
		}
		.links:hover{
			color: solid green;
			text-decoration-line: none;
		}
			
	</style>
</head>

<body class="background">
<table border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td colspan="2" bgcolor="#F72020"><table width="1092" height="20" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr align="center">
            <td align="left" bgcolor="#F72020"><strong style="font-size: 24px">DASHBOARD</strong></td>
            <td bgcolor="#F72020"><img src="images/home icon.png" alt="" width="37" height="33" class="dashicon"/></td>
            <td bgcolor="#F72020"><img src="images/settings.png" alt="" width="37" height="33" class="dashicon"/></td>
            <td bgcolor="#F72020"><a href="logout.php"><img src="images/logout icon.png" alt="" width="37" height="33" class="dashicon"/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td width="257" bgcolor="#588C76"><table border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="98"><img src="images/admin.jpg"  alt=""/></td>
            <td width="127" style="color: #FFFFFF"><strong>ADMIN</strong></td>
          </tr>
          <tr style="color: #FFFFFF; background-color: black">
            <td><strong>Register</strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="69" colspan="2" style="color: #FFFFFF"><img src="images/healthworker icon.jpg" width="50" height="50" alt=""/> <span ><a href="healthworker.php" style="color: #FFFFFF">Healthworker</a><a href="healthworker (1).php" class="links"></a></span></td>
            </tr>
          <tr>
            <td colspan="2" style="color: #FFFFFF"><img src="images/patient icon.jpg" width="50" height="50" alt=""/><a href="patient.php"style="color: #FFFFFF">Patient</a><a href="patient.php" class="links"></a></td>
            </tr>
          <tr>
            <td height="62" colspan="2" style="color: #FFFFFF"><img src="images/data entrant icon.png" width="50" height="50" alt=""/><a href="dataentrant.php.php" class="links"></a><a href="dataentrant.php"style="color: #FFFFFF">dataentrant.php</a></td>
            </tr>
          <tr style="color: #FFFFFF; background-color: black">
            <td style="color: #FFFFFF; background-color: black"><strong>Record</strong></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" ><a href="hospitalvaccine.php" style="color: #FFFFFF" class="links">Hospital vaccine</a></td>
            </tr>
          <tr>
            <td colspan="2" ><a href="vaccinemanufacturer.php" style="color: #FFFFFF" class="links">Vaccine manufacturer</a></td>
            </tr>
          <tr>
            <td colspan="2" ><a href="vaccinedetails.php" style="color: #FFFFFF" class="links">Vaccine</a></td>
            </tr>
          <tr style="color: #FFFFFF; background-color: black">
            <td><strong>View</strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" ><a href="hospitalreport.php" style="color: #FFFFFF" class="links">Hospital  report</a></td>
            </tr>
          <tr>
            <td colspan="2" ><a href="login.php" style="color: #FFFFFF" class="links">Patient report</a></td>
            </tr>
          <tr>
            <td colspan="2" class="links" ><a href="view feedbacks.php" style="color: #FFFFFF">Patients feedbacks</a></td>
            </tr>
          <tr>
            <td colspan="2" class="links" style="color: #FFFFFF">&nbsp;</td>
            </tr>
        </tbody>
      </table></td>
      <td width="935" s><table  border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td colspan="3" align="center" class="body">Register</td>
            </tr>
          <tr>
            <td width="279" align="center"><a href="hospital.php"><img src="images/hospital icon.jpg" alt="" width="200" height="140" class="icon"/></a></td>
            <td width="317" align="center"><a href="patient.php"><img src="images/patient icon.jpg" alt="" width="200" height="140" class="icon"/></a></td>
            <td width="352" align="center"><a href="healthworker.php"><img src="images/data entrant icon.png" alt="" width="200" height="140" class="icon"/></a></td>
          </tr>
          <tr>
            <td colspan="3" align="center" class="body">Record</td>
            </tr>
          <tr>
            <td><a href="viewhospitalvaccine.php"><input name="submit4" type="submit" class="button" id="submit4" value="HOSPITAL VACCINE"></a></td>
            <td><a href="viewvaccinemanufacturer.php"><input name="submit2" type="submit" class="button" id="submit5" value="VACCINE MANUFACTURER"></a></td>
            <td><a href="viewvaccinedetails.php"><input name="submit3" type="submit" class="vaccine" id="submit6" value="VACCINE "></a></td>
          </tr>
          <tr>
            <td colspan="3" align="center" class="body">View</td>
            </tr>
          <tr>
            <td><a href="hospitalreport.php"><input name="submit5" type="submit" class="button" id="submit7" action="hospitalreport.php" value="HOSPITAL REPORT"></a></td>
            <td><a href="login.php"><input name="submit6" type="submit" class="patientreport" id="submit8" action="patientform.php" value="PATIENT REPORT"></a></td>
            <td><a href="view feedbacks.php"><input name="submit7" type="submit" class="button" id="submit9" action="feedback.php" value="PATIENT FEEDBACKS"></a></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>