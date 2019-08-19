<html>
<head>
</head>
<style>
    table{
             border-collapse: collapse;
             width: 60%;
             padding: 150px;
             margin-left: 280px;

     } s
    th, td {
             text-align: center;
             padding: 8px;
             
            }
    tr:nth-child(even) 
    {
    	background-color: #f2f2f2;
        font-family: "arial";
        font-weight: bold;
        
    }
    th { 
    background-color: mediumslateblue;
    color: white;
    font-family:  "verdana";
    font-weight: bold;
    
}
input[type=text] {
    width: 110px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 9px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 25px 20px 22px 10px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    font-weight: bold;
    font-size: 30px;
}
input[type=text]:focus {
    width: 60%;
}
div{
	font-family: "verdana";
	font-weight: bold;
	font-size: 30px;
	font-style: bold;
	margin-left:25px;
	margin-top: 35px;
}
.btn{
	background-color:green;
    color: white;
    padding: 16px 20px;
    margin: 8px 20px 20px 50px;
    border-radius: 21px;
    cursor: pointer;
    width: 10%;
    opacity: 0.5;
    align-content: center;
    font-family: "verdana";
    font-weight: bold;
}
.btn:hover {
    opacity: 1;
}
b{
	font-family: "verdana";
	background-color: lightcyan;
    color: black;
    margin-left:80px;
    border-radius: 8px;
    text-align: center;
    font-size: 30px;
    width: 85%;
    
}
p{
	font-family: "verdana";
	background-color: lightcyan;
    color: black;
    margin-top:4px;
    border-radius: 8px;
    text-align: center;
    font-size: 30px;
    margin-left:80px;
    width: 35%;
}
</style>
<body style="background-color: lavender">
	<form action="takenbysearch.php" method="post">
		<div>Enter MGR_ID:<input type="text" name="MGR_ID"><br></div>
		<br><br>
		<button type="submit" value ="Find" class="btn">SEARCH</button>
	</form>
    
    
<?php
$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");
if ($con->connect_error) {
		    die("Connection failed: " . $con->connect_error);
		}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n=$_POST['MGR_ID'];
	echo "<b><br>Entered MGR_ID is $n and the Corresponding table is shown Below <br><br></b>";
	
	$sql="select * from taken_by where MGR_ID='$n'";

				$result = $con->query($sql);

			if ($result->num_rows > 0) {
		    echo "<br><br><br><br><table><tr><th>ORD_ID</th><th>MGR_ID</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		       echo "<tr><td>" . $row["ORD_ID"]. "</td><td>" .$row["MGR_ID"]. "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "<p>There is no such MGR_ID exist. Please Enter Correct MGR_ID</p>";
		}
		}

		$con->close();
?>
<p style="font-family: Black And White Picture"><a href="takenby.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>