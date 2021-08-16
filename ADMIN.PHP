<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #FFFF00;
	font-size: 36px;
}
-->
.backre{
  background-color: darkorange;
}
</style>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body class="adminback">
<p align="center" class="title style1"><strong>HOSPITAL ADMINISTRATION</strong></p>
<form action="healthworker.php">
    <p align="center">
      <input type="submit" class="button" value="REGISTER HEALTH WORKER" />
    </p>
</form>
<form action="dataentrant.php">
    <p align="center">
      <input type="submit" class="button" value="DATA ENTRANT" />
    </p>
  </form>
<form action="patient.php">
    <p align="center">
      <input type="submit" class="button" value="REGISTER PATIENT" />
    </p>
  </form>
<form action="viewpatient.php">
    <p align="center">
      <input type="submit" class="button" value="VIEW PATIENTS REGISTERED" />
    </p>
  </form>
<form action="vaccinedetails.php">
    <p align="center">
      <input type="submit" class="button" value="REGISTER NEW VACCINE " />
    </p>
  </form>
<form action="vaccinemanufacturer.php">
    <p align="center">
      <input type="submit" class="button" value="FILL VACCINE MANUFACTURER" />
    </p>
  </form>
<p class="style1">&nbsp;</p>
</body> 
</html>
