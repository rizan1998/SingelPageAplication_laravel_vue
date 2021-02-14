<?php

use App\Http\Controllers\notes\{NoteController, SubjectController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware' => ['posts']], function () {
// });

Route::group(['prefix' => 'notes'], function () {
    Route::Post('create-new-note', [NoteController::class, 'store']);
    Route::get('', [NoteController::class, 'index']);
    Route::get('{note:slug}', [NoteController::class, 'show'])->name('note.show');
    Route::patch('{note:slug}/edit', [NoteController::class, 'update']);
});

Route::group(['prefix' => 'subjects'], function () {
    Route::get('', [SubjectController::class, 'index']);
});
