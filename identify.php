<?php
include 'dbh.php';

$code=$_POST['code'];
$sql="SELECT * FROM identification WHERE code='$code'";
$result=$conn->query($sql);


if(!$row=$result->fetch_assoc()){
header("Location:error.php");

} else {

header("Location:index.html");
}
?>