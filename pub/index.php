<?php

use Ulrack\Kernel\Component\Kernel\Kernel;
use Ulrack\Kernel\Component\Kernel\Manager\CoreManager;
use Ulrack\WebApplication\Component\Application\WebApplication;

require_once __DIR__ . '/../vendor/autoload.php';

$coreManager = new CoreManager(__DIR__ . '/../');

$kernel = new Kernel(
    $coreManager
);

$webApplication = new WebApplication(
    $_SERVER ?? [],
    $_GET ?? [],
    $_POST ?? [],
    $_FILES ?? [],
    $_COOKIES ?? []
);

$kernel->run($webApplication);
