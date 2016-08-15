<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Html form</title>
</head>
<body>
<p>
<form action="hello.php" method="get">
    Host/IP addr:
    <input type="text" name="host" value="127.0.0.1">
    <br>
    Register:
    <input type="number" name="register" min="1" max="5" value="3">
    <br>
    Type:
    <select name="registertype">
        <option value="coil">Coil</option>
        <option value="discrete">Discrete Input</option>
        <option value="inputregister">Input Register</option>
        <option value="holdingregister" selected>Holding Register</option>
    </select>
    <br>
    Value:
    <input type="number" name="contents" min="1" max="5" value="4">
    <br>
    <input type="submit" value="Submit">
</form>
</p>
</body>
</html>