<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 03.10.18
 * Time: 22:50
 */
//$path = "uploads/".$_FILES[myImage][name];

include ("config.php");


print_r($_FILES);
$saveDir = "uploads/";

foreach ($_FILES as $file){

    $name = $file['name'];
    $type = $file['type'];
    $size = $file['size'];
//    $needTypes = ['image/jpeg'];



    for ($i = 0; $i < count($name); $i++){


        $path = $saveDir.$file['name'][$i];

        if ($size[$i] < 500000000){
            if (copy($file['tmp_name'][$i], $path)) {
                $sqlstring = "INSERT INTO gallery_db(name,tmp_name,type,size) VALUES ('".$name[$i]."','".$saveDir."','".$type[$i]."','".$size[$i]."')";
                mysqli_query($conSql, $sqlstring);
                echo "Файл успешно загружен";
            }

            else {
                echo "Возникла ошибка при загрузке!";
            }
        } else {
            echo "Невеный формат данных";
        }

    }

}








?>