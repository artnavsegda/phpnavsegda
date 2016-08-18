<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script>
        var xhttp = new XMLHttpRequest();
        function myFunction()
        {
            xhttp.open("POST", "readmodbusengine.php?<?php echo $_SERVER['QUERY_STRING']?>", false);
            xhttp.send();
            document.getElementById("bambuk").innerHTML = xhttp.responseText;
        }
    </script>
</head>
<body onload="setInterval(function(){myFunction()}, 500);">
<p id="bambuk"></p>
</body>
</html>