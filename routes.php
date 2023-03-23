<?php
    Route::get('/', 'WelcomeController@index');
    Route::get('books', 'BooksController@index');
    Route::get('books/(:number)', 'BooksController@show');
    Route::get('authors', 'AuthorsController@index');
    Route::get('authors/(:number)', 'AuthorsController@show');
    Route::get('publishers', 'PublishersController@index');
    Route::get('publishers/(:number)', 'PublishersController@show');
    Route::dispatch();
?>
