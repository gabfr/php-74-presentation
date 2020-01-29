<?php

/*
 * allow_url_include INI option
 *
 * The allow_url_include ini directive is deprecated. Enabling it will generate a deprecation notice at startup.
 *
 */

// Don't do:
include('https://google.com/script.js');

// Do:
function include_url($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
include_url('https://google.com/script.js');
