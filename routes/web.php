<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view ('home');
});
Route::get('/deliverable', function(){
    return view ('deliverable');
});
Route::get('/login', function(){
    return view ('login');
});
Route::get('/task', function(){
    return view ('task');
});
Route::get('/actionItem', function(){
    return view ('actionItem');
});
Route::get('/resource', function(){
    return view ('resources');
});
Route::get('/issue', function(){
    return view ('issue');
});
Route::get('/decision', function(){
    return view ('decision');
});
//updated pages
Route::get('/updateTask', function(){
    return view ('updateTask');
});
Route::get('/updateActionItem', function(){
    return view ('updateActionItem');
});
Route::get('/updateResource', function(){
    return view ('updateResources');
});
Route::get('/updateIssue', function(){
    return view ('updateIssue');
});
Route::get('/updateDecision', function(){
    return view ('updateDecision');
});

// $router->group('/deliverable',function () use ($router) {
//     $router->get('/deliverable', ['uses' => 'Deliverables@createDeliverable']);
// });
Route::get('/updateDeliverable', function(){
         return view ('deliverable');
});