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
            $recData = $modbus->readCoils(0, $_REQUEST["registeraddr"], 1);
            $value = PhpType::bytes2signedInt($recData);
            break;
        case "discrete":
            $recData = $modbus->readInputDiscretes(0, $_REQUEST["registeraddr"], 1);
            $value = PhpType::bytes2signedInt($recData);
            break;
        case "inputregister":
            $recData = $modbus->readMultipleInputRegisters(0, $_REQUEST["registeraddr"], 1);
            $value = PhpType::bytes2signedInt($recData);
            break;
        case "holdingregister":
            $recData = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
            $value = PhpType::bytes2signedInt($recData);
            break;
        case "inputregisterpair":
            $recData = $modbus->readMultipleInputRegisters(0, $_REQUEST["registeraddr"], 2);
            $value = PhpType::bytes2float($recData);
            break;
        case "holdingregisterpair":
            $recData = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 2);
            $value = PhpType::bytes2float($recData);
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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Html form</title>
</head>
<body>
<p>
    <?php
    // Print status information
    echo "</br>Status:</br>" . $modbus;

    // Print read data
    echo "</br>Data:</br>";
    var_dump($recData);
    echo "</br>Value:</br>";
    var_dump($value);
    echo "</br>";
    ?>
</p>
</body>
</html>
