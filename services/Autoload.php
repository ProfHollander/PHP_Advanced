<?php

namespace App\services;


class Autoload
{

    public function loadClass($className)
    {
        $className = explode('\\', $className);

        if ($className[0] == 'App') {
            array_shift($className);
        }

        $className = implode('/', $className);

        $file = $_SERVER['DOCUMENT_ROOT'] . "/{$className}.php";
        if (file_exists($file)) {
            include $file;
        }
    }
}