<?php
$handle = @fopen("users.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);

    echo "<table> 
<tr><td>first_name</td>Last_name<td>email</td><td>password</td></tr> 
</table>";

}
?>