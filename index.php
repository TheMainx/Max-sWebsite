<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penetration tests</title>
    <link rel="stylesheet" href="style.css" />   
</head>
<body>
    <h1>This website is handed over for hacking!</h1>
    <h2>For your safety, please leave this website.</h2>
    <?php
    echo $_SERVER['HTTP_X_FORWARDED_FOR'];
    ?>
</body>
</html>
