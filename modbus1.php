<?php
/**
 * Created by PhpStorm.
 * User: artnavsegda
 * Date: 7/25/16
 * Time: 19:48
 */

require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

// Create Modbus object
///$ip = "192.168.111.132";
//$ip = "127.0.0.1";
//$ip = "192.168.1.120";
$ip = "192.168.1.114";
$modbus = new ModbusMaster($ip, "TCP");

try {
    // FC 1
    $coilData = $modbus->readCoils(0, 0, 5);
}
catch (Exception $e) {
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

try {
    // FC 3
    $coilDatase = $modbus->readCoils(0, 99, 5);
}
catch (Exception $e) {
    echo $modbus;
    echo $e;
    exit;
}


try {
// FC 3
$recData = $modbus->readMultipleRegisters(0, 8, 40);
}
catch (Exception $e) {
echo $modbus;
echo $e;
exit;
}

$floatvalues = array_chunk($recData, 4);
$i = 6;
$values = array_chunk($recData, 2);



?>
