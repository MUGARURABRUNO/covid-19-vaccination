<?php 
include 'projectcontroller.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VACCINATION MONITORING SYSTEM</title>
<style>
input[type=text]{
border: 3px solid red;
border-radius: 25px;
padding: 15px 50px;
}
input[type=password]{
border: 3px solid red;
border-radius: 25px;
padding: 15px 50px;
}
.button{
align-content:center;
font-size: 15px;
font-style: bold;
font-weight:bold;
color: black;
padding: 10px 30px;

border-radius: 12px 12px;
background-color:#00CC00;
}
.background{
background-image:url("images/pexels-anna-shvets-3786166.jpg");
background-repeat:no-repeat;
background-size:cover;
}
.button1 {align-content:center;
font-size: 15px;
font-style: bold;
font-weight:bold;
color: black;
padding: 10px 30px;
text-align:center;
border-radius: 12px 12px;
background-color:#00CC00;
}
.text{
text-align:center;
}
</style>
</head>
<body class="background">
<h1 align="center">COVID-19 VACCINATION MONITORING SYSTEM</h1>
<hr>
<form id="form1" name="form1" method="post" action="#">
  <table width="100" align="center" cellpadding="20" cellspacing="0" bgcolor="#FFCC00">
    <tr>
      <td colspan="2"><strong> LOGIN </strong></td>
    </tr>
    <div align="center">
      
  
    <tr>
      <td><strong></strong></td>
      <td><label>
        <input type="text" placeholder="Username" name="username"/>
      </label></td>
    </tr>
    <tr>
      <td><strong></strong></td>
      <td><label>
        <!-- <input type="text" name="password"/> -->
         <input type="password" name="password" placeholder="password" value="" id="myInput">
        <input type="checkbox" onclick="myFunction()">Show Password
          <script>
          function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
          </script>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Login" type="submit" class="button1" class="text" value="Login" />
        </align></td>
    </tr>
    <!-- <tr>
      <td colspan="2"><label>
        <input type="checkbox" name="checkbox" value="checkbox" />
        <strong>Remember Me</strong><br />
      Forgot password ?<br/>
      </label></td>
    </tr> -->
    <tr>
      <td colspan="2"><label ></label></td>
    </tr>
    </div>
  </table>
</form>
<p>&nbsp;</p>
</body>


</html>