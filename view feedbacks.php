<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <?php 
include 'projectconnection.php';
// deleting code
if (isset($_REQUEST['delete'])){
  $feedback_No=$_REQUEST['delete'];
  $sql_delete="DELETE FROM feedback WHERE feedback_No='$feedback_No'";
  $sql_query=mysqli_query($conn, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($conn);
  }
}
// Retrieving code
$sql_fetch="SELECT * FROM feedback";
$sql_query=mysqli_query($conn, $sql_fetch);


  ?>
<table width="826" height="134" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FF6600">
    <td width="218" height="40"> <div align="center"><strong>FIRST NAME </strong></div></td>
    <td width="145"><div align="center"><strong>LAST NAME </strong></div></td>
    <td width="176"><div align="center"><strong>EMAIL</strong></div></td>
    <td width="287"><div align="center"><strong>FEEDBACK</strong></div></td>
    <td width="287"><div align="center"><strong>DELETE</strong></div></td>
  </tr>
<?php 
while($rows=mysqli_fetch_assoc($sql_query)){
// echo $rows['Fname']."<br>";
?>
  <tr>
    <td><?php echo $rows['Fname']  ?></td>
    <td><?php echo $rows['Lname']  ?></td>
    <td><?php echo $rows['Email']  ?></td>
    <td><?php echo $rows['message']  ?></td>
    <td><a href="?delete=<?php echo $rows['feedback_No']?>">Delete</a></td>
  </tr>
  <?php 
} ?>
</table>
</body>
</html>
