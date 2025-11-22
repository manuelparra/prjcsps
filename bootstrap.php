<?php

/**
 * Bootstrap File
 * Initializes the application enviroment.
 * PHP version 8.3
 *
 * @category FrontController
 * @package  App
 * @author   Manuel Parra <manuelparra@live.com.ar>
 * @license  MIT <https://mit.org>
 * @version  1.0.0
 * @link     manuelparra.dev
 */

/*--- ROOT Path of the proyect. ---*/
function bootstrap(): void
{
    if (!defined('__ROOT__')) {
        define('__ROOT__', __DIR__);
    }

    // cargo el autoload (cortesía de composer)
    require_once __ROOT__ . '/vendor/autoload.php';

    // Configuración global de la app
    require_once __ROOT__ . '/src/Config/application.php';

    // Configuracion de seguridad de la app
    require_once __ROOT__  . '/src/Config/security.php';
}
