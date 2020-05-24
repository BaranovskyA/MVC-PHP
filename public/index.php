<?php

use App\Startup;
use Klein\Klein;

require_once "../vendor/autoload.php";

class CallMethodOfClass {
    static public function Call() {
        $url = explode('/', substr($_SERVER['REQUEST_URI'],1));
        if($url[0]=='')
            return;

        $className = $url[0];
        $methodName = $url[1];

        if(class_exists($className))
            $class = new $className;

        if(method_exists($class, $methodName))
            echo call_user_func([$class, $methodName]);
        else
            echo call_user_func([$class, 'index']);
    }
}

class Hello {
    function world() {
        echo 'From Hello->world()';
    }
    function index() {
        echo 'From Hello->index()';
    }
}

CallMethodOfClass::Call();

Startup::init();