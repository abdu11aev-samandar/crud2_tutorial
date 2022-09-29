<?php

include 'Database.php';

$obj = new Database();

$obj->insert('students', ['student_name' => 'Soliy', 'age' => '20', 'city' => 'Gurlan']);
echo "Insert result is : ";
print_r($obj->getResult());