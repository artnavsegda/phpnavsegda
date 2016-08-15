<?php
/**
 * Created by PhpStorm.
 * User: art
 * Date: 8/15/16
 * Time: 4:52 AM
 */
require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster($_REQUEST["host"], "TCP");

if ($_REQUEST["registertype"] == "coil")
{
    // nothing
}

switch ($_REQUEST["registertype"])
{
    case "coil":
        $coilData = $modbus->readCoils(0, 0, 5);
        break;
    case "discrete":
        break;
    case "inputregister":
        break;
    case "holdingregister":
        break;
    default:
        break;
}

?>