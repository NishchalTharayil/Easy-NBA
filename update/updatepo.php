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
    $query1 ="select * from po1 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data1=mysqli_query($conn,$query1);
    $total1=mysqli_num_rows($data1); 
    $result1=mysqli_fetch_assoc($data1);

    
    //po2
    $query2 ="select * from po2 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data2=mysqli_query($conn,$query2);
    $total2=mysqli_num_rows($data2); 
    $result2=mysqli_fetch_assoc($data2);

    
    //po3
    $query3 ="select * from po3 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data3=mysqli_query($conn,$query3);
    $total3=mysqli_num_rows($data3); 
    $result3=mysqli_fetch_assoc($data3);
    
    //po4
    $query4 ="select * from po4 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data4=mysqli_query($conn,$query4);
    $total4=mysqli_num_rows($data4); 
    $result4=mysqli_fetch_assoc($data4);

    
    //po5
    $query5 ="select * from po5 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data5=mysqli_query($conn,$query5);
    $total5=mysqli_num_rows($data5); 
    $result5=mysqli_fetch_assoc($data5);

    
    //po6
    $query6 ="select * from po6 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data6=mysqli_query($conn,$query6);
    $total6=mysqli_num_rows($data6); 
    $result6=mysqli_fetch_assoc($data6);

    
    //po7
    $query7 ="select * from po7 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data7=mysqli_query($conn,$query7);
    $total7=mysqli_num_rows($data7); 
    $result7=mysqli_fetch_assoc($data7);

    
    //po8
    $query8 ="select * from po8 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data8=mysqli_query($conn,$query8);
    $total8=mysqli_num_rows($data8); 
    $result8=mysqli_fetch_assoc($data8);

    
    //po9
    $query9 ="select * from po9 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data9=mysqli_query($conn,$query9);
    $total9=mysqli_num_rows($data9); 
    $result9=mysqli_fetch_assoc($data9);

    
    //po10
    $query10 ="select * from po10 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data10=mysqli_query($conn,$query10);
    $total10=mysqli_num_rows($data10); 
    $result10=mysqli_fetch_assoc($data10);

    
    //po11
    $query11 ="select * from po11 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data11=mysqli_query($conn,$query11);
    $total11=mysqli_num_rows($data11); 
    $result11=mysqli_fetch_assoc($data11);

    
    //po12
    $query12 ="select * from po12 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data12=mysqli_query($conn,$query12);
    $total12=mysqli_num_rows($data12); 
    $result12=mysqli_fetch_assoc($data12);
    
    //pso1
    $query13 ="select * from pso1 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data13=mysqli_query($conn,$query13);
    $total13=mysqli_num_rows($data13); 
    $result13=mysqli_fetch_assoc($data13);
    
    //pso2
    $query14 ="select * from pso2 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data14=mysqli_query($conn,$query14);
    $total14=mysqli_num_rows($data14); 
    $result14=mysqli_fetch_assoc($data14);
   
    //pso3
    $query15 ="select * from pso3 where subCode='$idsubCode' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' ";
    $data15=mysqli_query($conn,$query15);
    $total15=mysqli_num_rows($data15); 
    $result15=mysqli_fetch_assoc($data15);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>PO Entery</title>
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
  max-width: 1200px;
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
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

.user-details .input-box input{
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
    <a href="../view/viewpo.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>
  </div>


<div class="container">
    <div class="title">Update The PO Values</div>
    <div class="content">
    <form action="#" method="POST">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Schema</span>
            <input type="text" class="input" name="schemaId" value="<?php echo $result1['schemaId']; ?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">BatchID</span>
            <input type="text" class="input" name="bid" value="<?php echo $result1['bid']; ?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">YearID</span>
            <input type="text" class="input" name="yearId" value="<?php echo $result1['yearId']; ?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">SubCode</span>
            <input type="text" class="input" name="subCode" value="<?php echo $result1['subCode']; ?>" readonly>
        </div>
    
</div>

      
<table>
  <th></th>
    <th>CO1</th>
    <th>CO2</th>
    <th>CO3</th>
    <th>CO4</th>
    <th>CO5</th>
</tr>
<tr>
  <td> PO1</td>
  <td><input name="co1po1"  value="<?php echo $result1['co1po1']; ?>" required="required"></td>
  <td> <input name="co2po1" value="<?php echo $result1['co2po1']; ?>" required="required"></td>
  <td><input name="co3po1" value="<?php echo $result1['co3po1']; ?>" required="required"></td>
  <td><input name="co4po1" value="<?php echo $result1['co4po1']; ?>" required="required"></td>
  <td><input name="co5po1" value="<?php echo $result1['co5po1']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO2</td>
  <td><input name="co1po2" value="<?php echo $result2['co1po2']; ?>" required="required"></td>
  <td> <input name="co2po2" value="<?php echo $result2['co2po2']; ?>" required="required"></td>
  <td><input name="co3po2" value="<?php echo $result2['co3po2']; ?>" required="required"></td>
  <td><input name="co4po2" value="<?php echo $result2['co4po2']; ?>" required="required"></td>
  <td><input name="co5po2" value="<?php echo $result2['co5po2']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO3</td>
  <td><input name="co1po3" value="<?php echo $result3['co1po3']; ?>" required="required"></td>
  <td> <input name="co2po3" value="<?php echo $result3['co2po3']; ?>" required="required"></td>
  <td><input name="co3po3" value="<?php echo $result3['co3po3']; ?>" required="required"></td>
  <td><input name="co4po3" value="<?php echo $result3['co4po3']; ?>" required="required"></td>
  <td><input name="co5po3" value="<?php echo $result3['co5po3']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO4</td>
  <td><input name="co1po4" value="<?php echo $result4['co1po4']; ?>" required="required"></td>
  <td> <input name="co2po4" value="<?php echo $result4['co2po4']; ?>" required="required"></td>
  <td><input name="co3po4" value="<?php echo $result4['co3po4']; ?>" required="required"></td>
  <td><input name="co4po4" value="<?php echo $result4['co4po4']; ?>" required="required"></td>
  <td><input name="co5po4" value="<?php echo $result4['co5po4']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO5</td>
  <td><input name="co1po5" value="<?php echo $result5['co1po5']; ?>" required="required"></td>
  <td> <input name="co2po5" value="<?php echo $result5['co2po5']; ?>" required="required"></td>
  <td><input name="co3po5" value="<?php echo $result5['co3po5']; ?>" required="required"></td>
  <td><input name="co4po5" value="<?php echo $result5['co4po5']; ?>" required="required"></td>
  <td><input name="co5po5" value="<?php echo $result5['co5po5']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO6</td>
  <td><input name="co1po6" value="<?php echo $result6['co1po6']; ?>" required="required"></td>
  <td> <input name="co2po6" value="<?php echo $result6['co2po6']; ?>" required="required"></td>
  <td><input name="co3po6" value="<?php echo $result6['co3po6']; ?>" required="required"></td>
  <td><input name="co4po6" value="<?php echo $result6['co4po6']; ?>" required="required"></td>
  <td><input name="co5po6" value="<?php echo $result6['co5po6']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO7</td>
  <td><input name="co1po7" value="<?php echo $result7['co1po7']; ?>" required="required"></td>
  <td> <input name="co2po7" value="<?php echo $result7['co2po7']; ?>" required="required"></td>
  <td><input name="co3po7" value="<?php echo $result7['co3po7']; ?>" required="required"></td>
  <td><input name="co4po7" value="<?php echo $result7['co4po7']; ?>" required="required"></td>
  <td><input name="co5po7" value="<?php echo $result7['co5po7']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO8</td>
  <td><input name="co1po8" value="<?php echo $result8['co1po8']; ?>" required="required"></td>
  <td> <input name="co2po8" value="<?php echo $result8['co2po8']; ?>" required="required"></td>
  <td><input name="co3po8" value="<?php echo $result8['co3po8']; ?>" required="required"></td>
  <td><input name="co4po8" value="<?php echo $result8['co4po8']; ?>" required="required"></td>
  <td><input name="co5po8" value="<?php echo $result8['co5po8']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO9</td>
  <td><input name="co1po9" value="<?php echo $result9['co1po9']; ?>" required="required"></td>
  <td><input name="co2po9" value="<?php echo $result9['co2po9']; ?>" required="required"></td>
  <td><input name="co3po9" value="<?php echo $result9['co3po9']; ?>" required="required"></td>
  <td><input name="co4po9" value="<?php echo $result9['co4po9']; ?>" required="required"></td>
  <td><input name="co5po9" value="<?php echo $result9['co5po9']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO10</td>
  <td><input name="co1po10" value="<?php echo $result10['co1po10']; ?>" required="required"></td>
  <td><input name="co2po10" value="<?php echo $result10['co2po10']; ?>" required="required"></td>
  <td><input name="co3po10" value="<?php echo $result10['co3po10']; ?>" required="required"></td>
  <td><input name="co4po10" value="<?php echo $result10['co4po10']; ?>" required="required"></td>
  <td><input name="co5po10" value="<?php echo $result10['co5po10']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO11</td>
  <td><input name="co1po11" value="<?php echo $result11['co1po11']; ?>" required="required"></td>
  <td><input name="co2po11" value="<?php echo $result11['co2po11']; ?>" required="required"></td>
  <td><input name="co3po11" value="<?php echo $result11['co3po11']; ?>" required="required"></td>
  <td><input name="co4po11" value="<?php echo $result11['co4po11']; ?>" required="required"></td>
  <td><input name="co5po11" value="<?php echo $result11['co5po11']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PO12</td>
  <td><input name="co1po12" value="<?php echo $result12['co1po12']; ?>" required="required"></td>
  <td><input name="co2po12" value="<?php echo $result12['co2po12']; ?>" required="required"></td>
  <td><input name="co3po12" value="<?php echo $result12['co3po12']; ?>" required="required"></td>
  <td><input name="co4po12" value="<?php echo $result12['co4po12']; ?>" required="required"></td>
  <td><input name="co5po12" value="<?php echo $result12['co5po12']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PSO1</td>
  <td><input name="co1pso1" value="<?php echo $result13['co1pso1']; ?>" required="required"></td>
  <td> <input name="co2pso1" value="<?php echo $result13['co2pso1']; ?>" required="required"></td>
  <td><input name="co3pso1" value="<?php echo $result13['co3pso1']; ?>" required="required"></td>
  <td><input name="co4pso1" value="<?php echo $result13['co4pso1']; ?>" required="required"></td>
  <td><input name="co5pso1" value="<?php echo $result13['co5pso1']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PSO2</td>
  <td><input name="co1pso2" value="<?php echo $result14['co1pso2']; ?>" required="required"></td>
  <td> <input name="co2pso2" value="<?php echo $result14['co2pso2']; ?>" required="required"></td>
  <td><input name="co3pso2" value="<?php echo $result14['co3pso2']; ?>" required="required"></td>
  <td><input name="co4pso2" value="<?php echo $result14['co4pso2']; ?>" required="required"></td>
  <td><input name="co5pso2" value="<?php echo $result14['co5pso2']; ?>" required="required"></td>
  </tr>

  <tr>
  <td> PSO3</td>
  <td><input name="co1pso3" value="<?php echo $result15['co1pso3']; ?>" required="required"></td>
  <td> <input name="co2pso3" value="<?php echo $result15['co2pso3']; ?>" required="required"></td>
  <td><input name="co3pso3" value="<?php echo $result15['co3pso3']; ?>" required="required"></td>
  <td><input name="co4pso3" value="<?php echo $result15['co4pso3']; ?>" required="required"></td>
  <td><input name="co5pso3" value="<?php echo $result15['co5pso3']; ?>" required="required"></td>
  </tr>
</table>

<center>
        <div class="button">
          <input type="submit" value="UPDATE" class="btn"  name="update">
        </div>
      </center>
      </form>

      </div>
  </div>

</center>
</body>
</html>



<?php
 include '../connection/config.php';
error_reporting(0);
if($_POST['update']){
    $schemaId=$_POST['schemaId'];
    $bid=$_POST['bid'];
    $yearId=$_POST['yearId'];
    $subCode=$_POST['subCode'];
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
    
    

    //po1
    $query1="update po1 set co1po1=' $co1po1',co2po1='$co2po1',co3po1='$co3po1',co4po1='$co4po1',co5po1='$co5po1'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data1=mysqli_query($conn,$query1);

    //po2
    $query2="update po2 set co1po2=' $co1po2',co2po2='$co2po2',co3po2='$co3po2',co4po2='$co4po2',co5po2='$co5po2'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data2=mysqli_query($conn,$query2);

    //po3
    $query3="update po3 set co1po3=' $co1po3',co2po3='$co2po3',co3po3='$co3po3',co4po3='$co4po3',co5po3='$co5po3'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data3=mysqli_query($conn,$query3);

    //po4
    $query4="update po4 set co1po4=' $co1po4',co2po4='$co2po4',co3po4='$co3po4',co4po4='$co4po4',co5po4='$co5po4'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data4=mysqli_query($conn,$query4);

    //po5
    $query5="update po5 set co1po5=' $co1po5',co2po5='$co2po5',co3po5='$co3po5',co4po5='$co4po5',co5po5='$co5po5'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data5=mysqli_query($conn,$query5);

    //po6
    $query6="update po6 set co1po6=' $co1po6',co2po6='$co2po6',co3po6='$co3po6',co4po6='$co4po6',co5po6='$co5po6'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data6=mysqli_query($conn,$query6);

    //po7
    $query7="update po7 set co1po7=' $co1po7',co2po7='$co2po7',co3po7='$co3po7',co4po7='$co4po7',co5po7='$co5po7'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data7=mysqli_query($conn,$query7);

    //po8
    $query8="update po8 set co1po8=' $co1po8',co2po8='$co2po8',co3po8='$co3po8',co4po8='$co4po8',co5po8='$co5po8'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data8=mysqli_query($conn,$query8);

    //po9
    $query9="update po9 set co1po9=' $co1po9',co2po9='$co2po9',co3po9='$co3po9',co4po9='$co4po9',co5po9='$co5po9'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data9=mysqli_query($conn,$query9);

    //po10
    $query10="update po10 set co1po10=' $co1po10',co2po10='$co2po10',co3po10='$co3po10',co4po10='$co4po10',co5po10='$co5po10'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data10=mysqli_query($conn,$query10);

    //po11
    $query11="update po11 set co1po11=' $co1po11',co2po11='$co2po11',co3po11='$co3po11',co4po11='$co4po11',co5po11='$co5po11'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data11=mysqli_query($conn,$query11);

    //po12
    $query12="update po12 set co1po12=' $co1po12',co2po12='$co2po12',co3po12='$co3po12',co4po12='$co4po12',co5po12='$co5po12'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data12=mysqli_query($conn,$query12);

    //pso1
    $query13="update pso1 set co1pso1=' $co1pso1',co2pso1='$co2pso1',co3pso1='$co3pso1',co4pso1='$co4pso1',co5pso1='$co5pso1'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data13=mysqli_query($conn,$query13);

    //pso2
    $query14="update pso2 set co1pso2=' $co1pso2',co2pso2='$co2pso2',co3pso2='$co3pso2',co4pso2='$co4pso2',co5pso2='$co5pso2'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data14=mysqli_query($conn,$query14);

    //pso3
    $query15="update pso3 set co1pso3=' $co1pso3',co2pso3='$co2pso3',co3pso3='$co3pso3',co4pso3='$co4pso3',co5pso3='$co5pso3'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";

    $data15=mysqli_query($conn,$query15);



    if($data1 or $data2 or $data3 or $data4 or $data5 or $data6 or $data7 or $data8 or $data9 or $data10 or $data11 or $data12 or $data13 or $data14 or $data15){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Succesfully Updated')
    window.location.href='../view/viewpo.php';
    </SCRIPT>");
    
    }
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Update')
         window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
        }
}


?>