<?php
include '../connection/config.php';

$id=$_GET['id'];

$query="delete from schema_s where schemaId='$id' ";
$data=mysqli_query($conn,$query);

if($data){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted')
   window.location.href='../view/viewschema.php';
   </SCRIPT>");
}else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Delete')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        
}
?>