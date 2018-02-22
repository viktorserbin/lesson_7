<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 7</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">
    Написать функцию, которая будет принимать в качестве аргумента не пустой массив,
    будет находить минимальное и максимальнрое значения массива и будет возвращать
    массив найденых ['min'=>$min, 'max' => $max] значений.
    <br /><br />
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
    <br /><br />
<?php
/**
 * Написать функцию, которая будет принимать в качестве аргумента не пустой массив,
будет находить минимальное и максимальнрое значения массива и будет возвращать
массив найденых ['min'=>$min, 'max' => $max] значений.
 */

$range=1000;
$array_size=10;

function array_min_max($array){
    foreach ($array as $key => $value) {
        if ($key==0) {
            $value_min = $value;
            $value_max = $value;
        }
        elseif ($key!=0){
            if ($value<$value_min) {
                $value_min=$value;
            }
            if ($value>$value_max) {
                $value_max=$value;
            }
        }
        $min_max=array("min" =>$value_min, "max" => $value_max);
    }
    return($min_max);
}

for ($i=0;$i<=$array_size;$i++){
    $numbers[] = rand(0,$range);
}

$min_max_value = array_min_max($numbers);

echo "Изначальный массив:".PHP_EOL."<br /> ".PHP_EOL;
echo "<pre>".PHP_EOL;
print_r($numbers,0);
echo "</pre>".PHP_EOL;

$content = vsprintf("Минимальное значение %d максимальное значение %d.", $min_max_value);
echo "{$content}".PHP_EOL."<br /><br />".PHP_EOL;

echo "Массив с минимальным и максимальным значениями:".PHP_EOL."<br />".PHP_EOL;
echo "<pre>".PHP_EOL;
print_r($min_max_value,0);
echo "</pre>".PHP_EOL;
?>
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
</div>
</body>
</html>