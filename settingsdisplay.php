<?php

require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster($_REQUEST["host"], "TCP");

try
{
    $ipadress = $modbus->readMultipleRegisters(0, 100, 2);
    $macadress = $modbus->readMultipleRegisters(0, 102, 3);
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
<form action="settingsengine.php" method="get">
    Host/IP addr:
    <input type="text" name="ipaddress" value="<?php echo $ipadress?>">
    Mac addr:
    <input type="text" name="macadress" value="<?php echo $macadress?>">
    <br>
    <input type="submit" value="Edit settings">
</form>
</p>
</body>
</html>
