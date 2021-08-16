<?php 
include 'projectcontroller.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Patient Feedback</title>
</head>
<meta charset="utf-8">
<title>Patient Feedback</title>
	<style>
		
		.textarea{
			padding: 50px 156px;
		}
		.name{
			margin: 5px;
			border-radius: 25px;
			padding: 10px 10px;
		}
		.emailname{
			margin: 5px;
			border-radius: 25px;
			padding: 10px 148px;
		}
		.button{
			margin-top: 3px;
			 background-color: blue;
			color: white;
			border-radius:25px;
			font-size: 10px;
		}
		.contact{
			color: aliceblue;
			background-color:#0000;
		}
		.welcome{
			text-align: center;
			font-size: 36px;
		}
		
		.back{
		background-image:url("images/image7.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		}
	
	</style>
	
<body class="back">
<p><img src="images/logout icon.png" width="50" height="50" alt=""/></p>
<p><a href="logout.php">Logout</a></p>
<p class="welcome"><strong>Your Welcome</strong></p>
	
<form id="form1" name="form1" method="post">
  <table width="1010" height="445" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td width="615" height="445" bgcolor="#2AA291"><table width="596" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td colspan="2" align="left"><strong>Give feedback</strong></td>
              </tr>
            <tr>
              <td width="277"><input name="Fname" type="text" class="name" placeholder="First Name"></td>
              <td width="319"><input type="text" placeholder="Last Name" name="Lname" class="name" ></td>
            </tr>
            <tr>
              <td colspan="2"><input type="email" placeholder="Email" name="Email" class="emailname" id="email"></td>
              </tr>
            <tr>
              <td colspan="2"><textarea name="message" class="textarea" id="textarea" placeholder="message"></textarea></td>
              </tr>
            <tr>
              <td><input name="Send_message" type="submit" class="button" value="Send message"></td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
        <p>&nbsp;</p></td>
        <td width="395" bgcolor="#0000FF" style="color: #0000FF"><table width="333" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td colspan="2" bgcolor="#0000FF" style="color: #FFFFFF"><p><strong>Contact Us</strong></p>
                <p>&nbsp;</p></td>
              </tr>
            <tr>
              <td width="56" bgcolor="#0000FF"><img src="images/lll.jpeg" width="40" height="40" alt=""/></td>
              <td width="233" bgcolor="#0000FF" style="color: #FFFFFF">Sir. Apollo Road </td>
            </tr>
            <tr bgcolor="#0000FF" style="color: #FFFFFF">
              <td><img src="images/ccc.jpeg" width="40" height="40" alt=""/></td>
              <td>+256-776501255</td>
            </tr>
            <tr bgcolor="#0000FF" style="color: #FFFFFF">
              <td><img src="images/eee.jpeg" width="40" height="40" alt=""/></td>
              <td>vaacination@gmail.com</td>
            </tr>
            <tr bgcolor="#0000FF" style="color: #FFFFFF">
              <td><img src="images/www.jpeg" width="40" height="40" alt=""/></td>
              <td>Info@hospital.com</td>
            </tr>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>