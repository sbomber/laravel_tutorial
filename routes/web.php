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

    // if (env('APP_LOW_LVL_DEBUG', false)) {
    if (config( 'app.low_lvl_debug')) {
        /**
         * Playground
         */
        // app()->bind( 'example', function() {
        //     return new App\Example;
        // });

        app()->singleton('example', function () {
            return new App\Example;
        });

        dd( app('example'), app('example'));
    } else {
        return view('welcome');
    }
});

/*
DELETE /projects/<id> (destroy):    Delete/remove project
GET /projects (index):                 Returns all projects
GET /projects/create (create):        Allows users to create a new project
GET /projects/<id> (show):            Display project by ID
GET /projects/<id>/edit (edit):        Edit a current project
PATCH /projects/<id> (update):        Update a current project
POST /projects (store):             Save a new project
 */
//  Option 1 for creating the routes == NICE
Route::resource('/projects', 'ProjectsController');

//  Option 2 for creating routes == Okay
// Route::delete( '/projects', 'ProjectsController@destory');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::patch( '/projects/{project}', 'ProjectsController@update');
// Route::post('/projects', 'ProjectsController@store');

// Route::resource('/tasks', 'ProjectTasksController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
// Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/completed-tasks/{task}', 'CompletedTaskController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTaskController@destroy');
