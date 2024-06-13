<?php


use refaltor\ui\Entry;

include __DIR__ . '/vendor/autoload.php';

ini_set('memory_limit', '-1');

spl_autoload_register(static function (string $classname): void {
    if (str_contains($classname, "refaltor\\")) {
        $classname = "./src/" . str_replace("\\", "/", $classname) . ".php";
        require_once($classname);
    }
});

(new Entry())->startingService();