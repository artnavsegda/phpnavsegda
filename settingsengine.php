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
    $modbus->writeSingleRegister(0, 100, array($_REQUEST["ipaddress"]), array("INT"));
    $modbus->writeSingleRegister(0, 102, array($_REQUEST["macadress"]), array("INT"));
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
