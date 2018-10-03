<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home work 3</title>
</head>
<body>

<h3>Задание  1</h3>
<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 03.10.18
 * Time: 15:47
 */

$count = 0;
while ($count <100) {
    if ($count%3 == 0){
        echo $count."; ";
    }
    $count++;
}
?>

<h3>Задание 2</h3>
<?php
$i = 0;
do{
    if ($i == 0){
        echo $i." - это ноль<br>";
    } else {
        echo ($i%2 == 0) ? ("$i - это четное число"."<br>") : ("$i - это нечетное число"."<br>");
    }
    $i++;
} while($i <= 10);
?>

<h3>Задание 3</h3>
<?php
$arrey = ["Новосибирская область" => ["Новосибирск", "Бердск", "Искитим"],
        "Московская область" => ["Мытищи","Сколково","Сокольники"],
        "Мухосранская область" => ["Муха", "Сранск", "Бельдяшки"]];

foreach ($arrey as $key => $value) {
    echo "$key:<br>".implode(",", $value)."<br>";
}
?>

<h3>Задание 4</h3>
<?php

$string = "это пробная строка для домашнего задания";





function transliteration ($string){
    $transleter = [" " => " ", "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "zh", "з" => "z", "и" => "i",
        "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "c", "т" => "t", "у" => "y",
        "ф" => "f", "х" => "h", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ъ" => "", "ы" => "j", "ь" => "", "э" => "e", "ю" => "u", "я" => "ya"];

        $newString = str_replace(' ', '_', strtr($string, $transleter));
        echo $newString;
//    $String = preg_split('//u',$string,-1,PREG_SPLIT_NO_EMPTY);
//    $newString = [];
////    print_r($newString);
//    foreach ($String as $value){
////        echo $value;
//        foreach ($transleter as $tKey => $tValue){
//                    if ($value == $tKey){
//                        $newString[] =  $tValue;
//                    }
//        }
//    }
//
//    $newString = implode($newString);
//    echo str_replace(' ', '_', $newString);

}

transliteration($string);





?>

</body>
</html>

