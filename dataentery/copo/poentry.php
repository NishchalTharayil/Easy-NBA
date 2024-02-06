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
    <a href="subconfig.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>
  </div>



<!--html-->

<div class="container">
    <div class="title">Enter The PO of Subject</div>
    <div class="content">

      <form action="..\..\upload\uploadpo.php" method="POST">

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
            <span class="details">Select SchemeID</span>
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
         

          <?php

include('../../connection/config.php');

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

      


<table>
          <tr>
    <th></th>
    <th>CO1</th>
    <th>CO2</th>
    <th>CO3</th>
    <th>CO4</th>
    <th>CO5</th>
</tr>
<tr>
  <td> PO1</td>
  <td><input name="co1po1" placeholder="enter PO1CO1" required="required"></td>
  <td> <input name="co2po1" placeholder="enter PO1CO2" required="required"></td>
  <td><input name="co3po1" placeholder="enter PO1CO3" required="required"></td>
  <td><input name="co4po1" placeholder="enter PO1CO4" required="required"></td>
  <td><input name="co5po1" placeholder="enter PO1CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO2</td>
  <td><input name="co1po2" placeholder="enter PO2CO1" required="required"></td>
  <td> <input name="co2po2" placeholder="enter PO2CO2" required="required"></td>
  <td><input name="co3po2" placeholder="enter PO2CO3" required="required"></td>
  <td><input name="co4po2" placeholder="enter PO2CO4" required="required"></td>
  <td><input name="co5po2" placeholder="enter PO2CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO3</td>
  <td><input name="co1po3" placeholder="enter PO3CO1" required="required"></td>
  <td> <input name="co2po3" placeholder="enter PO3CO2" required="required"></td>
  <td><input name="co3po3" placeholder="enter PO3CO3" required="required"></td>
  <td><input name="co4po3" placeholder="enter PO3CO4" required="required"></td>
  <td><input name="co5po3" placeholder="enter PO3CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO4</td>
  <td><input name="co1po4" placeholder="enter PO4CO1" required="required"></td>
  <td> <input name="co2po4" placeholder="enter PO4CO2" required="required"></td>
  <td><input name="co3po4" placeholder="enter PO4CO3" required="required"></td>
  <td><input name="co4po4" placeholder="enter PO4CO4" required="required"></td>
  <td><input name="co5po4" placeholder="enter PO4CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO5</td>
  <td><input name="co1po5" placeholder="enter PO5CO1" required="required"></td>
  <td> <input name="co2po5" placeholder="enter PO5CO2" required="required"></td>
  <td><input name="co3po5" placeholder="enter PO5CO3" required="required"></td>
  <td><input name="co4po5" placeholder="enter PO5CO4" required="required"></td>
  <td><input name="co5po5" placeholder="enter PO5CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO6</td>
  <td><input name="co1po6" placeholder="enter PO6CO1" required="required"></td>
  <td> <input name="co2po6" placeholder="enter PO6CO2" required="required"></td>
  <td><input name="co3po6" placeholder="enter PO6CO3" required="required"></td>
  <td><input name="co4po6" placeholder="enter PO6CO4" required="required"></td>
  <td><input name="co5po6" placeholder="enter PO6CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO7</td>
  <td><input name="co1po7" placeholder="enter PO7CO1" required="required"></td>
  <td> <input name="co2po7" placeholder="enter PO7CO2" required="required"></td>
  <td><input name="co3po7" placeholder="enter PO7CO3" required="required"></td>
  <td><input name="co4po7" placeholder="enter PO7CO4" required="required"></td>
  <td><input name="co5po7" placeholder="enter PO7CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO8</td>
  <td><input name="co1po8" placeholder="enter PO8CO1" required="required"></td>
  <td> <input name="co2po8" placeholder="enter PO8CO2" required="required"></td>
  <td><input name="co3po8" placeholder="enter PO8CO3" required="required"></td>
  <td><input name="co4po8" placeholder="enter PO8CO4" required="required"></td>
  <td><input name="co5po8" placeholder="enter PO8CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO9</td>
  <td><input name="co1po9" placeholder="enter PO9CO1" required="required"></td>
  <td> <input name="co2po9" placeholder="enter PO9CO2" required="required"></td>
  <td><input name="co3po9" placeholder="enter PO9CO3" required="required"></td>
  <td><input name="co4po9" placeholder="enter PO9CO4" required="required"></td>
  <td><input name="co5po9" placeholder="enter PO9CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO10</td>
  <td><input name="co1po10" placeholder="enter PO10CO1" required="required"></td>
  <td> <input name="co2po10" placeholder="enter PO10CO2" required="required"></td>
  <td><input name="co3po10" placeholder="enter PO10CO3" required="required"></td>
  <td><input name="co4po10" placeholder="enter PO10CO4" required="required"></td>
  <td><input name="co5po10" placeholder="enter PO10CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO11</td>
  <td><input name="co1po11" placeholder="enter PO11CO1" required="required"></td>
  <td> <input name="co2po11" placeholder="enter PO11CO2" required="required"></td>
  <td><input name="co3po11" placeholder="enter PO11CO3" required="required"></td>
  <td><input name="co4po11" placeholder="enter PO11CO4" required="required"></td>
  <td><input name="co5po11" placeholder="enter PO11CO5" required="required"></td>
  </tr>

  <tr>
  <td> PO12</td>
  <td><input name="co1po12" placeholder="enter PO12CO1" required="required"></td>
  <td> <input name="co2po12" placeholder="enter PO12CO2" required="required"></td>
  <td><input name="co3po12" placeholder="enter PO12CO3" required="required"></td>
  <td><input name="co4po12" placeholder="enter PO12CO4" required="required"></td>
  <td><input name="co5po12" placeholder="enter PO12CO5" required="required"></td>
  </tr>

  <tr>
  <td> PSO1</td>
  <td><input name="co1pso1" placeholder="enter PSO1CO1" required="required"></td>
  <td> <input name="co2pso1" placeholder="enter PSO1CO2" required="required"></td>
  <td><input name="co3pso1" placeholder="enter PSO1CO3" required="required"></td>
  <td><input name="co4pso1" placeholder="enter PSO1CO4" required="required"></td>
  <td><input name="co5pso1" placeholder="enter PSO1CO5" required="required"></td>
  </tr>

  <tr>
  <td> PSO2</td>
  <td><input name="co1pso2" placeholder="enter PSO2CO1" required="required"></td>
  <td> <input name="co2pso2" placeholder="enter PSO2CO2" required="required"></td>
  <td><input name="co3pso2" placeholder="enter PSO2CO3" required="required"></td>
  <td><input name="co4pso2" placeholder="enter PSO2CO4" required="required"></td>
  <td><input name="co5pso2" placeholder="enter PSO2CO5" required="required"></td>
  </tr>

  <tr>
  <td> PSO3</td>
  <td><input name="co1pso3" placeholder="enter PSO3CO1" required="required"></td>
  <td> <input name="co2pso3" placeholder="enter PSO3CO2" required="required"></td>
  <td><input name="co3pso3" placeholder="enter PSO3CO3" required="required"></td>
  <td><input name="co4pso3" placeholder="enter PSO3CO4" required="required"></td>
  <td><input name="co5pso3" placeholder="enter PSO3CO5" required="required"></td>
  </tr>
</table>

<center>
        <div class="button">
          <input type="submit" value="SUBMIT" class="btn"  name="submit">
        </div>
      </center>
      </form>

      </div>
  </div>


<div class="ph" style="margin-top:20px;">
  <center>
<div class="w3-show-inline-block">
  <div class="w3-bar">
    <a href="../../view/viewpo.php"><button class="w3-btn w3-black">View PO</button></a>
   </center> 
  </div>
  </div>
</div>


    
</center>
</body>
</html>