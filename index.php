<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ROOT</title>
</head>
<?php
$jsonData ='{
	    "Alpanir":"https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/M%C3%A4nnlichen.jpg/850px-M%C3%A4nnlichen.jpg",
	    "Bretland":"https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Union_flag_1606_(Kings_Colors).svg/1280px-Union_flag_1606_(Kings_Colors).svg.png",
	    "Regnhlíf":"https://images-na.ssl-images-amazon.com/images/I/71md9jHDSgL._UL1500_.jpg"
    }';
$name = json_decode($jsonData, true);
?>

<ul>
    <?php foreach ($name as $key => $value) {
echo "<li>". $key  . " " . "<img src='" .  $value .  "' height=\"85\" width=\"82\"></li> </img></a>";} ?>
</ul>
</body>
</html>