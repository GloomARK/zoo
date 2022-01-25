<?php
require("connect_db.php");
if(!isset($_GET['id'])){
	echo "Укажите id страницы.";
	exit;
}

$result = mysqli_query($conn, "SELECT * FROM Animals WHERE id=".$_GET['id']);

$page = mysqli_fetch_assoc($result);
$long = $page["longitude"];
$lat = $page["latitude"];
?>
<script>
	var lat = "<?php echo $lat ?>";
	var long = "<?php echo $long ?>";
</script>
<?php
$content = "<script type=\"text/javascript\">
ymaps.ready(init);

function init(){
    var map = new ymaps.Map('map',{
        center: [lat, long],
        zoom: 18,
        controls: ['zoomControl'],
        behaviors: ['drag']
    });
	var placemark = new ymaps.Placemark([lat, long], {
	});

	map.geoObjects.add(placemark);
}
</script>
<div class=\"container-fluid mx-1 info-block\">
	<div class=\"row\">
		<div class=\"col-lg-4\">
			<h4>".$page["kind"]."</h4>
			<img class=\"ehd-file\" src=\"//op.mos.ru/MEDIA/showFile?id=".$page["photo"]."&size=medium\" style=\"max-height: 400px; height: 100%; max-width: 600px; width: 100%;\" alt=\"".$page["photo"]."\">
			<div class=\" text-block\">
				".$page["info"]."
			</div>
		</div>
		<div class=\"col-lg-8\">
			<div class=\"map-block\">
				<div id=\"map\" class=\"map\"></div>
			</div>
		</div>
	</div>
</div>";
require("index.php");
?>
