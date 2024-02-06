<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    
    $subId =$_POST['subId'];
    $subCode =$_POST['subCode'];
    $subName =$_POST['subName'];
    $schemaId = $_POST['schemaId'];
    
  
}

  $insertquery = " insert into subjectentry(subId,subCode,subName,schemaId)
  values('$subId','$subCode','$subName','$schemaId')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewsub.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>