<?php
// deny access from internet
if(!defined('ACCEPTED_INCLUDE')){
    header('Content-type: text/javascript');
    die('Access Denied.');
};

// Include config to read database;
include 'config.php';

// All additional function

function getService(){
    // Tra ve du lieu bang service
    global $conn;
    $sql = 'SELECT * FROM service';
    $rel = mysqli_query($conn, $sql);
    return mysqli_fetch_all($rel);
}

