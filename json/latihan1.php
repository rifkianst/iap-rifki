<?php

// $mahasiswa = [
//     [
//         "nama" => "Rifki Aulia",
//         "nim" => "2217020049",
//         "email" => "rifkiaulia@gmail.com"
//     ],
//     [
//         "nama" => "Ananda Aulia",
//         "nim" => "2617020050",
//         "email" => "anandaaulia@gmail.com"
//     ],
//     [
//         "nama" => "Nasution Aulia",
//         "nim" => "2917020051",
//         "email" => "nasutionaulia@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpmvc', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>