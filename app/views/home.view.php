<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT?>/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        foreach ($data as $keys ) {
           
           foreach ($keys as $key => $value) {
            print_r("key: \n");
            print_r($key->eventName);
           }
        }
    ?>
</body>
</html>
