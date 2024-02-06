<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/BatchAttain.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Batchwise Attainment</title>
    <style>
  .datahide{
      display:none;
    }
          
table {
  margin: 0px;
  margin-top: 10px;
  border-collapse: collapse;
  width: 90%;
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
    <div class="title">Batch Attainment</div>
    <div class="content">
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
//year1
$avgpo1y1=0;
$avgpo2y1=0;
$avgpo3y1=0;
$avgpo4y1=0;
$avgpo5y1=0;
$avgpo6y1=0;
$avgpo7y1=0;
$avgpo8y1=0;
$avgpo9y1=0;
$avgpo10y1=0;
$avgpo11y1=0;
$avgpo12y1=0;
$avgpso1y1=0;
$avgpso2y1=0;
$avgpso3y1=0;
//year2
$avgpo1y2=0;
$avgpo2y2=0;
$avgpo3y2=0;
$avgpo4y2=0;
$avgpo5y2=0;
$avgpo6y2=0;
$avgpo7y2=0;
$avgpo8y2=0;
$avgpo9y2=0;
$avgpo10y2=0;
$avgpo11y2=0;
$avgpo12y2=0;
$avgpso1y2=0;
$avgpso2y2=0;
$avgpso3y2=0;
//year3
$avgpo1y3=0;
$avgpo2y3=0;
$avgpo3y3=0;
$avgpo4y3=0;
$avgpo5y3=0;
$avgpo6y3=0;
$avgpo7y3=0;
$avgpo8y3=0;
$avgpo9y3=0;
$avgpo10y3=0;
$avgpo11y3=0;
$avgpo12y3=0;
$avgpso1y3=0;
$avgpso2y3=0;
$avgpso3y3=0;
//year4
$avgpo1y4=0;
$avgpo2y4=0;
$avgpo3y4=0;
$avgpo4y4=0;
$avgpo5y4=0;
$avgpo6y4=0;
$avgpo7y4=0;
$avgpo8y4=0;
$avgpo9y4=0;
$avgpo10y4=0;
$avgpo11y4=0;
$avgpo12y4=0;
$avgpso1y4=0;
$avgpso2y4=0;
$avgpso3y4=0;
//all
$avgpo1All=0;
$avgpo2All=0;
$avgpo3All=0;
$avgpo4All=0;
$avgpo5All=0;
$avgpo6All=0;
$avgpo7All=0;
$avgpo8All=0;
$avgpo9All=0;
$avgpo10All=0;
$avgpo11All=0;
$avgpo12All=0;
$avgpso1All=0;
$avgpso2All=0;
$avgpso3All=0;
      ?>

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


<center>


<?php 




    $db = new mysqli('localhost', 'root', '', 'easynba') 
      or die("Error connecting to database!");

        include('../../connection/config.php');


if(isset($_POST['submit'])){

        $schemaId = $_POST['schemaId'];
        $bid =$_POST['bid'];
        

        $sql = " SELECT * from marks where schemaId='$schemaId' and bid='$bid' ";
        $results = $db->query($sql);

       
      //total stu count
      
        if ($results = mysqli_query($db, $sql)) {

          // Return the number of rows in result set
          $rowcount1 = mysqli_num_rows( $results );
          
          // Display result
     //   printf("Total rows in this table :  %d\n", $rowcount1);  
       } 

      
        ?>
        
        <?php 
        
        include('../../connection/config.php');
      
        $yearFirst=0;
        $yearSecond=0;
        $yearThird=0;
        $yearFourth=0;

        $getyearId= " select distinct(yearId) from marks where schemaId='$schemaId' and bid='$bid' ";
        $data1=mysqli_query($conn,$getyearId); 
       
        $arr_for_yearId=array();

        $p=0;
        while($row = $data1->fetch_assoc()) {
          //echo $row['yearId'];
          $arr_for_yearId[$p]=$row['yearId'];
        $p++;  
        }
        if(count($arr_for_yearId)==0){

        }else{
          if(count($arr_for_yearId)==4){
            $yearFirst=$arr_for_yearId[0];
          $yearSecond=$arr_for_yearId[1];
          $yearThird=$arr_for_yearId[2];
          $yearFourth=$arr_for_yearId[3];
          }
          
        }
?>

<div class="ph" style="margin-top:20px;" align="right">
<div class="w3-show-inline-block">
  <div class="w3-bar" style="border-radius:10px;">
    <button class="w3-btn w3-black" onclick="window.print()">Print</button>
  </div>
  </div>
</div>




<div class="datahide">
<?php
//Year 1 data
      //get First year rowcount
      $countData_y1="select * from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' ";
      $countDatay1=mysqli_query($conn,$countData_y1);
      
    if ( $countDatay1 = mysqli_query($conn, $countData_y1)) {

        $rowcounty1 = mysqli_num_rows( $countDatay1 );
  
  // Display result
    //printf("Total rows in this table :  %d\n", $rowcounty1);  
} 

      //get First year student count
      $year1="select count(distinct usn) as count from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' ";
      $y1=mysqli_query($conn,$year1);

     while($row=mysqli_fetch_assoc($y1)){
      $noofstuy1=$row['count'];
      //echo $noofstuy1;  
      }

      $suby1=array();
      //getting Subject Count
      $subyear1="select distinct(subCode) from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' ";
      $sy1 = $db->query($subyear1);
      $ii=0;
      while($row = $sy1->fetch_assoc()) {
      $suby1[$ii]=$row['subCode'];
      //echo $row['subCode'];
      $ii++;
      }

/*foreach ($suby1 as $value){
    echo $value;
}*/

//gettinh number of Subject
$noofsubInY1=count($suby1);


//getting number of Student
if ($rowcounty1==0 and $noofsubInY1==0){
    
  }else{
    $noofstu=$rowcounty1/$noofsubInY1;
      //echo $noofstu;
  }
      

      $year1po1=array();
      $year1po2=array();
      $year1po3=array();
      $year1po4=array();
      $year1po5=array();
      $year1po6=array();
      $year1po7=array();
      $year1po8=array();
      $year1po9=array();
      $year1po10=array();
      $year1po11=array();
      $year1po12=array();
      $year1pso1=array();
      $year1pso2=array();
      $year1pso3=array();

     
      


      for($i=0;$i<$noofsubInY1;$i++){
        //echo $sub[$i];
        //getting individual marks from subject
        ?>
        
        <h1>getting subject details</h1>
             <table border="3">
            <?php
        
            $sql3 = " SELECT * FROM marks where subCode='$suby1[$i]' ";
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


    $sql5 = " SELECT * FROM cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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
 $capco1= "select co1cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]' ";
 $result1 = $db->query($capco1);
 while($row = $result1->fetch_assoc()) {
      $co1= $row['co1cap'];  
      $co1cap=(40/100)*$co1;
      
           //echo $co1cap;
      ?>  <td><?php echo $co1cap; ?></td>

 <?php
}

//getting cap values from database for co2
$capco2= "select co2cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]' ";
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
$capco3= "select co3cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]' ";
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
$capco4= "select co4cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]' ";
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
$capco5= "select co5cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]' ";
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
$tresh= "select treshforexternal from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]' ";
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
 $sqlcap1 = "select co1marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  and co1marks >'$co1cap' ";

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
  $sqlcap2 = "select co2marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  and co2marks >'$co2cap' ";

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
  $sqlcap3 = "select co3marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  and co3marks >'$co3cap' ";

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
  $sqlcap4 = "select co4marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  and co4marks >'$co4cap' ";

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
  $sqlcap5 = "select co5marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  and co5marks >'$co5cap' ";

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
   $sqltresh = "select external from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  and external >'$treshforexternal' ";

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
if($Co1count==0 and $noofstuy1==0){
  
}else{
 $calco1=($Co1count/$noofstuy1*100);
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
 

    
  if($Co2count ==0 and $noofstuy1==0){
  
  }else{
 $calco2=($Co2count/$noofstuy1*100);
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


  if($Co3count ==0 and $noofstuy1==0){
  
  }else{
 $calco3=($Co3count/$noofstuy1*100);
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

  if($Co4count ==0 and $noofstuy1==0){
  
  }else{

 $calco4=($Co4count/$noofstuy1*100);
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

  if($Co5count ==0 and $noofstuy1==0){
  
  }else{

 $calco5=($Co5count/$noofstuy1*100);
 if ($calco5>=0 and $calco5<60){
  $attainlevel5=0;
}elseif($calco5>=60 and $calco5<70){
  $attainlevel5=1;
}
elseif($calco5>=70 and $calco5<80){
  $attainlevel5=2;
}elseif($calco5>=80 and $calco5<=100){
    $attainlevel5=3;
}
  }
  if($treshcount ==0 and $noofstuy1==0){
  
  }else{
$tresh=($treshforexternal/$noofstuy1*100);
if ($tresh>=0 and $tresh<60){
   $attainleveltresh=0;
}elseif($tresh>=60 and $tresh<70){
   $attainleveltresh=1;
}elseif($tresh>=70 and $tresh<80){
  $attainleveltresh=2;
}elseif($tresh>=80 and $tresh<=100){
  $attainleveltresh=3;
}else{
  $attainleveltresh=0;
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
$sqlpo1 = " SELECT * from po1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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
$sqlpo2 = " SELECT * from po2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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
$sqlpo3 = " SELECT * from po3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo4 = " SELECT * from po4 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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
  $sqlpo5 = " SELECT * from po5 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo6 = " SELECT * from po6 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo7 = " SELECT * from po7 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo8 = " SELECT * from po8 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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
  $sqlpo9 = " SELECT * from po9 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo10 = " SELECT * from po10 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo11 = " SELECT * from po11 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpo12 = " SELECT * from po12 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpso1 = " SELECT * from pso1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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
  $sqlpso2 = " SELECT * from pso2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

  $sqlpso3 = " SELECT * from pso3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFirst' and subCode='$suby1[$i]'  ";
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

       $year1po1[$i]=$maxpo1;
      $year1po2[$i]=$maxpo2;
      $year1po3[$i]=$maxpo3;
      $year1po4[$i]=$maxpo4;
      $year1po5[$i]=$maxpo5;
      $year1po6[$i]=$maxpo6;
      $year1po7[$i]=$maxpo7;
      $year1po8[$i]=$maxpo8;
      $year1po9[$i]=$maxpo9;
      $year1po10[$i]=$maxpo10;
      $year1po11[$i]=$maxpo11;
      $year1po12[$i]=$maxpo12;
      $year1pso1[$i]=$maxpso1;
      $year1pso2[$i]=$maxpso2;
      $year1pso3[$i]=$maxpso3;
?>
<?php

}//for loop end for year1 
?>
<?php
//completed Year 1 Data
?>

<?php
//Year 2 data
//get Second year rowcount
      $countData_y2="select * from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' ";
      $countDatay2=mysqli_query($conn,$countData_y2);
      
    if ( $countDatay2 = mysqli_query($conn, $countData_y2)) {

        $rowcounty2 = mysqli_num_rows( $countDatay2 );
  
  // Display result
    //printf("Total rows in this table :  %d\n", $rowcounty2);  
} 

//get Second year student count
      $year2="select count(distinct usn) as count from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' ";
      $y2=mysqli_query($conn,$year2);

     while($row=mysqli_fetch_assoc($y2)){
      $noofstuy2=$row['count'];
      //echo $noofstuy2;  
      }


      $suby2=array();
      //getting Subject Count
      $subyear2="select distinct(subCode) from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' ";
      $sy2 = $db->query($subyear2);
      $ii=0;
      while($row = $sy2->fetch_assoc()) {
      $suby2[$ii]=$row['subCode'];
      //echo $row['subCode'];
      $ii++;
      }

/*foreach ($suby2 as $value){
    echo $value;
}*/

//gettinh number of Subject
$noofsubInY2=count($suby2);


//getting number of Student
if ($rowcounty2==0 and $noofsubInY2==0){
    
  }else{
    $noofstu=$rowcounty2/$noofsubInY2;
      //echo $noofstu;
  }
      

      $year2po1=array();
      $year2po2=array();
      $year2po3=array();
      $year2po4=array();
      $year2po5=array();
      $year2po6=array();
      $year2po7=array();
      $year2po8=array();
      $year2po9=array();
      $year2po10=array();
      $year2po11=array();
      $year2po12=array();
      $year2pso1=array();
      $year2pso2=array();
      $year2pso3=array();

     
      


      for($i=0;$i<$noofsubInY2;$i++){
        //echo $suby2[$i];
        //getting individual marks from subject
        ?>
        
        <h1>getting subject details</h1>
             <table border="3">
            <?php
        
            $sql3 = " SELECT * FROM marks where subCode='$suby2[$i]' ";
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


    $sql5 = " SELECT * FROM cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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
 $capco1= "select co1cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
 $result1 = $db->query($capco1);
 while($row = $result1->fetch_assoc()) {
      $co1= $row['co1cap'];  
      $co1cap=(40/100)*$co1;
      
           //echo $co1cap;
      ?>  <td><?php echo $co1cap; ?></td>

 <?php
}

//getting cap values from database for co2
$capco2= "select co2cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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
$capco3= "select co3cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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
$capco4= "select co4cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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
$capco5= "select co5cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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
$tresh= "select treshforexternal from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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
 $sqlcap1 = "select co1marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  and co1marks >'$co1cap' ";

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
  $sqlcap2 = "select co2marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  and co2marks >'$co2cap' ";

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
  $sqlcap3 = "select co3marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  and co3marks >'$co3cap' ";

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
  $sqlcap4 = "select co4marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  and co4marks >'$co4cap' ";

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
  $sqlcap5 = "select co5marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  and co5marks >'$co5cap' ";

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
   $sqltresh = "select external from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  and external >'$treshforexternal' ";

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
if($Co1count==0 and $noofstuy2==0){
  
}else{
 $calco1=($Co1count/$noofstuy2*100);
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
 

    
  if($Co2count ==0 and $noofstuy2==0){
  
  }else{
 $calco2=($Co2count/$noofstuy2*100);
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


  if($Co3count ==0 and $noofstuy2==0){
  
  }else{
 $calco3=($Co3count/$noofstuy2*100);
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

  if($Co4count ==0 and $noofstuy2==0){
  
  }else{

 $calco4=($Co4count/$noofstuy2*100);
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

  if($Co5count ==0 and $noofstuy2==0){
  
  }else{

 $calco5=($Co5count/$noofstuy2*100);
 if ($calco5>=0 and $calco5<60){
  $attainlevel5=0;
}elseif($calco5>=60 and $calco5<70){
  $attainlevel5=1;
}
elseif($calco5>=70 and $calco5<80){
  $attainlevel5=2;
}elseif($calco5>=80 and $calco5<=100){
    $attainlevel5=3;
}
  }
  if($treshcount ==0 and $noofstuy2==0){
  
  }else{
$tresh=($treshforexternal/$noofstuy2*100);
if ($tresh>=0 and $tresh<60){
   $attainleveltresh=0;
}elseif($tresh>=60 and $tresh<70){
   $attainleveltresh=1;
}elseif($tresh>=70 and $tresh<80){
  $attainleveltresh=2;
}elseif($tresh>=80 and $tresh<=100){
  $attainleveltresh=3;
}else{
  $attainleveltresh=0;
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
$sqlpo1 = " SELECT * from po1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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
$sqlpo2 = " SELECT * from po2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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
$sqlpo3 = " SELECT * from po3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpo4 = " SELECT * from po4 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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
  $sqlpo5 = " SELECT * from po5 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpo6 = " SELECT * from po6 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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

  $sqlpo7 = " SELECT * from po7 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]' ";
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

  $sqlpo8 = " SELECT * from po8 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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
  $sqlpo9 = " SELECT * from po9 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpo10 = " SELECT * from po10 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpo11 = " SELECT * from po11 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpo12 = " SELECT * from po12 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpso1 = " SELECT * from pso1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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
  $sqlpso2 = " SELECT * from pso2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

  $sqlpso3 = " SELECT * from pso3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearSecond' and subCode='$suby2[$i]'  ";
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

       $year2po1[$i]=$maxpo1;
      $year2po2[$i]=$maxpo2;
      $year2po3[$i]=$maxpo3;
      $year2po4[$i]=$maxpo4;
      $year2po5[$i]=$maxpo5;
      $year2po6[$i]=$maxpo6;
      $year2po7[$i]=$maxpo7;
      $year2po8[$i]=$maxpo8;
      $year2po9[$i]=$maxpo9;
      $year2po10[$i]=$maxpo10;
      $year2po11[$i]=$maxpo11;
      $year2po12[$i]=$maxpo12;
      $year2pso1[$i]=$maxpso1;
      $year2pso2[$i]=$maxpso2;
      $year2pso3[$i]=$maxpso3;
?>
<?php

}//for loop end for year2 
?>

<?php
//completed Year 2 Data
?>


  
<?php
//Year 3 data
//get Third year rowcount
      $countData_y3="select * from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' ";
      $countDatay3=mysqli_query($conn,$countData_y3);
      
    if ( $countDatay3 = mysqli_query($conn, $countData_y3)) {

        $rowcounty3 = mysqli_num_rows( $countDatay3 );
  
  // Display result
    //printf("Total rows in this table :  %d\n", $rowcounty3);  
}  
 
 
 //get Third year student count
      $year3="select count(distinct usn) as count from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' ";
      $y3=mysqli_query($conn,$year3);

     while($row=mysqli_fetch_assoc($y3)){
      $noofstuy3=$row['count'];
      //echo $noofstuy3;  
      }




      $suby3=array();
      //getting Subject Count
      $subyear3="select distinct(subCode) from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' ";
      $sy3 = $db->query($subyear3);
      $ii=0;
      while($row = $sy3->fetch_assoc()) {
      $suby3[$ii]=$row['subCode'];
      //echo $row['subCode'];
      $ii++;
      }

/*foreach ($suby3 as $value){
    echo $value;
}*/

//gettinh number of Subject
$noofsubInY3=count($suby3);


//getting number of Student
if ($rowcounty3==0 and $noofsubInY3==0){
    
  }else{
    $noofstu=$rowcounty3/$noofsubInY3;
      //echo $noofstu;
  }
      

      $year3po1=array();
      $year3po2=array();
      $year3po3=array();
      $year3po4=array();
      $year3po5=array();
      $year3po6=array();
      $year3po7=array();
      $year3po8=array();
      $year3po9=array();
      $year3po10=array();
      $year3po11=array();
      $year3po12=array();
      $year3pso1=array();
      $year3pso2=array();
      $year3pso3=array();

     
      


      for($i=0;$i<$noofsubInY3;$i++){
        //echo $suby3[$i];
        //getting individual marks from subject
        ?>
        
        <h1>getting subject details</h1>
             <table border="3">
            <?php
        
            $sql3 = " SELECT * FROM marks where subCode='$suby3[$i]' ";
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


    $sql5 = " SELECT * FROM cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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
 $capco1= "select co1cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
 $result1 = $db->query($capco1);
 while($row = $result1->fetch_assoc()) {
      $co1= $row['co1cap'];  
      $co1cap=(40/100)*$co1;
      
           //echo $co1cap;
      ?>  <td><?php echo $co1cap; ?></td>

 <?php
}

//getting cap values from database for co2
$capco2= "select co2cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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
$capco3= "select co3cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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
$capco4= "select co4cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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
$capco5= "select co5cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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
$tresh= "select treshforexternal from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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
 $sqlcap1 = "select co1marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  and co1marks >'$co1cap' ";

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
  $sqlcap2 = "select co2marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  and co2marks >'$co2cap' ";

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
  $sqlcap3 = "select co3marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  and co3marks >'$co3cap' ";

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
  $sqlcap4 = "select co4marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  and co4marks >'$co4cap' ";

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
  $sqlcap5 = "select co5marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  and co5marks >'$co5cap' ";

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
   $sqltresh = "select external from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  and external >'$treshforexternal' ";

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
if($Co1count==0 and $noofstuy3==0){
  
}else{
 $calco1=($Co1count/$noofstuy3*100);
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
 

    
  if($Co2count ==0 and $noofstuy3==0){
  
  }else{
 $calco2=($Co2count/$noofstuy3*100);
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


  if($Co3count ==0 and $noofstuy3==0){
  
  }else{
 $calco3=($Co3count/$noofstuy3*100);
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

  if($Co4count ==0 and $noofstuy3==0){
  
  }else{

 $calco4=($Co4count/$noofstuy3*100);
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

  if($Co5count ==0 and $noofstuy3==0){
  
  }else{

 $calco5=($Co5count/$noofstuy3*100);
 if ($calco5>=0 and $calco5<60){
  $attainlevel5=0;
}elseif($calco5>=60 and $calco5<70){
  $attainlevel5=1;
}
elseif($calco5>=70 and $calco5<80){
  $attainlevel5=2;
}elseif($calco5>=80 and $calco5<=100){
    $attainlevel=3;
}
  }
  if($treshcount ==0 and $noofstuy3==0){
  
  }else{
$tresh=($treshforexternal/$noofstuy3*100);
if ($tresh>=0 and $tresh<60){
   $attainleveltresh=0;
}elseif($tresh>=60 and $tresh<70){
   $attainleveltresh=1;
}elseif($tresh>=70 and $tresh<80){
  $attainleveltresh=2;
}elseif($tresh>=80 and $tresh<=100){
  $attainleveltresh=3;
}else{
  $attainleveltresh=0;
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
$sqlpo1 = " SELECT * from po1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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
$sqlpo2 = " SELECT * from po2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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
$sqlpo3 = " SELECT * from po3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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

  $sqlpo4 = " SELECT * from po4 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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
  $sqlpo5 = " SELECT * from po5 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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

  $sqlpo6 = " SELECT * from po6 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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

  $sqlpo7 = " SELECT * from po7 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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

  $sqlpo8 = " SELECT * from po8 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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
  $sqlpo9 = " SELECT * from po9 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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

  $sqlpo10 = " SELECT * from po10 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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

  $sqlpo11 = " SELECT * from po11 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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

  $sqlpo12 = " SELECT * from po12 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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

  $sqlpso1 = " SELECT * from pso1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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
  $sqlpso2 = " SELECT * from pso2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]'  ";
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

  $sqlpso3 = " SELECT * from pso3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearThird' and subCode='$suby3[$i]' ";
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

       $year3po1[$i]=$maxpo1;
      $year3po2[$i]=$maxpo2;
      $year3po3[$i]=$maxpo3;
      $year3po4[$i]=$maxpo4;
      $year3po5[$i]=$maxpo5;
      $year3po6[$i]=$maxpo6;
      $year3po7[$i]=$maxpo7;
      $year3po8[$i]=$maxpo8;
      $year3po9[$i]=$maxpo9;
      $year3po10[$i]=$maxpo10;
      $year3po11[$i]=$maxpo11;
      $year3po12[$i]=$maxpo12;
      $year3pso1[$i]=$maxpso1;
      $year3pso2[$i]=$maxpso2;
      $year3pso3[$i]=$maxpso3;
?>
<?php

}//for loop end for year 3
?>
<?php
//completed Year 3 Data
?>

<?php
//Year 4 data
      //get Fourth year rowcount
      $countData_y4="select * from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' ";
      $countDatay4=mysqli_query($conn,$countData_y4);
      
    if ( $countDatay4 = mysqli_query($conn, $countData_y4)) {

        $rowcounty4 = mysqli_num_rows( $countDatay4 );
  
  // Display result
    //printf("Total rows in this table :  %d\n", $rowcounty4);  
} 
  
  //get Third year student count
      $year4="select count(distinct usn) as count from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' ";
      $y4=mysqli_query($conn,$year4);

     while($row=mysqli_fetch_assoc($y4)){
      $noofstuy4=$row['count'];
      //echo $noofstuy4;  
      }

      $suby4=array();
      //getting Subject Count
      $subyear4="select distinct(subCode) from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' ";
      $sy4 = $db->query($subyear4);
      $ii=0;
      while($row = $sy4->fetch_assoc()) {
      $suby4[$ii]=$row['subCode'];
      //echo $row['subCode'];
      $ii++;
      }

/*foreach ($suby4 as $value){
    echo $value;
}*/

//gettinh number of Subject
$noofsubInY4=count($suby4);


//getting number of Student
if ($rowcounty4==0 and $noofsubInY4==0){
    
  }else{
    $noofstu=$rowcounty4/$noofsubInY4;
      //echo $noofstu;
  }
      

      $year4po1=array();
      $year4po2=array();
      $year4po3=array();
      $year4po4=array();
      $year4po5=array();
      $year4po6=array();
      $year4po7=array();
      $year4po8=array();
      $year4po9=array();
      $year4po10=array();
      $year4po11=array();
      $year4po12=array();
      $year4pso1=array();
      $year4pso2=array();
      $year4pso3=array();
     
      


      for($i=0;$i<$noofsubInY4;$i++){
        //echo $suby4[$i];
        //getting individual marks from subject
        ?>
        
        <h1>getting subject details</h1>
             <table border="3">
            <?php
        
            $sql3 = " SELECT * FROM marks where subCode='$suby4[$i]' ";
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


    $sql5 = " SELECT * FROM cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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
 $capco1= "select co1cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
 $result1 = $db->query($capco1);
 while($row = $result1->fetch_assoc()) {
      $co1= $row['co1cap'];  
      $co1cap=(40/100)*$co1;
      
           //echo $co1cap;
      ?>  <td><?php echo $co1cap; ?></td>

 <?php
}

//getting cap values from database for co2
$capco2= "select co2cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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
$capco3= "select co3cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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
$capco4= "select co4cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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
$capco5= "select co5cap from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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
$tresh= "select treshforexternal from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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
 $sqlcap1 = "select co1marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  and co1marks >'$co1cap' ";

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
  $sqlcap2 = "select co2marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  and co2marks >'$co2cap' ";

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
  $sqlcap3 = "select co3marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  and co3marks >'$co3cap' ";

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
  $sqlcap4 = "select co4marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  and co4marks >'$co4cap' ";

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
  $sqlcap5 = "select co5marks from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  and co5marks >'$co5cap' ";

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
   $sqltresh = "select external from marks where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  and external >'$treshforexternal' ";

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
if($Co1count==0 and $noofstuy4==0){
  
}else{
 $calco1=($Co1count/$noofstuy4*100);
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
 

    
  if($Co2count ==0 and $noofstuy4==0){
  
  }else{
 $calco2=($Co2count/$noofstuy4*100);
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


  if($Co3count ==0 and $noofstuy4==0){
  
  }else{
 $calco3=($Co3count/$noofstuy4*100);
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

  if($Co4count ==0 and $noofstuy4==0){
  
  }else{

 $calco4=($Co4count/$noofstuy4*100);
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

  if($Co5count ==0 and $noofstuy4==0){
  
  }else{

 $calco5=($Co5count/$noofstuy4*100);
 if ($calco5>=0 and $calco5<60){
  $attainlevel5=0;
}elseif($calco5>=60 and $calco5<70){
  $attainlevel5=1;
}
elseif($calco5>=70 and $calco5<80){
  $attainlevel5=2;
}elseif($calco5>=80 and $calco5<=100){
    $attainleveltresh=3;
}
  }
  if($treshcount ==0 and $noofstuy4==0){
  
  }else{
$tresh=($treshforexternal/$noofstuy4*100);
if ($tresh>=0 and $tresh<60){
   $attainleveltresh=0;
}elseif($tresh>=60 and $tresh<70){
   $attainleveltresh=1;
}elseif($tresh>=70 and $tresh<80){
  $attainleveltresh=2;
}elseif($tresh>=80 and $tresh<=100){
  $attainleveltresh=3;
}else{
  $attainleveltresh=0;
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
$sqlpo1 = " SELECT * from po1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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
$sqlpo2 = " SELECT * from po2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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
$sqlpo3 = " SELECT * from po3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpo4 = " SELECT * from po4 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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
  $sqlpo5 = " SELECT * from po5 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpo6 = " SELECT * from po6 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpo7 = " SELECT * from po7 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpo8 = " SELECT * from po8 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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
  $sqlpo9 = " SELECT * from po9 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]' ";
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

  $sqlpo10 = " SELECT * from po10 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpo11 = " SELECT * from po11 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpo12 = " SELECT * from po12 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpso1 = " SELECT * from pso1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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
  $sqlpso2 = " SELECT * from pso2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

  $sqlpso3 = " SELECT * from pso3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearFourth' and subCode='$suby4[$i]'  ";
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

      $year4po1[$i]=$maxpo1;
      $year4po2[$i]=$maxpo2;
      $year4po3[$i]=$maxpo3;
      $year4po4[$i]=$maxpo4;
      $year4po5[$i]=$maxpo5;
      $year4po6[$i]=$maxpo6;
      $year4po7[$i]=$maxpo7;
      $year4po8[$i]=$maxpo8;
      $year4po9[$i]=$maxpo9;
      $year4po10[$i]=$maxpo10;
      $year4po11[$i]=$maxpo11;
      $year4po12[$i]=$maxpo12;
      $year4pso1[$i]=$maxpso1;
      $year4pso2[$i]=$maxpso2;
      $year4pso3[$i]=$maxpso3;
?>
<?php

}//for loop end for year4
?>
<?php
//completed Year 4 Data
?>






  

</div>


<center><h1 style="margin-top:30px";>Final Average PO's of All Year</h1></center>
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
<!--displaying year1 data -->
<?php 
$countpo1y1=0;
$countpo2y1=0;
$countpo3y1=0;
$countpo4y1=0;
$countpo5y1=0;
$countpo6y1=0;
$countpo7y1=0;
$countpo8y1=0;
$countpo9y1=0;
$countpo10y1=0;
$countpo11y1=0;
$countpo12y1=0;
$countpso1y1=0;
$countpso2y1=0;
$countpso3y1=0;
    for($i=0;$i<$noofsubInY1;$i++) {
        
    ?>
    <tr>
        <td><?php 
          $db = new mysqli('localhost', 'root', '', 'easynba') 
          or die("Error connecting to database!");
          $sql = " SELECT * from subjectentry where subCode='$suby1[$i]'  ";
          $data=mysqli_query($conn,$sql); 
          $result=mysqli_fetch_assoc($data);
          echo '<b>'.$result['subId']." - ".$result['subName']." - ".$suby1[$i].'</b>';
           
        ?></td>
        <td><?php printf("%.2f", $year1po1[$i]);
            $countpo1y1+=$year1po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po2[$i]); 
            $countpo2y1+=$year1po2[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po3[$i]); 
            $countpo3y1+=$year1po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po4[$i]); 
            $countpo4y1+=$year1po4[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po5[$i]); 
            $countpo5y1+=$year1po5[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po6[$i]); 
            $countpo6y1+=$year1po6[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po7[$i]); 
            $countpo7y1+=$year1po7[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po8[$i]); 
            $countpo8y1+=$year1po8[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po9[$i]); 
            $countpo9y1+=$year1po9[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po10[$i]); 
            $countpo10y1+=$year1po10[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po11[$i]); 
            $countpo11y1+=$year1po11[$i];
        ?></td>
        <td><?php printf("%.2f", $year1po12[$i]); 
            $countpo12y1+=$year1po12[$i];
        ?></td>
        <td><?php printf("%.2f", $year1pso1[$i]); 
            $countpso1y1+=$year1pso1[$i];
        ?></td>
        <td><?php printf("%.2f", $year1pso2[$i]); 
            $countpso2y1+=$year1pso2[$i];
        ?></td>
        <td><?php printf("%.2f", $year1pso3[$i]); 
            $countpso3y1+=$year1pso3[$i];
        ?></td>
    <?php
    }
 ?>
 </tr>
 
 <tr style="background-color:yellow";>
    <td><b>Average Of PO YEAR1</b></td>

    <!--calculation for po1-->
        <?php
   if($noofsubInY1==0){}else{
    $avgpo1y1=$countpo1y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo1y1);?>
    </td>

    <!--calculation for po2-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpo2y1=$countpo2y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo2y1);?></td>

    <!--calculation for po3-->
    <?php
 if($noofsubInY1==0){}else{
    $avgpo3y1=$countpo3y1/$noofsubInY1;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo3y1);?><br>
    </td>

    <!--calculation for po4-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpo4y1=$countpo4y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo4y1);?><br>
    </td>

    <!--calculation for po5-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpo5y1=$countpo5y1/$noofsubInY1;
  }
    ?>
    <td>
    <?php printf("%.2f", $avgpo5y1);?><br>
    </td>

    <!--calculation for po6-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpo6y1=$countpo6y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo6y1);?><br>
    </td>

    <!--calculation for po7-->
    <?php
 if($noofsubInY1==0){}else{
    $avgpo7y1=$countpo7y1/$noofsubInY1;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo7y1);?><br>
    </td>

    <!--calculation for po8-->
    <?php
 if($noofsubInY1==0){}else{
    $avgpo8y1=$countpo8y1/$noofsubInY1;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo8y1);?><br>
    </td>

    <!--calculation for po9-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpo9y1=$countpo9y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo9y1);?><br>
    </td>

    <!--calculation for po10-->
    <?php
 if($noofsubInY1==0){}else{
    $avgpo10y1=$countpo10y1/$noofsubInY1;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo10y1);?><br>
    </td>

    <!--calculation for po11-->
    <?php
 if($noofsubInY1==0){}else{
    $avgpo11y1=$countpo11y1/$noofsubInY1;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo11y1);?><br>
    </td>

    <!--calculation for po12-->
    <?php
 if($noofsubInY1==0){}else{
    $avgpo12y1=$countpo12y1/$noofsubInY1;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo12y1);?><br>
    </td>
    
    <!--calculation for pso1-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpso1y1=$countpso1y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso1y1);?><br>
    </td>

    <!--calculation for pso2-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpso2y1=$countpso2y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso2y1);?><br>
    </td>

    <!--calculation for pso3-->
    <?php
   if($noofsubInY1==0){}else{
    $avgpso3y1=$countpso3y1/$noofsubInY1;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso3y1);?><br>
    </td>
</tr>

<!--displaying year2 data -->
<?php 
$countpo1y2=0;
$countpo2y2=0;
$countpo3y2=0;
$countpo4y2=0;
$countpo5y2=0;
$countpo6y2=0;
$countpo7y2=0;
$countpo8y2=0;
$countpo9y2=0;
$countpo10y2=0;
$countpo11y2=0;
$countpo12y2=0;
$countpso1y2=0;
$countpso2y2=0;
$countpso3y2=0;
    for($i=0;$i<$noofsubInY2;$i++) {
        
    ?>
    <tr>
        <td><?php 
        $db = new mysqli('localhost', 'root', '', 'easynba') 
        or die("Error connecting to database!");
        $sql = " SELECT * from subjectentry where subCode='$suby2[$i]'  ";
        $data=mysqli_query($conn,$sql); 
        $result=mysqli_fetch_assoc($data);
        echo '<b>'.$result['subId']." - ".$result['subName']." - ".$suby2[$i].'</b>';
        ?></td>
        <td><?php printf("%.2f", $year2po1[$i]);
            $countpo1y2+=$year2po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po2[$i]); 
            $countpo2y2+=$year2po2[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po3[$i]); 
            $countpo3y2+=$year2po3[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po4[$i]); 
            $countpo4y2+=$year2po4[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po5[$i]); 
            $countpo5y2+=$year2po5[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po6[$i]); 
            $countpo6y2+=$year2po6[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po7[$i]); 
            $countpo7y2+=$year2po7[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po8[$i]); 
            $countpo8y2+=$year2po8[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po9[$i]); 
            $countpo9y2+=$year2po9[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po10[$i]); 
            $countpo10y2+=$year2po10[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po11[$i]); 
            $countpo11y2+=$year2po11[$i];
        ?></td>
        <td><?php printf("%.2f", $year2po12[$i]); 
            $countpo12y2+=$year2po12[$i];
        ?></td>
        <td><?php printf("%.2f", $year2pso1[$i]); 
            $countpso1y2+=$year2pso1[$i];
        ?></td>
        <td><?php printf("%.2f", $year2pso2[$i]); 
            $countpso2y2+=$year2pso2[$i];
        ?></td>
        <td><?php printf("%.2f", $year2pso3[$i]); 
            $countpso3y2+=$year2pso3[$i];
        ?></td>
    <?php
    }
 ?>
 </tr>


 <tr style="background-color:yellow";>
 <td><b>Average Of PO YEAR2</b></td>

    <!--calculation for po1-->
        <?php
   if($noofsubInY2==0){}else{
    $avgpo1y2=$countpo1y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo1y2);?>
    </td>

    <!--calculation for po2-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpo2y2=$countpo2y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo2y2);?></td>

    <!--calculation for po3-->
    <?php
 if($noofsubInY2==0){}else{
    $avgpo3y2=$countpo3y2/$noofsubInY2;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo3y2);?><br>
    </td>

    <!--calculation for po4-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpo4y2=$countpo4y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo4y2);?><br>
    </td>

    <!--calculation for po5-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpo5y2=$countpo5y2/$noofsubInY2;
  }
    ?>
    <td>
    <?php printf("%.2f", $avgpo5y2);?><br>
    </td>

    <!--calculation for po6-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpo6y2=$countpo6y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo6y2);?><br>
    </td>

    <!--calculation for po7-->
    <?php
 if($noofsubInY2==0){}else{
    $avgpo7y2=$countpo7y2/$noofsubInY2;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo7y2);?><br>
    </td>

    <!--calculation for po8-->
    <?php
 if($noofsubInY2==0){}else{
    $avgpo8y2=$countpo8y2/$noofsubInY2;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo8y2);?><br>
    </td>

    <!--calculation for po9-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpo9y2=$countpo9y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo9y2);?><br>
    </td>

    <!--calculation for po10-->
    <?php
 if($noofsubInY2==0){}else{
    $avgpo10y2=$countpo10y2/$noofsubInY2;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo10y2);?><br>
    </td>

    <!--calculation for po11-->
    <?php
 if($noofsubInY2==0){}else{
    $avgpo11y2=$countpo11y2/$noofsubInY2;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo11y2);?><br>
    </td>

    <!--calculation for po12-->
    <?php
 if($noofsubInY2==0){}else{
    $avgpo12y2=$countpo12y2/$noofsubInY2;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo12y2);?><br>
    </td>
    
    <!--calculation for pso1-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpso1y2=$countpso1y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso1y2);?><br>
    </td>

    <!--calculation for pso2-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpso2y2=$countpso2y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso2y2);?><br>
    </td>

    <!--calculation for pso3-->
    <?php
   if($noofsubInY2==0){}else{
    $avgpso3y2=$countpso3y2/$noofsubInY2;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso3y2);?><br>
    </td>
</tr>



<!--displaying year3 data -->
<?php 
$countpo1y3=0;
$countpo2y3=0;
$countpo3y3=0;
$countpo4y3=0;
$countpo5y3=0;
$countpo6y3=0;
$countpo7y3=0;
$countpo8y3=0;
$countpo9y3=0;
$countpo10y3=0;
$countpo11y3=0;
$countpo12y3=0;
$countpso1y3=0;
$countpso2y3=0;
$countpso3y3=0;
    for($i=0;$i<$noofsubInY3;$i++) {
        
    ?>
    <tr>
        <td><?php 
        $db = new mysqli('localhost', 'root', '', 'easynba') 
        or die("Error connecting to database!");
        $sql = " SELECT * from subjectentry where subCode='$suby3[$i]'  ";
        $data=mysqli_query($conn,$sql); 
        $result=mysqli_fetch_assoc($data);
        echo '<b>'.$result['subId']." - ".$result['subName']." - ".$suby3[$i].'</b>';
         ?></td>
        <td><?php printf("%.2f", $year3po1[$i]);
            $countpo1y3+=$year3po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po2[$i]); 
            $countpo2y3+=$year3po2[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po3[$i]); 
            $countpo3y3+=$year3po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po4[$i]); 
            $countpo4y3+=$year3po4[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po5[$i]); 
            $countpo5y3+=$year3po5[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po6[$i]); 
            $countpo6y3+=$year3po6[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po7[$i]); 
            $countpo7y3+=$year3po7[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po8[$i]); 
            $countpo8y3+=$year3po8[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po9[$i]); 
            $countpo9y3+=$year3po9[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po10[$i]); 
            $countpo10y3+=$year3po10[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po11[$i]); 
            $countpo11y3+=$year3po11[$i];
        ?></td>
        <td><?php printf("%.2f", $year3po12[$i]); 
            $countpo12y3+=$year3po12[$i];
        ?></td>
        <td><?php printf("%.2f", $year3pso1[$i]); 
            $countpso1y3+=$year3pso1[$i];
        ?></td>
        <td><?php printf("%.2f", $year3pso2[$i]); 
            $countpso2y3+=$year3pso2[$i];
        ?></td>
        <td><?php printf("%.2f", $year3pso3[$i]); 
            $countpso3y3+=$year3pso3[$i];
        ?></td>
    <?php
    }
 ?>
 </tr>


 <tr style="background-color:yellow";>
 <td><b>Average Of PO YEAR 3</b></td>

    <!--calculation for po1-->
        <?php
   if($noofsubInY3==0){}else{
    $avgpo1y3=$countpo1y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo1y3);?>
    </td>

    <!--calculation for po2-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpo2y3=$countpo2y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo2y3);?></td>

    <!--calculation for po3-->
    <?php
 if($noofsubInY3==0){}else{
    $avgpo3y3=$countpo3y3/$noofsubInY3;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo3y3);?><br>
    </td>

    <!--calculation for po4-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpo4y3=$countpo4y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo4y3);?><br>
    </td>

    <!--calculation for po5-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpo5y3=$countpo5y3/$noofsubInY3;
  }
    ?>
    <td>
    <?php printf("%.2f", $avgpo5y3);?><br>
    </td>

    <!--calculation for po6-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpo6y3=$countpo6y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo6y3);?><br>
    </td>

    <!--calculation for po7-->
    <?php
 if($noofsubInY3==0){}else{
    $avgpo7y3=$countpo7y3/$noofsubInY3;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo7y3);?><br>
    </td>

    <!--calculation for po8-->
    <?php
 if($noofsubInY3==0){}else{
    $avgpo8y3=$countpo8y3/$noofsubInY3;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo8y3);?><br>
    </td>

    <!--calculation for po9-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpo9y3=$countpo9y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo9y3);?><br>
    </td>

    <!--calculation for po10-->
    <?php
 if($noofsubInY3==0){}else{
    $avgpo10y3=$countpo10y3/$noofsubInY3;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo10y3);?><br>
    </td>

    <!--calculation for po11-->
    <?php
 if($noofsubInY3==0){}else{
    $avgpo11y3=$countpo11y3/$noofsubInY3;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo11y3);?><br>
    </td>

    <!--calculation for po12-->
    <?php
 if($noofsubInY3==0){}else{
    $avgpo12y3=$countpo12y3/$noofsubInY3;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo12y3);?><br>
    </td>
    
    <!--calculation for pso1-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpso1y3=$countpso1y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso1y3);?><br>
    </td>

    <!--calculation for pso2-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpso2y3=$countpso2y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso2y3);?><br>
    </td>

    <!--calculation for pso3-->
    <?php
   if($noofsubInY3==0){}else{
    $avgpso3y3=$countpso3y3/$noofsubInY3;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso3y3);?><br>
    </td>
</tr>

<!--displaying year4 data -->
<?php 
$countpo1y4=0;
$countpo2y4=0;
$countpo3y4=0;
$countpo4y4=0;
$countpo5y4=0;
$countpo6y4=0;
$countpo7y4=0;
$countpo8y4=0;
$countpo9y4=0;
$countpo10y4=0;
$countpo11y4=0;
$countpo12y4=0;
$countpso1y4=0;
$countpso2y4=0;
$countpso3y4=0;
    for($i=0;$i<$noofsubInY4;$i++) {
        
    ?>
    <tr>
        <td><?php 
        $db = new mysqli('localhost', 'root', '', 'easynba') 
        or die("Error connecting to database!");
        $sql = " SELECT * from subjectentry where subCode='$suby4[$i]'  ";
        $data=mysqli_query($conn,$sql); 
        $result=mysqli_fetch_assoc($data);
        echo '<b>'.$result['subId']." - ".$result['subName']." - ".$suby4[$i].'</b>';       
        ?></td>
        <td><?php printf("%.2f", $year4po1[$i]);
            $countpo1y4+=$year4po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po2[$i]); 
            $countpo2y4+=$year4po2[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po3[$i]); 
            $countpo3y4+=$year4po1[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po4[$i]); 
            $countpo4y4+=$year4po4[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po5[$i]); 
            $countpo5y4+=$year4po5[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po6[$i]); 
            $countpo6y4+=$year4po6[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po7[$i]); 
            $countpo7y4+=$year4po7[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po8[$i]); 
            $countpo8y4+=$year4po8[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po9[$i]); 
            $countpo9y4+=$year4po9[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po10[$i]); 
            $countpo10y4+=$year4po10[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po11[$i]); 
            $countpo11y4+=$year4po11[$i];
        ?></td>
        <td><?php printf("%.2f", $year4po12[$i]); 
            $countpo12y4+=$year4po12[$i];
        ?></td>
        <td><?php printf("%.2f", $year4pso1[$i]); 
            $countpso1y4+=$year4pso1[$i];
        ?></td>
        <td><?php printf("%.2f", $year4pso2[$i]); 
            $countpso2y4+=$year4pso2[$i];
        ?></td>
        <td><?php printf("%.2f", $year4pso3[$i]); 
            $countpso3y4+=$year4pso3[$i];
        ?></td>
    <?php
    }
 ?>
 </tr>
 
 <tr style="background-color:yellow";>
 <td><b>Average Of PO YEAR4</b></td>

    <!--calculation for po1-->
        <?php
   if($noofsubInY4==0){}else{
    $avgpo1y4=$countpo1y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo1y4);?>
    </td>

    <!--calculation for po2-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpo2y4=$countpo2y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo2y4);?></td>

    <!--calculation for po3-->
    <?php
 if($noofsubInY4==0){}else{
    $avgpo3y4=$countpo3y4/$noofsubInY4;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo3y4);?><br>
    </td>

    <!--calculation for po4-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpo4y4=$countpo4y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo4y4);?><br>
    </td>

    <!--calculation for po5-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpo5y4=$countpo5y4/$noofsubInY4;
  }
    ?>
    <td>
    <?php printf("%.2f", $avgpo5y4);?><br>
    </td>

    <!--calculation for po6-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpo6y4=$countpo6y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo6y4);?><br>
    </td>

    <!--calculation for po7-->
    <?php
 if($noofsubInY4==0){}else{
    $avgpo7y4=$countpo7y4/$noofsubInY4;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo7y4);?><br>
    </td>

    <!--calculation for po8-->
    <?php
 if($noofsubInY4==0){}else{
    $avgpo8y4=$countpo8y4/$noofsubInY4;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo8y4);?><br>
    </td>

    <!--calculation for po9-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpo9y4=$countpo9y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpo9y4);?><br>
    </td>

    <!--calculation for po10-->
    <?php
 if($noofsubInY4==0){}else{
    $avgpo10y4=$countpo10y4/$noofsubInY4;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo10y4);?><br>
    </td>

    <!--calculation for po11-->
    <?php
 if($noofsubInY4==0){}else{
    $avgpo11y4=$countpo11y4/$noofsubInY4;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo11y4);?><br>
    </td>

    <!--calculation for po12-->
    <?php
 if($noofsubInY4==0){}else{
    $avgpo12y4=$countpo12y4/$noofsubInY4;
 }
    ?>
    <td>
    <?php printf("%.2f", $avgpo12y4);?><br>
    </td>
    
    <!--calculation for pso1-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpso1y4=$countpso1y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso1y4);?><br>
    </td>

    <!--calculation for pso2-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpso2y4=$countpso2y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso2y4);?><br>
    </td>

    <!--calculation for pso3-->
    <?php
   if($noofsubInY4==0){}else{
    $avgpso3y4=$countpso3y4/$noofsubInY4;
   }
    ?>
    <td>
    <?php printf("%.2f", $avgpso3y4);?><br>
    </td>
</tr>
<tr style="background-color:blue";>
<td><b>All year Avg PO's</b></td>
<?php
$avgpo1All=($avgpo1y1+$avgpo1y2+$avgpo1y3+$avgpo1y4)/4;
$avgpo2All=($avgpo2y1+$avgpo2y2+$avgpo2y3+$avgpo2y4)/4;
$avgpo3All=($avgpo3y1+$avgpo3y2+$avgpo3y3+$avgpo3y4)/4;
$avgpo4All=($avgpo4y1+$avgpo4y2+$avgpo4y3+$avgpo4y4)/4;
$avgpo5All=($avgpo5y1+$avgpo5y2+$avgpo5y3+$avgpo5y4)/4;
$avgpo6All=($avgpo6y1+$avgpo6y2+$avgpo6y3+$avgpo6y4)/4;
$avgpo7All=($avgpo7y1+$avgpo7y2+$avgpo7y3+$avgpo7y4)/4;
$avgpo8All=($avgpo8y1+$avgpo8y2+$avgpo8y3+$avgpo8y4)/4;
$avgpo9All=($avgpo9y1+$avgpo9y2+$avgpo9y3+$avgpo9y4)/4;
$avgpo10All=($avgpo10y1+$avgpo10y2+$avgpo10y3+$avgpo10y4)/4;
$avgpo11All=($avgpo11y1+$avgpo11y2+$avgpo11y3+$avgpo11y4)/4;
$avgpo12All=($avgpo12y1+$avgpo12y2+$avgpo12y3+$avgpo12y4)/4;
$avgpso1All=($avgpso1y1+$avgpso1y2+$avgpso1y3+$avgpso1y4)/4;
$avgpso2All=($avgpso2y1+$avgpso2y2+$avgpso2y3+$avgpso2y4)/4;
$avgpso2All=($avgpso3y1+$avgpso3y2+$avgpso3y3+$avgpso3y4)/4;

?>
    <td><?php printf("%.2f", $avgpo1All);?></td>
    <td><?php printf("%.2f", $avgpo2All);?></td>
    <td><?php printf("%.2f", $avgpo3All);?></td>
    <td><?php printf("%.2f", $avgpo4All);?></td>
    <td><?php printf("%.2f", $avgpo5All);?></td>
    <td><?php printf("%.2f", $avgpo6All);?></td>
    <td><?php printf("%.2f", $avgpo7All);?></td>
    <td><?php printf("%.2f", $avgpo8All);?></td>
    <td><?php printf("%.2f", $avgpo9All);?></td>
    <td><?php printf("%.2f", $avgpo10All);?></td>
    <td><?php printf("%.2f", $avgpo11All);?></td>
    <td><?php printf("%.2f", $avgpo12All);?></td>
    <td><?php printf("%.2f", $avgpso1All);?></td>
    <td><?php printf("%.2f", $avgpso2All);?></td>
    <td><?php printf("%.2f", $avgpso3All);?></td>
  </tr>
</table>





<?php
      }//main if condition colse
   ?>

   <!--Bar Graph-->

<?php
 
 $dataPoints = array(
     array( "y"=> $avgpo1All),
     array( "y"=> $avgpo2All),
     array( "y"=> $avgpo3All),
     array( "y"=> $avgpo4All),
     array( "y"=> $avgpo5All),
     array( "y"=> $avgpo6All),
     array( "y"=> $avgpo7All),
     array( "y"=> $avgpo8All),
     array( "y"=> $avgpo9All),
     array( "y"=> $avgpo10All),
     array( "y"=> $avgpo11All),
     array( "y"=> $avgpo12All),
     array( "y"=> $avgpso1All),
     array( "y"=> $avgpso2All),
     array( "y"=> $avgpso3All)
 );
     
 ?>


<script type="text/javascript">
var users = <?php echo json_encode($dataPoints); ?>;
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<h3><b>ATTAINMENT FOR BATCH</b></h3>
<canvas id="myChart" style="width:100%;max-width:800px"></canvas>

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

<!--line Graph-->

<script type="text/javascript">
var users = <?php echo json_encode($dataPoints); ?>;
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<canvas id="myChart1" style="width:100%;max-width:800px"></canvas>


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
      text: "batchwise with line graph",
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
    <td><?php printf("%.2f", $avgpo1All);?></td>
    <td><?php printf("%.2f", $avgpo2All);?></td>
    <td><?php printf("%.2f", $avgpo3All);?></td>
    <td><?php printf("%.2f", $avgpo4All);?></td>
    <td><?php printf("%.2f", $avgpo5All);?></td>
    <td><?php printf("%.2f", $avgpo6All);?></td>
    <td><?php printf("%.2f", $avgpo7All);?></td>
    <td><?php printf("%.2f", $avgpo8All);?></td>
    <td><?php printf("%.2f", $avgpo9All);?></td>
    <td><?php printf("%.2f", $avgpo10All);?></td>
    <td><?php printf("%.2f", $avgpo11All);?></td>
    <td><?php printf("%.2f", $avgpo12All);?></td>
    <td><?php printf("%.2f", $avgpso1All);?></td>
    <td><?php printf("%.2f", $avgpso2All);?></td>
    <td><?php printf("%.2f", $avgpso3All);?></td>
</tr>
<tr>
  <td>Gap Found</td>
    <td><?php printf("%.2f", 3-$avgpo1All);?></td>
    <td><?php printf("%.2f", 3-$avgpo2All);?></td>
    <td><?php printf("%.2f", 3-$avgpo3All);?></td>
    <td><?php printf("%.2f", 3-$avgpo4All);?></td>
    <td><?php printf("%.2f", 3-$avgpo5All);?></td>
    <td><?php printf("%.2f", 3-$avgpo6All);?></td>
    <td><?php printf("%.2f", 3-$avgpo7All);?></td>
    <td><?php printf("%.2f", 3-$avgpo8All);?></td>
    <td><?php printf("%.2f", 3-$avgpo9All);?></td>
    <td><?php printf("%.2f", 3-$avgpo10All);?></td>
    <td><?php printf("%.2f", 3-$avgpo11All);?></td>
    <td><?php printf("%.2f", 3-$avgpo12All);?></td>
    <td><?php printf("%.2f", 3-$avgpso1All);?></td>
    <td><?php printf("%.2f", 3-$avgpso2All);?></td>
    <td><?php printf("%.2f", 3-$avgpso3All);?></td>

</tr>

</table>
</center>
<?php
//gap calculation
$gappo1=((3-$avgpo1All)/3)*100;
$gappo2=((3-$avgpo2All)/3)*100;
$gappo3=((3-$avgpo3All)/3)*100;
$gappo4=((3-$avgpo4All)/3)*100;
$gappo5=((3-$avgpo5All)/3)*100;
$gappo6=((3-$avgpo6All)/3)*100;
$gappo7=((3-$avgpo7All)/3)*100;
$gappo8=((3-$avgpo8All)/3)*100;
$gappo9=((3-$avgpo9All)/3)*100;
$gappo10=((3-$avgpo10All)/3)*100;
$gappo11=((3-$avgpo11All)/3)*100;
$gappo12=((3-$avgpo12All)/3)*100;
$gappso1=((3-$avgpso1All)/3)*100;
$gappso2=((3-$avgpso2All)/3)*100;
$gappso3=((3-$avgpso3All)/3)*100;
?>

<!--gap found table-->
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
	array("label"=> "PO1", "y"=> array(( (3-$avgpo1All)/3)*100, 100-$gappo1)), 
  array("label"=> "PO2", "y"=> array(( (3-$avgpo2All)/3)*100, 100-$gappo2)), 
  array("label"=> "PO3", "y"=> array(( (3-$avgpo3All)/3)*100, 100-$gappo3)), 
  array("label"=> "PO4", "y"=> array(( (3-$avgpo4All)/3)*100, 100-$gappo4)), 
  array("label"=> "PO5", "y"=> array(( (3-$avgpo5All)/3)*100, 100-$gappo5)), 
  array("label"=> "PO6", "y"=> array(( (3-$avgpo6All)/3)*100, 100-$gappo6)), 
  array("label"=> "PO7", "y"=> array(( (3-$avgpo7All)/3)*100, 100-$gappo7)), 
  array("label"=> "PO8", "y"=> array(( (3-$avgpo8All)/3)*100, 100-$gappo8)), 
  array("label"=> "PO9", "y"=> array(( (3-$avgpo9All)/3)*100, 100-$gappo9)), 
  array("label"=> "PO10", "y"=> array(( (3-$avgpo10All)/3)*100, 100-$gappo10)), 
  array("label"=> "PO11", "y"=> array(( (3-$avgpo11All)/3)*100, 100-$gappo11)), 
  array("label"=> "PO12", "y"=> array(( (3-$avgpo12All)/3)*100, 100-$gappo12)),  
  array("label"=> "PSO1", "y"=> array(((3-$avgpso1All)/3)*100, 100-$gappso1)),
  array("label"=> "PSO2", "y"=> array(((3-$avgpso2All)/3)*100, 100-$gappso2)),
	array("label"=> "PSO3", "y"=> array(((3-$avgpso3All)/3)*100, 100-$gappso3))
);
 
?>
<br><br>
<center>
  <h3><b>Graph For Gap Found</b></h3>
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




</body>
</html>