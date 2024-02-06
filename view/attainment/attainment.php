<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET AATAINMENT</title>
    <link rel="icon" href="images/abt.png" type="image/icon type">
     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="css/viewplace.css">
     
     <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");



html {
  box-sizing: border-box;
  font-size: 62.5%;
}

body {
 background-color: powderblue;
  font-family: "Poppins", sans-serif;
 // display: flex;
 // justify-content: center;
  //align-items: center;
 // min-height: 100vh;
 
}

.grid {
  display: grid;
  width: 130em;
  grid-gap: 6rem;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  align-items: start;
  margin-left:auto;
  margin-right:auto;
 
}

.grid-item {
  background-color: #fff;
  border-radius: 0.4rem;
  overflow: hidden;
  box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.2s;
}


.card-img {
  display: block;
  width: 80%;
  height: 20rem;
  object-fit: cover;
  margin-top:10px;
  border-radius:50%;
}

.card-content {
  padding: 3rem;
}

.card-header {
  font-size: 2.2rem;
  font-weight: 500;
  color: #0d0d0d;
  margin-bottom: 1.5rem;
}

.card-text {
  font-size: 1.6rem;
  letter-spacing: 0.1rem;
  line-height: 1.7;
  color: #3d3d3d;
  margin-bottom: 2.5rem;
  margin-top:-10px;
}

.card-btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 2rem;
  text-align: center;
  color: #fff;
  background-color: #000;
  border: none;
  border-radius: 0.8rem;
  transition: 0.2s;
  cursor: pointer;
  letter-spacing: 0.1rem;
}

div .card-content a  {
  text-decoration: none;
  color:#fff;
}


@media only screen and (max-width: 60em) {
  body {
    padding: 3rem;
  }

  .grid {
    grid-gap: 3rem;
  }
}
.btn button{
  background-color:black;
  color:white;
  height:35px;
  width:90px;
  font-size:12px;
  margin-top:20px;
  margin-left:20px;
}

        </style>
</head>

<body>

<div class="btn" align="left">
    <a href="../../main.php"><button class="w3-btn w3-black"><b><-GoBack</b></button></a>
  </div>

<div class="grid" style="margin-top:50px;">

  
            <div class="grid-item">
        <div class="card">
        <center><img class="card-img" src="../../images/img1.jpg" /></center>
          <div class="card-content">
            <center><b><h3 class="card-header">SUBJECT WISE ATTAINMENT</b></h3></center>
            <p class="card-text"> </p>
            <a href='subjectattainment.php'><button class='card-btn'>CLICK HERE</button></a>
               
            </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card">
          <center><img class="card-img" src="../../images/img2.jpg" /></center>
          <div class="card-content">
            <center><b><h3 class="card-header">YEAR WISE ATTAINEMENT</b></h3></center>
            <p class="card-text"> </p>
            <a href='yearattainment.php'><button class='card-btn'>CLICK HERE</button></a>
          
            </div>
        </div>
      </div>
    
      <div class="grid-item">
        <div class="card">
        <center><img class="card-img" src="../../images/img3.jpg" /></center>
          <div class="card-content">
            <center><b><h3 class="card-header">BATCH WISE ATTAINMENT</b></h3></center>
            <p class="card-text"> </p>
            <a href='batchattainment.php'><button class='card-btn'>CLICK HERE</button></a>
          
            </div>
        </div>
      </div>
<div>
  </div>
</body>

</html>