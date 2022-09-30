<?php

include 'Database.php';

$obj = new Database();

$obj->insert('students', ['student_name' => 'Soliy', 'age' => '20', 'city' => 'Gurlan']);
echo "Insert result is : ";
print_r($obj->getResult());

$obj->update('students', ['student_name' => 'Soliy', 'age' => '20', 'city' => 'Gurlan'], 'id="7"');
echo "Update result is : ";
print_r($obj->getResult());