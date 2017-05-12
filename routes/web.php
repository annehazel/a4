<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'BiographyController@index');

Route::get('/edit/{id}', 'BiographyController@edit');
Route::post('/edit', 'BiographyController@saveEdits');

Route::get('/add', 'BiographyController@add');
Route::post('/add', 'BiographyController@storeBiography');

Route::get('/view/', 'BiographyController@view');
Route::get('/view/{id}', 'BiographyController@viewWithId');

Route::get('/delete/{id}', 'BiographyController@confirmDeletion');
Route::post('/delete', 'BiographyController@delete');


/*
 * Routes for error handling and testing
 */
if(config('app.env') == 'local'){
  Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database biographies');
        DB::statement('CREATE database biographies');

        return 'Dropped biographies; created biographies.';
    });

};


