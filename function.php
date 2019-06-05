<?php
function saveUser(string $first_name, string $last_name, string $email, string $password): bool
{
    $file = fopen('users.txt', 'a');
    if ($file === false) {
        return false;
    }
    $row = sprintf("%s\t%s\t%s\t%s\n" , $first_name,  $last_name, $email,  $password);
    fputs($file, $row);
    fclose($file);
    return true;
}