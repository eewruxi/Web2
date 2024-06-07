<?php
$titleText = 'Лабараторная 16';
$h1 = 'Дата и время';
$currentYear = date('Y');

function formatTime($hours, $minutes) {
    $hoursText = "";
    $minutesText = "";
    if ($hours % 10 === 1) {
        $hoursText = "час";
    } else if ($hours % 10 === 2 ||  $hours % 10 === 3 || $hours % 10 === 4) {
        $hoursText = "часа";
    } else {
        $hoursText = "часов";
    }

    if ($minutes % 10 === 1) {
        $minutesText = "минута";
    } else if ($minutes % 10 === 2 || $minutes % 10 === 3 || $minutes % 10 === 4) {
        $minutesText = "минуты";
    } else {
        $minutesText = "минут";
    }

    return $hours . " " . $hoursText . " " . $minutes . " " . $minutesText;
}

function getCurrentTime()
{
    // Получаем текущее время
    $currentTime = getdate();
    $currentHour = $currentTime['hours'];
    $currentMinute = $currentTime['minutes'];
    return formatTime($currentHour,$currentMinute);
}
?>


<!DOCTYPE html>
<html lang="">
<head>
    <title><?= $titleText; ?></title>
</head>
<body>
<h1><?= $h1; ?></h1>
<p>Текущий год: <?= $currentYear; ?></p>

<p>Текущее время: <?= getCurrentTime();?></p>
</body>
</html>


