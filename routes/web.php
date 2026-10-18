<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



// nommer une route
// Route::get('/', ['as' => 'home', function () {
//     return "Je suis sur la page d'accueil";
// }]);

// route avec paramètre et vérifiée par regex
// avec un code de réponse 200
Route::get('{n}', function($n){
    return response('Je suis la page ' . $n . ' ! ', 200);
})->where('n', '[1-3]');

// route avec controller
Route::get('/home', [WelcomeController::class, 'index'])->name('home.index');

// route pour une vue avec paramètres : les articles
Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+')->name('article.show');

// idem pour les factures
Route::get('facture/{n}', function($n){
    return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');
