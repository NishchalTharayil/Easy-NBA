
<html>
<head>
    <title>View Subjects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  //height: 100vh;
  //display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: powderblue;
}
.container{
  margin-top: 0px;
  max-width: 900px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin-left: auto;
  margin-right: auto;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 1 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

select{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}

 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 60%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 700;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

.button input{
   height: 100%;
   width: calc(100% / 2 - 20px);
   border-radius: 5px;
   border: none;
   color: #fff; 
   font-size: 18px;
   font-weight: 700;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
 }

        table {
  margin: 0px;
  margin-top: 10px;
  border-collapse: collapse;
  width: 70%;
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
    <a href="../dataentery/addSub.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </div>
  </div>


  <div class="container">
    <div class="title">View The Subject </div>
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

          </div>
        <center>
        <div class="button">
          <input type="submit" value="Submit" class="btn"  name="submit">
        </div>
      </center>
      </form>

      </div>
  </div>




<center>
    <h1><b>SUBJECT LIST</b></h1>
<table>
    <tr>
    <th align = "center">SLNO</th>
    <th align = "center">SCHEME</th>
        <th align = "center">SubID</th>
        <th align = "center">SUBCODE</th> 
        <th align = "center">SubName</th>  
        <th align = "center">UPDATE</th>
        <th align = "center">DELETE</th>
    </tr>

    <?php 
    $db = new mysqli('localhost', 'root', '', 'easynba') 
      or die("Error connecting to database!");
        include '../connection/config.php';

    if(isset($_POST['submit'])){

      $schemaId = $_POST['schemaId'];
      
      $sql = "SELECT * from subjectentry where schemaId='$schemaId' ORDER BY subId";
        

    $results = $db->query($sql);

    $i = 1;
    while($row = $results->fetch_assoc()) {
        ?>

        <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['schemaId']; ?></td>
            <td><?php echo $row['subId']; ?></td>
            <td><?php echo $row['subCode']; ?></td>
            <td><?php echo $row['subName']; ?></td>
            
            <?php echo "
            <td><button> <a href='../update/updateSub.php?id=$row[schemaId] & id2=$row[subId]'>Update
         </a></button></td>
         
         <td><button> <a href='../delete/deleteSub.php?id=$row[schemaId] & id2=$row[subId]' onClick=\"return confirm('Are you sure you want to delete?')\">Delete
         </a></button></td>
            ";?>
              
        </tr>
        
        <?php
        $i++;
    }
  }
?>


</table>
</center>

</body>
</html>