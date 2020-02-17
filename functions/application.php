<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// global functions
function cave_man_debugger($message) {
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

    if($_SERVER["REMOTE_ADDR"]=="127.0.0.1"){
        return 'http://' . $_SERVER['HTTP_HOST'] . '/contrast-calc';
    } else {
        return 'http://' . $_SERVER['HTTP_HOST'];
    }
}

?>