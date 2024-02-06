<?php
include '../connection/config.php';


$idschema=$_GET['id2'];
//echo $idschema;
$idBatch=$_GET['id3'];
//echo $idBatch;
$idyear=$_GET['id4'];
//echo $idyear;
$idsubCode=$_GET['id5'];
//echo $idsubCode;


$query="delete from cap where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data=mysqli_query($conn,$query);

if($data){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted')
   window.location.href='../view/viewcap.php';
   </SCRIPT>");
}else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Delete')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        
}
?>