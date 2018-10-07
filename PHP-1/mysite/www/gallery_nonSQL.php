<?php

include ("config.php");
///**
// * Created by PhpStorm.
// * User: andrei
// * Date: 04.10.18
// * Time: 12:54
// */
$path_old = "img/";
$path_upload = "uploads/";

$foundedFiles = scandir($path_old);
//print_r($foundedFiles);

//function addinSql ($conSql){
//    $path = "img/";
//    $names = [];
//    $type = [];
//
//    $foundedFiles = scandir($path);
//
//    for ($i = 0; $i < count($foundedFiles); $i++){
//        if ($foundedFiles[$i] !="." && $foundedFiles[$i] != ".."){
//            $names[] = $foundedFiles[$i];
//            echo $foundedFiles[$i];
//            $string = "INSERT INTO gallery_db(name,tmp_name,type,size) VALUES ('".$foundedFiles[$i]."','".$path."','test','test')";
//            echo $string;
//            mysqli_query($conSql, $string);
//
//
//        }
//    }
//
//
//
//
//
//
////    print_r($names);
//
//}
//
//addinSql($conSql);


$foundedFiles = scandir($path_old);
for ($i = 0; $i < count($foundedFiles); $i++){
    if ($foundedFiles[$i] != '.' && $foundedFiles[$i] != '..' ){
        echo '<img src="' . $path_old . $foundedFiles[$i] . '" alt="" class="gallery">';
    }
}

$uploadedFiles = scandir($path_upload);

for ($i = 0; $i < count($uploadedFiles); $i++) {
    if ($uploadedFiles[$i] != '.' && $uploadedFiles[$i] != '..' ){
        echo '<img src="' .$path_upload . $uploadedFiles[$i] . '" alt="" class="gallery">';
    }
}




//
//<img src="img/1.jpg" alt="" class="gallery">
//    <img src="img/2.jpg" alt="" class="gallery">
//    <img src="img/3.jpg" alt="" class="gallery">
//    <img src="img/4.jpg" alt="" class="gallery">
//    <img src="img/5.jpg" alt="" class="gallery">
//    <img src="img/6.jpg" alt="" class="gallery">
//    <img src="img/7.jpg" alt="" class="gallery">
//?>