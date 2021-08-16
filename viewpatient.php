<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
<?php
include 'projectconnection.php'; 
// update
if (isset($_REQUEST['update'])){
// echo "updating successful";
  $patientId=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM patient WHERE patientId='$patientId'";
  $sql_query=mysqli_query($conn, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);
 
if(isset($_POST['update-record'])){
  // echo "working";
  $patientId=$_POST['patientId'];
  //echo $studentid."<br>";
  $Nin=$_POST['Nin'];
  //echo $fname."<br>";
  $hospitalId=$_POST['hospitalId'];
  //echo $lname."<br>";
  $image_link=$_POST['image_link']; 
  //echo $sex."<br>";
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $sex=$_POST['sex'];
  $date_of_birth=$_POST['date_of_birth'];
  $patientOccupation=$_POST['patientOccupation'];
  $email=$_POST['email'];
  $telNumber=$_POST['telNumber'];
  $nationality=$_POST['nationality'];
  $district=$_POST['district'];
  $subcounty=$_POST['subcounty'];
  $parish=$_POST['parish'];
  $village=$_POST['village'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  

  $sql_insert="UPDATE patient SET patientId='$patientId', Nin='$Nin', hospitalId='$hospitalId', image_link='$image_link', fname='$fname', lname='$lname', sex='$sex', date_of_birth='$date_of_birth', patientOccupation='$patientOccupation', email='$email', telNumber='$telNumber', nationality='$nationality', district='$district', subcounty='$subcounty', parish='$parish', village='$village', username='$username', password='$password' WHERE patientId='$patientId'";
  $sql_query=mysqli_query($conn,$sql_insert);
  if ($sql_query==TRUE) {
    echo " Update successful";
  }else{
    echo mysqli_error($conn);
  }
}

  ?>

<form id="form1" name="form1" method="post" action="">
  <table width="408" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="174" height="33"><span class="style2">Patient Identity Number</span> </td>
      <td width="234"><label for="patientId"></label>
      <input type="text" value="<?php   echo $rows['patientId']; ?>"name="patientId" /></td>
    </tr>
    <tr>
      <td height="47"><strong><span class="style4">National Identity Number</span></strong> </td>
      <td><label for="Nin"></label>
      <input type="text" value="<?php   echo $rows['Nin']; ?>"name="Nin" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Hospital identity Number </strong></span></td>
      <td><label for="hospitalId"></label>
      <input type="text" value="<?php   echo $rows['hospitalId']; ?>"name="hospitalId" /></td>
    </tr>
    <tr>
      <td height="33"><span class="style4"><strong>passport</strong></span></td>
      <td><label for="image_link"></label>
      <input type="text" value="<?php   echo $rows['image_link']; ?>"name="image_link" /></td>
    </tr>
    <tr>
      <td height="37"><span class="style4"><strong>First Name </strong></span></td>
      <td><label for="fname"></label>
      <input type="text" value="<?php   echo $rows['fname']; ?>"name="fname" /></td>
    </tr>
    <tr>
      <td height="43"><span class="style4"><strong>Last Name </strong></span></td>
      <td><label for="lname"></label>
      <input type="text" value="<?php   echo $rows['lname']; ?>"name="lname" /></td>
    </tr>
    <tr>
      <td height="68"><span class="style4"><strong>Gender</strong></span></td>
      <td><label for="sex"></label>
        <table width="200">
          <tr>
            <td><label>
              <input type="radio" value="<?php   echo $rows['sex']; ?>"name="sex" value="radio" />
              Male</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" value="<?php   echo $rows['sex']; ?>"name="sex" value="radio" />
              Female</label></td>
          </tr>
        </table>      </td>
    </tr>
    <tr>
      <td height="39"><span class="style4"><strong>Date Of Birth </strong></span></td>
      <td><label for="date_of_birth"></label>
      <input type="date" value="<?php   echo $rows['date_of_birth']; ?>"name="date_of_birth" /></td>
    </tr>
    <tr>
      <td height="38"><span class="style4"><strong>Patient Occupation </strong></span></td>
      <td><label for="patientOccupation"></label>
      <input type="text" value="<?php   echo $rows['patientOccupation']; ?>"name="patientOccupation" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Email</strong></span></td>
      <td><label for="email"></label>
      <input type="text" value="<?php   echo $rows['email']; ?>"name="email" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Telephone Number </strong></span></td>
      <td><label for="telNumber"></label>
      <input type="text" value="<?php   echo $rows['telNumber']; ?>"name="telNumber" /></td>
    </tr>
    <tr>
      <td><span class="style4"><strong>Nationality</strong></span></td>
      <td><label for="nationality"></label>
      <input type="text" value="<?php   echo $rows['nationality']; ?>"name="nationality"/></td>
    </tr>
    <tr>
      <td height="31"><span class="style4"><strong>District</strong></span></td>
      <td><label for="district"></label>
      <input type="text" value="<?php   echo $rows['district']; ?>"name="district" /></td>
    </tr>
    <tr>
      <td height="33"><span class="style4"><strong>Sub County </strong></span></td>
      <td><label for="subcounty"></label>
        <input type="text" value="<?php   echo $rows['subcounty']; ?>"name="subcounty" />
    </tr>
    <tr>
      <td height="50"><span class="style4"><strong>Parish</strong></span></td>
      <td><label for="parish"></label>
      <input type="text" value="<?php   echo $rows['parish']; ?>"name="parish"/></td>
    </tr>
    <tr>
      <td height="44"><span class="style4"><strong>Village</strong></span></td>
      <td><label for="village"></label>
      <input type="text" value="<?php   echo $rows['village']; ?>"name="village" /></td>
    </tr>
   <tr>
      <td height="44"><span class="style4"><strong>Username</strong></span></td>
      <td><label for="username"></label>
      <input type="text" value="<?php   echo $rows['username']; ?>"name="username" /></td>
    </tr>
   <tr>
      <td height="44"><span class="style4"><strong>password</strong></span></td>
      <td><label for="password"></label>
      <input type="text" value="<?php   echo $rows['password']; ?>"name="password" /></td>
    </tr>
    <tr>
      <td height="48" colspan="2"><label for="Submit1"></label>
        <div align="center">
          <input name="update-record" type="submit" value="Save Changes" />
      </div></td>
    </tr>
  </table>
</form>
  <?php
}

// deleting code
if (isset($_REQUEST['delete'])){
  $patientId=$_REQUEST['delete'];
  $sql_delete="DELETE FROM patient WHERE patientId='$patientId'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}

// Retrieving code
$sql_fetch="SELECT * FROM patient";
$sql_query=mysqli_query($conn, $sql_fetch);

?>
<table width="942" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#33FF00">
    <td>Patient Identity Number </td>
    <td>National Identity Number </td>
    <td>Hospital Identity Number </td>
    <td>passport</td>
    <td>First Name </td>
    <td>Last Name </td>
    <td>Gender</td>
    <td>Date Of Birth</td>
    <td>Patient Occupation</td>
    <td>Email</td>
    <td>Telephone Number </td>
    <td>Nationality</td>
    <td>District</td>
    <td>Sub County </td>
    <td>Parish</td>
    <td>Village</td>
    <td>username</td>
    <td>password</td>
    <td>Delete</td>
    <td>Update</td>
  </tr>
  <?php 
  while($rows=mysqli_fetch_assoc($sql_query)){
  // echo $rows['patientId']."<br>";
   ?>

  <tr bgcolor="#66FFCC">
    <td><?php echo $rows['patientId']  ?></td>
    <td><?php echo $rows['Nin'] ?></td>
    <td><?php echo $rows['hospitalId'] ?></td>
    <td><?php echo $rows['image_link'] ?></td>
    <td><?php echo $rows['fname'] ?></td>
    <td><?php echo $rows['lname'] ?></td>
    <td><?php echo $rows['sex'] ?></td>
    <td><?php echo $rows['date_of_birth'] ?></td>
    <td><?php echo $rows['patientOccupation'] ?></td>
    <td><?php echo $rows['email'] ?></td>
    <td><?php echo $rows['telNumber'] ?></td>
    <td><?php echo $rows['nationality'] ?></td>
    <td><?php echo $rows['district'] ?></td>
    <td><?php echo $rows['subcounty'] ?></td>
    <td><?php echo $rows['parish'] ?></td>
    <td><?php echo $rows['village'] ?></td>
    <td><?php echo $rows['username'] ?></td>
    <td><?php echo $rows['password'] ?></td>
    <td><a href="?delete=<?php echo $rows['patientId']?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['patientId']?>">Update</a></td>
  </tr>
<?php 
} ?>
</table>
</body>
</html>