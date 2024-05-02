<?php


$method = $_SERVER['REQUEST_METHOD'] ?? null;


if ($method === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];

    require_once '../classes/CalculatorClass.php';
    $calc = new CalculatorClass((int)$num1, (int)$num2, (string)$oper);

    $result = $calc->calculate();

    echo $result;
}
