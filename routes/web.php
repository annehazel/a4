<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'BiographyController@search');

Route::get('/edit', 'BiographyController@update');

Route::get('/add', 'BiographyController@create');

Route::get('/view', 'BiographyController@view');


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