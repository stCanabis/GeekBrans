<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 11.10.18
 * Time: 13:05
 */
$conSql = mysqli_connect("localhost", "debian-sys-maint", "AmAANrDWfpHzwhGE", "test_db");


$sqlString = 'INSERT INTO post(name,suname) VALUES("'.$_POST["name"].'","'.$_POST["suname"].'")';
mysqli_query($conSql, $sqlString);




?>