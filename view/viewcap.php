
<html>
<head>
    <title>View Cap Value</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/subAttain.css">
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
    <a href="../dataentery/copo/capvalueentery.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
   
  </div>
  </div>


  
<!--html-->

<div class="container">
    <div class="title">View The CAP Value of Subject </div>
    <div class="content">

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

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
<!--end-->




<table>
    <tr>

        <th align = "center">SCHEME</th>
        <th align = "center">BatchId</th>
        <th align = "center">YearId</th>
        <th align = "center">SubCode</th>
        <th align = "center">CO1Marks</th>
        <th align = "center">CO2Marks</th>
        <th align = "center">CO3Marks</th>
        <th align = "center">CO4Marks</th>
        <th align = "center">CO5Marks</th>
        <th align = "center">TreshForExternal</th>
        <th align = "center">UPDATE</th>
        <th align = "center">DELETE</th>
      
       
        
    </tr>

     <?php 
    $db = new mysqli('localhost', 'root', '', 'easynba') 
      or die("Error connecting to database!");

        include('../connection/config.php');



    if(isset($_POST['submit'])){

        $schemaId = $_POST['schemaId'];
        $bid =$_POST['bid'];
        $yearId =$_POST['yearId'];
        $subCode =$_POST['subCode']; 

        $sql = " SELECT * from cap where schemaId='$schemaId' and bid='$bid' and yearId='$yearId' and subCode='$subCode'  ";
        $results = $db->query($sql);

      

        $i = 1;
        while($row = $results->fetch_assoc()) {
            ?>
    
            <tr>
            
            <td><?php echo $row['schemaId']; ?></td>
            <td><?php echo $row['bid']; ?></td>
            <td><?php echo $row['yearId']; ?></td>
            <td><?php echo $row['subCode']; ?></td>
            <td><?php echo $row['co1cap']; ?></td>
            <td><?php echo $row['co2cap']; ?></td>
            <td><?php echo $row['co3cap']; ?></td>
            <td><?php echo $row['co4cap']; ?></td>
            <td><?php echo $row['co5cap']; ?></td>
            <td><?php echo $row['treshforexternal']; ?></td>
                <?php echo "
            <td><button> <a href='../update/updatecap.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deletecap.php? id2=$row[schemaId]& id3=$row[bid] & id4=$row[yearId] & id5=$row[subCode]' onClick=\"return confirm('Are you sure you want to delete?')\">Delete
         </a></button></td>
            ";?>
                  
            </tr>
            
            <?php
            $i++;
        }
    }
    ?>
  
    </table>



</body>
</html>
