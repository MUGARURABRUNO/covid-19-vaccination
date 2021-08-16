<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <?php 
include 'projectconnection.php';
// updating
if (isset($_REQUEST['update'])){
// echo "updating successful";
  $workerId=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM healthworker WHERE workerId='$workerId'";
  $sql_query=mysqli_query($conn, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);

  if(isset($_POST['update-Record'])){
  //echo working
  $workerId=$_POST['workerId'];
  // $workerId=mysqli_real_escape_string($conn, $workerId);
  $hospitalId=$_POST['hospitalId'];
  // $hospitalId=mysqli_real_escape_string($conn, $hospitalId);
  $firstName=$_POST['firstName'];
  // $firstName=mysqli_real_escape_string($conn, $firstName);
  $lastName=$_POST['lastName'];
  // $lastName=mysqli_real_escape_string($conn, $lastName);
  $Nin=$_POST['Nin'];
  // $Nin=mysqli_real_escape_string($conn, $Nin);
  $sex=$_POST['sex'];
  // $sex=mysqli_real_escape_string($conn, $sex);
  $dateOfBirth=$_POST['dateOfBirth'];
  // $dateOfBirth=mysqli_real_escape_string($conn, $dateOfBirth);
  $email=$_POST['email'];
  // $email=mysqli_real_escape_string($conn, $email);
  $positionOccupied=$_POST['positionOccupied'];
  // $positionOccupied=mysqli_real_escape_string($conn, $positionOccupied);
  $workerNationality=$_POST['workerNationality'];
  // $workerNationality=mysqli_real_escape_string($conn, $workerNationality);
  $District=$_POST['District'];
  // $District=mysqli_real_escape_string($conn, $District);
  $subCounty=$_POST['subCounty'];
  // $subCounty=mysqli_real_escape_string($conn, $subCounty);
  $parish=$_POST['parish'];
  // $parish=mysqli_real_escape_string($conn, $parish);
  $village=$_POST['village'];
  // $village=mysqli_real_escape_string($conn, $village);
  $Username=$_POST['Username'];
  // $Username=mysqli_real_escape_string($conn, $Username);
  $Password=$_POST['Password'];
  

  $sql_insert="UPDATE  healthworker SET workerId='$workerId', hospitalId='$hospitalId', firstName='$firstName', lastName='$lastName', Nin='$Nin', sex='$sex', dateOfBirth='$dateOfBirth', email='$email', positionOccupied='$positionOccupied', workerNationality='$workerNationality', District='$District', subCounty='$subCounty', parish='$parish', village='$village', Username='$Username', Password='$Password' WHERE workerId='$workerId'";
  $sql_query=mysqli_query($conn,$sql_insert);
  if ($sql_query==TRUE) {
    echo "updated successful";
  }else{
    echo mysqli_error($conn);
  }
}

  ?>
<form id="form1" name="form1" method="post" action="">
  <table width="441" border="0" align="center" cellpadding="0" cellspacing="0">
   <td width="181"><strong>Worker Identity Number </strong></td>
      <td width="260"><label for="workerId"></label>
      <input type="text" value="<?php echo $rows['workerId'] ?>" name="workerId"  /></td>
    </tr> 
     <tr>
      <td><strong>Hospital Identity </strong></td>
      <td><label for="hospitalId"></label>
      <input type="text" value="<?php echo $rows['hospitalId'] ?>" name="hospitalId" /></td>
    </tr> 
    <tr>
      <td><strong>First Name </strong></td>
      <td><label for="firstName"></label>
      <input type="text" value="<?php echo $rows['firstName'] ?>" name="firstName" /></td>
    </tr>
    <tr>
      <td><strong>Last Name </strong></td>
      <td><label for="lastName"></label>
        <input type="text" value="<?php echo $rows['lastName'] ?>" name="lastName" /></td>
    </tr>
    <tr>
      <td><strong>National Identity Number(NIN) </strong></td>
      <td><label for="Nin"></label>
      <input type="text" value="<?php echo $rows['Nin'] ?>" name="Nin"/></td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
      <td><label for="sex"></label>
        <table width="200">
          <tr>
            <td><label>
              <input type="radio" value="<?php echo $rows['sex'] ?>" name="sex" value="Male" />
              Male</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" value="<?php echo $rows['sex'] ?>" name="sex" value="Female" />
              Female</label></td>
          </tr>
        </table>      </td>
    </tr>
    <tr>
      <td><strong>Date Of Birth </strong></td>
      <td><label for="dateOfBirth"></label>
      <input type="date" value="<?php echo $rows['dateOfBirth'] ?>" name="dateOfBirth"/></td>
    </tr>
    <tr>
      <td><strong>Email </strong></td>
      <td><label for="email"></label>
        <input type="email" value="<?php echo $rows['email'] ?>" name="email" /></td>
    </tr>
    <tr>
      <td><strong>Position Occupied</strong> </td>
      <td><label for="positionOccupied"></label>
        <label for="positionOccupied"></label>
        <select value="<?php echo $rows['positionOccupied'] ?>" name="positionOccupied" id="select">
          <option>Doctor</option>
          <option>Nurse</option>
          <option>Data Entrant</option>
        </select>
      </td>
    </tr>
    <tr>
      <td> <strong>Nationality </strong></td>
      <td><label for="workerNationality"></label>
      <input type="text" value="<?php echo $rows['workerNationality'] ?>" name="workerNationality" /></td>
    </tr>
    <tr>
      <td><strong>District </strong></td>
      <td><label for="District"></label>
      <input type="text" value="<?php echo $rows['District'] ?>" name="District" /></td>
    </tr>
    <tr>
      <td><strong>Sub County </strong></td>
      <td><label for="subCounty"></label> 
      <input type="text" value="<?php echo $rows['subCounty'] ?>" name="subCounty"/></td>
    </tr>
    <tr>
      <td><strong>Parish</strong></td>
      <td><label for="parish"></label>
      <input type="text" value="<?php echo $rows['parish'] ?>" name="parish" /></td>
    </tr>
    <tr>
      <td><strong>Village</strong></td>
      <td><label for="village"></label>
      <input type="text" value="<?php echo $rows['village'] ?>" name="village" /></td>
    </tr>
  <tr>
      <td><strong>username</strong></td>
      <td><label for="Username"></label>
      <input type="text" value="<?php echo $rows['Username'] ?>" name="Username" /></td>
    </tr>
    <tr>
      <td><strong>password</strong></td>
      <td><label for="Password"></label>
      <input type="password" value="<?php echo $rows['Password'] ?>" name="Password" /></td>
    </tr>
    <tr>
    <tr>
      <td colspan="2"><label for="update-Record"></label>
        <div align="center">
          <input name="update-Record" type="submit" value="Save changes">
      </div></td>
    </tr>
  </table>
</form>
   <?php
}
 // deleting code
if (isset($_REQUEST['delete'])){
  $workerId=$_REQUEST['delete'];
  $sql_delete="DELETE FROM healthworker WHERE workerId='$workerId'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}

// retrieving data
$sql_fetch="SELECT * FROM healthworker";
$sql_query=mysqli_query($conn, $sql_fetch);
?>
<table width="100" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>worker identity </td>
    <td>hospital identityl </td>
    <td>fname</td>
    <td>lname</td>
    <td>Nin</td>
    <td>Sex</td>
    <td>date of birth</td>
    <td>position occupied </td>
    <td>worker nationality </td>
    <td>district</td>
    <td>subcounty</td>
    <td>parish</td>
    <td>village</td>
    <td>username</td>
    <td>password</td>
    <td>Delete</td>
    <td>Update</td>
  </tr>
  <?php 
  while($rows=mysqli_fetch_assoc($sql_query)){
  // echo $rows['patientId']."<br>";
   ?>
  <tr>
    <td><?php echo $rows['workerId']?></td>
    <td><?php echo $rows['hospitalId']?></td>
    <td><?php echo $rows['firstName']?></td>
    <td><?php echo $rows['lastName']?></td>
    <td><?php echo $rows['Nin']?></td>
    <td><?php echo $rows['sex']?></td>
    <td><?php echo $rows['dateOfBirth']?></td>
    <td><?php echo $rows['positionOccupied']?></td>
    <td><?php echo $rows['workerNationality']?></td>
    <td><?php echo $rows['District']?></td>
    <td><?php echo $rows['subCounty']?></td>
    <td><?php echo $rows['parish']?></td>
    <td><?php echo $rows['village']?></td>
    <td><?php echo $rows['Username']?></td>
    <td><?php echo $rows['Password']?></td>
    <td><a href="?delete=<?php echo $rows['workerId']?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['workerId']?>">Update</a></td>
  </tr>
<?php 
}
?>
</table>
</body>
</html>
