<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title><?="новая стр"; ?></title>
</head>
<body>

    <div class="imageContainer">
    <img src="img/pngwing.com (1).png" alt=""> 
    </div>
    <p class="arial">вфывыфывфы</p>
    <?php
    echo date(DATE_RSS);
    ?>

    <script src="js.js"></script>
    <br>
    <?php
    if(mt_rand(0,1)){
    ?>    
    <div style="color: blue">Синисй</div>
    <?php
    } else {
    ?>
    <div style="color: red"> Krasniy </div>
    <?php
    }
    ?>
    <br>

    <?php
    echo "index <br>";
    echo '<br>';
    include "second.php";

    ?>
    <br>

    <?php
    $question = 'eblan?';
    $arr = ['key1' => '1' ,'key2' => '2' ,'key3' => '3','key4' => '4' ,'key5' => '5'];
    echo $question;
   
    var_dump($arr);

    ?>
   <br>
    <?php
    $str;
    if(empty($str)){
        echo '----------';
    }else{
        echo '+++++++++++g';
    }
    ?>

    
</body>
</html>