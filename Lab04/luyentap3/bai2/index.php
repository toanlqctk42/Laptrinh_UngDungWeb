<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lê Quốc Toàn</title>
</head>
<body>
 <?php
    include 'loger.php';
    // examle 1
    $logger = new FileLogger('./log.txt', 'w');
    $logger->log('PHP interfae is awesome');
    // example 2
    $loggers = [
        new FileLogger('./log.txt'),
        new DatabaseLogger()
    ];
    foreach ($loggers as $logger) {
    $logger->log('Log message');
    }
 ?>
</body>
</html>