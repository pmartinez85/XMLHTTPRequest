<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        DELETE ASINCRON
    <script>
        var req = new XMLHttpRequest();
        req.open('DELETE', 'http://localhost:8000/', true);
        req.onreadystatechange = function (aEvt) {
            if (req.readyState == 4) {
                if(req.status == 200)
                    console.log(req.responseText);
                else
                    console.log("Error loading page\n");
            }
        };
        req.send(null);
    </script>
</body>
</html>