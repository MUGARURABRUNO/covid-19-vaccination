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
  if (isset($_REQUEST['update'])) {
  // echo "updating successful";
  $vaccineid=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM vaccine WHERE vaccineid='$vaccineid'";
  $sql_query=mysqli_query($conn, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);


if(isset($_POST['update-record'])){
  //echo working
  $vaccineid=$_POST['vaccineid'];
  $vaccineid=mysqli_real_escape_string($conn, $vaccineid);
  $vaccineName=$_POST['vaccineName'];
  $vaccineName=mysqli_real_escape_string($conn, $vaccineName);
  $manufacturedate=$_POST['manufacturedate'];
  $manufacturedate=mysqli_real_escape_string($conn, $manufacturedate);
  $expirydate=$_POST['expirydate'];
  $expirydate=mysqli_real_escape_string($conn, $expirydate);
  $manufactureid=$_POST['manufactureid'];
  $manufactureid=mysqli_real_escape_string($conn, $manufactureid);
  
  

  $sql_insert="UPDATE vaccine SET vaccineid='$vaccineid', vaccineName='$vaccineName', manufacturedate='$manufacturedate',expirydate='$expirydate', manufactureid='$manufactureid' WHERE vaccineid='$vaccineid'";
  $sql_query=mysqli_query($conn,$sql_insert);
  if ($sql_query==TRUE) {
    echo "successful";
  }else{
    echo mysqli_error($conn);
  }
}  
?>
<form id="form1" name="form1" method="post" action="">
  <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="48"><span class="style6">Vaccine Identity Number </span></td>
      <td><label for="vaccineid"></label>
      <input type="text" value="<?php   echo $rows['vaccineid']; ?>" name="vaccineid"  /></td>
    </tr>
    <tr>
      <td height="38"><span class="style6">Vaccine Name </span></td>
      <td><label for="vaccineName"></label>
      <input type="text" value="<?php   echo $rows['vaccineName']; ?>" name="vaccineName" /></td>
    </tr>
    <tr>
      <td height="31"><span class="style6">Manufacture Date </span></td>
      <td><label for="manufacturedate"></label>
      <input type="date" value="<?php   echo $rows['manufacturedate']; ?>" name="manufacturedate" /></td>
    </tr>
    <tr>
      <td height="40"><span class="style6">Expiry Date </span></td>
      <td><label for="expirydate"></label>
      <input type="date" value="<?php   echo $rows['expirydate']; ?>" name="expirydate"  /></td>
    </tr>
    <tr>
      <td><span class="style6">Manufacture Identity Number </span></td>
      <td><label for="manufactureid"></label>
      <input type="text" value="<?php   echo $rows['manufactureid']; ?>" name="manufactureid"  /></td>
    </tr>
    <tr>
      <td height="71" colspan="2"><label for="update-record"></label>
        <div align="center">
          <input name="update-record" type="submit" value="Save Changes">
      </div></td>
    </tr>
  </table>
</form>

 <?php 
}
  // deleting date 
  if (isset($_REQUEST['delete'])){
  $vaccineid=$_REQUEST['delete'];
  $sql_delete="DELETE FROM vaccine WHERE vaccineid='$vaccineid'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}
  // retrieving data
$sql_fetch="SELECT * FROM vaccine";
$sql_query=mysqli_query($conn, $sql_fetch);

  ?>
<table width="735" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFF00">
    <td>Vaccine Identity </td>
    <td>Vaccine Name</td>
    <td>Manufacture Date </td>
    <td>Manufacture Expiry Date </td>
    <td>Manufacture Identity </td>
    <td>Delete</td>
    <td>Update</td>
  </tr>
  <?php 
  while($rows=mysqli_fetch_assoc($sql_query)){
  // echo $rows['patientId']."<br>";
   ?>
  <tr bgcolor="#00FF00">
    <td><?php echo $rows['vaccineid'] ?></td>
    <td><?php echo $rows['vaccineName'] ?></td>
    <td><?php echo $rows['manufacturedate'] ?></td>
    <td><?php echo $rows['expirydate'] ?></td>
    <td><?php echo $rows['manufactureid'] ?></td>
    <td><a href="?delete=<?php echo $rows['vaccineid']?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['vaccineid']?>">Update</a></td>
  </tr>
  <?php 
}
?>
</table>
</body>
</html>
