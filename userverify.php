<?php
include "includes/config.php";

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$token = $_GET['token'];

$r = "SELECT * FROM `users` WHERE `user_id`='".$id."'";
$ref = mysqli_query($conn,$r);
$ref = mysqli_fetch_assoc($ref);
$name  = $ref['username'];
if($ref['token']==$token){
$update = "UPDATE `users` SET `user_status`=1 WHERE `user_id`='".$id."'";
mysqli_query($conn,$update);
	echo "<script>alert('Dear $name, Your email has been verified, you can now login');window.location.href='Registration.php'</script>";
}
else{
echo "<script>alert('Email not verified please contact prebuy support');window.location.href='contact.php'</script>";	
}	
}
?>