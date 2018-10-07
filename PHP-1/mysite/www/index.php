<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
    <style>

        h1{
            text-align: center;
        }
        .container{
           display: inline-block;
        }
        .gallery{
            margin: 3px 3px;
            float: left;
            width: 300px;
            height: 200px;
        }
        .form{
            margin: 20px auto;
            height: 20px;
            width: 500px;
            text-align: center;
            clear: both;
            border: 3px solid #8F0000;
        }
    </style>
</head>
<body>
<?php include ("config.php"); ?>


<h1>Галерея изображений</h1>
<hr>
<div class="container">
<?php require 'gallery.php'; ?>

</div>
<div class="form">
    <form action="server.php" method="post" enctype="multipart/form-data">
        <input multiple type="file" name="myImage[]">
        <input type="submit">
    </form>
</div>




</body>
</html>