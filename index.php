<?php

/**
 * Index File
 * Entry point of the application.
 * PHP version 8.3
 *
 * @category FrontController
 * @package  App
 * @author   Manuel Parra <manuelparra@live.com.ar>
 * @license  MIT <https://mit.org>
 * @version  1.0.0
 * @link     manuelparra.dev
 */

// bootstrap: carga configuración y autoload
require_once __DIR__ . "/bootstrap.php";

// ejecutamos la función bootstrap
bootstrap();

use App\Controller\EndpointController;
use App\Controller\ViewController;

if (isset($_GET['endpoint'])) {
    $endopointreq = new EndpointController();
    $endopoint = $endopointreq->getEndpointController($_GET['endpoint']);

    include_once $endopoint;
}

$template = new ViewController();
include_once $template->getTemplateController();
