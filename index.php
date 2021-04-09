<?php

require __DIR__ . "/vendor/autoload.php";

use Controller\Calc;

echo 1 + 4 + 5;

$calculadora = new Calc();

echo $calculadora->soma();
