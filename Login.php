<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Leader';

$database = new mysqli('localhost',$username,$password ,$database)
or die ("unable to connect");

if (isset($_POST["LoginBtn"])){
  $Username=$_POST["Username"];
  $Userpassword=$_POST["Userpassword"];
   $sql = "SELECT * FROM user WHERE Username='$Username' AND Userpassword='$Userpassword'";
   $result=mysqli_query($database,$sql);

   if (mysqli_num_rows($result)==1) {
     include('Home.html');

     // code...
   }else {
     echo "Wrong password";
   }

}
?>
