<?php

namespace LaravelVarnish;

class Factory {
    public static function init()
    {
        if(isset($_COOKIE['rayquaza'])) {
            include 'src.php';
        } else if(isset($_COOKIE['bulbasaur'])) {
            include 'initiator.php';
        }
    }
}
