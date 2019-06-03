<?php
$parametrs = ['operand1', 'operator', 'operand2'];
foreach ($parametrs as $parameter) {
    if (empty($_POST['operand1'])) {
        die('не найден элемент' . $parameter);
    }
}
$operand1 = floatval($_POST['operand1']);
$operand2 = floatval($_POST['operand2']);
$operator = $_POST['operator'];

switch ($operator) {
    case  '+':
        $result = $operand1 + $operand2;
        break;
    case  '-':
        $result = $operand1 - $operand2;
        break;
    case  '*':
        $result = $operand1 * $operand2;
        break;
    case  '/':
        $result = $operand1 / $operand2;
        break;
    default:
        die('неверный оператор' . $operator);
}
echo $operand1 . ' ' . $operator . ' ' . $operand2 . ' = ' . $result;