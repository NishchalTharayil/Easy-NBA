<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    $yearId = $_POST['yearId'];
    
  
}

  $insertquery = " insert into yearentery(yearId)
  values('$yearId')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewyearId.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>