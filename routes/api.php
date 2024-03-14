<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

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

use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User;
 
// http://tahani2.test/api/usersapi
Route::get('/usersapi', function () {
    // return new UserResource(User::findOrFail(1));
    // return new UserResource(User::with('post')->findOrFail(1)); ??

    // $users = User::get();
    // $users = User::with('posts')->paginate(2);
    // $users = User::paginate(2);
    // return UserResource::collection($users);

   // $users = User::paginate(6);
   $users = User::all();
    return new UserCollection($users);

});

Route::get('/usersapi/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});