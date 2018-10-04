<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 03.10.18
 * Time: 22:50
 */
//$path = "uploads/".$_FILES[myImage][name];

print_r($_FILES);


foreach ($_FILES as $file){

    $name = $file['name'];
    $type = $file['type'];
    $size = $file['size'];
    $needTypes = ['image/jpeg'];



    for ($i = 0; $i < count($name); $i++){


        $path = "uploads/".$file['name'][$i];
        if (in_array($type[$i], $needTypes) && $size[$i] < 500000){
            if (copy($file['tmp_name'][$i], $path))
                echo "Файл успешно загружен";

            else {
                echo "Возникла ошибка при загрузке!";
            }
        } else {
            echo "Невеный формат данных";
        }

    }

}








?>