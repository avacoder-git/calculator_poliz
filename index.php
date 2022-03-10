<?php

require_once __DIR__ . '/Calculate.php';

if (isset($_GET['submit'])){
    $calc = new Calculate($_GET['name']);
    if ($calc->postfixString) {
        echo PHP_EOL;
        echo 'Poliz: ' . $calc->postfixString . PHP_EOL . PHP_EOL.'<br>';
        echo 'Javob: ' . $calc->result . PHP_EOL . PHP_EOL;
    } else {
        echo $calc->result . PHP_EOL;
    }
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="" method="GET">

    <input type="text" name="name" value="">


    <button type="submit" name="submit"> Hisoblash</button>


</form>


</body>
</html>