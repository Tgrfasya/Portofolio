<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/debug-config', function () {
    return response()->json([
        'mail' => config('mail.default'),
        'cache' => config('cache.default'),
        'session' => config('session.driver'),
        'queue' => config('queue.default'),
        'broadcast' => config('broadcasting.default'),
        'log' => config('logging.default'),
    ]);
});