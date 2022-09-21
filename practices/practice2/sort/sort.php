<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sort</title>
</head>

<body style="font-size: 55pt">
<?php
//Сортировка слиянием
function mergeSort(array $arr)
{
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }

    $left = array_slice($arr, 0, (int)($count / 2));
    $right = array_slice($arr, (int)($count / 2));

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right)
{
    $ret = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            array_push($ret, array_shift($left));
        } else {
            array_push($ret, array_shift($right));
        }
    }

    array_splice($ret, count($ret), 0, $left);
    array_splice($ret, count($ret), 0, $right);

    return $ret;
}


$arr = $_GET["arr"];
foreach (mergeSort(explode(",", $arr)) as $item) {
    echo $item . PHP_EOL;
};
?>
</body>

</html>


