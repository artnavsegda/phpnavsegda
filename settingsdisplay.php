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
    <input type="text" name="ip1" value="<?php echo $ipadress[0]?>">
    <input type="text" name="ip2" value="<?php echo $ipadress[1]?>">
    <input type="text" name="ip3" value="<?php echo $ipadress[2]?>">
    <input type="text" name="ip4" value="<?php echo $ipadress[3]?>">
    Mac addr:
    <input type="text" name="mac1" value="<?php echo dechex($macadress[0])?>">
    <input type="text" name="mac2" value="<?php echo dechex($macadress[1])?>">
    <input type="text" name="mac3" value="<?php echo dechex($macadress[2])?>">
    <input type="text" name="mac4" value="<?php echo dechex($macadress[3])?>">
    <input type="text" name="mac5" value="<?php echo dechex($macadress[4])?>">
    <input type="text" name="mac6" value="<?php echo dechex($macadress[5])?>">
    <br>
    <input type="submit" value="Edit settings">
</form>
</p>
</body>
</html>
