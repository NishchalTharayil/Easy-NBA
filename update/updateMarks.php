<?php 
    include '../connection/config.php';

    $idusn=$_GET['id'];
    //echo $idusn;
    $idschema=$_GET['id2'];
    //echo $idschema;
    $idBatch=$_GET['id3'];
    //echo $idBatch;
    $idyear=$_GET['id4'];
    //echo $idyear;
    $idsubCode=$_GET['id5'];
    //echo $idsubCode;
    $query ="select * from marks where usn='$idusn' and schemaId='$idschema' 
    and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' ";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data); 
    $result=mysqli_fetch_assoc($data);
   
    
?>
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
    <div class="title">Update The CO Marks</div>
    <div class="content">
    <form action="#" method="POST">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Schema</span>
            <input type="text" class="input" name="schemaId" value="<?php echo $result['schemaId']; ?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">BatchID</span>
            <input type="text" class="input" name="bid" value="<?php echo $result['bid']; ?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">YearID</span>
            <input type="text" class="input" name="yearId" value="<?php echo $result['yearId']; ?>" readonly>
          </div>

          <div class="input-box">
            <span class="details">SubCode</span>
            <input type="text" class="input" name="subCode" value="<?php echo $result['subCode']; ?>" readonly>
          </div>
          <div class="input-box">
            <span class="details">USN</span>
            <input type="text" class="input" name="usn" value="<?php echo $result['usn']; ?>" readonly>
          </div>
    

       <div class="input-box">
            <span class="details">Update The CO1</span>
            <input type="text" class="input" name="co1marks" value="<?php echo $result['co1marks']; ?>" required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Update The CO2</span>
            <input type="text" class="input" name="co2marks" value="<?php echo $result['co2marks']; ?>" required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Update The CO3</span>
            <input type="text" class="input" name="co3marks" value="<?php echo $result['co3marks']; ?>" required="required"><br><br>
          </div>


          <div class="input-box">
            <span class="details">Update The CO4</span>
            <input type="text" class="input" value="<?php echo $result['co4marks']; ?>" name="co4marks" required="required"><br><br>
          </div>

          <div class="input-box">
            <span class="details">Update The Co5</span>
            <input type="text" class="input" name="co5marks" value="<?php echo $result['co5marks']; ?>" required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Update The External</span>
            <input type="text" class="input" value="<?php echo $result['external']; ?>" name="external" required="required"><br><br>
          </div>

          
         </div>
       
        <center><div class="button">
        <input type="submit" value="UPDATE" class="btn"  name="update">
        </div></center>
      </form>

     
      </div>
  </div>



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
    $usn=$_POST['usn'];
    $co1=$_POST['co1marks'];
    $co2=$_POST['co2marks'];
    $co3=$_POST['co3marks'];
    $co4=$_POST['co4marks'];
    $co5=$_POST['co5marks'];
    $external=$_POST['external'];
    
    


    $query="update marks set co1marks='$co1',co2marks='$co2',co3marks='$co3',co4marks='$co4',co5marks='$co5', external='$external'
        where schemaId='$idschema'  and bid='$idBatch' and yearId='$idyear' and subCode='$idsubCode' and usn='$idusn' ";

    $data=mysqli_query($conn,$query);

    if($data){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Succesfully Updated')
    window.location.href='../view/viewsubmarks.php';
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