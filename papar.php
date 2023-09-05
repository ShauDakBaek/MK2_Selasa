<?php

$text=$_POST['textinput'];

$bil_perkataan=str_word_count($text);
$bil_huruf=strlen($text);
$terbalik=strrev($text);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tentang Saya</title>
</head>
<body>
    <p>ayat asal: <?php echo $text; ?></p>
    <p>ayat ini mengandungi <?php echo $bil_perkataan; ?> patah perkataan</p>
    <p>ayat ini mengandungi <?php echo $bil_huruf; ?> huruf</p>
    <p>ayat terbalik: <?php echo $terbalik; ?></p>
</body>
</html>
