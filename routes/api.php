<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/check-response-api', function () {
    return json_encode([
        "text" => "hello world",
        "response_code" => 200
    ]);
});

Route::get('/hello-world', function () {
    return json_encode([
        "text" => "hello world",
        "response_code" => 200
    ]);
});