<!DOCTYPE html>
<head>
    <title>YearWise Attainment</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/yearAttain.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .contain{
    display:none;
  }

  
table {
  margin: 0px;
  margin-top: 10px;
  border-collapse: collapse;
  width: 80%;
  margin-left:auto;
  margin-right:auto;
  font-family: 'Montserrat', sans-serif;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color:#76D7C4;}

th {
  background-color: black;
  color: white;
}

td button {
  background-color: #000;
  color: white;
  font-weight: bold; 
  padding: 5px;
  border-radius: 5px;
  border: 0px solid #1976d2;
  width:80px;
 
}
td button a{
  text-decoration: none;
  color:white;
}


  </style>
  </head>
<body>

<div class="w3-show-inline-block" align="left">
  <div class="w3-bar">
    <a href="attainment.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
   
  </div>
  </div>


  
<!--html-->

<div class="container">
    <div class="title">Year Attainment</div>
    <div class="content">

      <form action="" method="POST">

        <div class="user-details">
        <?php

        include('../../connection/config.php');

        $query="select schemaId from schema_s";
        $result1 = mysqli_query($conn,$query);
        $options="";
        while($row=mysqli_fetch_array($result1)){
        $options=$options."<option>$row[0]</option>";
        }

      ?>
          <div class="input-box">
            <span class="details">Select SchemaID</span>
            <select name="schemaId">
			      <option value="">Select your option</option>
                <?php echo $options;?>
			      </select>
          </div>

          <?php

include('../../connection/config.php');

$query="select bid from batchId";
$result1 = mysqli_query($conn,$query);
$options="";
while($row=mysqli_fetch_array($result1)){
  $options=$options."<option>$row[0]</option>";
}

?>


          <div class="input-box">
            <span class="details">Select BatchID</span>
           <select name="bid">
            <option value="">Select your option</option>
                   <?php echo $options;?>
            </select>
          </div>

          <?php

include('../../connection/config.php');

$query="select yearId from yearentery";
$result1 = mysqli_query($conn,$query);
$options="";
while($row=mysqli_fetch_array($result1)){
  $options=$options."<option>$row[0]</option>";
}

?>
          <div class="input-box">
            <span class="details">Select YearID</span>
           <select name="yearId">
            <option value="">Select your option</option>
            <?php echo $options;?>
            </select>
          </div>
         
        </div>
        <center>
        <div class="button">
          <input type="submit" value="Attainment" class="btn"  name="submit">
        </div>
      </center>
      </form>

      </div>
  </div>
<!--end-->

<div class="ph" style="margin-top:20px;" align="right">
<div class="w3-show-inline-block">
  <div class="w3-bar" style="border-radius:10px;">
    <button class="w3-btn w3-black" onclick="window.print()">Print</button>
  </div>
  </div>
</div>



<?php 

$rowcount=0;
$co1cap=0;
$co2cap=0;
$co3cap=0;
$co4cap=0;
$co5cap=0;
$tresh=0;
$schemaId=0;
$bid=0;
$yearId=0;
$subCode=0;
$treshforexternal=0;
$attainlevel1=0;
$attainlevel2=0;
$attainlevel3=0;
$attainlevel4=0;
$attainlevel5=0;
$attainleveltresh=0;
$calco1=0;
$calco2=0;
$calco3=0;
$calco4=0;
$calco5=0;
$divide1=0;//for 80-20 and 60-40 and 50-50
$divide2=0;//for 80-20 and 60-40 and 50-50
$coattainco1=0;//co attainvalues
$coattainco2=0;
$coattainco3=0;
$coattainco4=0;
$coattainco5=0;
$co1po1=0;//for po attainment
$co2po1=0;
$co3po1=0;
$co4po1=0;
$co5po1=0;
$co1po2=0;
$co2po2=0;
$co3po2=0;
$co4po2=0;
$co5po2=0;
$co1po3=0;
$co2po3=0;
$co3po3=0;
$co4po3=0;
$co5po3=0;
$co1po4=0;
$co2po4=0;
$co3po4=0;
$co4po4=0;
$co5po4=0;
$co1po5=0;
$co2po5=0;
$co3po5=0;
$co4po5=0;
$co5po5=0;
$co1po6=0;
$co2po6=0;
$co3po6=0;
$co4po6=0;
$co5po6=0;
$co1po7=0;
$co2po7=0;
$co3po7=0;
$co4po7=0;
$co5po7=0;
$co1po8=0;
$co2po8=0;
$co3po8=0;
$co4po8=0;
$co5po8=0;
$co1po9=0;
$co2po9=0;
$co3po9=0;
$co4po9=0;
$co5po9=0;
$co1po10=0;
$co2po10=0;
$co3po10=0;
$co4po10=0;
$co5po10=0;
$co1po11=0;
$co2po11=0;
$co3po11=0;
$co4po11=0;
$co5po11=0;
$co1po12=0;
$co2po12=0;
$co3po12=0;
$co4po12=0;
$co5po12=0;
$co1pso1=0;
$co2pso1=0;
$co3pso1=0;
$co4pso1=0;
$co5pso1=0;
$co1pso2=0;
$co2pso2=0;
$co3pso2=0;
$co4pso2=0;
$co5pso2=0;
$co1pso3=0;
$co2pso3=0;
$co3pso3=0;
$co4pso3=0;
$co5pso3=0;
$avgpo1=0;
$avgpo2=0;
$avgpo3=0;
$avgpo4=0;
$avgpo5=0;
$avgpo6=0;
$avgpo7=0;
$avgpo8=0;
$avgpo9=0;
$avgpo10=0;
$avgpo11=0;
$avgpo12=0;
$avgpso1=0;
$avgpso2=0;
$avgpso3=0;

$db = new mysqli('localhost', 'root', '', 'easynba') 
or die("Error connecting to database!");

  include('../../connection/config.php');


if(isset($_POST['submit'])){

$schemaId = $_POST['schemaId'];
$bid =$_POST['bid'];
$yearId =$_POST['yearId'];




$sql = " SELECT * from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' ";
$results = $db->query($sql);


//total stu count

if ($results = mysqli_query($conn, $sql)) {

  // Return the number of rows in result set
  $rowcount1 = mysqli_num_rows( $results );
  
  // Display result
 //   printf("Total rows in this table :  %d\n", $rowcount1);  
} 


$sub=array();//geting all sub in this array
//getting all subject form that year
$sql1="select distinct(subCode) from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' ";
$res = $db->query($sql1);
$ii=0;
while($row = $res->fetch_assoc()) {
$sub[$ii]=$row['subCode'];
//echo $row['subCode'];
$ii++;
}

/*foreach ($sub as $value){
    echo $value;
}*/

//gettinh number of Subject
$noofsub=count($sub);


//getting number of Student
if ($rowcount1==0 and $noofsub==0){
    
  }else{
    $noofstu=$rowcount1/count($sub);
//echo $noofstu;
  }

  $po1=array();
  $po2=array();
  $po3=array();
  $po4=array();
  $po5=array();
  $po6=array();
  $po7=array();
  $po8=array();
  $po9=array();
  $po10=array();
  $po11=array();
  $po12=array();
  $pso1=array();
  $pso2=array();
  $pso3=array();




for($i=0;$i<$noofsub;$i++){
//echo $sub[$i];
//getting individual marks from subject
?>
<div class="contain">
<h1>getting subject details</h1>
     <table border="3">
    <?php

    $sql3 = " SELECT * FROM marks where subCode='$sub[$i]' ";
    $result3 = $db->query($sql3);
   $j=1;
    while($row = $result3->fetch_assoc()) {
    ?><tr>
    <td><?php
    echo $j;  ?></td>
    <td><?php
    echo $row['subCode']; ?></td>
    <td><?php
    echo $row['co1marks']; ?></td>
    <td><?php
    echo $row['co2marks']; ?></td>
    <td><?php
    echo $row['co3marks']; ?></td>
    <td><?php
    echo $row['co4marks']; ?></td>
    <td><?php
    echo $row['co5marks']; ?></td>
      <td><?php
    echo $row['external']; ?></td>
    </tr>
    <?php
    $j++;
    }
    ?>
   </table>
    <br><br>

    <h3>Cap Values</h3>    
    <table border="3">
    <?php


    $sql5 = " SELECT * FROM cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
    $result5=$db->query($sql5);

    while($row = $result5->fetch_assoc()) {
    ?><tr><td><?php echo "cap values";?></td> 
    <td><?php
     echo $row['subCode']; ?></td>
    <td><?php
     echo $row['co1cap']; ?></td>
     <td><?php
     echo $row['co2cap']; ?></td>
     <td><?php
     echo $row['co3cap']; ?></td>
     <td><?php
     echo $row['co4cap']; ?></td>
     <td><?php
     echo $row['co5cap']; ?></td>
     <td><?php
     echo $row['treshforexternal']; ?></td></tr>
      
    
    <?php
     
    }?></table>
    

    <h3>Calculating Treshold Values</h3>
    
    <table border="3">
    <tr>
      <td><?php echo "treshold values" ?></td>
      <?php

     //getting cap values from database for co1
 $capco1= "select co1cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]' ";
 $result1 = $db->query($capco1);
 while($row = $result1->fetch_assoc()) {
      $co1= $row['co1cap'];  
      $co1cap=(40/100)*$co1;
      
           //echo $co1cap;
      ?>  <td><?php echo $co1cap; ?></td>

 <?php
}

//getting cap values from database for co2
$capco2= "select co2cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]' ";
$result2 = $db->query($capco2);
while($row = $result2->fetch_assoc()) {
     $co2= $row['co2cap']; 
     $co2cap=(40/100)*$co2; 
     //echo $co2cap;
?>
     <td><?php echo $co2cap; ?></td>
<?php
}
//getting cap values from database for co3
$capco3= "select co3cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]' ";
$result3 = $db->query($capco3);
while($row = $result3->fetch_assoc()) {
     $co3= $row['co3cap']; 
     $co3cap=(40/100)*$co3; 
     //echo $co3cap;
?>
     <td><?php echo $co3cap; ?></td>
<?php
}
//getting cap values from database for co4
$capco4= "select co4cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]' ";
$result4 = $db->query($capco4);
while($row = $result4->fetch_assoc()) {
     $co4= $row['co4cap']; 
     $co4cap=(40/100)*$co4; 
     //echo $co4cap;
?>
     <td><?php echo $co4cap; ?></td>
<?php
}

//getting cap values from database for co5
$capco5= "select co5cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]' ";
$result5 = $db->query($capco5);
while($row = $result5->fetch_assoc()) {
     $co5= $row['co5cap']; 
     $co5cap=(40/100)*$co5; 
     //echo $co5cap;
?>
     <td><?php echo $co5cap; ?></td>
<?php
}

//getting treshold  values for external from database
$tresh= "select treshforexternal from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]' ";
$result6 = $db->query($tresh);
while($row = $result6->fetch_assoc()) {
     $treshforexternal= $row['treshforexternal'];  
     //$co5cap=(40/100)*$co5;
     //echo $treshforexternal;
     ?>
     <td><?php echo $treshforexternal; ?></td>
<?php
    }
    ?> 
    </table><br><br>

<h3>Total above Treshold stu</h3>

<table border="3">
    <tr>
      <td><?php echo "above treshold value student" ?></td>
    <?php


 //count for co1 above the cap values
 $sqlcap1 = "select co1marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  and co1marks >'$co1cap' ";

if ($result11 = mysqli_query($db, $sqlcap1)) {

    // Return the number of rows in result set
    $Co1count = mysqli_num_rows( $result11 );
?>
    <td><?php echo $Co1count; ?></td>
 <?php
    // Display result
   // printf("Total rows in this table :  %d\n", $Co1count);
    
 }
  //count for co2 above the cap values
  $sqlcap2 = "select co2marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  and co2marks >'$co2cap' ";

  if ($result12 = mysqli_query($db, $sqlcap2)) {
  
      // Return the number of rows in result set
      $Co2count = mysqli_num_rows( $result12 );
  
      ?>
    <td><?php echo $Co2count; ?></td>
 <?php
      
      // Display result
     // printf("Total rows in this table :  %d\n", $Co2count);
      
   }

    //count for co3 above the cap values
  $sqlcap3 = "select co3marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  and co3marks >'$co3cap' ";

  if ($result13 = mysqli_query($db, $sqlcap3)) {
  
      // Return the number of rows in result set
      $Co3count = mysqli_num_rows( $result13 );

      ?>
    <td><?php echo $Co3count; ?></td>
 <?php
  
      
      // Display result
     // printf("Total rows in this table :  %d\n", $Co3count);
      
   }

    //count for co4 above the cap values
  $sqlcap4 = "select co4marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  and co4marks >'$co4cap' ";

  if ($result14 = mysqli_query($db, $sqlcap4)) {
  
      // Return the number of rows in result set
      $Co4count = mysqli_num_rows( $result14 );
  
      ?>
    <td><?php echo $Co4count; ?></td>
 <?php
      
      // Display result
      //printf("Total rows in this table :  %d\n", $Co4count);
   }

    //count for co3 above the cap values
  $sqlcap5 = "select co5marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  and co5marks >'$co5cap' ";

  if ($result15 = mysqli_query($db, $sqlcap5)) {
  
      // Return the number of rows in result set
      $Co5count = mysqli_num_rows( $result15 );
      ?>
      <td><?php echo $Co5count; ?></td>
   <?php
      
      // Display result
      //printf("Total rows in this table :  %d\n", $Co5count);  
   }

   //count threshold value for external
   $sqltresh = "select external from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  and external >'$treshforexternal' ";

   if ($result16 = mysqli_query($db, $sqltresh)) {
   
       // Return the number of rows in result set
       $treshcount = mysqli_num_rows( $result16 );
       ?>
       <td><?php echo $treshcount; ?></td>
    <?php
       
       // Display result
       //printf("Total rows in this table :  %d\n", $treshcount);  
    }
?>
</table>
<br>
<h3>CO Attainment</h3>

<table border="3">
<?php
//calculation for co1 to co5 and Attainment

//echo $Co1count;
//echo $rowcount;
if($Co1count==0 and $noofstu==0){
  
}else{
 $calco1=($Co1count/$noofstu*100);
 //echo $calco1;

    if ($calco1>=0 and $calco1<60){
        $attainlevel1=0;
    }elseif($calco1>=60 and $calco1<70){
        $attainlevel1=1;
    }
    elseif($calco1>=70 and $calco1<80){
        $attainlevel1=2;
    }elseif($calco1>=80 and $calco1<=100){
        $attainlevel1=3;
    }
  }
 

    
  if($Co2count ==0 and $noofstu==0){
  
  }else{
 $calco2=($Co2count/$noofstu*100);
 if ($calco2>=0 and $calco2<60){
    $attainlevel2=0;
}elseif($calco2>=60 and $calco2<70){
    $attainlevel2=1;
}
elseif($calco2>=70 and $calco2<80){
    $attainlevel2=2;
}elseif($calco2>=80 and $calco2<=100){
    $attainlevel2=3;
}
  }


  if($Co3count ==0 and $noofstu==0){
  
  }else{
 $calco3=($Co3count/$noofstu*100);
 if ($calco3>=0 and $calco3<60){
    $attainlevel3=0;
}elseif($calco3>=60 and $calco3<70){
    $attainlevel3=1;
}
elseif($calco3>=70 and $calco3<80){
    $attainlevel3=2;
}elseif($calco3>=80 and $calco3<=100){
    $attainlevel3=3;
}
  }

  if($Co4count ==0 and $noofstu==0){
  
  }else{

 $calco4=($Co4count/$noofstu*100);
 if ($calco4>=0 and $calco4<60){
  $attainlevel4=0;
}elseif($calco4>=60 and $calco4<70){
  $attainlevel4=1;
}
elseif($calco4>=70 and $calco4<80){
  $attainlevel4=2;
}elseif($calco4>=80 and $calco4<=100){
  $attainlevel4=3;
}
  }

  if($Co5count ==0 and $noofstu==0){
  
  }else{

 $calco5=($Co5count/$noofstu*100);
 if ($calco5>=0 and $calco5<60){
  $attainlevel5=0;
}elseif($calco5>=60 and $calco5<70){
  $attainlevel5=1;
}
elseif($calco5>=70 and $calco5<80){
  $attainlevel5=2;
}elseif($calco5>=80 and $calco5<=100){
    $aco5=3;
}
  }
  if($treshcount ==0 and $noofstu==0){
  
  }else{
$tresh=($treshforexternal/$noofstu*100);
if ($tresh>=0 and $tresh<60){
   $attainleveltresh=0;
}elseif($tresh>=60 and $tresh<70){
   $attainleveltresh=1;
}elseif($tresh>=70 and $tresh<80){
  $attainleveltresh=2;
}elseif($tresh>=80 and $tresh<=100){
  $attainleveltresh=3;
}

}


?>
<tr>
<td><?php echo "percentage of Student for above treshold values";?></td>
<td><?php printf("%f\n",$calco1); ?></td>
<td><?php printf("%f\n",$calco2); ?></td>
<td><?php printf("%f\n",$calco3); ?></td>
<td><?php printf("%f\n",$calco4); ?></td>
<td><?php printf("%f\n",$calco5); ?></td>
<td><?php printf("%f\n",$tresh); ?></td>
</tr>
<br>
<tr>
<td><?php echo "Attainment Level";?>
<td><?php printf("%d\n",$attainlevel1); ?></td>
<td><?php printf("%d\n",$attainlevel2); ?></td>
<td><?php printf("%d\n",$attainlevel3); ?></td>
<td><?php printf("%d\n",$attainlevel4); ?></td>
<td><?php printf("%d\n",$attainlevel5); ?></td>
<td><?php printf("%d\n",$attainleveltresh); ?></td>
</tr>

</table>
<br>

<?php 
if ($schemaId==10 or $schemaId==15 or $schemaId==17){
  $divide1=.8;
  $divide2=.2;
}elseif($schemaId==18){
  $divide1=.6;
  $divide2=.4;
}elseif($schemaId==21){
  $divide1=.5;
  $divide2=.5;
}
?>

<table border="3">
  <tr>
  <td><?php echo "CO Attainment";?></td>
<?php
$coattainco1=$divide1*$attainleveltresh+ $divide2*$attainlevel1;
$coattainco2=$divide1*$attainleveltresh+ $divide2*$attainlevel2;
$coattainco3=$divide1*$attainleveltresh+ $divide2*$attainlevel3;
$coattainco4=$divide1*$attainleveltresh+ $divide2*$attainlevel4;
$coattainco5=$divide1*$attainleveltresh+ $divide2*$attainlevel5;
?>
<td><?php printf($coattainco1);?></td>
<td><?php printf($coattainco2);?></td>
<td><?php printf($coattainco3);?></td>
<td><?php printf($coattainco4);?></td>
<td><?php printf($coattainco5);?></td>

</tr>
</table>



<h1>po's</h1>

<table border="3">
<?php  
//po1
$sqlpo1 = " SELECT * from po1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
        $resultpo1 = $db->query($sqlpo1);

        while($row = $resultpo1->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO1"; ?></td>
             
                <td style="background-color:#ccccff;"><?php echo $row['co1po1']; ?></td>
                <td style="background-color:#ccccff;"><?php echo $row['co2po1']; ?></td>
                <td style="background-color:#ccccff;"><?php echo $row['co3po1']; ?></td>
                <td style="background-color:#ccccff;"><?php echo $row['co4po1']; ?></td>
                <td style="background-color:#ccccff;"><?php echo $row['co5po1']; ?></td>
                  
            </tr>
            
            <?php
            $co1po1=$row['co1po1'];
            $co2po1=$row['co2po1'];
            $co3po1= $row['co3po1'];
            $co4po1=$row['co4po1'];
            $co5po1=$row['co5po1'];

        }
//po2
$sqlpo2 = " SELECT * from po2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
      $resultpo2 = $db->query($sqlpo2);

      while($row = $resultpo2->fetch_assoc()) {
          ?>
  
          <tr>
          <td><?php echo "PO2"; ?></td>
            
              <td style="background-color:#ccccff;"><?php echo $row['co1po2']; ?></td>
              <td style="background-color:#ccccff;"><?php echo $row['co2po2']; ?></td>
              <td style="background-color:#ccccff;"><?php echo $row['co3po2']; ?></td>
              <td style="background-color:#ccccff;"><?php echo $row['co4po2']; ?></td>
              <td style="background-color:#ccccff;"><?php echo $row['co5po2']; ?></td>
                
          </tr>
          
          <?php
            $co1po2=$row['co1po2'];
             $co2po2=$row['co2po2'];
             $co3po2=$row['co3po2'];
             $co4po2=$row['co4po2'];
             $co5po2=$row['co5po2'];

      }

//po3
$sqlpo3 = " SELECT * from po3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
    $resultpo3 = $db->query($sqlpo3);

    while($row = $resultpo3->fetch_assoc()) {
        ?>

        <tr>
        <td><?php echo "PO3"; ?></td>
           
            <td style="background-color:#ccccff;"><?php echo $row['co1po3']; ?></td>
            <td style="background-color:#ccccff;"><?php echo $row['co2po3']; ?></td>
            <td style="background-color:#ccccff;"><?php echo $row['co3po3']; ?></td>
            <td style="background-color:#ccccff;"><?php echo $row['co4po3']; ?></td>
            <td style="background-color:#ccccff;"><?php echo $row['co5po3']; ?></td>
              
        </tr>
        
        <?php
            $co1po3=$row['co1po3'];
            $co2po3=$row['co2po3'];
            $co3po3=$row['co3po3'];
            $co4po3=$row['co4po3'];
            $co5po3=$row['co5po3'];

    }

  //po4

  $sqlpo4 = " SELECT * from po4 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo4 = $db->query($sqlpo4);

  while($row = $resultpo4->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO4"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1po4']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po4']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po4']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po4']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po4']; ?></td>
            
      </tr>
      
      <?php
           $co1po4= $row['co1po4'];
           $co2po4= $row['co2po4'];
           $co3po4= $row['co3po4'];
           $co4po4= $row['co4po4'];
           $co5po4= $row['co5po4'];

  }

  //po5
  $sqlpo5 = " SELECT * from po5 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo5 = $db->query($sqlpo5);
  while($row = $resultpo5->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO5"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1po5']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po5']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po5']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po5']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po5']; ?></td>
            
      </tr>
      
      <?php
        $co1po5=$row['co1po5'];
        $co2po5=$row['co2po5'];
        $co3po5=$row['co3po5'];
        $co4po5=$row['co4po5'];
        $co5po5=$row['co5po5'];
                                         
  }

  //po6

  $sqlpo6 = " SELECT * from po6 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo6 = $db->query($sqlpo6);

  while($row = $resultpo6->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO6"; ?></td>
          
          <td style="background-color:#ccccff;"><?php echo $row['co1po6']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po6']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po6']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po6']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po6']; ?></td>
            
      </tr>
      
      <?php
          $co1po6=$row['co1po6'];
          $co2po6=$row['co2po6'];
          $co3po6=$row['co3po6'];
          $co4po6=$row['co4po6'];
          $co5po6=$row['co5po6'];
          
  }

  //po7

  $sqlpo7 = " SELECT * from po7 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo7 = $db->query($sqlpo7);

  while($row = $resultpo7->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO7"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1po7']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po7']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po7']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po7']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po7']; ?></td>
            
      </tr>
      
      <?php
    $co1po7=$row['co1po7'];
    $co2po7=$row['co2po7'];
    $co3po7=$row['co3po7'];
    $co4po7=$row['co4po7'];
    $co5po7=$row['co5po7'];

  }

  //po8

  $sqlpo8 = " SELECT * from po8 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo8 = $db->query($sqlpo8);

  while($row = $resultpo8->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO8"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1po8']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po8']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po8']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po8']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po8']; ?></td>
            
      </tr>
      
      <?php
          $co1po8=$row['co1po8'];
          $co2po8=$row['co2po8'];
          $co3po8=$row['co3po8'];
          $co4po8=$row['co4po8'];
          $co5po8=$row['co5po8'];

  }

  //po9
  $sqlpo9 = " SELECT * from po9 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo9 = $db->query($sqlpo9);

  while($row = $resultpo9->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO9"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1po9']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po9']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po9']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po9']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po9']; ?></td>
            
      </tr>
      
      <?php
                $co1po9=$row['co1po9'];
                $co2po9=$row['co2po9'];
                $co3po9=$row['co3po9'];
                $co4po9=$row['co4po9'];
                $co5po9=$row['co5po9'];
    
  }

  //po10

  $sqlpo10 = " SELECT * from po10 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo10 = $db->query($sqlpo10);

  while($row = $resultpo10->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO10"; ?></td>
        
          <td style="background-color:#ccccff;"><?php echo $row['co1po10']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po10']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po10']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po10']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po10']; ?></td>
            
      </tr>
      
      <?php
      $co1po10=$row['co1po10'];
      $co2po10=$row['co2po10'];
      $co3po10=$row['co3po10'];
      $co4po10=$row['co4po10'];
      $co5po10=$row['co5po10'];

      
  }

  //po11

  $sqlpo11 = " SELECT * from po11 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo11 = $db->query($sqlpo11);

  while($row = $resultpo11->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO11"; ?></td>
      
          <td style="background-color:#ccccff;"><?php echo $row['co1po11']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po11']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po11']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po11']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po11']; ?></td>
            
      </tr>
      
      <?php
            $co1po11=$row['co1po11'];
            $co2po11=$row['co2po11'];
            $co3po11=$row['co3po11'];
            $co4po11=$row['co4po11'];
            $co5po11=$row['co5po11'];

  }

  //po12

  $sqlpo12 = " SELECT * from po12 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpo12 = $db->query($sqlpo12);

  while($row = $resultpo12->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PO12"; ?></td>
        
          <td style="background-color:#ccccff;"><?php echo $row['co1po12']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2po12']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3po12']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4po12']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5po12']; ?></td>
            
      </tr>
      
      <?php
         $co1po12=$row['co1po12'];
        $co2po12=$row['co2po12'];
         $co3po12=$row['co3po12'];
         $co4po12=$row['co4po12'];
         $co5po12=$row['co5po12'];
      
  }

  //pso1

  $sqlpso1 = " SELECT * from pso1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpso1 = $db->query($sqlpso1);

  while($row = $resultpso1->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PSO1"; ?></td>
      
          <td style="background-color:#ccccff;"><?php echo $row['co1pso1']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2pso1']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3pso1']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4pso1']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5pso1']; ?></td>
            
      </tr>
      
      <?php

                  $co1pso1=$row['co1pso1'];
                  $co2pso1=$row['co2pso1'];
                  $co3pso1=$row['co3pso1'];
                  $co4pso1=$row['co4pso1'];
                  $co5pso1=$row['co5pso1'];
                  
  }
//pso2
  $sqlpso2 = " SELECT * from pso2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpso2 = $db->query($sqlpso2);

  while($row = $resultpso2->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PSO2"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1pso2']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2pso2']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3pso2']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4pso2']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5pso2']; ?></td>
            
      </tr>
      
      <?php
        $co1pso2=$row['co1pso2'];
        $co2pso2=$row['co2pso2'];
        $co3pso2=$row['co3pso2'];
        $co4pso2=$row['co4pso2'];
        $co5pso2=$row['co5pso2'];
       
  }

  //pso3

  $sqlpso3 = " SELECT * from pso3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$sub[$i]'  ";
  $resultpso3 = $db->query($sqlpso3);

  while($row = $resultpso3->fetch_assoc()) {
      ?>

      <tr>
      <td><?php echo "PSO3"; ?></td>
         
          <td style="background-color:#ccccff;"><?php echo $row['co1pso3']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co2pso3']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co3pso3']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co4pso3']; ?></td>
          <td style="background-color:#ccccff;"><?php echo $row['co5pso3']; ?></td>
            
      </tr>
      
      <?php
       $co1pso3=$row['co1pso3'];
       $co2pso3=$row['co2pso3'];
       $co3pso3=$row['co3pso3'];
       $co4pso3=$row['co4pso3'];
       $co5pso3=$row['co5pso3']; 
      
  }

?>
</table>
<br>
<br>



  <!--PO Attainment-->
  <h1>PO ATTAINMENT</h1>
<br>
<table border="4" >
    <tr style="background-color:yellow;">

    <th align = "center"></th>
        <th align = "center">Co1</th>
        <th align = "center">co2</th>
        <th align = "center">co3</th>
        <th align = "center">co4</th>
        <th align = "center">co5</th>
        <th align = "center">Max(co1-co5)</th>

    </tr>


<!--attain for po1-->
<tr>
<?php 
  $attainpo1co1=($coattainco1/3)*$co1po1;
  $attainpo1co2=($coattainco2/3)*$co2po1;
  $attainpo1co3=($coattainco3/3)*$co3po1;
  $attainpo1co4=($coattainco4/3)*$co4po1;
  $attainpo1co5=($coattainco5/3)*$co5po1;
?>
 <td><?php printf("PO1");?></td>
 <td><?php printf("%.2f", $attainpo1co1);?></td>
  <td><?php printf("%.2f",$attainpo1co2);?></td>
  <td><?php printf("%.2f",$attainpo1co3);?></td>
  <td><?php printf("%.2f",$attainpo1co4);?></td>
  <td><?php printf("%.2f",$attainpo1co5);?></td>
  <td><?php 
  //max of po1
  $maxpo1=max($attainpo1co1,$attainpo1co2,$attainpo1co3,$attainpo1co4,$attainpo1co5);
  printf("%.2f",$maxpo1);?></td>
</tr>




<!--attain for po2-->
<tr>
<?php 
  $attainpo2co1=($coattainco1/3)*$co1po2;
  $attainpo2co2=($coattainco2/3)*$co2po2;
  $attainpo2co3=($coattainco3/3)*$co3po2;
  $attainpo2co4=($coattainco4/3)*$co4po2;
  $attainpo2co5=($coattainco5/3)*$co5po2;
?>
 <td><?php printf("PO2");?></td>
 <td><?php printf("%.2f", $attainpo2co1);?></td>
  <td><?php printf("%.2f",$attainpo2co2);?></td>
  <td><?php printf("%.2f",$attainpo2co3);?></td>
  <td><?php printf("%.2f",$attainpo2co4);?></td>
  <td><?php printf("%.2f",$attainpo2co5);?></td>
  <td><?php 
  //max of po2
  $maxpo2=max($attainpo2co1,$attainpo2co2,$attainpo2co3,$attainpo2co4,$attainpo2co5);
  printf("%.2f",$maxpo2);?></td>
  </tr>


  
<!--attain for po3-->
<tr>
<?php 
  $attainpo3co1=($coattainco1/3)*$co1po3;
  $attainpo3co2=($coattainco2/3)*$co2po3;
  $attainpo3co3=($coattainco3/3)*$co3po3;
  $attainpo3co4=($coattainco4/3)*$co4po3;
  $attainpo3co5=($coattainco5/3)*$co5po3;
?>
 <td><?php printf("PO3");?></td>
 <td><?php printf("%.2f", $attainpo3co1);?></td>
  <td><?php printf("%.2f",$attainpo3co2);?></td>
  <td><?php printf("%.2f",$attainpo3co3);?></td>
  <td><?php printf("%.2f",$attainpo3co4);?></td>
  <td><?php printf("%.2f",$attainpo3co5);?></td>
  <td><?php 
  //max of po3
  $maxpo3=max($attainpo3co1,$attainpo3co2,$attainpo3co3,$attainpo3co4,$attainpo3co5);
  printf("%.2f",$maxpo3);?></td>
  </tr>


  
<!--attain for po4-->
<tr>
<?php 
  $attainpo4co1=($coattainco1/3)*$co1po4;
  $attainpo4co2=($coattainco2/3)*$co2po4;
  $attainpo4co3=($coattainco3/3)*$co3po4;
  $attainpo4co4=($coattainco4/3)*$co4po4;
  $attainpo4co5=($coattainco5/3)*$co5po4;
?>
 <td><?php printf("PO4");?></td>
 <td><?php printf("%.2f", $attainpo4co1);?></td>
  <td><?php printf("%.2f",$attainpo4co2);?></td>
  <td><?php printf("%.2f",$attainpo4co3);?></td>
  <td><?php printf("%.2f",$attainpo4co4);?></td>
  <td><?php printf("%.2f",$attainpo4co5);?></td>
  <td><?php 
  //max of po4
  $maxpo4=max($attainpo4co1,$attainpo4co2,$attainpo4co3,$attainpo4co4,$attainpo4co5);
  printf("%.2f",$maxpo4);?></td>
  </tr>


<!--attain for po5-->
<tr>
<?php 
  $attainpo5co1=($coattainco1/3)*$co1po5;
  $attainpo5co2=($coattainco2/3)*$co2po5;
  $attainpo5co3=($coattainco3/3)*$co3po5;
  $attainpo5co4=($coattainco4/3)*$co4po5;
  $attainpo5co5=($coattainco5/3)*$co5po5;
?>
 <td><?php printf("PO5");?></td>
 <td><?php printf("%.2f", $attainpo5co1);?></td>
  <td><?php printf("%.2f",$attainpo5co2);?></td>
  <td><?php printf("%.2f",$attainpo5co3);?></td>
  <td><?php printf("%.2f",$attainpo5co4);?></td>
  <td><?php printf("%.2f",$attainpo5co5);?></td>
  <td><?php 
  //max of po5
  $maxpo5=max($attainpo5co1,$attainpo5co2,$attainpo5co3,$attainpo5co4,$attainpo5co5);
  printf("%.2f",$maxpo5);?></td>
  </tr>


  <!--attain for po6-->
<tr>
<?php 
  $attainpo6co1=($coattainco1/3)*$co1po6;
  $attainpo6co2=($coattainco2/3)*$co2po6;
  $attainpo6co3=($coattainco3/3)*$co3po6;
  $attainpo6co4=($coattainco4/3)*$co4po6;
  $attainpo6co5=($coattainco5/3)*$co5po6;
?>
 <td><?php printf("PO6");?></td>
 <td><?php printf("%.2f", $attainpo6co1);?></td>
  <td><?php printf("%.2f",$attainpo6co2);?></td>
  <td><?php printf("%.2f",$attainpo6co3);?></td>
  <td><?php printf("%.2f",$attainpo6co4);?></td>
  <td><?php printf("%.2f",$attainpo6co5);?></td>
  <td><?php 
  //max of po6
  $maxpo6=max($attainpo6co1,$attainpo6co2,$attainpo6co3,$attainpo6co4,$attainpo6co5);
  printf("%.2f",$maxpo6);?></td>
  </tr>


    <!--attain for po7-->
<tr>
<?php 
  $attainpo7co1=($coattainco1/3)*$co1po7;
  $attainpo7co2=($coattainco2/3)*$co2po7;
  $attainpo7co3=($coattainco3/3)*$co3po7;
  $attainpo7co4=($coattainco4/3)*$co4po7;
  $attainpo7co5=($coattainco5/3)*$co5po7;
?>
 <td><?php printf("PO7");?></td>
 <td><?php printf("%.2f", $attainpo7co1);?></td>
  <td><?php printf("%.2f",$attainpo7co2);?></td>
  <td><?php printf("%.2f",$attainpo7co3);?></td>
  <td><?php printf("%.2f",$attainpo7co4);?></td>
  <td><?php printf("%.2f",$attainpo7co5);?></td>
  <td><?php 
  //max of po7
  $maxpo7=max($attainpo7co1,$attainpo7co2,$attainpo7co3,$attainpo7co4,$attainpo7co5);
  printf("%.2f",$maxpo7);?></td>
  </tr>


      <!--attain for po8-->
<tr>
<?php 
  $attainpo8co1=($coattainco1/3)*$co1po8;
  $attainpo8co2=($coattainco2/3)*$co2po8;
  $attainpo8co3=($coattainco3/3)*$co3po8;
  $attainpo8co4=($coattainco4/3)*$co4po8;
  $attainpo8co5=($coattainco5/3)*$co5po8;
?>
 <td><?php printf("PO8");?></td>
 <td><?php printf("%.2f", $attainpo8co1);?></td>
  <td><?php printf("%.2f",$attainpo8co2);?></td>
  <td><?php printf("%.2f",$attainpo8co3);?></td>
  <td><?php printf("%.2f",$attainpo8co4);?></td>
  <td><?php printf("%.2f",$attainpo8co5);?></td>
  <td><?php 
  //max of po8
  $maxpo8=max($attainpo8co1,$attainpo8co2,$attainpo8co3,$attainpo8co4,$attainpo8co5);
  printf("%.2f",$maxpo8);?></td>
  </tr>

      <!--attain for po9-->
<tr>
<?php 
  $attainpo9co1=($coattainco1/3)*$co1po9;
  $attainpo9co2=($coattainco2/3)*$co2po9;
  $attainpo9co3=($coattainco3/3)*$co3po9;
  $attainpo9co4=($coattainco4/3)*$co4po9;
  $attainpo9co5=($coattainco5/3)*$co5po9;
?>
 <td><?php printf("PO9");?></td>
 <td><?php printf("%.2f", $attainpo9co1);?></td>
  <td><?php printf("%.2f",$attainpo9co2);?></td>
  <td><?php printf("%.2f",$attainpo9co3);?></td>
  <td><?php printf("%.2f",$attainpo9co4);?></td>
  <td><?php printf("%.2f",$attainpo9co5);?></td>
  <td><?php 
  //max of po9
  $maxpo9=max($attainpo9co1,$attainpo9co2,$attainpo9co3,$attainpo9co4,$attainpo9co5);
  printf("%.2f",$maxpo9);?></td>
  </tr>


      <!--attain for po10-->
<tr>
<?php 
  $attainpo10co1=($coattainco1/3)*$co1po10;
  $attainpo10co2=($coattainco2/3)*$co2po10;
  $attainpo10co3=($coattainco3/3)*$co3po10;
  $attainpo10co4=($coattainco4/3)*$co4po10;
  $attainpo10co5=($coattainco5/3)*$co5po10;
?>
 <td><?php printf("PO10");?></td>
 <td><?php printf("%.2f", $attainpo10co1);?></td>
  <td><?php printf("%.2f",$attainpo10co2);?></td>
  <td><?php printf("%.2f",$attainpo10co3);?></td>
  <td><?php printf("%.2f",$attainpo10co4);?></td>
  <td><?php printf("%.2f",$attainpo10co5);?></td>
  <td><?php 
  //max of po10
  $maxpo10=max($attainpo10co1,$attainpo10co2,$attainpo10co3,$attainpo10co4,$attainpo10co5);
  printf("%.2f",$maxpo10);?></td>
  </tr>

      <!--attain for po11-->
<tr>
<?php 
  $attainpo11co1=($coattainco1/3)*$co1po11;
  $attainpo11co2=($coattainco2/3)*$co2po11;
  $attainpo11co3=($coattainco3/3)*$co3po11;
  $attainpo11co4=($coattainco4/3)*$co4po11;
  $attainpo11co5=($coattainco5/3)*$co5po11;
?>
 <td><?php printf("PO11");?></td>
 <td><?php printf("%.2f", $attainpo11co1);?></td>
  <td><?php printf("%.2f",$attainpo11co2);?></td>
  <td><?php printf("%.2f",$attainpo11co3);?></td>
  <td><?php printf("%.2f",$attainpo11co4);?></td>
  <td><?php printf("%.2f",$attainpo11co5);?></td>
  <td><?php 
  //max of po11
  $maxpo11=max($attainpo11co1,$attainpo11co2,$attainpo11co3,$attainpo11co4,$attainpo11co5);
  printf("%.2f",$maxpo11);?></td>
  </tr>

      <!--attain for po12-->
<tr>
<?php 
  $attainpo12co1=($coattainco1/3)*$co1po12;
  $attainpo12co2=($coattainco2/3)*$co2po12;
  $attainpo12co3=($coattainco3/3)*$co3po12;
  $attainpo12co4=($coattainco4/3)*$co4po12;
  $attainpo12co5=($coattainco5/3)*$co5po12;
?>
 <td><?php printf("PO12");?></td>
 <td><?php printf("%.2f", $attainpo12co1);?></td>
  <td><?php printf("%.2f",$attainpo12co2);?></td>
  <td><?php printf("%.2f",$attainpo12co3);?></td>
  <td><?php printf("%.2f",$attainpo12co4);?></td>
  <td><?php printf("%.2f",$attainpo12co5);?></td>
  <td><?php 
  //max of po12
  $maxpo12=max($attainpo12co1,$attainpo12co2,$attainpo12co3,$attainpo12co4,$attainpo12co5);
  printf("%.2f",$maxpo12);?></td>
  </tr>

      <!--attain for pso1-->
<tr>
<?php 
  $attainpso1co1=($coattainco1/3)*$co1pso1;
  $attainpso1co2=($coattainco2/3)*$co2pso1;
  $attainpso1co3=($coattainco3/3)*$co3pso1;
  $attainpso1co4=($coattainco4/3)*$co4pso1;
  $attainpso1co5=($coattainco5/3)*$co5pso1;
?>
 <td><?php printf("PSO1");?></td>
 <td><?php printf("%.2f", $attainpso1co1);?></td>
  <td><?php printf("%.2f",$attainpso1co2);?></td>
  <td><?php printf("%.2f",$attainpso1co3);?></td>
  <td><?php printf("%.2f",$attainpso1co4);?></td>
  <td><?php printf("%.2f",$attainpso1co5);?></td>
  <td><?php 
  //max of pso1
  $maxpso1=max($attainpso1co1,$attainpso1co2,$attainpso1co3,$attainpso1co4,$attainpso1co5);
  printf("%.2f",$maxpso1);?></td>
  </tr>


        <!--attain for pso2-->
<tr>
<?php 
  $attainpso2co1=($coattainco1/3)*$co1pso2;
  $attainpso2co2=($coattainco2/3)*$co2pso2;
  $attainpso2co3=($coattainco3/3)*$co3pso2;
  $attainpso2co4=($coattainco4/3)*$co4pso2;
  $attainpso2co5=($coattainco5/3)*$co5pso2;
?>
 <td><?php printf("PSO2");?></td>
 <td><?php printf("%.2f", $attainpso2co1);?></td>
  <td><?php printf("%.2f",$attainpso2co2);?></td>
  <td><?php printf("%.2f",$attainpso2co3);?></td>
  <td><?php printf("%.2f",$attainpso2co4);?></td>
  <td><?php printf("%.2f",$attainpso2co5);?></td>
  <td><?php 
  //max of pso2
  $maxpso2=max($attainpso2co1,$attainpso2co2,$attainpso2co3,$attainpso2co4,$attainpso2co5);
  printf("%.2f",$maxpso2);?></td>
  </tr>


        <!--attain for pso3-->
<tr>
<?php 
  $attainpso3co1=($coattainco1/3)*$co1pso3;
  $attainpso3co2=($coattainco2/3)*$co2pso3;
  $attainpso3co3=($coattainco3/3)*$co3pso3;
  $attainpso3co4=($coattainco4/3)*$co4pso3;
  $attainpso3co5=($coattainco5/3)*$co5pso3;
?>
 <td><?php printf("PSO3");?></td>
 <td><?php printf("%.2f", $attainpso3co1);?></td>
  <td><?php printf("%.2f",$attainpso3co2);?></td>
  <td><?php printf("%.2f",$attainpso3co3);?></td>
  <td><?php printf("%.2f",$attainpso3co4);?></td>
  <td><?php printf("%.2f",$attainpso3co5);?></td>
  <td><?php 
  //max of pso3
  $maxpso3=max($attainpso3co1,$attainpso3co2,$attainpso3co3,$attainpso3co4,$attainpso3co5);
  printf("%.2f",$maxpso3);?></td>
  </tr>
</table>

<br>
<?php
    $po1[$i]=$maxpo1;
    $po2[$i]=$maxpo2;
    $po3[$i]=$maxpo3;
    $po4[$i]=$maxpo4;
    $po5[$i]=$maxpo5;
    $po6[$i]=$maxpo6;
    $po7[$i]=$maxpo7;
    $po8[$i]=$maxpo8;
    $po9[$i]=$maxpo9;
    $po10[$i]=$maxpo10;
    $po11[$i]=$maxpo11;
    $po12[$i]=$maxpo12;
    $pso1[$i]=$maxpso1;
    $pso2[$i]=$maxpso2;
    $pso3[$i]=$maxpso3;
?>
</div>
<?php

}//for loop end
?>


<center><h1 style="margin-top:30px";>Final Avg PO</h1></center>
<table>
<tr>
<th>SubjectName</th>
<th>PO1</th>
<th>PO2</th>
<th>PO3</th>
<th>PO4</th>
<th>PO5</th>
<th>PO6</th>
<th>PO7</th>
<th>PO8</th>
<th>PO9</th>
<th>PO10</th>
<th>PO11</th>
<th>PO12</th>
<th>PSO1</th>
<th>PSO2</th>
<th>PSO3</th>
</tr>

<?php 
$countpo1=0;
$countpo2=0;
$countpo3=0;
$countpo4=0;
$countpo5=0;
$countpo6=0;
$countpo7=0;
$countpo8=0;
$countpo9=0;
$countpo10=0;
$countpo11=0;
$countpo12=0;
$countpso1=0;
$countpso2=0;
$countpso3=0;
    for($i=0;$i<$noofsub;$i++) {
        
    ?>
    <tr>
        <td><?php 
        
        $db = new mysqli('localhost', 'root', '', 'easynba') 
        or die("Error connecting to database!");
        $sql = " SELECT * from subjectentry where subCode='$sub[$i]'  ";
        $data=mysqli_query($conn,$sql); 
        $result=mysqli_fetch_assoc($data);
        echo '<b>'.$result['subId']." - ".$result['subName']." - ".$sub[$i].'</b>';       
        
        ?></td>
        <td><?php printf("%.2f", $po1[$i]);
            $countpo1+=$po1[$i];
        ?></td>
        <td><?php printf("%.2f", $po2[$i]); 
            $countpo2+=$po2[$i];
        ?></td>
        <td><?php printf("%.2f", $po3[$i]); 
            $countpo3+=$po3[$i];
        ?></td>
        <td><?php printf("%.2f", $po4[$i]); 
            $countpo4+=$po4[$i];
        ?></td>
        <td><?php printf("%.2f", $po5[$i]); 
            $countpo5+=$po5[$i];
        ?></td>
        <td><?php printf("%.2f", $po6[$i]); 
            $countpo6+=$po6[$i];
        ?></td>
        <td><?php printf("%.2f", $po7[$i]); 
            $countpo7+=$po7[$i];
        ?></td>
        <td><?php printf("%.2f", $po8[$i]); 
            $countpo8+=$po8[$i];
        ?></td>
        <td><?php printf("%.2f", $po9[$i]); 
            $countpo9+=$po9[$i];
        ?></td>
        <td><?php printf("%.2f", $po10[$i]); 
            $countpo10+=$po10[$i];
        ?></td>
        <td><?php printf("%.2f", $po11[$i]); 
            $countpo11+=$po11[$i];
        ?></td>
        <td><?php printf("%.2f", $po12[$i]); 
            $countpo12+=$po12[$i];
        ?></td>
        <td><?php printf("%.2f", $pso1[$i]); 
            $countpso1+=$pso1[$i];
        ?></td>
        <td><?php printf("%.2f", $pso2[$i]); 
            $countpso2+=$pso2[$i];
        ?></td>
        <td><?php printf("%.2f", $pso3[$i]); 
            $countpso3+=$pso3[$i];
        ?></td>
    <?php
    }
 ?>
 </tr>
 <tr style="background-color:yellow";>
    <td>AvgOfPO</td>

    <!--calculation for po1-->
        <?php
   if($noofsub==0){}else{
    $avgpo1=$countpo1/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo1);?>
    </td>

    <!--calculation for po2-->
    <?php
   if($noofsub==0){}else{
    $avgpo2=$countpo2/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo2);?></td>

    <!--calculation for po3-->
    <?php
 if($noofsub==0){}else{
    $avgpo3=$countpo3/$noofsub;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo3);?><br>
    </td>

    <!--calculation for po4-->
    <?php
   if($noofsub==0){}else{
    $avgpo4=$countpo4/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo4);?><br>
    </td>

    <!--calculation for po5-->
    <?php
   if($noofsub==0){}else{
    $avgpo5=$countpo5/$noofsub;
  }
    ?>
    <td>
    <?php printf("%.2f", $avgpo5);?><br>
    </td>

    <!--calculation for po6-->
    <?php
   if($noofsub==0){}else{
    $avgpo6=$countpo6/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo6);?><br>
    </td>

    <!--calculation for po7-->
    <?php
 if($noofsub==0){}else{
    $avgpo7=$countpo7/$noofsub;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo7);?><br>
    </td>

    <!--calculation for po8-->
    <?php
 if($noofsub==0){}else{
    $avgpo8=$countpo8/$noofsub;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo8);?><br>
    </td>

    <!--calculation for po9-->
    <?php
   if($noofsub==0){}else{
    $avgpo9=$countpo9/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo9);?><br>
    </td>

    <!--calculation for po10-->
    <?php
 if($noofsub==0){}else{
    $avgpo10=$countpo10/$noofsub;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo10);?><br>
    </td>

    <!--calculation for po11-->
    <?php
 if($noofsub==0){}else{
    $avgpo11=$countpo11/$noofsub;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo11);?><br>
    </td>

    <!--calculation for po12-->
    <?php
 if($noofsub==0){}else{
    $avgpo12=$countpo12/$noofsub;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo12);?><br>
    </td>
    
    <!--calculation for pso1-->
    <?php
   if($noofsub==0){}else{
    $avgpso1=$countpso1/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso1);?><br>
    </td>

    <!--calculation for pso2-->
    <?php
   if($noofsub==0){}else{
    $avgpso2=$countpso2/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso2);?><br>
    </td>

    <!--calculation for pso3-->
    <?php
   if($noofsub==0){}else{
    $avgpso3=$countpso3/$noofsub;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso3);?><br>
    </td>
</tr>
</table>

<?php

}//if end
?>

   <br>

   
   <!--Bar Graph-->

<?php
 
 $dataPoints = array(
     array( "y"=> $avgpo1),
     array( "y"=> $avgpo2),
     array( "y"=> $avgpo3),
     array( "y"=> $avgpo4),
     array( "y"=> $avgpo5),
     array( "y"=> $avgpo6),
     array( "y"=> $avgpo7),
     array( "y"=> $avgpo8),
     array( "y"=> $avgpo9),
     array( "y"=> $avgpo10),
     array( "y"=> $avgpo11),
     array( "y"=> $avgpo12),
     array( "y"=> $avgpso1),
     array( "y"=> $avgpso2),
     array( "y"=> $avgpso3)
 );
     
 ?>

<center>
<script type="text/javascript">
var users = <?php echo json_encode($dataPoints); ?>;
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<h3><b>ATTAINMENT FOR YEAR</b></h3>
<canvas id="myChart" style="width:100%;max-width:1000px"></canvas>

<script>
var xValues = ["PO1", "PO2", "PO3", "PO4", "PO5","PO6", "PO7", "PO8", "PO9", "PO10","PO11", "PO12", "PSO1", "PSO2", "PSO3"];
var yValues = [users[0].y,users[1].y,users[2].y,users[3].y,users[4].y,users[5].y,users[6].y,users[7].y,users[8].y,users[9].y,users[10].y,users[11].y,users[12].y,users[13].y,users[14].y ];
var barColors = ["red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true
      //text: "SUBJECT WISE ATTAINMENT"
    }
  }
});
</script>
</center>

<!--line Graph-->

<script type="text/javascript">
var users = <?php echo json_encode($dataPoints); ?>;
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<center><canvas id="myChart1" style="width:100%;max-width:800px"></canvas>
</centre>

<script>
var xValues = ["PO1", "PO2", "PO3", "PO4", "PO5","PO6", "PO7", "PO8", "PO9", "PO10","PO11", "PO12", "PSO1", "PSO2", "PSO3"];
var yValues = [users[0].y,users[1].y,users[2].y,users[3].y,users[4].y,users[5].y,users[6].y,users[7].y,users[8].y,users[9].y,users[10].y,users[11].y,users[12].y,users[13].y,users[14].y ];


new Chart("myChart1", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      pointRadius: 2,
      borderColor: "rgba(0,0,255,0.5)",
      data: yValues
    }]
  },    
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Year attainment with line graph",
      fontSize: 16
    }
  }
});

</script>


<br>
<br>
<center>
<h3><b>MANUAL PO ATTAINMENT</b></h3>
<table>
  <tr>
    <th></th>
    <th>PO1</th>
    <th>PO2</th>
    <th>PO3</th>
    <th>PO4</th>
    <th>PO5</th>
    <th>PO6</th>
    <th>PO7</th>
    <th>PO8</th>
    <th>PO9</th>
    <th>PO10</th>
    <th>PO11</th>
    <th>PO12</th>
    <th>PSO1</th>
    <th>PSO2</th>
    <th>PSO3</th>
  </tr>
  <tr>
    <td>Attainment</td>
    <td><?php printf("%.2f", $avgpo1);?></td>
    <td><?php printf("%.2f", $avgpo2);?></td>
    <td><?php printf("%.2f", $avgpo3);?></td>
    <td><?php printf("%.2f", $avgpo4);?></td>
    <td><?php printf("%.2f", $avgpo5);?></td>
    <td><?php printf("%.2f", $avgpo6);?></td>
    <td><?php printf("%.2f", $avgpo7);?></td>
    <td><?php printf("%.2f", $avgpo8);?></td>
    <td><?php printf("%.2f", $avgpo9);?></td>
    <td><?php printf("%.2f", $avgpo10);?></td>
    <td><?php printf("%.2f", $avgpo11);?></td>
    <td><?php printf("%.2f", $avgpo12);?></td>
    <td><?php printf("%.2f", $avgpso1);?></td>
    <td><?php printf("%.2f", $avgpso2);?></td>
    <td><?php printf("%.2f", $avgpso3);?></td>
</tr>
<tr>
  <td>Gap Found</td>
    <td><?php printf("%.2f", 3-$avgpo1);?></td>
    <td><?php printf("%.2f", 3-$avgpo2);?></td>
    <td><?php printf("%.2f", 3-$avgpo3);?></td>
    <td><?php printf("%.2f", 3-$avgpo4);?></td>
    <td><?php printf("%.2f", 3-$avgpo5);?></td>
    <td><?php printf("%.2f", 3-$avgpo6);?></td>
    <td><?php printf("%.2f", 3-$avgpo7);?></td>
    <td><?php printf("%.2f", 3-$avgpo8);?></td>
    <td><?php printf("%.2f", 3-$avgpo9);?></td>
    <td><?php printf("%.2f", 3-$avgpo1);?></td>
    <td><?php printf("%.2f", 3-$avgpo11);?></td>
    <td><?php printf("%.2f", 3-$avgpo12);?></td>
    <td><?php printf("%.2f", 3-$avgpso1);?></td>
    <td><?php printf("%.2f", 3-$avgpso2);?></td>
    <td><?php printf("%.2f", 3-$avgpso3);?></td>

</tr>

</table>
</center>
<br><br>


<?php
//gap calculation
$gappo1=((3-$avgpo1)/3)*100;
$gappo2=((3-$avgpo2)/3)*100;
$gappo3=((3-$avgpo3)/3)*100;
$gappo4=((3-$avgpo4)/3)*100;
$gappo5=((3-$avgpo5)/3)*100;
$gappo6=((3-$avgpo6)/3)*100;
$gappo7=((3-$avgpo7)/3)*100;
$gappo8=((3-$avgpo8)/3)*100;
$gappo9=((3-$avgpo9)/3)*100;
$gappo10=((3-$avgpo10)/3)*100;
$gappo11=((3-$avgpo11)/3)*100;
$gappo12=((3-$avgpo12)/3)*100;
$gappso1=((3-$avgpso1)/3)*100;
$gappso2=((3-$avgpso2)/3)*100;
$gappso3=((3-$avgpso3)/3)*100;
?>


<center>
  
<table style="margin-top:60px";>
<tr>
<th colspan="3">Gap Found in this Subject</th>
</tr>
 <tr>  

    <td> 
po1</td><td> Engineering Knowledge:</td>
<td><?php printf("%.2f",$gappo1);echo "%";?>
</td></tr>
<tr>  
    <td> 
po2</td><td> Problem Analysis</td><td>
<?php printf("%.2f",$gappo2);echo "%";?>
</td></tr>
<tr>  
    <td> 
po3</td><td> Design/Development of Solution</td>
<td>
<?php printf("%.2f",$gappo3);echo "%";?>
</td></tr>
<tr>  
    <td> 
po4</td><td>Conduct investigations of complex problem</td><td>
<?php printf("%.2f",$gappo4);echo "%";?>
</td></tr>
<tr>  
    <td> 
po5</td><td>Modern tool usage</td><td>
<?php printf("%.2f",$gappo5);echo "%";?>
</td></tr>
<tr>  
    <td> 
po6 </td><td>The engineer and Society</td><td>
<?php printf("%.2f",$gappo6);echo "%";?>
</td></tr>
<tr>  
    <td> 
po7 </td><td> Environment and Sustainability</td><td> 
<?php printf("%.2f",$gappo7);echo "%";?>
</td></tr>
<tr>  
    <td> 
po8</td><td>  Ethics</td><td>
<?php printf("%.2f",$gappo8);echo "%";?>
</td></tr>
<tr>  
    <td> 
po9 </td><td> Individual and Team Work</td><td>
<?php printf("%.2f",$gappo9);echo "%";?>
</td></tr>
<tr>  
    <td> 
po10</td><td> Communication</td><td>
<?php printf("%.2f",$gappo10);echo "%";?>
</td></tr>
<tr>  
    <td> 
po11</td><td> Project Management and Finance</td><td>
<?php printf("%.2f",$gappo11);echo "%";?>
</td></tr>
<tr>  
<td> 
po12</td><td> Life-long Learning </td><td>
<?php printf("%.2f",$gappo12);echo "%";?>
</td></tr>
<tr>  
<td> 
pso1</td><td> Program Specific Outcome1</td><td>
<?php printf("%.2f",$gappso1);echo "%";?>
</td></tr>
<tr>  
<td> 
pso2</td><td> Program Specific Outcome2</td><td>
<?php printf("%.2f",$gappso2);echo "%";?>
</td></tr>
<tr>  
<td> 
pso3</td><td>Program Specific Outcome3</td><td>
<?php printf("%.2f",$gappso3);echo "%";?>
</td></tr>
</table>
</center>


<!--graph for Gap-->
<?php
 
 $dataPoints1 = array(
	array("label"=> "PO1", "y"=> array(( (3-$avgpo1)/3)*100, 100-$gappo1)), 
  array("label"=> "PO2", "y"=> array(( (3-$avgpo2)/3)*100, 100-$gappo2)), 
  array("label"=> "PO3", "y"=> array(( (3-$avgpo3)/3)*100, 100-$gappo3)), 
  array("label"=> "PO4", "y"=> array(( (3-$avgpo4)/3)*100, 100-$gappo4)), 
  array("label"=> "PO5", "y"=> array(( (3-$avgpo5)/3)*100, 100-$gappo5)), 
  array("label"=> "PO6", "y"=> array(( (3-$avgpo6)/3)*100, 100-$gappo6)), 
  array("label"=> "PO7", "y"=> array(( (3-$avgpo7)/3)*100, 100-$gappo7)), 
  array("label"=> "PO8", "y"=> array(( (3-$avgpo8)/3)*100, 100-$gappo8)), 
  array("label"=> "PO9", "y"=> array(( (3-$avgpo9)/3)*100, 100-$gappo9)), 
  array("label"=> "PO10", "y"=> array(( (3-$avgpo10)/3)*100, 100-$gappo10)), 
  array("label"=> "PO11", "y"=> array(( (3-$avgpo11)/3)*100, 100-$gappo11)), 
  array("label"=> "PO12", "y"=> array(( (3-$avgpo12)/3)*100, 100-$gappo12)),  
  array("label"=> "PSO1", "y"=> array(((3-$avgpso1)/3)*100, 100-$gappso1)),
  array("label"=> "PSO2", "y"=> array(((3-$avgpso2)/3)*100, 100-$gappso2)),
	array("label"=> "PSO3", "y"=> array(((3-$avgpso3)/3)*100, 100-$gappso3))
);
 
?>

<center>
  <h3 style="margin-top:39px";><b>Graph For Gap Found</b></h3>
<div id="chartContainer" style="height: 370px; width: 80%;"></div>
<center>
 
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "GapFound and Attainment Graph"
	},
	theme: "dark1",
	animationEnabled: true,
	axisY: {
		includeZero: false
	},
	data: [
		{
			type: "rangeColumn",
			
			toolTipContent: "{label}<br>GapFound: {y[0]}%<br>Atainment: {y[1]}%",
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		}
	]
});
 
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</bodu>
</html>
