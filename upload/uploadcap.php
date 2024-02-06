<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    $schemaId = $_POST['schemaId'];
    $bid =$_POST['bid'];
    $yearId =$_POST['yearId'];
    $subCode =$_POST['subCode'];
    $co1cap =$_POST['co1cap'];
    $co2cap =$_POST['co2cap'];
    $co3cap =$_POST['co3cap'];
    $co4cap =$_POST['co4cap'];
    $co5cap =$_POST['co5cap'];
    $treshforexternal = $_POST['treshforexternal'];
    
  
}

  $insertquery = " insert into cap(schemaId,bid,yearId,subCode,co1cap,co2cap,co3cap,co4cap,co5cap,treshforexternal)
  values('$schemaId','$bid','$yearId','$subCode','$co1cap','$co2cap','$co3cap','$co4cap','$co5cap','$treshforexternal')";

 $query = mysqli_query($conn,$insertquery);

 if($query){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewcap.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }
?>