<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {color: #000000}
-->
</style>
</head>

<body>
  <?php
  include 'projectconnection.php';

  // Updating 
  if (isset($_REQUEST['update'])){
// echo "updating successful";
  $manufactureid=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM vaccinemanufacuter WHERE manufactureid='$manufactureid'";
  $sql_query=mysqli_query($conn, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);

if(isset($_POST['update-record'])){
  //echo working
  $manufactureid=$_POST['manufactureid'];
  $manufactureid=mysqli_real_escape_string($conn, $manufactureid);
  $name=$_POST['name'];
  $name=mysqli_real_escape_string($conn, $name);
  $country=$_POST['country'];
  $country=mysqli_real_escape_string($conn, $country);
  $email=$_POST['email'];
  $email=mysqli_real_escape_string($conn, $email);
  $telNo=$_POST['telNo'];
  $telNo=mysqli_real_escape_string($conn, $telNo);
  
  

  $sql_insert="UPDATE vaccinemanufacuter SET manufactureid='$manufactureid', name='$name', country='$country', email='$email', telNo='$telNo' WHERE manufactureid='$manufactureid'";
  $sql_query=mysqli_query($conn,$sql_insert);
  if ($sql_query==TRUE) {
    echo " updated successful";
  }else{
    echo mysqli_error($conn);
  }
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="483" height="277" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="254"><span class="style1">Vaccine Manufacturer Identity Number </span></td>
      <td width="229"><label for="manufactureid"></label>
      <input type="text" value="<?php echo $rows['manufactureid']?>" name="manufactureid" /></td>
    </tr>
    <tr>
      <td><span class="style1">Vaccine Manufacturer Name </span></td>
      <td><label for="name"></label>
      <input type="text" value="<?php echo $rows['name']?>" name="name" /></td>
    </tr>
    <tr>
      <td><span class="style1">Vaccine Counrty </span></td>
      <td><label for="country"></label>
      <input type="text" value="<?php echo $rows['country']?>" name="country"  /></td>
    </tr>
    <tr>
      <td><span class="style1">Vaccine Manufacturer Email </span></td>
      <td><label for="email"></label>
      <input type="email" value="<?php echo $rows['email']?>" name="email"/></td>
    </tr>
    <tr>
      <td><span class="style1">Contact</span></td>
      <td><label for="telNo"></label>
      <input type="text" value="<?php echo $rows['telNo']?>" name="telNo" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><label for="update-record"></label></td>
      <td>
        <input name="update-record" type="submit" class="button" value="Save Changes">
      </td>
    </tr>
  </table>
</form>
<?php
}

  // deleting date 
  if (isset($_REQUEST['delete'])){
  $manufactureid=$_REQUEST['delete'];
  $sql_delete="DELETE FROM vaccinemanufacuter WHERE manufactureid='$manufactureid'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}
  // retrieving data
$sql_fetch="SELECT * FROM vaccinemanufacuter";
$sql_query=mysqli_query($conn, $sql_fetch);

  ?>
<table width="315" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFF00">
    <td width="80"><span class="style2">Manufacture Identity </span></td>
    <td width="37"><span class="style2">Name</span></td>
    <td width="49"><span class="style2">Country</span></td>
    <td width="52"><span class="style2">Email</span></td>
    <td width="97"><span class="style2">Contact</span></td>
    <td><span class="style2">Delete</span></td>
    <td><span class="style2">Update</span></td>
  </tr>
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
  <tr bgcolor="#FFFF66">
    <td><?php echo $rows['manufactureid'];?></td>
    <td><?php echo $rows['name'];?></td>
    <td><?php echo $rows['country'];?></td>
    <td><?php echo $rows['email'];?></td>
    <td><?php echo $rows['telNo'];?></td>
    <td><a href="?delete=<?php echo $rows['manufactureid'];?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['manufactureid'];?>">Update</a></td>
  </tr>
  </tr>
  <?php
}
?>
</table>
</body>
</html>
