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
    if ($_REQUEST["registertype"] == "coil")
    {
        $recData = $modbus->readCoils(0, $_REQUEST["registeraddr"], 1);
    }
}

catch (Exception $e)
{
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

switch ($_REQUEST["registertype"])
{
    case "coil":
        //$recData = $modbus->readCoils(0, 0, 5);
        break;
    case "discrete":
        //$recData = $modbus->readInputDiscretes(0, 0, 2);
        break;
    case "inputregister":
        //$recData = $modbus->readMultipleInputRegisters(0, 0, 2);
        break;
    case "holdingregister":
        //$recData = $modbus->readMultipleRegisters(0, 12288, 6);
        break;
    default:
        break;
}

?>