<?php
use App\Http\Kernel;

$kernel = app(Kernel::class);
print_r($kernel->getRouteMiddleware());