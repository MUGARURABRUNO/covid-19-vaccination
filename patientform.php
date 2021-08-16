 <?php 
session_start()
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Patient Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.style1 {font-size: 36px}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>

<body >
 
  <div>
  <form id="form1" name="form1" method="post" action="">

    <table width="498" align="center" cellpadding="0" cellspacing="0">
      

      <tr>
        <td colspan="3" bgcolor="#FFCC00"><div align="center" class="style1">
            <p>PATIENT REPORT</p>
        </td>
      </tr>
      <div>
        <?php 
  include 'projectconnection.php';
  // ='".$_SESSION['pwd']."'
  $sql_fetch="SELECT * FROM patient where patientId='".$_SESSION['patientId']."'";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
// echo $rows['patientId'];
  ?>
  <tr>
        <td height="45"><strong>PASSPORT </strong></td>
        <td><img width="100" src="<?php echo $rows['image_link']  ?>"></td> 
      </tr>
      <tr>
        <td width="242" height="39"><strong>PATIENT NAME</strong></td>
        <td width="200"><?php echo $rows['fname'] ?></td>
       <td width="56"><?php echo $rows['lname']  ?></td>
      </tr>
      <tr>
        <td height="45"><strong>NATIONAL ID NUMBER </strong></td>
        <td><?php echo $rows['Nin']  ?></td>
      </tr>
      <tr>
        <td height="78"><strong>LEVEL OF VACCINATION </strong></td>
        <td><?php echo $rows['vaccinationlevel']  ?></td>
      </tr>
    </div>
    <div>
      <?php 
  include 'projectconnection.php';
  $sql_fetch="SELECT * FROM hospital";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
// echo $rows['patientId'];
  ?>
      <tr>
        <td height="49"><strong>HOSPITAL NAME </strong></td>
        <td><?php echo $rows['hospitalname']  ?></td>
      </tr>
    </div>
    <div>
      <?php 
  include 'projectconnection.php';
  $sql_fetch="SELECT * FROM vaccine";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
// echo $rows['patientId'];
  ?>
      <tr>
        <td height="112"><strong>NAME OF VACCINE </strong></td>
        <td><?php echo $rows['vaccineName']  ?></td>
      </tr>
      </div>
      <tr>
        <td height="41">BAR CODE </td>
        <td><label for="Submit"></label>
       <button class="btn" onclick="window.print()"><i class="fa fa-download"></i> Print</button>
      </tr>
      <tr>
        <td height="112"><a href="feedback.php">SEND FEEDBACK </a></td>
        <td><a href="logout.php">LOGOUT</a></td>
      </tr>
      
    </table>
  </form>
</div>
</body>
</html>
