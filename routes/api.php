<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/test-api', function () {
    return json_encode([
        "text" => "hello world",
        "response_code" => 200
    ]);
});
