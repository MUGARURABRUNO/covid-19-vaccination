<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php
include 'projectconnection.php';
// updating code
if (isset($_REQUEST['update'])) {
  // echo "updating successful";
  $hospitalId=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM hospital WHERE hospitalId='$hospitalId'";
  $sql_query=mysqli_query($conn, $sql_fetch);
  $row=mysqli_fetch_assoc($sql_query);


  if(isset($_POST['update-record'])){
  //echo working
  $hospitalId=$_POST['hospitalId'];
  $regNO=$_POST['regNO'];
  $patientId=$_POST['patientId'];
  $hospitalname=$_POST['hospitalname'];
  $district=$_POST['district'];
  $subcounty=$_POST['subcounty'];
  $parish=$_POST['parish'];
  $village=$_POST['village'];

  

  $sql_insert="UPDATE hospital SET hospitalId='$hospitalId', regNO='$regNO', patientId='$patientId', hospitalname='$hospitalname', district='$district', subcounty='$subcounty', parish='$parish', village='$village' WHERE hospitalId='$hospitalId'";
  $sql_query=mysqli_query($conn,$sql_insert);
  if ($sql_query==TRUE) {
    echo " update successful";
  }else{
    echo mysqli_error($conn);
  }
}
  ?>
<form id="form1" name="form1" method="post" action="">
  <table width="455" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="176" height="38"><strong>Hospital Identity Number</strong> </td>
      <td width="279"><label for="hospitalId"></label>
      <input type="text" value="<?php echo $row['hospitalId'];?>" name="hospitalId" /></td>
    </tr>
    <tr>
      <td height="33"><strong>Hospital Registration Number</strong> </td>
      <td><label for="regNO"></label>
      <input type="text" value="<?php echo $row['regNO'];?>" name="regNO" /></td>
    </tr>
    <tr>
      <td height="32"><strong>Patient identity Number</strong> </td>
      <td><label for="patientId"></label>
      <input type="text" value="<?php echo $row['regNO'];?>" name="patientId" /></td>
    </tr>
    <tr>
      <td><strong>Hospital Name</strong></td>
      <td><label for="hospitalname"></label>
      <input type="text" value="<?php echo $row['hospitalname'];?>"name="hospitalname" /></td>
    </tr>
    <tr>
      <td height="42"><strong>District</strong></td>
      <td><label for="district"></label>
      <input type="text" value="<?php echo $row['district'];?>"name="district"/></td>
    </tr>
    <tr>
      <td><strong>Sub County </strong></td>
      <td><label for="subcounty"></label>
      <input type="text" value="<?php echo $row['subcounty'];?>"name="subcounty"/></td>
    </tr>
    <tr>
      <td height="42"><strong>Parish</strong></td>
      <td><label for="Parish"></label>
      <input type="text" value="<?php echo $row['parish'];?>"name="parish" /></td>
    </tr>
    <tr>
      <td height="65"><strong>Village</strong></td>
      <td><label for="village"></label>
      <input type="text" value="<?php echo $row['village'];?>"name="village"/></td>
    </tr>
    <tr>
      <td height="91" colspan="2">
        <div align="center">
          <input name="update-record" type="submit" value="save changes" />
          <label for="Submit2"></label></td> 
        </div>
    </tr>
  </table>
</form>
  <?php
}


 // deleting code
if (isset($_REQUEST['delete'])){
  $hospitalId=$_REQUEST['delete'];
  $sql_delete="DELETE FROM hospital WHERE hospitalId='$hospitalId'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}

// retrieving data
$sql_fetch="SELECT * FROM hospital";
$sql_query=mysqli_query($conn, $sql_fetch);
?>
<body>
<table width="519" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>HOSPITAL IDENTITY </td>
    <td>REGISTRATION NO </td>
    <td>PATIENT IDENITY </td>
    <td>HOSPITAL NAME </td>
    <td>DISTRICT</td>
    <td>SUB COUNTY </td>
    <td>PARISH</td>
    <td>VILLAGE</td>
    <td>Delete</td>
    <td>Update</td>
  </tr>
  <?php 
  while($rows=mysqli_fetch_assoc($sql_query)){
  // echo $rows['patientId']."<br>";
   ?>
  <tr>
    <td><?php echo $rows['hospitalId']?></td>
    <td><?php echo $rows['regNO']?></td>
    <td><?php echo $rows['patientId']?></td>
    <td><?php echo $rows['hospitalname']?></td>
    <td><?php echo $rows['district']?></td>
    <td><?php echo $rows['subcounty']?></td>
    <td><?php echo $rows['parish']?></td>
    <td><?php echo $rows['village']?></td>
    <td><a href="?delete=<?php echo $rows['hospitalId']?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['hospitalId']?>">Update</a></td>
    
  </tr>
  <?php 
} ?>
</table>
</body>
</html>
