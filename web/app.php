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

/**
 * Root directory of Kula SIS.
 */
define('KULA_ROOT', dirname(getcwd()));

$loader = require_once __DIR__.'/../app/autoload.php';

require_once KULA_ROOT . '/app/config/config.php';

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();

$request = Request::createFromGlobals();

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);