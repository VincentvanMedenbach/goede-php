<?php
date_default_timezone_set("Etc/GMT+12");
$time = date('H') . ':' . date('i');

if (date('H') >= 06 && date('H') <= 12) {
    echo '<body style="background-image:url(backgrounds/morning.png)">';
}
if (date('H') >= 12 && date('H') <= 18) {
    echo '<body style="background-image:url(backgrounds/afternoon.png)">';

}
if (date('H') >= 18 && date('H') <= 24) {
    echo '<body style="background-image:url(backgrounds/evening.png)">';

}
if (date('H') >= 00 && date('H') <= 06) {
    echo '<body style="background-image:url(backgrounds/night.png)">';

}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Title</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<section>
    <p>
        Goede morgen!<br>
        het is nu:<?php echo $time; ?>
    </p>
    <p></p>
</section>
</body>
</html>

