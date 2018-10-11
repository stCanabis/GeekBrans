<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 08.10.18
 * Time: 21:55
 */

$path = "../img/";
$foundedImg = scandir($path);
foreach ($foundedImg as $img) {
    if ($img != '.' && $img != '..') {
        $imgPath = '"'.$path.$img.'"';
        echo "<div class='galleryImg col-lg-3 col-md-4 col-sm-6' style='background-image: url(".$imgPath.")'></div>";
    }
}

?>