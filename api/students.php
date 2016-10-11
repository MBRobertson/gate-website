<?php
require_once 'config.php';

$db = new mysqli($host, $user, $pass, $dbname);
$query = <<<SQL
    SELECT *
    FROM `students`
SQL;

if (isset($_GET['id'])) {
    $id = $db->real_escape_string($_GET['id']);
    $query .= " WHERE `id`=" . $id;
} elseif (isset($_GET['catagory'])) {
    $catagory = $db->real_escape_string($_GET['catagory']);
    $query .= " WHERE `catagory`=\"" . $catagory . "\"";
}

$result = $db->query($query);

$rows = [];

while($row = $result->fetch_assoc()){
    $rows[] = $row;
}

header('Content-Type: application/json');
echo(json_encode($rows));

$db->close();
?>