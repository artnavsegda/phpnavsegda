<?php

require_once dirname(__FILE__) . '/Phpmodbus/ModbusMaster.php';

// Create Modbus object
///$ip = "192.168.111.132";
//$ip = "127.0.0.1";
$ip = "192.168.1.120";
//$ip = "192.168.1.114";
$modbus = new ModbusMaster($ip, "TCP");

try {
    // FC 1
    $coilData = $modbus->readCoils(0, 0, 5);
}
catch (Exception $e) {
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <meta http-equiv="refresh" content="5">
        <title>Modbus Table</title>
    </head>
    <body>
        <h1>Modbus Table</h1>
            <h2><?php echo $ip?></h2>


<table border="1px" width="400px" align="center">
    <caption>Modbus Table</caption>
    <tr>
        <td>Modbus address</td>
        <td>value</td>
    </tr>
    <?php
    $i = 0;
    foreach($coilData as $bytes) {
        ?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo (var_export($bytes)) ?></td>
    </tr>
        <?php
    }
    ?>
</table>
<?php

try {
    // FC 3
    $recData = $modbus->readMultipleRegisters(0, 8, 40);
}
catch (Exception $e) {
    echo $modbus;
    echo $e;
    exit;
}

$floatvalues = array_chunk($recData, 4);
$i = 6;
$values = array_chunk($recData, 2);

?>

        <table border="1px" width="400px" align="center">
            <tr>
                <td>Modbus address</td>
                <td>value</td>
            </tr>
            <?php
            foreach($floatvalues as $bytes) {
                ?>
            <tr>
                <td><?php echo $i+=2?></td>
                <td><?php echo PhpType::bytes2float($bytes)?></td>
            </tr>
                <?php
            }
            ?>
        </table>

        <?php try {
            // FC 3
            $coilData = $modbus->readCoils(0, 99, 5);
        }
        catch (Exception $e) {
            echo $modbus;
            echo $e;
            exit;
        }?>

        <table border="1px" width="400px" align="center">
            <tr>
                <td>Modbus address</td>
                <td>value</td>
            </tr>
            <?php
            $i = 98;
            foreach($coilData as $bytes) {
                ?>
            <tr>
                <td><?php echo $i+=1 ?></td>
                <td><?php echo (var_export($bytes)) ?></td>
            </tr>
                <?php
            }
            ?>
        </table>

        <h2>Modbus class status</h2>
        <?php
        echo $modbus;
        ?>

    </body>
</html>
