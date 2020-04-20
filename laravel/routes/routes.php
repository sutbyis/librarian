//laravel/Http/routes.php
 
<?php
 
Route::get('/', 'CSVimportsController@index')->name('csvimport_index');
 
Route::post('/import', 'CSVimportsController@import')->name('csvimport_import');