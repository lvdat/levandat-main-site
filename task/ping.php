<?php
// recommend use in cronjob to update automally.
define('ACCEPTED_INCLUDE', true);
include '../function.php';
$ar = getServiceToArray();
for($i = 0; $i < sizeof($ar); $i++){
    $url = $ar[$i]['url'];
    $ping = pingDomain(parseDomainFromURL($url));
    updatePing($ar[$i]['ID'], $ping);
}