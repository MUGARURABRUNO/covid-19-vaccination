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
  $hospitalVaccineId=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM hospitalvaccine WHERE hospitalVaccineId='$hospitalVaccineId'";
  $sql_query=mysqli_query($conn, $sql_fetch);
  $row=mysqli_fetch_assoc($sql_query);
    
    if(isset($_POST['update-record'])){
  //echo working
  $hospitalVaccineId=$_POST['hospitalVaccineId'];
  $hospitalVaccineId=mysqli_real_escape_string($conn, $hospitalVaccineId);
  $hospitalId=$_POST['hospitalId'];
  $hospitalId=mysqli_real_escape_string($conn, $hospitalId);
  $vaccineid=$_POST['vaccineid'];
  $vaccineid=mysqli_real_escape_string($conn, $vaccineid);
  $manufactureid=$_POST['manufactureid'];
  $manufactureid=mysqli_real_escape_string($conn, $manufactureid);
  $quantity=$_POST['quantity'];
  $quantity=mysqli_real_escape_string($conn, $quantity);
  
  

  $sql_insert="UPDATE hospitalvaccine SET vaccineid='$vaccineid', manufactureid='$manufactureid', quantity='$quantity' WHERE  vaccineid='$vaccineid'";
  $sql_query=mysqli_query($conn,$sql_insert);
  if ($sql_query==TRUE) {
    echo "successful";
  }else{
    echo mysqli_error($conn);
  }
}

    ?>

<form id="form1" name="form1" method="post" action="">
  <table width="489" height="258" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="212" height="38"><strong>Hospital Vaccine Identity </strong></td>
      <td width="157"><label for="hospitalVaccineId"></label>
      <input type="int" value="<?php echo $row['hospitalVaccineId'] ?>"   name="hospitalVaccineId" /></td>
    </tr>
    <tr>
      <td height="44"><strong>Hospital Identity Number </strong></td>
      <td><label for="hospitalId"></label>
      <input type="text" value="<?php echo $row['hospitalId'] ?>" name="hospitalId" /></td>
    </tr>
    <tr>
      <td height="45"><strong>Vaccine Identity </strong></td>
      <td><label for="vaccineid"></label>
      <input type="text" value="<?php echo $row['vaccineid'] ?>" name="vaccineid" /></td>
    </tr>
    <tr>
      <td height="45"><strong>Manufacturer Identiy Number </strong></td>
      <td><label for="manufactureid"></label>
      <input type="text" value="<?php echo $row['manufactureid'] ?>" name="manufactureid" /></td>
    </tr>
    <tr>
      <td height="56"><strong>Vaccine Qantity Suplied </strong></td>
      <td><label for="quantity"></label>
      <input type="int" value="<?php echo $row['quantity'] ?>" name="quantity" /></td>
    </tr>
    <tr>
      <td colspan="2"><label for="update-record"></label>
      <input type="submit" name="update-record" value="Save changees" /></td>
    </tr>
  </table>
</form>
    <?php
}

  // deleting date 
  if (isset($_REQUEST['delete'])){
  $hospitalVaccineId=$_REQUEST['delete'];
  $sql_delete="DELETE FROM hospitalvaccine WHERE hospitalVaccineId='$hospitalVaccineId'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}
  // retrieving data
$sql_fetch="SELECT * FROM hospitalvaccine";
$sql_query=mysqli_query($conn, $sql_fetch);

  ?>

<table width="490" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFF00">
    <td>Hospital vaccine Identity </td>
    <td>hospital identity </td>
    <td>vaccine Identity </td>
    <td>Manufacture Identity </td>
    <td>Quantity</td>
    <td>Delete</td>
    <td>Update</td>
  </tr>
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
  <tr bgcolor="#33FF00">
    <td><?php echo $rows['hospitalVaccineId'];?></td>
    <td><?php echo $rows['hospitalId'];?></td>
    <td><?php echo $rows['vaccineid'];?></td>
    <td><?php echo $rows['manufactureid'];?></td>
    <td><?php echo $rows['quantity'];?></td>
    <td><a href="?delete=<?php echo $rows['hospitalVaccineId'];?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['hospitalVaccineId'];?>">Update</a></td>
  </tr>
  <?php
  }
?>
</table>
</body>
</html>
