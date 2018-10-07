<?php
include ("config.php");

$findFiles = mysqli_query($conSql, "select * from gallery_db");
$foundedFiles = [];
while ($data = mysqli_fetch_array($findFiles)){
    echo "<img src='".$data['tmp_name'].$data['name']."' alt='' class='gallery'>";
}






//
?>