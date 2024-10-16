<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => '/api/v1'], function () use ($router) {

    // Custom route
    $router->get('/movies', function () use ($router) {
        return 'Hello, World!';
    });

    $router ->get('movies/{id}', function () use ($router) {    
        // Retrieve a specific movie...

        return "Filme";
    });

    $router->post('/movies', function () use ($router) {
        // Validade request data...

        return "Inserir novo filme";
    });

    $router->put('/movies/{id}', function () use ($router) {
        // Validade request data...

        // Update an existing movie...

        return "Atualizar filme";
    });

    $router->delete('/movies/{id}', function ($id) use ($router) {
        // Delete a movie...

        return "Deletar filme";
    });
});
