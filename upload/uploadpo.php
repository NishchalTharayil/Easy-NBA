<?php

include('../connection/config.php');

if(isset($_POST['submit'])){
   
    $schemaId = $_POST['schemaId'];
    $bid =$_POST['bid'];
    $yearId =$_POST['yearId'];
    $subCode =$_POST['subCode'];
   //po1 values
   $co1po1=$_POST['co1po1'];
   $co2po1=$_POST['co2po1'];
   $co3po1=$_POST['co3po1'];
   $co4po1=$_POST['co4po1'];
   $co5po1=$_POST['co5po1'];

   //po2 values
   $co1po2=$_POST['co1po2'];
   $co2po2=$_POST['co2po2'];
   $co3po2=$_POST['co3po2'];
   $co4po2=$_POST['co4po2'];
   $co5po2=$_POST['co5po2'];

    //po3 values
   $co1po3=$_POST['co1po3'];
   $co2po3=$_POST['co2po3'];
   $co3po3=$_POST['co3po3'];
   $co4po3=$_POST['co4po3'];
   $co5po3=$_POST['co5po3'];

   //po4 values
   $co1po4=$_POST['co1po4'];
   $co2po4=$_POST['co2po4'];
   $co3po4=$_POST['co3po4'];
   $co4po4=$_POST['co4po4'];
   $co5po4=$_POST['co5po4'];

   //po5 values
   $co1po5=$_POST['co1po5'];
   $co2po5=$_POST['co2po5'];
   $co3po5=$_POST['co3po5'];
   $co4po5=$_POST['co4po5'];
   $co5po5=$_POST['co5po5'];

   //po6 values
   $co1po6=$_POST['co1po6'];
   $co2po6=$_POST['co2po6'];
   $co3po6=$_POST['co3po6'];
   $co4po6=$_POST['co4po6'];
   $co5po6=$_POST['co5po6'];

   //po7 values
   $co1po7=$_POST['co1po7'];
   $co2po7=$_POST['co2po7'];
   $co3po7=$_POST['co3po7'];
   $co4po7=$_POST['co4po7'];
   $co5po7=$_POST['co5po7'];

   //po8 values
   $co1po8=$_POST['co1po8'];
   $co2po8=$_POST['co2po8'];
   $co3po8=$_POST['co3po8'];
   $co4po8=$_POST['co4po8'];
   $co5po8=$_POST['co5po8'];

   //po9 values
   $co1po9=$_POST['co1po9'];
   $co2po9=$_POST['co2po9'];
   $co3po9=$_POST['co3po9'];
   $co4po9=$_POST['co4po9'];
   $co5po9=$_POST['co5po9'];

   //po10 values
   $co1po10=$_POST['co1po10'];
   $co2po10=$_POST['co2po10'];
   $co3po10=$_POST['co3po10'];
   $co4po10=$_POST['co4po10'];
   $co5po10=$_POST['co5po10'];

   //po11 values
   $co1po11=$_POST['co1po11'];
   $co2po11=$_POST['co2po11'];
   $co3po11=$_POST['co3po11'];
   $co4po11=$_POST['co4po11'];
   $co5po11=$_POST['co5po11'];
    
   //po12 values
   $co1po12=$_POST['co1po12'];
   $co2po12=$_POST['co2po12'];
   $co3po12=$_POST['co3po12'];
   $co4po12=$_POST['co4po12'];
   $co5po12=$_POST['co5po12'];
  
   //pso1 values
   $co1pso1=$_POST['co1pso1'];
   $co2pso1=$_POST['co2pso1'];
   $co3pso1=$_POST['co3pso1'];
   $co4pso1=$_POST['co4pso1'];
   $co5pso1=$_POST['co5pso1'];

   //pso2 values
   $co1pso2=$_POST['co1pso2'];
   $co2pso2=$_POST['co2pso2'];
   $co3pso2=$_POST['co3pso2'];
   $co4pso2=$_POST['co4pso2'];
   $co5pso2=$_POST['co5pso2'];

   //pso3 values
   $co1pso3=$_POST['co1pso3'];
   $co2pso3=$_POST['co2pso3'];
   $co3pso3=$_POST['co3pso3'];
   $co4pso3=$_POST['co4pso3'];
   $co5pso3=$_POST['co5pso3'];
}

  $insertquery1 = " insert into po1(schemaId,bid,yearId,subCode,co1po1,co2po1,co3po1,co4po1,co5po1)
  values('$schemaId','$bid','$yearId','$subCode','$co1po1','$co2po1','$co3po1','$co4po1','$co5po1')";

  $insertquery2 = " insert into po2(schemaId,bid,yearId,subCode,co1po2,co2po2,co3po2,co4po2,co5po2)
  values('$schemaId','$bid','$yearId','$subCode','$co1po2','$co2po2','$co3po2','$co4po2','$co5po2')";

  $insertquery3 = " insert into po3(schemaId,bid,yearId,subCode,co1po3,co2po3,co3po3,co4po3,co5po3)
  values('$schemaId','$bid','$yearId','$subCode','$co1po3','$co2po3','$co3po3','$co4po3','$co5po3')";

  $insertquery4 = " insert into po4(schemaId,bid,yearId,subCode,co1po4,co2po4,co3po4,co4po4,co5po4)
  values('$schemaId','$bid','$yearId','$subCode','$co1po4','$co2po4','$co3po4','$co4po4','$co5po4')";

  $insertquery5 = " insert into po5(schemaId,bid,yearId,subCode,co1po5,co2po5,co3po5,co4po5,co5po5)
  values('$schemaId','$bid','$yearId','$subCode','$co1po5','$co2po5','$co3po5','$co4po5','$co5po5')";

  $insertquery6 = " insert into po6(schemaId,bid,yearId,subCode,co1po6,co2po6,co3po6,co4po6,co5po6)
  values('$schemaId','$bid','$yearId','$subCode','$co1po6','$co2po6','$co3po6','$co4po6','$co5po6')";

  $insertquery7 = " insert into po7(schemaId,bid,yearId,subCode,co1po7,co2po7,co3po7,co4po7,co5po7)
  values('$schemaId','$bid','$yearId','$subCode','$co1po7','$co2po7','$co3po7','$co4po7','$co5po7')";

  $insertquery8 = " insert into po8(schemaId,bid,yearId,subCode,co1po8,co2po8,co3po8,co4po8,co5po8)
  values('$schemaId','$bid','$yearId','$subCode','$co1po8','$co2po8','$co3po8','$co4po8','$co5po8')";
  
  $insertquery9 = " insert into po9(schemaId,bid,yearId,subCode,co1po9,co2po9,co3po9,co4po9,co5po9)
  values('$schemaId','$bid','$yearId','$subCode','$co1po9','$co2po9','$co3po9','$co4po9','$co5po9')";

  $insertquery10 = " insert into po10(schemaId,bid,yearId,subCode,co1po10,co2po10,co3po10,co4po10,co5po10)
  values('$schemaId','$bid','$yearId','$subCode','$co1po10','$co2po10','$co3po10','$co4po10','$co5po10')";

  $insertquery11 = " insert into po11(schemaId,bid,yearId,subCode,co1po11,co2po11,co3po11,co4po11,co5po11)
  values('$schemaId','$bid','$yearId','$subCode','$co1po11','$co2po11','$co3po11','$co4po11','$co5po11')";

  $insertquery12 = " insert into po12(schemaId,bid,yearId,subCode,co1po12,co2po12,co3po12,co4po12,co5po12)
  values('$schemaId','$bid','$yearId','$subCode','$co1po12','$co2po12','$co3po12','$co4po12','$co5po12')";

  $insertquery13 = " insert into pso1(schemaId,bid,yearId,subCode,co1pso1,co2pso1,co3pso1,co4pso1,co5pso1)
  values('$schemaId','$bid','$yearId','$subCode','$co1pso1','$co2pso1','$co3pso1','$co4pso1','$co5pso1')";

  $insertquery14 = " insert into pso2(schemaId,bid,yearId,subCode,co1pso2,co2pso2,co3pso2,co4pso2,co5pso2)
  values('$schemaId','$bid','$yearId','$subCode','$co1pso2','$co2pso2','$co3pso2','$co4pso2','$co5pso2')";

  $insertquery15 = " insert into pso3(schemaId,bid,yearId,subCode,co1pso3,co2pso3,co3pso3,co4pso3,co5pso3)
  values('$schemaId','$bid','$yearId','$subCode','$co1pso3','$co2pso3','$co3pso3','$co4pso3','$co5pso3')";



 $query1 = mysqli_query($conn,$insertquery1);
 $query2 = mysqli_query($conn,$insertquery2);
 $query3 = mysqli_query($conn,$insertquery3);
 $query4 = mysqli_query($conn,$insertquery4);
 $query5 = mysqli_query($conn,$insertquery5);
 $query6 = mysqli_query($conn,$insertquery6);
 $query7 = mysqli_query($conn,$insertquery7);
 $query8 = mysqli_query($conn,$insertquery8);
 $query9 = mysqli_query($conn,$insertquery9);
 $query10 = mysqli_query($conn,$insertquery10);
 $query11 = mysqli_query($conn,$insertquery11);
 $query12 = mysqli_query($conn,$insertquery12);
 $query13 = mysqli_query($conn,$insertquery13);
 $query14 = mysqli_query($conn,$insertquery14);
 $query15 = mysqli_query($conn,$insertquery15);

 if($query1){
   //echo "Inserted";
   echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Succesfully added')
 window.location.href='../view/viewpo.php';
</SCRIPT>");

 }else{
      //echo "not Inserted";
 echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
   </SCRIPT>");
 }

 if($query2){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query3){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query4){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query5){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query6){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query6){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query7){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query8){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query9){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }


  if($query10){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query11){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query12){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query13){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query14){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }

  if($query15){
    //echo "Inserted";
    echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Succesfully added')
  window.location.href='../view/viewpo.php';
 </SCRIPT>");
 
  }else{
       //echo "not Inserted";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
  }
?>