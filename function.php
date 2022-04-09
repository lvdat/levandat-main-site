<?php
// deny access from internet
if(!defined('ACCEPTED_INCLUDE')){
    header('Content-type: text/javascript');
    die('Access Denied.');
};

// Include config to read database;
include 'config.php';

// All additional function

function getServiceToArray(){
    // Tra ve du lieu bang service
    global $conn;
    $sql = 'SELECT * FROM service';
    $rel = mysqli_query($conn, $sql);
    $kq = array();
    for($i = 0; $kq[$i] = mysqli_fetch_assoc($rel); $i++);
    array_pop($kq);
    return $kq;
}

function updatePing($ID, $ping){
    global $conn;
    $sql = "UPDATE service SET ping = $ping WHERE ID = $ID";
    return mysqli_query($conn, $sql);
}

function pingDomain($domain){
    error_reporting(0);
    // ping to domain, return ping if live, or -1 if site down
    $starttime = microtime(true);
    $file      = fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file) $status = -1;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    return $status;
}

function parseDomainFromURL($url){
    $p = parse_url($url);
    return $p['host'];
}