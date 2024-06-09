<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('layanans', LayananController::class);
    $router->resource('kepseks', KepsekController::class);
    $router->resource('beritas', BeritaController::class);
    $router->resource('profil-sekolahs', ProfilSekolahController::class);
    $router->resource('vimisis', VimisiController::class);
    $router->resource('identi-sekolahs', IdentiSekolahController::class);
    $router->resource('jurusans', JurusanController::class);
    $router->resource('kata-alumnis', KatalumController::class);
    $router->resource('gavideos', GavideoController::class);
    $router->resource('ekstrakurikulers', EkstrakurikulerController::class);
    $router->resource('gafotos', GafotoController::class);
    $router->resource('alumnis', AlumniController::class);
});
