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
        PUT
    <script>
        var peticio = new XMLHttpRequest();
        peticio.open("PUT", "http://localhost:8000/formulari.html");
        peticio.onreadystatechange = function() {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    console.log(this.responseText);
                } else {
                    console.log("Error loading page\n");
                }
            }
        };
        peticio.send();
    </script>
        
</body>
</html>