<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'prebuy';
//connect with the database
$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_POST["keyword"];
//get matched data from skills table
$query = ($conn,"SELECT * FROM `product` JOIN `prebuy_deals` ON `product`.`product_model`=`prebuy_deals`.`deal_model_number` WHERE `prebuy_deals`.`deal_status`='1' AND  `product`.`product_name` LIKE '%".$searchTerm."%' ORDER BY `prebuy_deals`.`deal_id` ASC");
   $qry = mysqli_query($query);
while ($row = mysqli_fetch_assoc($qry)) {
    $data[] = $row['product_name'];
}
//return json data
echo json_encode($data);
?>