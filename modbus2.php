<?php include 'modbus1.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="5">
    <link rel="stylesheet" href="main.css">
<title>Untitled Document</title>
</head>

<body>
<table width="1000" border="1" align="center">
  <tbody>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Start address</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">Notes</th>
      <th scope="col">Notes2</th>
      <th scope="col">Notes3</th>
      <th scope="col">Data</th>
    </tr>
    <tr>
      <th colspan="5" scope="row">Coil registers for reading by a master</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Status of spectrometer</td>
      <td>0</td>
      <td>&nbsp;</td>
      <td>1 – OK<br>
0 – Faults<br>
OK – data transfer, light intensity and flow rate are in acceptable ranges.</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilData[0]) ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Status of thermocontrollers</td>
      <td>1</td>
      <td>&nbsp;</td>
      <td>1 – OK<br>
0 – Faults<br>
OK – all thermocontrollers keep temperature in their preset ranges</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilData[1]) ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Availability for external request</td>
      <td>2</td>
      <td>&nbsp;</td>
      <td>1 ‐ Ready<br>
0 ‐ Not ready</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilData[2]) ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Status of Zero test</td>
      <td>3</td>
      <td>&nbsp;</td>
      <td>1 – Zero test is going<br>
0 – Procedures differed from Zero test</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilData[3]) ?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Status of calibration</td>
      <td>4</td>
      <td>&nbsp;</td>
      <td>1 – Calibration is going<br>
0 – Procedures differed from Calibration</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilData[4]) ?></td>
    </tr>
    <tr>
      <th colspan="5" scope="row">Float registers for reading by a master</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>LSW</td>
      <td>MSW</td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Elemental mercury</td>
      <td>24</td>
      <td>25</td>
      <td>ug/m3</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[8])?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Total mercury</td>
      <td>10</td>
      <td>11</td>
      <td>ug/m3</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[1])?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Oxidized mercury</td>
      <td>12</td>
      <td>13</td>
      <td>ug/m3</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[2])?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Monitor flow</td>
      <td>14</td>
      <td>15</td>
      <td>L/min</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[3])?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Vacuum</td>
      <td>16</td>
      <td>17</td>
      <td>psi</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[4])?></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Dilution pressure</td>
      <td>18</td>
      <td>19</td>
      <td>psi, sensor not connected</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[5])?></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Bypass pressure</td>
      <td>20</td>
      <td>21</td>
      <td>psi, sensor not connected, reserved</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[6])?></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Temperature of spectrometer</td>
      <td>22</td>
      <td>23</td>
      <td>*C</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[7])?></td>
    </tr>
    <tr>
      <th rowspan="13" scope="row">14</th>
      <td rowspan="13">Code of a current mode</td>
      <td rowspan="13">8</td>
      <td rowspan="13">9</td>
      <td>Start Level</td>
      <td>5</td>
      <td rowspan="13">&nbsp;</td>
      <td rowspan="13"><?php echo PhpType::bytes2float($floatvalues[0])?></td>
    </tr>
    <tr>
      <td>Cell Delay</td>
      <td>7</td>
    </tr>
    <tr>
      <td>Cell Level</td>
      <td>8</td>
    </tr>
    <tr>
      <td>Zero Delay</td>
      <td>11</td>
    </tr>
    <tr>
      <td>Zero Test</td>
      <td>12</td>
    </tr>
    <tr>
      <td>Total Mercury Delay</td>
      <td>21</td>
    </tr>
    <tr>
      <td>Total Mercury</td>
      <td>22</td>
    </tr>
    <tr>
      <td>Elemental Mercury Delay</td>
      <td>26</td>
    </tr>
    <tr>
      <td>Elemental Mercury</td>
      <td>27</td>
    </tr>
    <tr>
      <td>Pre-Calibration Delay</td>
      <td>31</td>
    </tr>
    <tr>
      <td>Calibration</td>
      <td>32</td>
    </tr>
    <tr>
      <td>Post-Calibration Delay</td>
      <td>33</td>
    </tr>
    <tr>
      <td>Purge</td>
      <td>13</td>
    </tr>
    <tr>
      <th rowspan="11" scope="row">15</th>
      <td rowspan="11">Errors and warnings</td>
      <td rowspan="11">28</td>
      <td rowspan="11">29</td>
      <td>&nbsp;</td>
      <td>decimal</td>
      <td>binary</td>
      <td rowspan="11"><?php echo PhpType::bytes2float($floatvalues[10])?></td>
    </tr>
    <tr>
      <td>all OK</td>
      <td>0</td>
      <td>00000000</td>
    </tr>
    <tr>
      <td>ERROR: NO DATA</td>
      <td>1</td>
      <td>00000001</td>
    </tr>
    <tr>
      <td>ERROR: LOW LIGHT</td>
      <td>2</td>
      <td>00000010</td>
    </tr>
    <tr>
      <td>WARNING: LOW FLOW</td>
      <td>4</td>
      <td>00000100</td>
    </tr>
    <tr>
      <td>WARNING: CONVERTER</td>
      <td>8</td>
      <td>00001000</td>
    </tr>
    <tr>
      <td>WARNING: WATLOW1</td>
      <td>16</td>
      <td>00010000</td>
    </tr>
    <tr>
      <td>WARNING: WATLOW2 32 (00100000)</td>
      <td>32</td>
      <td>00100000</td>
    </tr>
    <tr>
      <td>WARNING: WATLOW3 64 (01000000)</td>
      <td>64</td>
      <td>01000000</td>
    </tr>
    <tr>
      <td>WARNING: WATLOW4 128 (10000000)</td>
      <td>128</td>
      <td>10000000</td>
    </tr>
    <tr>
      <td>Possible to have several warnings simultaneously, e.g. 24 (00011000) means WARNING: CONVERTER and WARNING: WATLOW1</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Calibration
      coefficient</td>
      <td>30</td>
      <td>31</td>
      <td>Total mercury coefficient</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[11])?></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>PMT current</td>
      <td>32</td>
      <td>33</td>
      <td>ARB</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[12])?></td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>PMT voltage</td>
      <td>40</td>
      <td>41</td>
      <td>ARB</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo PhpType::bytes2float($floatvalues[16])?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="8" scope="row">Coil registers for writing by a master</th>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>Run
      calibration</td>
      <td>99</td>
      <td>&nbsp;</td>
      <td>Request to start calibration. Delay will be in the range 1 – 20 minutes since it can be started only when total mercury is determined.</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilDatase[0]) ?></td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>Run
        zero
      test</td>
      <td>100</td>
      <td>&nbsp;</td>
      <td>Request to start a zero test. Delay will be in the range 1 – 20 minutes since it can be started only when total mercury is determined.</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilDatase[1]) ?></td>
    </tr>
    <tr>
      <th scope="row">21</th>
      <td>Run
      elemental</td>
      <td>101</td>
      <td>&nbsp;</td>
      <td>Request to start measurement of elemental mercury. Delay will be in the range 1 – 20 minutes since it can be started only when total mercury is determined.</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilDatase[2]) ?></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td>Start
      Purge</td>
      <td>102</td>
      <td>&nbsp;</td>
      <td>Request to start purge.</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilDatase[3]) ?></td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td>End
      Purge</td>
      <td>103</td>
      <td>&nbsp;</td>
      <td>Request to end purge.</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo ((float)$coilDatase[4]) ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
