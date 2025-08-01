<?php
header("Content-Type: application/json");

// GET থেকে name নাও, না থাকলে 'Guest'
$name = isset($_GET['name']) ? $_GET['name'] : 'Guest';

// রেসপন্স ডাটা
$response = [
    "status" => "success",
    "message" => "Hello, $name! This is your simple PHP API.",
];

// JSON আকারে রিটার্ন করো
echo json_encode($response);
