<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  max-width: 800px;
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

.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  //padding-left: 15px;
  padding:10px;
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



      
</style>
</head>
<body>

<div class="w3-show-inline-block" align="left">
  <div class="w3-bar">
    <a href="dataentery/addstu.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>
  </div>


<div class="container">
 <div class="title">Upload Excel File for Student</div>
  <div class="content">

  <form class="" action="#" enctype="multipart/form-data" method="POST">


  <div class="user-details">
          <div class="input-box">
            <input type="file" name="excel" required value="">
          </div>
         </div>

         <center><div class="button">
         <input type="submit" value="UPLOAD" class="btn"  name="import">
        </div></center>
  

</form> 
<center><br>
    <div class="collapse" id="navbarToggleExternalContent" style="width:80%";>
        <div class="bg-dark p-4" >
          <h5 class="text-white h4">Instruction for uploading document</h5>
          <span class="text-muted">Format of Documenet</span><br>
          <img src="images/stu.jpg" width="550" height="100"><br><br>
          <p style="color:#fff;" align="left"> * Note:<br>
          ->Data is start from first row.<br>
          ->There is no HeadLines.<br>
          ->cell A='USN',B='Scheme_ID'<br>
          ->*No empty cell between data it will throw Error.<br>
        </p>
        </div>
      </div>
    <nav class="navbar navbar-dark bg-info" style="width:80%";>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-dark"></span>
          </button>
          <p style="color:#000;"><b><----*Click hear first before you upload</b></p>  
        </div>
        
      </nav>
    </center> 
</div>
</div>
<?php
include('connection/config.php'); 
if(isset($_POST['import'])){
$fileName=$_FILES['excel']['name'];
$fileExtension=explode('.',$fileName);
$fileExtension=strtolower(end($fileExtension));

$newFileName=date("Y.m.d")."-".date("h.i.sa").".".$fileExtension;
$targetDirectory = "uploads/".$newFileName;
move_uploaded_file($_FILES["excel"]["tmp_name"], $targetDirectory);

error_reporting(0);
ini_set('display_errors',0);

require "excelReader/excel_reader2.php";
require "excelReader/SpreadsheetReader.php";

$reader=new SpreadsheetReader($targetDirectory);
foreach($reader as $key => $row){
    $usn=$row[0];
    $schemaId=$row[1];
  
   
    mysqli_query($conn,"insert into stu values('$usn','$schemaId')");
}
echo 
" <script>
alert('successfully Imported');
document.location.href='view/viewstu.php';
</script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>