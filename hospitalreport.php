<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		input[type=text]{
			
			padding-right: 10px;
		}
	
		.padding{
			padding-top: 10px;
			padding-bottom: 10px;
			padding-right: 5px;
		}
	
	
	</style>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="1010" align="center" border="1" cellspacing="0" cellpadding="5" >
  <td width="507">  <table width="1010" border="1" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td colspan="2" align="center" style="font-size: 36px"><strong>HOSPITAL REPORT</strong></td>
      </tr>
          <!-- <?php 
  // include 'projectconnection.php';
  // $sql_fetch="SELECT * FROM patient";
// $sql_query=mysqli_query($conn, $sql_fetch);
// $rows=mysqli_fetch_assoc($sql_query);
// echo $rows['patientId'];
  ?> -->
      <tr>
      <td colspan="2"><strong style="font-size: 24px">PATIENTS REPORT RECORDS</strong></td>
    </tr>
    <div>
      <?php 
include 'projectconnection.php';
   $sql_fetch="SELECT * FROM patient WHERE patientId";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
$count=mysqli_num_rows($sql_query);
      ?>

    <tr class="padding">
      <td class="padding"><strong>Number Of Vaccinated Patients</strong></td>
      <td width="503"><?php echo $no_of_vacinated = $count  ?></td>
    </tr>

    <?php 
include 'projectconnection.php';
   $sql_fetch="SELECT * FROM patient WHERE vaccinationLevel='FIRST DOSE'";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
$first_jab=mysqli_num_rows($sql_query);
   $sql_fetch="SELECT * FROM patient WHERE vaccinationLevel='SECOND DOSE'";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
$second_jab=mysqli_num_rows($sql_query);
 $sql_fetch="SELECT * FROM patient WHERE vaccinationLevel='THIRD DOSE'";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
$third_jab=mysqli_num_rows($sql_query);
      ?>

    <tr class="padding">
      <td class="padding"><strong>Number Of Patients on First Jab</strong></td>
      <td width="503"><?php echo $first_jab  ?></td>
    </tr>
    <tr class="padding">
      <td class="padding"><strong>Number Of Patients on Second Jab</strong></td>
      <td width="503"><?php echo $second_jab  ?></td>
    </tr>
    <tr class="padding">
      <td class="padding"><strong>Number Of Patients on Third Jab</strong></td>
      <td width="503"><?php echo $third_jab  ?></td>
    </tr>
  </div>
    <tr>
      <td colspan="2" style="font-size: 24px"><strong>VACCINE REPORT RECORDS</strong></td>
    </tr>
<?php 
include 'projectconnection.php';
   $sql_fetch="SELECT * FROM hospitalvaccine WHERE quantity ";
$sql_query=mysqli_query($conn, $sql_fetch);
$echo=mysqli_fetch_assoc($sql_query);
// $count1=mysqli_num_rows($sql_query);
      ?>

    <tr class="padding">
      <td class="padding"><strong>Vaccine Donated</strong></td>
      <td width="503"><?php echo $vacines_donated=$echo['quantity']  ?></td>
    </tr>

     <?php 
include 'projectconnection.php';
   $sql_fetch="SELECT * FROM  patient WHERE patientId";
$sql_query=mysqli_query($conn, $sql_fetch);
$rows=mysqli_fetch_assoc($sql_query);
$vaccine_used=mysqli_num_rows($sql_query);
      ?>

    <tr class="padding">
      <td class="padding"><strong>Vaccine Used</strong></td>
      <td width="503"><?php echo  $vacines_donated =$vaccine_used  ?></td>
    </tr>

    <tr class="padding">
      <td class="padding"><strong>Available Vaccine</strong></td>
      <td width="503"><?php echo $echo['quantity']- $no_of_vacinated  ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><button onclick="window.print()" >Print</button> </td>
    </tr>
  </table>  
  </table>
</form>
</body>
</html>