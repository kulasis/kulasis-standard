<?php
/**
 * @author Makoa Jacobsen <makoa@makoajacobsen.com>
 * @copyright Copyright (c) 2014, Oregon College of Art & Craft
 *
 * @package Kula SIS
 * @subpackage Core
 *
 * File that kicks it all off!
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Response;

if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !(in_array(@substr($_SERVER['REMOTE_ADDR'], 0, 3), array('10.', '192.168.')) || php_sapi_name() === 'cli-server')
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

/**
 * Root directory of Kula SIS.
 */
define('KULA_ROOT', dirname(getcwd()));

$loader = require_once __DIR__.'/../app/autoload.php';

require_once KULA_ROOT . '/app/config/config.php';

Debug::enable();

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();

$request = Request::createFromGlobals();

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);