<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/api/site', function () use ($app) {

    $requestToken = true;

    if($requestToken === false){
        return \Illuminate\Http\JsonResponse::create([
            "status" => "BAD",
            "message" => "invalid token"
        ], 400);

    }else{
        return \Illuminate\Http\JsonResponse::create([
            "status" => "OK",
            "key" => "hogehoge"
        ], 200);
    }

});


$app->get('/', function () use ($app) {
    return $app->version();
});
