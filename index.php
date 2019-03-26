<?php

include $_SERVER['DOCUMENT_ROOT'] . "/services/Autoload.php";

spl_autoload_register([new \App\services\Autoload(), 'loadClass']);

$good = new \App\modules\Good(new \App\services\BD());
$good->getAll();

