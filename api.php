<?php
	
header("Access-Control-Allow-Origin: *");

$string = file_get_contents('database/studenti.json');

if (isset($_GET['last_name'])) {
    // Filtro i dati
    $students = json_decode($string, true);
    $responseData = [];

    foreach ($students as $student) {
        if ($student['last_name'] == $_GET['last_name']) {
            $responseData[] = $student;
        }
    }

    header('Content-Type: application/json');

    echo json_encode($responseData);
}
else {
    header('Content-Type: application/json');
    
    echo $string;
}

// $students = json_decode($string, true);

// $students = [
//     [
//         'name' => 'Mario',
//         'last_name' => 'Rossi'
//     ],
//     [
//         'name' => 'Giovanna',
//         'last_name' => 'Bianchi'
//     ],
// ];

// header('Content-Type: application/json');

// echo json_encode($students);


/* 

    json_encode => trasforma un array di PHP in una stringa JSON
    json_decode => trasforma una stringa JSON in un array/oggetto di PHP

*/