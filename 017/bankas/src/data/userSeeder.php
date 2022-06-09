<?php

$users = [
    [ 'id'=> 1, 'name' => 'Albertas', 'psw'=> md5('Albertas'), 'full_name' => 'Albertas Albertauskas'],
    [ 'id'=> 2, 'name' => 'Zibute', 'psw'=> md5('Zibute'), 'full_name' => 'Zibute Zibutaite'],
    [ 'id'=> 3, 'name' => 'Virgis', 'psw'=> md5('Zibutis'), 'full_name' => 'Virgis Zibutis'],
];
file_put_contents(__DIR__ . '/users.json', json_encode($users));