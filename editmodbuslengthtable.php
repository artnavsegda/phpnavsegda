<?php

require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster($_REQUEST["host"], "TCP");

try
{
    $startlevel = $modbus->readMultipleRegisters(0, 105, 1);
    $celldelay = $modbus->readMultipleRegisters(0, 106, 1);
    $celllevel = $modbus->readMultipleRegisters(0, 107, 1);
    $zerodelay = $modbus->readMultipleRegisters(0, 108, 1);
    $zerotest = $modbus->readMultipleRegisters(0, 109, 1);
    $totalmercurydelay = $modbus->readMultipleRegisters(0, 110, 1);
    $totalmercury = $modbus->readMultipleRegisters(0, 111, 1);
    $elementalmercurydelay = $modbus->readMultipleRegisters(0, 112, 1);
    $elementalmercury = $modbus->readMultipleRegisters(0, 113, 1);
    $precalibrationdelay = $modbus->readMultipleRegisters(0, 114, 1);
    $calibration = $modbus->readMultipleRegisters(0, 115, 1);
    $postcalibrationdelay = $modbus->readMultipleRegisters(0, 116, 1);
    $purge = $modbus->readMultipleRegisters(0, 117, 1);
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
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body><form action="writemodbuslengthtable.php" method="get"><table width="200" border="1">
        <input type="hidden" name="host" value="<?php echo $_REQUEST["host"]?>">
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