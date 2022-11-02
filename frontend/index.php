<?php

require_once '../backend/Method.php';

use backend\Method;

$test = new Method();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Final</title>
</head>

<body>
    <h1>Project Final</h1>
    <h3><?= $test->echoMethod1(); ?></h3>
</body>
</html>