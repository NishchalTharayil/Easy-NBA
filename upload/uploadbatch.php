<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    $schemaId = $_POST['schemaId'];
    $bid =$_POST['bid'];
    
  
}

  $insertquery = " insert into batchid(bid,schemaId)
  values('$bid','$schemaId')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewBatchID.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>