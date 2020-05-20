<?php


namespace App\Startup;


use App\Core\Abstracts\Singleton;
use App\Core\Interfaces\IProvider;
use SmartyBC;

final class ViewProvider extends Singleton implements IProvider
{
    protected static $running = false;
    protected static $engine;

    static function init() {
        self::start(function () {
            new self();
        });
    }

    public function __construct() {
        self::$engine = new SmartyBC();
        $this->registerTemplates();
    }

    private function registerTemplates() {
        self::$engine->setTemplateDir( path( config('views.path') ) );
        self::$engine->setCompileDir( path( config('views.compile_path') ) );
    }

    static function engine() {
        return self::$engine;
    }
}