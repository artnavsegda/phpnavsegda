<?php

require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster($_REQUEST["host"], "TCP");

try
{
    switch ($_REQUEST["registertype"])
    {
        case "coil":
            $recData = $modbus->readCoils(0, $_REQUEST["registeraddr"], 1);
            break;
        case "discrete":
            $recData = $modbus->readInputDiscretes(0, $_REQUEST["registeraddr"], 1);
            break;
        case "inputregister":
            $recData = $modbus->readMultipleInputRegisters(0, $_REQUEST["registeraddr"], 1);
            break;
        case "holdingregister":
            $recData = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
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
//echo "</br>Status:</br>" . $modbus;

// Print read data
//echo "</br>Data:</br>";
//var_dump($recData);
//echo "</br>Value:</br>";
//var_dump(PhpType::bytes2signedInt($recData));
//echo "</br>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Html form</title>
</head>
<body>
<p>
<form action="writemodbusengine.php" method="get">
    Host/IP addr:
    <input type="text" name="host" value="<?php echo $_REQUEST["host"]?>">
    <br>
    Type:
    <select name="registertype">
        <option value="coil">Coil</option>
        <option value="holdingregister" selected>Holding Register</option>
    </select>
    <br>
    Register:
    <input type="number" name="registeraddr" min="0" max="100" value="<?php echo $_REQUEST["registeraddr"]?>">
    <br>
    Value:
    <input type="number" name="valuetowrite" min="0" max="1000" value="<?php echo PhpType::bytes2signedInt($recData)?>">
    <br>
    <input type="submit" value="Edit register">
</form>
</p>
</body>
</html>