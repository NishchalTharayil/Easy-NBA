<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    $schemaId = $_POST['schemaId'];
    $bid =$_POST['bid'];
    $yearId =$_POST['yearId'];
    $subCode =$_POST['subCode'];
    $usn= $_POST['usn'];
    $co1marks =$_POST['co1marks'];
    $co2marks =$_POST['co2marks'];
    $co3marks =$_POST['co3marks'];
    $co4marks =$_POST['co4marks'];
    $co5marks =$_POST['co5marks'];
    $external =$_POST['external'];
    
  
}

  $insertquery = " insert into marks(schemaId,bid,yearId,subCode,usn,co1marks,co2marks,co3marks,co4marks,co5marks,external)
  values('$schemaId','$bid','$yearId','$subCode','$usn','$co1marks','$co2marks','$co3marks','$co4marks','$co5marks','$external')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewsubmarks.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>