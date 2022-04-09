<?php
// FILE TRA VE DU LIEU KHI CO DU LIEU

$data = array('status' => '', 'code' => '', 'des' => '', 'data' => '');
header('Content-type: text/json');
define('ACCEPTED_INCLUDE', true);
require 'function.php';

if(!isset($_GET['type'])){
    $data['status'] = 'error';
    $data['des'] = 'Missing or unvalid params on request.';
}else{
    // Neu co request tu client.
    $req = $_GET['type']; // Lay request.
    if($req == 'service'){
        // request lay thong tin server

        if(!isset($_GET['field']) || $_GET['field'] == 'all'){
            // neu khong co field thi mac dinh la field 'all'
            $data['status'] = 'success';
            $data['code'] = '200';
            $data['des'] = 'Get all service data';
            $data['data'] = getServiceToArray();
        }


    }



}


?>
<?=json_encode($data)."\n"?>