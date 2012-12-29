<?php

/* --------------------------------------------------------------
 * Load system
 * -------------------------------------------------------------- */
require('system.php');
$system = new System;


/* --------------------------------------------------------------
 * Get current directory
 * -------------------------------------------------------------- */
$base = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__FILE__)), '/');
?>

<!doctype html>
<html>
<head>
    <title><?php echo $system->os->hostname; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="<? echo $base . '/static/dark.css'; ?>">
</head>
<body>

<div id="container">

<h1>
    <?php echo $system->os->hostname; ?>
    <small id="uptime">online for <? echo $system->uptime->days; ?> days, <? echo $system->uptime->hours; ?> hours, <? echo $system->uptime->minutes; ?> minutes </small>
</h1>

<?php

/* --------------------------------------------------------------
 * Show widgets
 * -------------------------------------------------------------- */
$directory = dirname(__FILE__) . '/widgets';
$widgets = scandir($directory,  SCANDIR_SORT_ASCENDING);

foreach ($widgets as $widget) {
    if ($widget != '.' && $widget != '..') {
        include($directory . '/' . $widget);
    }
}

?>

</div>

</body>
</html>
