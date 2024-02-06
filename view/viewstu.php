
<html>
<head>
    <title>View Cap Value</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/viewstu.css">
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
    <a href="../dataentery/addstu.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
   
  </div>
  </div>


  
<!--html-->

<div class="container">
    <div class="title">View The Student </div>
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
			      <option value="" >Select your option</option>
            
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
      <option value="" >Select your option</option>
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
      <th align = "center">SlNo</th>
        <th align = "center">SCHEME</th>
        <th align = "center">USN</th>
        <th align = "center">UPDATE</th>
        <th align = "center">DELETE</th>
      
       
        
    </tr>

     <?php 
    $db = new mysqli('localhost', 'root', '', 'easynba') 
      or die("Error connecting to database!");

        include('../connection/config.php');



    if(isset($_POST['submit'])){

        $schemaId = $_POST['schemaId'];
        $bid = $_POST['bid']; 
       

        $sql = " SELECT distinct(usn),schemaId from marks where schemaId='$schemaId' and bid='$bid'  ";
        $results = $db->query($sql);

      

        $i = 1;
        while($row = $results->fetch_assoc()) {
            ?>
    
            <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['schemaId']; ?></td>
            <td><?php echo $row['usn']; ?></td>
            <?php echo "
            <td><button> <a href='../update/updateStu.php?id=$row[usn]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deleteStu.php?id=$row[usn]' onClick=\"return confirm('Are you sure you want to delete?')\">Delete
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
