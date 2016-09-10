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
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["startlevel"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["precalibrationdelay"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["calibration"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["postcalibrationdelay"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["celldelay"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["celllevel"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["zerodelay"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["zerotest"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["totalmercurydelay"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["totalmercury"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["elementalmercurydelay"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["elementalmercury"]), array("INT"));
    $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["purge"]), array("INT"));
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

