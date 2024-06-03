<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check if the application is in maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Make the HTTP Kernel instance
$kernel = $app->make(Kernel::class);

// Capture the incoming request and handle it through the Kernel
$response = $kernel->handle(
    $request = Request::capture()
);

// Send the response back to the client's browser
$response->send();

// Terminate the request, performing any final tasks
$kernel->terminate($request, $response);
