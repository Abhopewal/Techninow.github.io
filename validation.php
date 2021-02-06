            <!--Author_Akash kumar-->   
<?php
session_start();
$username=$_POST['username'];
$userpass=$_POST['userpass'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'techninow');
$q="select * from user where username='$username' && userpass='$userpass' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['username']=$username;
header('location:http://localhost/techninow/dashboard.php');
}
else
{
    header('location:http://localhost/techninow/login.php');
}
?>