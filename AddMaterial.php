<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Leader';

$database = new mysqli('localhost',$username,$password ,$database)
or die ("unable to connect");

if (isset($_POST["addM"])){
  $MItem=$_POST["Item"];
  $MDescription=$_POST["Describtion"];
  $MUnit = $_POST["Unit"];
  $MMatertialRate=$_POST["MaterialRate"];
  $MLaborRate=$_POST["LaborRate"];
   $sql = "INSERT INTO material (ITEM,DESCRIBTION,UNIT,MATERIALRATE,LABORRATE) VALUES ('$MItem','$MDescription','$MUnit','$MMatertialRate','$MLaborRate') ";
   $result=mysqli_query($database,$sql);
   if ($result) {
     echo "Success";
   }else
   echo "Error";

}
?>
