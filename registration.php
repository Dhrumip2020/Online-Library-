<?php
header('location:login.html');
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


$username=$_POST['username'];   
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$sql="select* from usertable where name='$username'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1) 
{
    echo "username already taken";
}
 
    else{
        $reg="insert into usertable values('$username','$phone','$password','$cpassword')";
         
       

        if(mysqli_query($conn,$reg))
{
Echo "successfull";
}
else
{
ECHO "FAILED";
}
}

?>