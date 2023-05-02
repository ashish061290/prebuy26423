<?php
include "includes/config.php";

if(isset($_GET['pincode']))
{
  $sql ="SELECT * FROM `city_details` WHERE `pincode` LIKE '".$_GET['pincode']."%'";
  $result= mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
  	?>
<li onclick='change(this.innerHTML)' class="list-group-item"><?=$row['pincode']?></li>
  	<?php
  }
}
if(isset($_GET['pincode1']))
{
  $sql ="SELECT * FROM `city_details` WHERE `pincode`='".$_GET['pincode1']."'";
  $result= mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
echo $row['city'];
  }
}
?>