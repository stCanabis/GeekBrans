<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 03.10.18
 * Time: 22:50
 */
$path = "uploads/".$_FILES[myImage][name];

//function checkFiles($_FILES){
//
//    foreach ($_FILES[myImage] as $key => $value){
//        if($key == "type"){
//            foreach ($key as $typeValue){
//                return strpos($typeValue, "image");
//            }
//        }
//    }
//
//
//}
//
//echo checkFiles($_FILES);

//$path = "files/".$_FILES[myfile][name];

if(copy($_FILES[myImage][tmp_name], $path))
	echo "Файл успешно загружен";

else {
    echo "Возникла ошибка при загрузке!";
    echo $path;
    echo $_FILES[myImage][tmp_name];

}




?>