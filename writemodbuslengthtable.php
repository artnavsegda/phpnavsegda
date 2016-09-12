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
    $modbus->writeSingleRegister(0, 105, array($_REQUEST["startlevel"]), array("INT"));
    $modbus->writeSingleRegister(0, 106, array($_REQUEST["precalibrationdelay"]), array("INT"));
    $modbus->writeSingleRegister(0, 107, array($_REQUEST["calibration"]), array("INT"));
    $modbus->writeSingleRegister(0, 108, array($_REQUEST["postcalibrationdelay"]), array("INT"));
    $modbus->writeSingleRegister(0, 109, array($_REQUEST["celldelay"]), array("INT"));
    $modbus->writeSingleRegister(0, 110, array($_REQUEST["celllevel"]), array("INT"));
    $modbus->writeSingleRegister(0, 111, array($_REQUEST["zerodelay"]), array("INT"));
    $modbus->writeSingleRegister(0, 112, array($_REQUEST["zerotest"]), array("INT"));
    $modbus->writeSingleRegister(0, 113, array($_REQUEST["totalmercurydelay"]), array("INT"));
    $modbus->writeSingleRegister(0, 114, array($_REQUEST["totalmercury"]), array("INT"));
    $modbus->writeSingleRegister(0, 115, array($_REQUEST["elementalmercurydelay"]), array("INT"));
    $modbus->writeSingleRegister(0, 116, array($_REQUEST["elementalmercury"]), array("INT"));
    $modbus->writeSingleRegister(0, 117, array($_REQUEST["purge"]), array("INT"));
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

