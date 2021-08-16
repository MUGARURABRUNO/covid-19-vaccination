<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
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
.style1 {
	font-size: 18px;
	font-weight: bold;	
	font-style: italic;
}
.form{
text-align:center;
}
.slider{
background-image:url("images/newimage.jpg");
background-repeat:no-repeat;
background-size:cover;
transition: 5s;
animation-name: animate;
animation-direction: alternate-reverse;
animation-duration: 20s;
animation-fill-mode: forwards;
animation-iteration-count: infinite;
animation-play-state: running;
animation-timing-function: ease-in-out;
}
@keyframes animate{
0%{
background-image:url("images/pexels-nataliya-vaitkevich-5863400.jpg");
}
20%{
background-image:url("images/pexels-artem-podrez-5878501.jpg");
}
40%{
background-image:url("images/pexels-cottonbro-3952236.jpg");
}
60%{
background-image:url("images/pexels-cottonbro-3952222.jpg");
}
}
.style2 {
	font-size: 36px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style3 {color: #FFFFFF}
</style>

</head>

<body class="slider">
<div align="center"><img src="images/b9f306ec-042b-436e-933c-1732893536a1.jpg"width="250" height="250" /></div>
<p align="center" class="style2">CREATE ACCOUNT</p>
<form action="login.php" method="post" name="form1" class="form" id="form1">
  <label for="Submit"></label>
  <input name="Submit" type="submit" class="button" id="Submit" value="HOSPITAL ADMINISTRATOR" />
  <label for="label"></label>
  <strong><input name="Submit" type="submit" class="button" id="label" value="DATA ENTRANT" /></strong>
  <label for="label2"></label>
  <input name="Submit" type="submit" class="button" id="label2" value="PATIENT" />
</form>
<div background-color:rgba;>
<p align="center" class="style1 style3">TOGETHER WE CAN FIGHT COVID-19 </p>
</div>
</body>
</html>