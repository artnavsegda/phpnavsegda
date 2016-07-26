<?php include 'modbus1.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="5">
    <link rel="stylesheet" href="main.css">
    <title>Untitled Document</title>
</head>

<math display="block">
    <mrow>
        <mi><?php echo PhpType::bytes2float($floatvalues[17])?></mi>
        <mi mathvariant='normal' class='MathML-Unit'>V</mi>
        <mo>=</mo>
        <mo>(</mo>
        <mn><?php echo PhpType::bytes2float($floatvalues[16])?></mn>
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

<math display="block">
    <mrow>
        <mn><?php echo PhpType::bytes2float($floatvalues[7])?></mn>
        <mi mathvariant='normal' class='MathML-Unit'>&#x2103;</mi>
        <mo>=</mo>
        <mo>(</mo>
        <mo>(</mo>
        <mo>(</mo>
        <mn><?php echo PhpType::bytes2float($floatvalues[9])?></mn>
        <mo>-</mo>
        <mn>180</mn>
        <mo>)</mo>
        <mo>&CenterDot;</mo>
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
        <mo>)</mo>
        <mo>-</mo>
        <mn>0.5</mn>
        <mo>)</mo>
        <mo>&CenterDot;</mo>
        <mn>100</mn>
    </mrow>
</math>

<math display="block">
    <mrow>
        <mn><?php echo PhpType::bytes2float($floatvalues[3])?></mn>
        <mi mathvariant='normal' class='MathML-Unit'>Lpm</mi>
        <mo>=</mo>
        <mo>(</mo>
        <mfrac>
            <mrow>
                <mo>(</mo>
                <mo>(</mo>
                <mn><?php echo PhpType::bytes2float($floatvalues[15])?></mn>
                <mo>-</mo>
                <mn>180</mn>
                <mo>)</mo>
                <mo>&CenterDot;</mo>
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
                <mo>)</mo>
                <mo>/</mo>
                <mn>0.319</mn>
            </mrow>
            <mrow>
                <mn>9.0</mn>
            </mrow>
        </mfrac>
        <mo>)</mo>
        <mo>-</mo>
        <mn>0.1</mn>
        <mo>)</mo>
        <mo>&CenterDot;</mo>
        <mfrac>
            <mrow>
                <mn>10</mn>
            </mrow>
            <mrow>
                <mn>0.4</mn>
            </mrow>
        </mfrac>
    </mrow>
</math>

<math display="block">
    <mrow>
        <mn><?php echo PhpType::bytes2float($floatvalues[1])?></mn>
        <mi mathvariant='normal' class='MathML-Unit'>ug/m3</mi>
        <mo>=</mo>
        <mfrac>
            <mrow>
                <mn><?php echo PhpType::bytes2float($floatvalues[18])?></mn>
                <mo>-</mo>
                <mn><?php echo PhpType::bytes2float($floatvalues[19])?></mn>
            </mrow>
            <mrow>
                <mn><?php echo PhpType::bytes2float($floatvalues[20])?></mn>
                <mo>-</mo>
                <mn><?php echo PhpType::bytes2float($floatvalues[19])?></mn>
            </mrow>
        </mfrac>
        <mo>&CenterDot;</mo>
        <mo>(</mo>
        <msub>
            <mi>C</mi>
            <mn>25</mn>
        </msub>
        <mo>&CenterDot;</mo>
        <mi>exp</mi>
        <mo>(</mo>
        <mn>0.087</mn>
        <mo>&CenterDot;</mo>
        <mo>(</mo>
        <mo>(</mo>
        <mo>(</mo>
        <mo>(</mo>
        <mo>(</mo>
        <mn><?php echo PhpType::bytes2float($floatvalues[21])?></mn>
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
        <mo>)</mo>
        <mo>-</mo>
        <mn>0.5</mn>
        <mo>)</mo>
        <mo>&CenterDot;</mo>
        <mn>100</mn>
        <mo>)</mo>
        <mo>-</mo>
        <mn>25</mn>
        <mo>)</mo>
    </mrow>
</math>

</body>
</html>