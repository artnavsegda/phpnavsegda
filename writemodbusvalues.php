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
    switch ($_REQUEST["registertype"])
    {
        case "coil":
            $modbus->writeSingleCoil(0, $_REQUEST["registeraddr"], array(TRUE));
            break;
        case "holdingregister":
            $modbus->writeSingleRegister(0, $_REQUEST["registeraddr"], array($_REQUEST["valuetowrite"]), array("INT"));
            break;
        default:
            break;
    }
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

