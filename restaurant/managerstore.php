<!DOCTYPE html>
<html>
<head>
 <title>STORED PROCEDURE MANAGER</title>
 <style>
  b{
    font-size: 20px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 15px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   
  } 
  th 
  {
   background-color: maroon;
   color: white;
   
  }
  h1{
    font-family: "times new roman";
    font-size: 40px;
    border: 9px solid grey;
    border-radius: 17px;
     color: maroon;
  }
  td{
    padding: 12px;
    font-family: "Verdana";
  
  }
  tr:nth-child(even) {background-color: #87CEFA; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey"> STORED PROCEDURE OF MANAGER TABLE </font></center></h1>
 <table>
 <tr>
  <th><br>MGR_ID<br><br></th> 
  <th><br> NAME<br><br></th>
     <th><br>ADDRESS<br><br></th>
     <th><br>SALARY<br><br></th>
     <th><br>PHONE_NUM<br><br></th>
  <br><br>
 </tr>
     
 <?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");

echo " Creating stored procedure<br/>";

  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT Manager.MGR_ID, Manager.NAME, Manager.SALARY,Manager.ADDRESS,Contacts.PHONE_NUM
FROM Manager
INNER JOIN Contacts ON Manager.MGR_ID=Contacts.MGR_ID";
  $result = $conn->query($sql);

echo "Procedure  created successfully<BR/>";

echo " Calling Stored Procedure<BR/>";

  if ($result->num_rows > 0)
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["MGR_ID"]. "</td><td>" .$row["NAME"]. "</td><td>" .$row["ADDRESS"]. "</td><td>" .$row["SALARY"]. "</td><td>" .$row["PHONE_NUM"]. "</td></tr>";
    }
    echo "</table>";
   
    }
else 
  { 
    echo "0 results"; 
  }
$conn->close();
?>
</table>
     <p style="font-family: Black And White Picture"><a href="manager.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>