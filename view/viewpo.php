
<html>
<head>
    <title>View Employee </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/subAttain.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body{
  //height: 100vh;
  //display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: powderblue;
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
    <a href="../dataentery/copo/poentry.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>
  </div>




<!--html-->

<div class="container">
    <div class="title">Enter The PO of Subject</div>
    <div class="content">

      <form action="#" method="POST">

        <div class="user-details">
        <?php

        include('../connection/config.php');

        $query="select schemaId from schema_s";
        $result1 = mysqli_query($conn,$query);
        $options="";
        while($row=mysqli_fetch_array($result1)){
        $options=$options."<option>$row[0]</option>";
        }

      ?>
          <div class="input-box">
            <span class="details">Select SchemeID</span>
            <select name="schemaId">
			      <option value="">Select your option</option>
                <?php echo $options;?>
			      </select>
          </div>

          <?php

include('../connection/config.php');

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

include('../connection/config.php');

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
         

          <?php

include('../connection/config.php');

$query="select subCode from subjectentry order by subId";
$result1 = mysqli_query($conn,$query);
$options="";
while($row=mysqli_fetch_array($result1)){
  $options=$options."<option>$row[0]</option>";
}

?>
         
    <div class="input-box">
            <span class="details">Select SubCode</span>
           <select name="subCode">
          <option value="">Select your option</option>
  <?php echo $options;?>
  </select>
          </div>
         
        </div>



        <center>
        <div class="button">
          <input type="submit" value="Submit" class="btn"  name="submit">
        </div>
      </center>
      </form>

      </div>
  </div>


<table>
    <tr>

    <th align = "center">PO's</th>
        <th align = "center">SCHEME</th>
        <th align = "center">BatchId</th>
        <th align = "center">YearId</th>
        <th align = "center">SubCode</th>
        <th align = "center">CO1</th>
        <th align = "center">CO2</th>
        <th align = "center">CO3</th>
        <th align = "center">CO4</th>
        <th align = "center">CO5</th>
        <th align = "center">UPDATE</th>
        <th align = "center">DELETE</th>

      
       
        
    </tr>

     <?php 
    $db = new mysqli('localhost', 'root', '', 'easynba') 
      or die("Error connecting to database!");
        #include '../connection/config.php';

        include('../connection/config.php');



    if(isset($_POST['submit'])){

        $schemaId = $_POST['schemaId'];
        $bid =$_POST['bid'];
        $yearId =$_POST['yearId'];
        $subCode =$_POST['subCode']; 
        //retriving po1 data
        $sql1 = " SELECT * from po1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result1 = $db->query($sql1);
    
        
        while($row = $result1->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO1"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po1']; ?></td>
                <td><?php echo $row['co2po1']; ?></td>
                <td><?php echo $row['co3po1']; ?></td>
                <td><?php echo $row['co4po1']; ?></td>
                <td><?php echo $row['co5po1']; ?></td>    
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]' onClick=\"return confirm('Are you sure you want to delete?')\">Delete
         </a></button></td>
            ";?>              
            </tr>
            
            <?php
            
        }
        //retriving po2 data
        $sql2 = " SELECT * from po2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result2 = $db->query($sql2);
    
        
        while($row = $result2->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO2"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po2']; ?></td>
                <td><?php echo $row['co2po2']; ?></td>
                <td><?php echo $row['co3po2']; ?></td>
                <td><?php echo $row['co4po2']; ?></td>
                <td><?php echo $row['co5po2']; ?></td>  
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                      
            </tr>
            
            <?php
            
        }

        //retriving po3 data
        $sql3 = " SELECT * from po3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result3 = $db->query($sql3);
    
        
        while($row = $result3->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO3"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po3']; ?></td>
                <td><?php echo $row['co2po3']; ?></td>
                <td><?php echo $row['co3po3']; ?></td>
                <td><?php echo $row['co4po3']; ?></td>
                <td><?php echo $row['co5po3']; ?></td>   
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                     
            </tr>
            
            <?php
            
        }

        //retriving po4 data
        $sql4 = " SELECT * from po4 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result4 = $db->query($sql4);
    
        
        while($row = $result4->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO4"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po4']; ?></td>
                <td><?php echo $row['co2po4']; ?></td>
                <td><?php echo $row['co3po4']; ?></td>
                <td><?php echo $row['co4po4']; ?></td>
                <td><?php echo $row['co5po4']; ?></td> 
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                       
            </tr>
            
            <?php
            
        }
        //retriving po5 data
        $sql5 = " SELECT * from po5 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result5 = $db->query($sql5);
    
        
        while($row = $result5->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO5"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po5']; ?></td>
                <td><?php echo $row['co2po5']; ?></td>
                <td><?php echo $row['co3po5']; ?></td>
                <td><?php echo $row['co4po5']; ?></td>
                <td><?php echo $row['co5po5']; ?></td> 
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                       
            </tr>
            
            <?php
            
        }

        //retriving po6 data
        $sql6 = " SELECT * from po6 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result6 = $db->query($sql6);
    
        
        while($row = $result6->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO6"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po6']; ?></td>
                <td><?php echo $row['co2po6']; ?></td>
                <td><?php echo $row['co3po6']; ?></td>
                <td><?php echo $row['co4po6']; ?></td>
                <td><?php echo $row['co5po6']; ?></td>  
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                      
            </tr>
            
            <?php
            
        }

        //retriving po7 data
        $sql7 = " SELECT * from po7 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result7 = $db->query($sql7);
    
        
        while($row = $result7->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO7"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po7']; ?></td>
                <td><?php echo $row['co2po7']; ?></td>
                <td><?php echo $row['co3po7']; ?></td>
                <td><?php echo $row['co4po7']; ?></td>
                <td><?php echo $row['co5po7']; ?></td>  
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                      
            </tr>
            
            <?php
            
        }

        //retriving po8 data
        $sql8 = " SELECT * from po8 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result8 = $db->query($sql8);
    
        
        while($row = $result8->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO8"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po8']; ?></td>
                <td><?php echo $row['co2po8']; ?></td>
                <td><?php echo $row['co3po8']; ?></td>
                <td><?php echo $row['co4po8']; ?></td>
                <td><?php echo $row['co5po8']; ?></td>  
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                      
            </tr>
            
            <?php
            
        }
        //retriving po9 data
        $sql9 = " SELECT * from po9 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result9 = $db->query($sql9);
    
        
        while($row = $result9->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO9"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po9']; ?></td>
                <td><?php echo $row['co2po9']; ?></td>
                <td><?php echo $row['co3po9']; ?></td>
                <td><?php echo $row['co4po9']; ?></td>
                <td><?php echo $row['co5po9']; ?></td>  
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                      
            </tr>
            
            <?php
            
        }
        //retriving po10 data
        $sql10 = " SELECT * from po10 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result10 = $db->query($sql10);
    
        
        while($row = $result10->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO10"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po10']; ?></td>
                <td><?php echo $row['co2po10']; ?></td>
                <td><?php echo $row['co3po10']; ?></td>
                <td><?php echo $row['co4po10']; ?></td>
                <td><?php echo $row['co5po10']; ?></td>   
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                     
            </tr>
            
            <?php
            
        }
        //retriving po11 data
        $sql11 = " SELECT * from po11 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result11 = $db->query($sql11);
    
        
        while($row = $result11->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO11"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po11']; ?></td>
                <td><?php echo $row['co2po11']; ?></td>
                <td><?php echo $row['co3po11']; ?></td>
                <td><?php echo $row['co4po11']; ?></td>
                <td><?php echo $row['co5po11']; ?></td> 
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                       
            </tr>
            
            <?php
            
        }

        //retriving po12 data
        $sql12 = " SELECT * from po12 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result12 = $db->query($sql12);
    
        
        while($row = $result12->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PO12"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1po12']; ?></td>
                <td><?php echo $row['co2po12']; ?></td>
                <td><?php echo $row['co3po12']; ?></td>
                <td><?php echo $row['co4po12']; ?></td>
                <td><?php echo $row['co5po12']; ?></td>   
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                     
            </tr>
            
            <?php
            
        }
        //retriving pso1 data
        $sql13 = " SELECT * from pso1 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result13 = $db->query($sql13);
    
        
        while($row = $result13->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PSO1"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1pso1']; ?></td>
                <td><?php echo $row['co2pso1']; ?></td>
                <td><?php echo $row['co3pso1']; ?></td>
                <td><?php echo $row['co4pso1']; ?></td>
                <td><?php echo $row['co5pso1']; ?></td>   
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                     
            </tr>
            
            <?php
            
        }
         //retriving pso2 data
         $sql14 = " SELECT * from pso2 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

         $result14 = $db->query($sql14);
     
         
         while($row = $result14->fetch_assoc()) {
             ?>
     
             <tr>
             <td><?php echo "PSO2"; ?></td>
                 <td><?php echo $row['schemaId']; ?></td>
                 <td><?php echo $row['bid']; ?></td>
                 <td><?php echo $row['yearId']; ?></td>
                 <td><?php echo $row['subCode']; ?></td>
                 <td><?php echo $row['co1pso2']; ?></td>
                 <td><?php echo $row['co2pso2']; ?></td>
                 <td><?php echo $row['co3pso2']; ?></td>
                 <td><?php echo $row['co4pso2']; ?></td>
                 <td><?php echo $row['co5pso2']; ?></td> 
                 <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                       
             </tr>
             
             <?php
             
         }

          //retriving pso3 data
        $sql15 = " SELECT * from pso3 where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";

        $result15 = $db->query($sql15);
    
        
        while($row = $result15->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo "PSO3"; ?></td>
                <td><?php echo $row['schemaId']; ?></td>
                <td><?php echo $row['bid']; ?></td>
                <td><?php echo $row['yearId']; ?></td>
                <td><?php echo $row['subCode']; ?></td>
                <td><?php echo $row['co1pso3']; ?></td>
                <td><?php echo $row['co2pso3']; ?></td>
                <td><?php echo $row['co3pso3']; ?></td>
                <td><?php echo $row['co4pso3']; ?></td>
                <td><?php echo $row['co5pso3']; ?></td>   
                <?php echo "
            <td><button> <a href='../update/updatepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletepo.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Delete
         </a></button></td>
            ";?>                     
            </tr>
            
            <?php
            
        }
    }
    ?>
</table>
</center>

</body>
</html>