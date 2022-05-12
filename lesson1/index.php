<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first site</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    
    <!-- 
        коментарий на html
    -->
    <?php
    if(mt_rand(0,1)){
        echo "<div class=\"blue block\">Blue text</div>";//первый коментарий на php
    }else{
        echo "<div class=\"red block\">Red text</div>";# второй коментарий на php
    }
    require 'second.php'
    // выдает ошибку, если такого файла не обнаружится 
    // быстрые клавиши для добавления коментария на VSCode Ctrl + /
    /*
    многострочный коментарий на php
    */
    ?>
</body>
</html>