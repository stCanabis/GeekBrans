<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 08.10.18
 * Time: 21:55
 */
$path = "../img/";
$foundedFiles = scandir($path);
foreach ($foundedFiles as $name){
    if ($name !='.' && $name !='..'){

        echo '<div class="img"><img src="'.$path.$name.'" alt=""></div>';
    }
}



?>