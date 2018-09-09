<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Leader';

$database = new mysqli('localhost',$username,$password ,$database)
or die ("unable to connect");

if (isset($_POST["Search"])){
  $projectname=$_POST["projectname"];
   $sql = "SELECT * FROM project WHERE project_name='$projectname'";
   $result=mysqli_query($database,$sql);

   if (mysqli_num_rows($result)==1) {
     include('ProjectL1.html');

     // code...
   }else {
     echo "Wrong password";
   }

}
?>
