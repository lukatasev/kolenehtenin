<?php

class Arg {}

#[AllowDynamicProperties]
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

#[AllowDynamicProperties]
class Get {
    public function __construct(Array $array) {
        foreach($array as $i => $v) {
            $this->{$i} = $v;
        }
    }
}

?>