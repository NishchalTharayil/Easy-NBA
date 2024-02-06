<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    
    $usn =$_POST['usn'];
    $schemaId = $_POST['schemaId'];

    
  
}

  $insertquery = " insert into stu(usn,schemaId)
  values('$usn','$schemaId')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewstu.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>