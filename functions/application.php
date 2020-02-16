<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// global functions
function cave_man_debugger($mesasage) {
    error_log(print_r($message, 1));
}

function display_array($array) {
    for ($i = 0; $i < count($array); $i++) {
        if ($i == 0) {
            echo $array[$i] ;
        } else {
            echo ', ' . $array[$i];
        }
    }
}

function dump_data($display) {
    echo '<pre>';
    print_r($display);
    echo '</pre>';
}

function root_http_path() {
    return 'http://' . $_SERVER['HTTP_HOST'] . '/contrast-calc';
}

?>