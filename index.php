<?php

include 'Database.php';

$obj = new Database();

//$obj->insert('students', ['student_name' => 'Soliy', 'age' => '20', 'city' => 'Gurlan']);
//echo "Insert result is : ";
//print_r($obj->getResult());

//$obj->update('students', ['student_name' => 'Soliy', 'age' => '20', 'city' => 'Gurlan'], 'id="7"');
//echo "Update result is : ";
//print_r($obj->getResult());

//$obj->delete('students', 'id="6"');
//echo "Delete result is : ";
//print_r($obj->getResult());

//$obj->sql('SELECT * FROM students WHERE age="20"');
//echo "SQL result is : ";
//print_r($obj->getResult());

//$obj->select('students', '*', null, null, null, null);
//echo "SELECT result is : ";
//print_r($obj->getResult());

$obj->pagination('students', null, null, 2);