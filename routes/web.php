<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProposalController::class, 'index']);
Route::post('/generate-proposal', [ProposalController::class, 'generate']);