<?php
header("Content-Type: application/json");
require_once("database.php");

// Get the subjects
$sql = "SELECT name, year FROM subjects";
$result = $conn->query($sql);

$subjects = [];

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        $subjects["Year" .$rows["year"]][] = $rows["name"];
    }
}

echo json_encode($subjects);