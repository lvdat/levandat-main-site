<?php
// recommend use in cronjob to update automally.

define('ACCEPTED_INCLUDE', true);
include '../function.php';

$ar = getServiceToArray();

var_dump($ar);

for($i = 0; $i < sizeof($ar); $i++){
    $ID = $ar[$i]['ID'];
    $url = $ar[$i]['url'];
    $ping = pingDomain(parseDomainFromURL($url));
    updatePing($ID, $ping);
}