<?php
include '../connection/config.php';

$id=$_GET['id'];
//echo $id;
$id2=$_GET['id2'];
//echo $id2;
$query="delete from subjectentry where schemaId='$id' and subId='$id2' ";
$data=mysqli_query($conn,$query);

if($data){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted')
   window.location.href='../view/viewsub.php';
   </SCRIPT>");
}else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Delete')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        
}
?>