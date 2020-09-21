<html>
  <head>
    
<style>
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-image: url("bg.jpg");
 background-size: cover; 
}
form{
width: 500px;
position : absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
color:white;
padding : 40px;
 background-color: #ff483a47;
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
</style>
<body>
<center>
<?php
$db= mysqli_connect("localhost","id14912168_user","NPb<\8^RI|L_VKz%","id14912168_data");
if($db-> connect_error){
die("connection failed : ". $db->connect_error);

}

$credits=$_POST['credits'];
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$record="SELECT credit from user_details WHERE username='$sender'";
$result=mysqli_query($db,$record);
$row=mysqli_fetch_assoc($result);
$num=(int)implode('',$row);
if($credits>$num){
echo "INSUFFICIENT CREDIT BALANCE!!!!";

}
else if($credits<0)
{
echo "please enter  valid credits to Transfer!!";

}
else if($sender==$receiver)
{
echo "YOU HAVE ENTERED SAME SENDER AND RECEIVER.....TRY AGAIN!!";

}
else if($credits==0){
echo "CREDITS ENTERED AS ZERO...TRY AGAIN!!";
}

else if($sender==$receiver || $credits==0 || $credits>$num)
	echo " Please provide proper detials to transfer credits
			1.CHECK IF YOU HAVE ENTERED SAME SENDER AND RECEIVER
			2.CHECK IF CREDITS ENTERED AS ZERO
			3.CHECK IF THE CREDIT BALANCE IS INSUFFICIENT
			4.CHECK IF THE CREDITS ARE INVALID";
else{
$sl="INSERT INTO data(sender,receiver,credits) VALUES('$_POST[sender]','$_POST[receiver]','$_POST[credits]')";
mysqli_query($db,"UPDATE user_details SET credit = credit - '$credits' WHERE username='$sender'");
mysqli_query($db,"UPDATE user_details SET credit = credit + '$credits' WHERE username='$receiver'");
echo "TRANSFER SUCCESFULL!!!";
}

?>

<br>
<center>

<a href="user.php"><input type="button" class="button button1" value="VIEW ALL USER"></button></a></center>
</center>
<br><br>
<div class="footer">
  
  <a href="sparks.html" target="_blank">A SPARKS FOUNDATION INTERNSHIP</a>
</div>

</form>
</center>
</body>
</html>
