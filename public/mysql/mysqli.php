<?php

$db = new mysqli('localhost', 'root', '1234', 'world');
if ($db->connect_error) {
    echo 'no'.$db->connect_error;
    die;
}
// if ($res = $db->query(('SELECT * FROM country'))) {
//     while ($row = $res->fetch_assoc()) {
//         echo "code: ".($row['Code']).' Name: '.$row['Name'];
//         break;
//     }
// }

// if ($res = $db->query("SELECT Name FROM city WHERE CountryCode = 'UKR'")) {
//     while ($row = $res->fetch_assoc()) {
//     echo "Name: ".($row['Name']).'<br>';
//     }
// }

//sql-инъекции
$country_code = 'UKR';
if ($stmt = $db->prepare("SELECT Name FROM city where CountryCode = ?")) {
    $stmt->bind_param("s", $country_code);
    $stmt->execute();
    $stmt->bind_result($Name);
    while ($stmt->fetch()) {
        echo "Name: ".$Name.'<br>';
    }
}