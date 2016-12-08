http://156.17.13.54:XXXXX/index.php?imie=YYYY&haslo=ZZZZZ

Umieść plik (jako root!) w /var/www/index.php

<?php
header("Cache-Control: no-cache");
header("pragma: no-cache");
header("Expires: -1");
?>
<html>
<head lang="pl">
<meta http-equiv="Conent-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>Test</h1>
<?php
$imie = htmlspecialchars($_GET['imie']);
printf("Twoje imie to: $imie.");
?>
</body>
</html>



