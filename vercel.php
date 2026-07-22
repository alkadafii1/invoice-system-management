<?php

$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/public/index.php';

chdir(__DIR__ . '/public');

require __DIR__ . '/public/index.php';