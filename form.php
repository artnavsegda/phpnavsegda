<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Html form</title>
</head>
<body>
<form action="hello.php" method="get">
    Port:<br>
    <input type="text" name="port" value="0"><br>
    <select name="state2">
        <option value="low">Low</option>
        <option value="high" selected>High</option>
    </select><br>
    <input type="radio" name="state" value="low" checked>Low<br>
    <input type="radio" name="state" value="high">High<br>
    <br>
    <input type="checkbox" name="bit0" value="high">0
    <input type="checkbox" name="bit1" value="high">1
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>