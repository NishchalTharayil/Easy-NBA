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

//po1
$query1="delete from po1 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data1=mysqli_query($conn,$query1);
//po2
$query2="delete from po2 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data2=mysqli_query($conn,$query2);
//po3
$query3="delete from po3 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data3=mysqli_query($conn,$query3);
//po4
$query4="delete from po4 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data4=mysqli_query($conn,$query4);
//po5
$query5="delete from po5 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data5=mysqli_query($conn,$query5);
//po6
$query6="delete from po6 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data6=mysqli_query($conn,$query6);
//po7
$query7="delete from po7 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data7=mysqli_query($conn,$query7);
//po8
$query8="delete from po8 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data8=mysqli_query($conn,$query8);
//po9
$query9="delete from po9 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data9=mysqli_query($conn,$query9);
//po10
$query10="delete from po10 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data10=mysqli_query($conn,$query10);
//po11
$query11="delete from po11 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data11=mysqli_query($conn,$query11);
//po12
$query12="delete from po12 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data12=mysqli_query($conn,$query12);
//pso1
$query13="delete from pso1 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data13=mysqli_query($conn,$query13);
//pso2
$query14="delete from pso2 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data14=mysqli_query($conn,$query14);
//pso3
$query15="delete from pso3 where schemaId='$idschema' and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
$data15=mysqli_query($conn,$query15);


if($data1 or $data2 or $data3 or $data4 or $data5 or $data6 or $data7 or $data8 or $data9 or $data10 or $data11 or $data12 or $data13 or $data14 or $data15){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted')
   window.location.href='../view/viewpo.php';
   </SCRIPT>");
}else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Delete')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        
}
?>