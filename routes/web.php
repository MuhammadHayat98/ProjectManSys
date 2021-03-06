<?php
use Illuminate\Support\Facades\Route;
use App\Deliverable;
use App\Task;

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
    $deliverables = Deliverable::orderBy('created_at')->get();
    $tasks = Task::orderBy('created_at')->get();
    return view ('home', ['deliverables' => $deliverables, 'tasks' => $tasks]);
});
Route::get('deliverable', 'DeliverableController@create')->name('deliverable.create');
Route::post('deliverable', 'DeliverableController@store')->name('deliverable.store');
Route::get('task', 'TaskController@create')->name('task.create');
Route::post('task', 'TaskController@store')->name('task.store');
Route::get('/login', function(){
    return view ('login');
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