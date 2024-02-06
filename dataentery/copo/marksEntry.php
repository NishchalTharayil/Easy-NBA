<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Entry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
 .exbtn{
  height: 100%;
   width: 150px;
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

</style>
</head>
<body>

<div class="w3-show-inline-block" align="left">
  <div class="w3-bar">
    <a href="subconfig.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>
  </div>


<div class="container">
    <div class="title">Enter The CO Marks</div>
    <div class="content">
    <form action="..\..\upload\uploadmarks.php" method="POST">
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

  <div class="input-box">
            <span class="details">Enter The USN</span>
            <input type="text" class="input" placeholder="4GMXXCSXXX" name="usn" required="required"><br><br>
          </div>

       <div class="input-box">
            <span class="details">Enter The CO1</span>
            <input type="text" class="input" placeholder="Co1 Marks"  name="co1marks" required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Enter The CO2</span>
            <input type="text" class="input" placeholder="Co2 Marks" name="co2marks" required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Enter The CO3</span>
            <input type="text" class="input" placeholder="Co3 Marks" name="co3marks" required="required"><br><br>
          </div>


          <div class="input-box">
            <span class="details">Enter The CO4</span>
            <input type="text" class="input" placeholder="Co4 Marks" name="co4marks" required="required"><br><br>
          </div>

          <div class="input-box">
            <span class="details">Enter The Co5</span>
            <input type="text" class="input" placeholder="Co5 Marks" name="co5marks" required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Enter The External</span>
            <input type="text" class="input" placeholder="External Marks" name="external" required="required"><br><br>
          </div>

          
         </div>
       
        <center><div class="button">
        <input type="submit" value="SUBMIT" class="btn"  name="submit">
        </div></center>
      </form>

<!--for excel Data-->
<h2 style="margin-left:30px;"><label>Upload Excel file here:</label></h2>
  <br />	
  <a href="../../excel.php"><button name="import" type="submit" class="exbtn">ClickHere</button></a>

   </div>
  </div>
 

 
  <div class="ph" style="margin-top:20px;">
  <center>
<div class="w3-show-inline-block">
  <div class="w3-bar">
    <a href="../../view/viewsubmarks.php"><button class="w3-btn w3-black">View Subject Marks</button></a>
   </center> 
  </div>
  </div>
</div>


</body>
</html>
