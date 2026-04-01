<?php

// Arg Class - lets you do $arg->argname
class Arg {}

// Header Class - lets you do $header->headername
class Header {
    public function __construct(Array $array) {
        foreach($array as $i => $v) {
            if(str_starts_with($i, "HTTP_")) {
                $i = strtolower(str_replace("HTTP_", "", $i));
                $this->{$i} = $v;
            }
        }
    }
}

// Get Class - lets you do $get->getparameter
class Get {
    public function __construct(Array $array) {
        foreach($array as $i => $v) {
            $this->{$i} = $v;
        }
    }
}

?>