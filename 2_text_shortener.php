<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 7</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">
    Написать функцию, которая будет возвращать текст анонса.
    Она должна принимать 2 аргумента: строку текста, и количество символов.
    Если строка текста длиннее 2-го аргумента, то ее необходимо обрезать по границе
    ближайшего слова и добавить ... иначе возвращать строку без изменений.
    <br /><br />
<?php
/**
 * Написать функцию, которая будет возвращать текст анонса.
Она должна принимать 2 аргумента: строку текста, и количество символов.
Если строка текста длиннее 2-го аргумента, то ее необходимо обрезать по границе
ближайшего слова и добавить ... иначе возвращать строку без изменений.
 */
$long_text = "Съешь же ещё этих мягких французских булок да выпей чаю.";
//$long_text = "First character's position is 0. Second character position is 1, and so on.";
$max_length = 24;
function text_shortener ($txt, $length) {
    $current_lenght = mb_strlen($txt,"UTF-8");
    if ($length>=$current_lenght){
        return ($txt);
    }
    else {
        $word_array = str_word_count($txt, 1, "АаБбВвГгЇїІіЄєДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
        foreach ($word_array as $key => $value) {
            $position = mb_strpos($txt,$value,0,"UTF-8");
            $end_position = $position + mb_strlen($value,"UTF-8");
            if ($end_position>$length){
                break;
            }
            $prvious_position = $end_position;
//            echo "{$position} {$end_position} {$value}<br />";
        }
        return (mb_substr($txt,0, $prvious_position,"UTF-8")." ...");
    }
}
$short_text = text_shortener($long_text,$max_length);
echo "<pre>".PHP_EOL;
echo "Ограничитель : {$max_length}<br />".PHP_EOL;
echo "long_text    : {$long_text}<br />".PHP_EOL;
echo "short_text   : {$short_text}<br />".PHP_EOL;
echo "</pre>".PHP_EOL;
?>
</div>
</body>
</html>