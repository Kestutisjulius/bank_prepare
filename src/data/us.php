<?php
$users = [
    ['id'=>1, 'name'=>'petras', 'full_name'=>'Petrovic Povilas', 'psw'=>md5('123')],
    ['id'=>2, 'name'=>'lina', 'full_name'=>'Lina Linauskaite', 'psw'=>md5('123')],
    ['id'=>3, 'name'=>'briedis', 'full_name'=>'Ragai Raguoti', 'psw'=>md5('123')]
];
file_put_contents(__DIR__.'./users.json', json_encode($users));