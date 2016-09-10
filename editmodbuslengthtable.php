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

<body><form><table width="200" border="1">
        <tbody>
        <tr>
            <td>&nbsp;</td>
            <td>start&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>pre-calibration delay&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>calibration&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>post-calibration delay&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
        </tr>
        <tr>
            <td>cell delay&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>cell level&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>zero delay&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>zero test&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>total mercury delay&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>total mercury&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>elemental mercury delay&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>elemental mercury&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>purge&nbsp;<input type="number" max="65535" min="0" >&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>