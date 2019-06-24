<?php
$pdo = new PDO ('mysql:host=localhost; dbname=test123' , 'root' , 'root');

$query = $pdo->query('SELECT firstname, lastname , email FROM users ORDER by firstname');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <style>
        td {border: 1px solid black; padding 5 px 2px}
        </style>
</head>
<body>
<table>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
    </tr>
    <?php while ($row = $query->fetch()): ?>
    <tr>

        <td><?=$row['firstname']?></td>
        <td><?=$row['lastname']?></td>
        <td><?=$row['email']?></td>
    </tr>
    <?php endwhile ?>
</table>
</body>
</html>

