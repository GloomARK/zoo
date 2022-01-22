<?php 
require("connect_db.php");

if(isset($_POST['submit'])){
    $search = $_POST['search'];
    $result = mysqli_query($conn, "SELECT * FROM Animals WHERE kind LIKE '%".$search."%'");
}

$content = "<div class=\"list-group\">";

if(!$result || mysqli_num_rows($result) == 0){
	$content .= "<h4>Результатов по запросу поиска не найдено.</h4></div>";
}

else{
    while($page = mysqli_fetch_assoc($result)){
        $content .= "<a href=\"page.php?id=".$page["id"]."\" class=\"list-group-item list-group-item-action\" aria-current=\"true\">".$page["kind"]."</a>";
    }
    $content .= "</div>";
}
require("index.php");
?>