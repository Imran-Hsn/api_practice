<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\DeleteMemberController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateMemberController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// From API using get method
Route::get('getData', [apiController::class, 'fromAPI']);

// Using POST 
Route::post('addData', [MemberController::class, 'add']);
Route::post('createData', [StudentController::class, 'createData']);

// Update route
Route::put('update', [UpdateMemberController::class, 'update']);
// Delete Route
Route::delete('delete/{id}', [DeleteMemberController::class, 'delete']);
// Search route
Route::get('search/{search}', [SearchController::class, 'search']);