<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    $schemaId = $_POST['schemaId'];
    
  
}

  $insertquery = " insert into SCHEMA_S(schemaId)
  values('$schemaId')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewschema.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>