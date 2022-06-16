<?php

if (!function_exists('alert')) {
    function alert(string $value)
    {
        session(['alert' => $value]);
    }
}
