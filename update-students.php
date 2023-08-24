<?php

$string = file_get_contents('database/studenti.json');

$students = json_decode($string, true);

foreach ($students as $index => $student) {
    $students[$index]['email'] = 'pietro';
}

$studentsJson = json_encode($students);

file_put_contents('database/studenti.json', $studentsJson);
