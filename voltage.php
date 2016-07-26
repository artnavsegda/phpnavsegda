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

<math display="block">
  <mrow>
    <mi>x</mi>
    <mi mathvariant='normal' class='MathML-Unit'>V</mi>
    <mo>=</mo>
    <mo>(</mo>
    <mi><?php echo PhpType::bytes2float($floatvalues[16])?></mi>
    <mo>-</mo>
    <mn>180</mn>
    <mo>)</mo>
    <mo>&#x2062;</mo>
    <mfrac>
      <mrow>
        <mn>3.3</mn>
        <mo>/</mo>
        <mn>1.6</mn>
      </mrow>
      <mrow>
        <mn>4095</mn>
      </mrow>
    </mfrac>
  </mrow>
</math>

</body>
</html>