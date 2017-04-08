<?php

use App\Controllers\HomeController;

$app->get('/', HomeController::class . ':index');
