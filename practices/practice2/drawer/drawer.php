<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drawer</title>
</head>

<body>

<?php
function numFigures($num)
{
    return isset($num) && is_numeric($num); //проверка на не ноль и число
}

function drawRectangle($width, $height, $color)
{
    echo '<svg width="' . ($width + 100) . ('" height="' . ($height + 100)) . '">
	<rect x="50%" y="50%" width="' . ($width + 100) . '" height="'. ($height + 100) . '" fill="' . $color . '"/>
</svg>';
}

function drawCircle($width, $color)
{
    echo '<svg width="' . ($width + 100) . ('" height="' . ($width + 100)) . '">' .
        '<circle cx="50%" cy="50%" r="' . ($width / 2) . '" fill="' . $color . '" />' .
        '</svg>';
}

?>

<?php
$num = $_GET["num"]; //получаем цифру
// 1010
$color = $num & 1; // 0001, 0 - красный, 1 - голубой
$height = ($num & 2) >> 1; // 0010, 0 - маленького размера, 1 - большого размера
$width = ($num & 4) >> 2; // 0100, 0 - маленького размера, 1 - большого
$form = ($num & 8) >> 3; // 1000, 0 - круг, 1 - прямоугольник

if ($color == 1) {
    $color = "cyan";
} else {
    $color = "pink";
}

if ($height == 1) {
    $height = 200;
} else {
    $height = 50;
}

if ($width == 1) {
    $width = 200;
} else {
    $width = 50;
}

if (numFigures($num)) {
    if ($form == 1) {
        drawRectangle($width, $height, $color);
    } else {
        drawCircle($width, $color);
    }
}

?>

</body>

</html>