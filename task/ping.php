<?php
// recommend use in cronjob to update automally.
define('ACCEPTED_INCLUDE', true);
require $_SERVER['DOCUMENT_ROOT']. '/function.php';
$ar = getServiceToArray();
for($i = 0; $i < sizeof($ar); $i++){
    $url = $ar[$i]['url'];
    if($url == NULL) continue;
    $ping = pingDomain(parseDomainFromURL($url));
    updatePing($ar[$i]['ID'], $ping);
}