
<html>
<head>
    <title>View Employee </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  width: 50%;
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
    <a href="../dataentery/yearentry.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>
  </div>

<center>
    <h1><b>YEAR LIST</b></h1>
<table>
    <tr>

        <th align = "center">Sl No</th>  
        <th align = "center">Year</th>
        <th align = "center">UPDATE</th>
        <th align = "center">DELETE</th>
        
    </tr>
    <?php 
    $db = new mysqli('localhost', 'root', '', 'easynba') 
      or die("Error connecting to database!");
        #include '../connection/config.php';

    $sql = "SELECT * from yearentery ";

    $results = $db->query($sql);

    $i = 1;
    while($row = $results->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $i; ?></td>
           
            <td><?php echo $row['yearId']; ?></td>

            <?php echo "
            <td><button> <a href='../update/updateYearId.php?id=$row[yearId]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deleteYearId.php?id=$row[yearId]' onClick=\"return confirm('Are you sure you want to delete?')\">Delete
         </a></button></td>
            ";?>
              
        </tr>
        
        <?php
        $i++;
    }
?>



</table>
</center>

</body>
</html>