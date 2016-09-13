<?php
/**
 * Created by PhpStorm.
 * User: art
 * Date: 8/15/16
 * Time: 4:52 AM
 */
require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster($_REQUEST["host"], "TCP");

try
{
    $modbus->writeSingleRegister(0, 100, array($_REQUEST["ip1"],$_REQUEST["ip2"]), array("INT"));
    $ipadress[0] = $_REQUEST["ip2"];
    $ipadress[1] = $_REQUEST["ip3"];
    $modbus->writeSingleRegister(0, 101, $ipadress, array("INT"));
    $macadress[0] = $_REQUEST["mac1"];
    $macadress[1] = $_REQUEST["mac2"];
    $modbus->writeSingleRegister(0, 102, $macadress, array("INT"));
    $macadress[0] = $_REQUEST["mac3"];
    $macadress[1] = $_REQUEST["mac4"];
    $modbus->writeSingleRegister(0, 103, $macadress, array("INT"));
    $macadress[0] = $_REQUEST["mac5"];
    $macadress[1] = $_REQUEST["mac6"];
    $modbus->writeSingleRegister(0, 104, $macadress, array("INT"));
    $modbus->writeSingleCoil(0, 100, array(TRUE));
    $modbus->writeSingleCoil(0, 101, array(TRUE));
}
catch (Exception $e)
{
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

// Print status information
echo "</br>Status:</br>" . $modbus;

?>
