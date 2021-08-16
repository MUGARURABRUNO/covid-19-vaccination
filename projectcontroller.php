<?php
session_start();
include 'projectconnection.php';

// submitting data to the  patient database
if(isset($_POST['Submit1'])){
	$Nin=$_POST['Nin'];
	$Nin=mysqli_real_escape_string($conn, $Nin);
	// calling an image
if (isset($_POST['Submit1'])){
  $filetmp=$_FILES["image_link"]["tmp_name"];
  $filename=$_FILES["image_link"]["name"];
  $filetype=$_FILES["image_link"]["type"];
  $target_dir="image/imag";
  $img_url=$target_dir.basename($_FILES["image_link"]["name"]);

  if(move_uploaded_file($filetmp, $img_url)==TRUE){
    echo "successful";

  }else{
    echo "Not successful";
  }
}
	$fname=$_POST['fname'];
	$fname=mysqli_real_escape_string($conn, $fname);
	$lname=$_POST['lname'];
	$lname=mysqli_real_escape_string($conn, $lname);
	$sex=$_POST['sex'];
	$sex=mysqli_real_escape_string($conn, $sex);
	$date_of_birth=$_POST['date_of_birth'];
	$date_of_birth=mysqli_real_escape_string($conn, $date_of_birth);
	$patientOccupation=$_POST['patientOccupation'];
	$patientOccupation=mysqli_real_escape_string($conn, $patientOccupation);
	$email=$_POST['email'];
	$email=mysqli_real_escape_string($conn, $email);
	$telNumber=$_POST['telNumber'];
	$telNumber=mysqli_real_escape_string($conn, $telNumber);
	$nationality=$_POST['nationality'];
	$nationality=mysqli_real_escape_string($conn, $nationality);
	$district=$_POST['district'];
	$district=mysqli_real_escape_string($conn, $district);
	$subcounty=$_POST['subcounty'];
	$subcounty=mysqli_real_escape_string($conn, $subcounty);
	$parish=$_POST['parish'];
	$parish=mysqli_real_escape_string($conn, $parish);
	$village=$_POST['village'];
	$village=mysqli_real_escape_string($conn, $village);
	$vaccinationlevel=$_POST['vaccinationlevel'];
	$vaccinationlevel=mysqli_real_escape_string($conn, $vaccinationlevel);
	$username=$_POST['username'];
	$username=mysqli_real_escape_string($conn, $username);
	$password=$_POST['password'];
	$password=mysqli_real_escape_string($conn, $password);
	
	

	$sql_insert="INSERT INTO patient(Nin,image_link,fname,lname,sex,date_of_birth,patientOccupation,email,telNumber,nationality,district,subcounty,parish,village,vaccinationlevel,username,password) VALUES ('$Nin','$img_url','$fname','$lname','$sex','$date_of_birth','$patientOccupation','$email','$telNumber','$nationality','$district','$subcounty','$parish','$village','$vaccinationlevel','$username','$password')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}


// submitting data to the hospital database
if(isset($_POST['Submit2'])){
	$regNO=$_POST['regNO'];
	$regNO=mysqli_real_escape_string($conn, $regNO);
	$hospitalname=$_POST['hospitalname'];
	$hospitalname=mysqli_real_escape_string($conn, $hospitalname);
	$district=$_POST['district'];
	$district=mysqli_real_escape_string($conn, $district);
	$subcounty=$_POST['subcounty'];
	$subcounty=mysqli_real_escape_string($conn, $subcounty);
	$parish=$_POST['parish'];
	$parish=mysqli_real_escape_string($conn, $parish);
	$village=$_POST['village'];
	$village=mysqli_real_escape_string($conn, $village);

	

	$sql_insert="INSERT INTO hospital(regNO,hospitalname,district,subcounty,parish,village) VALUES ('$regNO','$hospitalname','$district','$subcounty','$parish','$village')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}



// submitting data to the healthworker database
if(isset($_POST['Submit3'])){

	$firstName=$_POST['firstName'];
	$firstName=mysqli_real_escape_string($conn, $firstName);
	$lastName=$_POST['lastName'];
	$lastName=mysqli_real_escape_string($conn, $lastName);
	$Nin=$_POST['Nin'];
	$Nin=mysqli_real_escape_string($conn, $Nin);
	$sex=$_POST['sex'];
	$sex=mysqli_real_escape_string($conn, $sex);
	$dateOfBirth=$_POST['dateOfBirth'];
	$dateOfBirth=mysqli_real_escape_string($conn, $dateOfBirth);
	$email=$_POST['email'];
	$email=mysqli_real_escape_string($conn, $email);
	$positionOccupied=$_POST['positionOccupied'];
	$positionOccupied=mysqli_real_escape_string($conn, $positionOccupied);
	$workerNationality=$_POST['workerNationality'];
	$workerNationality=mysqli_real_escape_string($conn, $workerNationality);
	$District=$_POST['District'];
	$District=mysqli_real_escape_string($conn, $District);
	$subCounty=$_POST['subCounty'];
	$subCounty=mysqli_real_escape_string($conn, $subCounty);
	$parish=$_POST['parish'];
	$parish=mysqli_real_escape_string($conn, $parish);
	$village=$_POST['village'];
	$village=mysqli_real_escape_string($conn, $village);
	$Username=$_POST['Username'];
	$Username=mysqli_real_escape_string($conn, $Username);
	$Password=$_POST['Password'];
	$Password=mysqli_real_escape_string($conn, $Password);
	

	$sql_insert="INSERT INTO healthworker(firstName,lastName,Nin,sex,dateOfBirth,email,positionOccupied,workerNationality,District,subCounty,parish,village,Username,Password) VALUES ('$firstName','$lastName','$Nin','$sex','$dateOfBirth','$email','$positionOccupied','$workerNationality','$District','$subCounty','$parish','$village','$Username','".md5('$Password')."')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the hospital vaccine details
if(isset($_POST['Submit4'])){
	$vaccineid=$_POST['vaccineid'];
	$vaccineid=mysqli_real_escape_string($conn, $vaccineid);
	$manufactureid=$_POST['manufactureid'];
	$manufactureid=mysqli_real_escape_string($conn, $manufactureid);
	$quantity=$_POST['quantity'];
	$quantity=mysqli_real_escape_string($conn, $quantity);
	
	

	$sql_insert="INSERT INTO hospitalvaccine(vaccineid,manufactureid,quantity) VALUES ('$vaccineid','$manufactureid','$quantity')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}



// submitting data to the vaccine details database.
if(isset($_POST['Submit5'])){
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
	
	

	$sql_insert="INSERT INTO vaccine(vaccineid,vaccineName,manufacturedate,expirydate,manufactureid) VALUES ('$vaccineid','$vaccineName','$manufacturedate','$expirydate','$manufactureid')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}




// submitting data to the vaccine manufacturer database
if(isset($_POST['submit6'])){
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
	
	

	$sql_insert="INSERT INTO vaccinemanufacuter(manufactureid,name,country,email,telNo) VALUES ('$manufactureid','$name','$country','$email','$telNo')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

 // submitting to the login form
if(isset($_POST['Login'])){
  //echo working
  $user=$_POST['username'];
  $user=mysqli_real_escape_string($conn,$user);
  $pwd=($_POST['password']);
  $pwd=mysqli_real_escape_string($conn,$pwd);
  



 	$sql_fetch="SELECT * FROM patient WHERE username='$user' AND password='$pwd'";
  $sql_query=mysqli_query($conn, $sql_fetch) or die(mysqli_error()); 
  $count=mysqli_num_rows($sql_query);
   if ($count >0) { 
   	
   	$rows=mysqli_fetch_assoc($sql_query); 
   $_SESSION['patientId']=$rows['patientId'];
   
   
    $_SESSION['username']=$user;
    header("location: patientform.php");
  }else{

  $sql_fetch="SELECT * FROM healthworker WHERE Username='$user' AND Password='$pwd'";
  $sql_query=mysqli_query($conn, $sql_fetch) or die(mysqli_error());
  $count=mysqli_num_rows($sql_query);
   if ($count >0) {
   	// echo ($_SESSION['workerId']);
   	// $rows=mysqli_fetch_assoc($sql_query);
   	// $_SESSION['workerId']=$rows['workerId'];
    // echo "FOUND";
    $_SESSION['Username']=$user;
    header("location: dataentrant.php");
  }else{

  $sql_fetch="SELECT * FROM hospital WHERE hospitalname='$user' AND hospitalId='$pwd'";
  $sql_query=mysqli_query($conn, $sql_fetch) or die(mysqli_error());
  $count=mysqli_num_rows($sql_query);
   if ($count >0) {
    // echo "FOUND";
    $_SESSION['hospitalname']=$user;
    header("location: dashboard.php");
   }
   else{
 	echo "NOT FOUND";
  }
  
}      
}
}

// submiting feedbacks

	if(isset($_POST['Send_message'])){
	//echo working
	$Fname=$_POST['Fname'];
	$Fname=mysqli_real_escape_string($conn, $Fname);
	$Lname=$_POST['Lname'];
	$Lname=mysqli_real_escape_string($conn, $Lname);
	$Email=$_POST['Email'];
	$Email=mysqli_real_escape_string($conn, $Email);
	$message=$_POST['message'];
	$message=mysqli_real_escape_string($conn, $message);
	

	$sql_insert="INSERT INTO feedback(Fname,Lname,Email,message) VALUES ('$Fname','$Lname','$Email','$message')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}
?>




	