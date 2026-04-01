<?php
// This file contains some basic functions that are in later versions of PHP, we add them to make our life easier

// > str_contains($haystack, $needle);
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

?>