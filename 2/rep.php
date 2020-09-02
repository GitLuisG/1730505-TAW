<?php
$Datos = array(
    'Rep' => filter_input(INPUT_POST, 'Select'),
);
$res = array('autentificado' => false, 'num' => NULL);
$res['autentificado'] = true;
$res['num'] = $Datos['Rep'];
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($res);
?>