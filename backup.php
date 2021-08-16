








if(isset($_POST['Sign up'])){
	//echo working
	$login_Id=$_POST['login_Id'];
	$patientId=$_POST['patientId'];
	$regNo=$_POST['regNo'];
	$hospitalId=$_POST['hospitalId'];
	$password=$_POST['password'];
	$reset_password=$_POST['reset_password'];
	
	

	$sql_insert="INSERT INTO login(login_Id,patientId,regNo,hospitalId,password,reset_password) VALUES ('$login_Id','$patientId','$regNo','$hospitalId','$password','$reset_password')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}