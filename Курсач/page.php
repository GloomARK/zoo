<?php
require("connect_db.php");
if(!isset($_GET['id'])){
	echo "Укажите id страницы.";
	exit;
}

$result = mysqli_query($conn, "SELECT * FROM Animals WHERE id=".$_GET['id']);

if(!$result || mysqli_num_rows($result) == 0){
	echo "В базе данных нет страницы с таким id.";
	exit;
}

$page = mysqli_fetch_assoc($result);
// $name = $page["kind"];
// $photo = $page["photo"];
// $info = $page["info"];
// $long = $page["longitude"];
// $lat = $page["latitude"];
// $location = $page["cage_location"];

$content = "
<div class=\"container-fluid mx-1 info-block\">
	<h4>".$page["kind"]."</h4>
	<img class=\"ehd-file\" src=\"//op.mos.ru/MEDIA/showFile?id=".$page["photo"]."&size=medium\" style=\"max-height: 400px; height: 100%\" alt=\"".$page["photo"]."\">
	<div class=\" text-block\">
		".$page["info"]."
	</div>
</div>";
require("index.php");
?>