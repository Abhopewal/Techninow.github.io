            <!--Author_Akash kumar-->
<?php

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'techninow');
$q="insert into user (fullname,username,useremail,userpass) values ('$fullname','$username','$email','$pass') ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:http://localhost/techninow/signup.php');
}
else
{
    header('location:http://localhost/techninow/login.php');
}
mysqli_close($con);
?>
