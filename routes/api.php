<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/get-users', function (Request $request) {
    $users = User::where('id', '!=', $request->user_id)->where('office_id', $request->office_id)->get(['id', 'first_name', 'middle_name', 'surname', 'rank'])->append('full_name');
    return response($users, 200);
});
