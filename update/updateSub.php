<?php 
    include '../connection/config.php';

    $id=$_GET['id'];
    //echo $id;
    $id2=$_GET['id2'];
    //echo $id;
    
    $query ="select * from subjectentry where schemaId='$id' and subId='$id2' ";
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
    <title>Update Subject</title>
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
  max-width: 600px;
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

</style>
</head>
<body>
<div class="w3-show-inline-block" align="left">
  <div class="w3-bar">
    <a href="../view/viewsub.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </div>
  </div>


<div class="container">
    <div class="title">Update The Subject</div>
    <div class="content">
    <form action="#" method="POST">
        <div class="user-details">
        <div class="input-box">
            <span class="details">SCHEMA</span>
            <input type="text" class="input" name="schemaId" value="<?php echo $result['schemaId']; ?>" required="required" readonly><br><br>
          </div>

          <div class="input-box">
            <span class="details">Update The SubId</span>
            <input type="text" class="input" name="subId"  value="<?php echo $result['subId']; ?>" required="required"><br><br>
          </div>

          <div class="input-box">
            <span class="details">Update The Subject Code</span>
            <input type="text" class="input" name="subCode"  value="<?php echo $result['subCode']; ?>"  required="required"><br><br>
          </div>
          <div class="input-box">
            <span class="details">Enter The Subject Name</span>
            <input type="text" class="input" name="subName" value="<?php echo $result['subName']; ?>"  required="required"><br><br>
          </div>     
         </div>
       
        <center><div class="button">
        <input type="submit" value="SUBMIT" class="btn"  name="update">
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
    $subid=$_POST['subId'];
    $subCode=$_POST['subCode'];
    $subName=$_POST['subName'];

    $query="update subjectentry set subId='$subid',subCode='$subCode',subName='$subName'
        where schemaId='$id' and subId='$id2' ";

    $data=mysqli_query($conn,$query);

    if($data){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Succesfully Updated')
    window.location.href='../view/viewsub.php';
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