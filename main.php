<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>GMIT | EasyNBA</title>
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
         table {
  margin: 0px;
  margin-top: 10px;
  border-collapse: collapse;
  width: 98%;
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
      <nav>
         <label class="logo"><span>GM</span> Institute of Technology</label>
         <ul>
            <li><a class="active" href="main.php">Home</a></li>
            <li>
               <a href="dataentry.php">Data Entry
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="dataentry.php">Form Entry1</a></li>
                  <li><a href="dataentery/copo/subconfig.php">Form Entry2</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Criteria
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="#">Criteria 2</a></li>
                  <li><a href="#">Criteria 3</a></li>
                  <li><a href="#">Criteria 3</a></li>
               </ul>
            </li>
            <li><a href="view/attainment/attainment.php">Get Attainment</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>
      


   <center>
  
<table style="margin-top:20px";>
<tr>
<th>SLNO</th>
<th>PO's</th>
<th>PO Names</th>
</tr>
 <tr>  

 <td>1</td>
    <td>PO1</td>
    <td> Engineering Knowledge:</td>
</tr>
<tr>  
<td>2</td>    
<td>PO2</td>
    <td> Problem Analysis</td></tr>
<tr>  
<td>3</td> 
    <td>PO3</td>
    <td> Design/Development of Solution</td>
</tr>
<tr>  
<td>4</td> 
    <td> PO4</td>
    <td>Conduct investigations of complex problem</td></tr>
<tr>  
<td>5</td> 
    <td>PO5</td>
    <td>Modern tool usage</td></tr>
<tr>  
<td>6</td> 
    <td> PO6 </td>
    <td>The engineer and Society</td></tr>
<tr>  
<td>7</td> 
    <td> PO7 </td>
    <td> Environment and Sustainability</td></tr>
<tr>  
<td>8</td> 
    <td> PO8</td>
    <td>  Ethics</td></tr>
<tr>  
<td>9</td> 
    <td> PO9 </td>
    <td> Individual and Team Work</td></tr>
<tr>  
   <td>10</td> 
    <td> PO10</td>
    <td> Communication</td></tr>
<tr>  
<td>11</td> 
    <td> PO11</td>
    <td> Project Management and Finance</td></tr>
<tr>
   <td>12</td> 
   <td> PO12</td>
   <td> Life-long Learning </td></tr>
<tr>  
<td>13</td> 
 <td>PSO1</td>
 <td> Program Specific Outcome1</td></tr>
<tr>  
<td>14</td> 
<td> PSO2</td>
<td> Program Specific Outcome2</td></tr>
<tr>  
<td>15</td> 
<td> PSO3</td>
<td>Program Specific Outcome3</td></tr>
</table>
</center>

      
<center>
<h1>MainPage</h1>
<a href="dataentery/SchemaEntery.php">
<button>Schema Entry</button></a></br></br>

<a href="dataentery/batchentery.php">
<button>BatchID Entry</button></a></br></br>

<a href="dataentery/yearEntry.php">
<button>Year Entry</button></a></br></br>

<a href="dataentery/addstu.php">
<button>AddStudent</button></a></br></br>

<a href="dataentery/addSub.php">
<button>Add Subject</button></a></br></br>

<a href="dataentery/copo/subconfig.php">
<button>subjectConfigure</button></a></br></br>

</center> 



   </body>
</html>