<?php

use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;
Use App\Livewire\ListUsers;
use App\Livewire\Projects;
Use App\Livewire\Testimonies;
Use App\Livewire\Testimonies\Show;

Route::get('/', function () {
    return view('index');
})->name('home');

# The static content pages: .
# $url = route('content.with.page', ['page' => 'home']);
Route::get('content/{page}', function ($page) {
    return view('content.'.$page);
})->name('content.with.page');

# some specifics
Route::get('/information', function () {
    return view('content.information');
})->name('information');

Route::get('testimonies', Testimonies::class)->name('testimonies');
Route::get('testimonies/{id}', Testimonies::class);

Route::get('projects', Projects::class)->name('projects');
Route::get('projects/{id}', Projects::class);



Route::get('/nw-guides', function () {
    return view('content.nw-guides');
})->name('nw-guides');

Route::get('/publications', function () {
    return view('content.publications');
})->name('publications');


Route::resource('references', PublicationController::class );

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/listUsers', ListUsers::class)->name('listUsers');
});


require __DIR__.'/socialstream.php';
