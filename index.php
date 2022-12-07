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
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $date = date('d-m-Y, H:i:s');
    $plik = file_get_contents('IpAndDates.txt', "w");
    fwrite($plik, "IP: "{$ip} " Date: "{$date});
    fclose($plik);
    echo $ip
    echo $date
    ?>
</body>
</html>
