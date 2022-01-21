<?php
require("connectdb.php");
if(!isset($_GET['id'])){
	echo "Укажите id страницы.";
	exit;
}

$result = mysqli_query($connect, "SELECT * FROM Animals WHERE new_id=".$_GET['id']);

if(!$result || mysqli_num_rows($result) == 0){
	echo "В базе данных нет страницы с таким id.";
	exit;
}

$page = mysqli_fetch_assoc($result);
$name = $page["kind"];
$photo = $page["photo"];
$info = $page["info"];
$long = $page["longitude"];
$lat = $page["latitude"];
$location = $page["cage_location"];
?>