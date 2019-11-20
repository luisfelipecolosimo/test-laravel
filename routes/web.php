<?php
Route::view('/view', 'welcome');

Route::get('/contato', function () {
    return view('site.contato');
});
Route::get('users/{id}', function ($id) {
    return "ola {$id}";
});
Route::get('/', function () {
    return view('welcome');
});

//qualquer tipo de req
Route::any('/any', function () {
    return 'any';
});

// falo que req quero
Route::match(['get', 'post'], '/match', function () {
    return 'match';
});

Route::get('users2/{id?}', function ($id = '') {
    return "ola {$id}";
});

//redirecionar
Route::get('red1', function () {
    return redirect('/red2');
});
Route::redirect('red3', 'red2');

Route::get('red4', function () {
    return redirect()->route('url.name');
});

Route::get('red2', function () {
    return "ola";
})->name('url.name');
