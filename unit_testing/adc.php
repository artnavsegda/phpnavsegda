<?php
/**
 * Created by PhpStorm.
 * User: art
 * Date: 8/15/16
 * Time: 4:52 AM
 */
require_once dirname(__FILE__) . '/../Phpmodbus/ModbusMaster.php';

$modbus = new ModbusMaster("192.168.1.150", "TCP");

try
{
    $recData = $modbus->readMultipleInputRegisters(0, 0, 16);
    //$value = PhpType::bytes2signedInt($recData);
    $values = array_chunk($recData, 2);
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
    foreach($values as $value) {
        var_dump(PhpType::bytes2signedInt($value));
    }
    echo "</br>";
    ?>
</p>
</body>
</html>
