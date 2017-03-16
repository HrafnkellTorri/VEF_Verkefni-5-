<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ROOT</title>
</head>
<?php
$url ="myndi.json";
$jsondata = file_get_contents($url);
$name = json_decode($jsondata,true);
$jsonData = json_encode($json_array);?>
<form>
    Nafn Myndar:<br>
    <input type="text" name="Nafnmyndar" value="<?php $jejk ?>"><br>
    Link Myndar:<br>
    <input type="text" name="Linkur" value="<?php $jejk2 ?>">
    <input type="submit" value="Setja inn mynd">
</form>
<?php
$jsonData = json_encode($jejk);
$jsonData = json_encode($jejk2);
?>

<ul>
    <?php foreach ($name as $key => $value) {
echo "<li>". $key  . " " . "<img src='" .  $value .  "' height=\"85\" width=\"82\"></li> </img></a>";} ?>
</ul>
</body>
</html>
