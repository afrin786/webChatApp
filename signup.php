<?php
include 'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['Password'];

$sql="insert into signup(username,email,password)
values('$uname','$email','$pass')";
$result=$conn->query($sql);
if($result)
{
   header("Location:index.html?msg=signup successfull...");
}
else
{
	header("Location:index.html?msg=signup failed...");
}

?>