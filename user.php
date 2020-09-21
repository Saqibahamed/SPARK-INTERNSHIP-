
<!DOCTYPE html>
<html>
<head>
<style >
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-image: url("allusers.jpg");
 background-size: cover; 
}
.button {
  background-color:#f44336c7; 
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   
  transition-duration: 0.4s;
}
.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.50),0 17px 50px 0 rgba(0,0,0,0.50);
}
.footer {
 background-color: #f44336e8; 
  padding: 10px;
  text-align: center;
}

.footer {
 
  padding: 20px;
  text-align: center;
}

form{
width: 500px;
position : absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
color:white;
}
h1{
 font-weight:bold;
 color:black;

 padding : 40px;
 background-color: #f4433691;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th{background-color:
 #4CAF50;
  text-align: left;
padding: 8px;

}
td {
	
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f4433691;}
}
}


</style>
</head>
<body><form>
<center>
<br><br><br><br><br>
<h1>USER DETAILS</h1>
<table>
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th>Country</th>
	<th>Credit</th>
  </tr>
<?php

$user = "root";
$password = "";
$db = 'data';

// Create connection
$db= mysqli_connect("localhost","id14912168_user","NPb<\8^RI|L_VKz%","id14912168_data");

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}


$sl="SELECT username,email,country,credit FROM user_details";
$result=$db->query($sl);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc()){

echo "<tr><td>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["country"] ."</td><td>" . $row["credit"] ."</td></tr>";
}
echo "</table>";
}
?>

</table>
<br>
<br>
<center>
<a href="selectuser.html"><input type="button" class="button button1" value="SELECT USER"></button></a>
<a href="index.html"><input type="button" class="button button1" value="BACK"></button></a></center>
</center>
<div class="footer">
  
  <a href="sparks.html" target="_blank">A SPARKS FOUNDATION INTERNSHIP</a>
</div>
</form>
</body>
</html>