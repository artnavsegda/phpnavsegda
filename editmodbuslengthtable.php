<?php

require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster($_REQUEST["host"], "TCP");

try
{
    $startlevel = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $celldelay = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $celllevel = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $zerodelay = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $zerotest = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $totalmercurydelay = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $totalmercury = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $elementalmercurydelay = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $elementalmercury = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $precalibrationdelay = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $calibration = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $postcalibrationdelay = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
    $purge = $modbus->readMultipleRegisters(0, $_REQUEST["registeraddr"], 1);
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

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body><form action="writemodbuslengthtable.php" method="get"><table width="200" border="1">
        <tbody>
        <tr>
            <td>&nbsp;</td>
            <td>start level&nbsp;<input name="startlevel" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($startlevel)?>">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>pre-calibration delay&nbsp;<input name="precalibrationdelay" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($precalibrationdelay)?>">&nbsp;</td>
            <td>calibration&nbsp;<input name="calibration" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($calibration)?>">&nbsp;</td>
            <td>post-calibration delay&nbsp;<input name="postcalibrationdelay" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($postcalibrationdelay)?>">&nbsp;</td>
        </tr>
        <tr>
            <td>cell delay&nbsp;<input name="celldelay" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($celldelay)?>">&nbsp;</td>
            <td>cell level&nbsp;<input name="celllevel" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($celllevel)?>">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>zero delay&nbsp;<input name="zerodelay" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($zerodelay)?>">&nbsp;</td>
            <td>zero test&nbsp;<input name="zerotest" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($zerotest)?>">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>total mercury delay&nbsp;<input name="totalmercurydelay" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($totalmercurydelay)?>">&nbsp;</td>
            <td>total mercury&nbsp;<input name="totalmercury" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($totalmercury)?>">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>elemental mercury delay&nbsp;<input name="elementalmercurydelay" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($elementalmercurydelay)?>">&nbsp;</td>
            <td>elemental mercury&nbsp;<input name="elementalmercury" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($elementalmercury)?>">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>purge&nbsp;<input name="purge" type="number" max="65535" min="0" value="<?php echo PhpType::bytes2signedInt($purge)?>">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
    <br>
    <input type="submit" value="Write modbus length table">
</form>
</body>
</html>