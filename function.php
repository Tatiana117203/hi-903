<?php
function saveUser(string $firstname, string $lastname, string $email, string $password): bool
{
    $pdo = new PDO('mysql:host=localhost;dbname=test123', 'root' , 'root');
    $query = $pdo->prepare ('
    insert into users (firstname, lastname, email, password)
    values (:firstname, :lastname, :email, :password)
      ');
    $query->bindValue('first_name', $firstname);
    $query->bindValue('last_name', $lastname);
    $query->bindValue('email' , $email);
    $query->bindValue('password' , $password);
    $query->execute();

    return true;
}