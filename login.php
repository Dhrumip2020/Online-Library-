<?php

$servername="localhost";
$username="root";
$password="";
$database="userregistration";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("not connected".mysqli_connect_error());
}
else{
    echo"connected";
}


$username = $_POST['username'];   

$password=$_POST['password'];



$sql="select* from usertable where name='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{ 
    header('location:home.html');
}

 
    else{
          header('location:login.html');
          
       
}

?>  