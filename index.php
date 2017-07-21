<?php

// Display errors if working in local
if ($_SERVER['SERVER_NAME'] === 'rafa.local') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Log errors
    $logDir  = __DIR__ . '/log';
    $logFile = 'rafaerror.log';

    ini_set("log_errors", 1);
    ini_set("error_log", $logDir . '/' . $logFile);

    if (!file_exists($logDir)) {
        mkdir($logDir, 0777, true);
        error_log("Initialising error log");
    }
}

$language = isset($language) ? $language : 'en';

require 'templates/' . $language .'_language.php';
require 'templates/main.php';
