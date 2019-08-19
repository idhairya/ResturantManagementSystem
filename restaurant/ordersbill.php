<!DOCTYPE html>
<html>
<head>
 <title>BILL OF CUSTOMERS</title>
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
  <h1><center><font style="border:9px solid grey"> STORED PROCEDURE OF ORDERS </font></center></h1>
 <table>
 <tr>
  <th><br>ORD_ID<br><br></th> 
  <th><br> CUST_NAME<br><br></th>
     <th><br>ITEM_ID<br><br></th>
     <th><br>ITEM_NAME<br><br></th>
     <th><br>QUANTITY<br><br></th>
     <th><br>ITEM_RATE<br><br></th>
     <th><br>TOTAL<br><br></th>
  <br><br>
 </tr>
     
 <?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");

echo " Creating stored procedure<br/>";

  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT O.ORD_ID,C.CUST_NAME,O.ITEM_ID,M.ITEM_NAME,O.QUANTITY,O.ITEM_RATE,O.TOTAL
FROM ORDERS O, CUSTOMERS C,MENU M
WHERE O.ORD_ID=C.ORD_ID AND M.ITEM_ID=O.ITEM_ID;";
  $result = $conn->query($sql);

echo "Procedure  created successfully<BR/>";

echo " Calling Stored Procedure<BR/>";

  if ($result->num_rows > 0)
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["ORD_ID"]. "</td><td>" .$row["CUST_NAME"]. "</td><td>" .$row["ITEM_ID"]. "</td><td>" .$row["ITEM_NAME"]. "</td><td>" .$row["QUANTITY"]. "</td><td>" .$row["ITEM_RATE"]. "</td><td>" .$row["TOTAL"]. "</td></tr>";
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
     <p style="font-family: Black And White Picture"><a href="orders.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>