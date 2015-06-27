<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Chatroom;
use Illuminate\Http\Request;

$app->get('/', function () use ($app) {
    return $app->welcome();
});

/**
 * Games
 * Sport
 * Finance
 * Animals
 */
$app->get('chatrooms/{category}', function($category) {
    $chatrooms = Chatroom::where('category', $category)->get();

    return $chatrooms;
});

$app->post('chatrooms', function(Request $request) {
    $chatroom = Chatroom::create($request->all());

    return $chatroom;
});

$app->post('login', function(Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if (areCredentialsCorrect($username, $password)) {
         return response()->json(["message" => "Login successful"], 200);
    }

    return response()->json(["message" => "Credentials are incorrect"], 400);
});

function areCredentialsCorrect($username, $password) {
    if (($username == "boyd" && $password == "boyd") || ($username == "bas" && $password == "bas")) {
        return true;
    }

    return false;
}