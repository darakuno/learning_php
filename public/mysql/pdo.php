<?php

$HOST = 'localhost';
$db = 'world';
$user = 'root';
$pass = '1234';
$charset = 'utf8';

$dsn = "mysql:host=$HOST;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

// $stmt = $pdo->query("SELECT Name FROM city");
// var_dump($stmt);

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo "Name". $row["Name"]. '<br>';
// }

$country_code = 'AFG';
$stmt = $pdo->prepare("SELECT Name FROM city WHERE CountryCode = ?");
$stmt->execute(['AFG']);
foreach ($stmt as $row) {
    echo "Name ".$row['Name'].'<br>';
}

$country_code = 'AFG';
$stmt = $pdo->prepare("SELECT Name FROM city WHERE CountryCode = :country_code");
$stmt->execute(['country_code' => 'AFG']);
// foreach ($stmt as $row) {
//     echo "Name ".$row['Name'].'<br>';
// }

while ($row = $stmt->fetch(PDO::FETCH_LAZY)) { 
    echo $row[0].'<br>';
    echo $row['Name'].'<br>';
    echo $row->Name.'<br>';
}