<?php

include('../connection/config.php');

    $uname = $_POST['uname'];
    $password =$_POST['password'];

 
$sql = "SELECT * from admin WHERE uname = '$uname' AND password = '$password'";


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
	
     //echo "Inserted";
     echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('login Succesfully')
     window.location.href='../main.php';
    </SCRIPT>");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>