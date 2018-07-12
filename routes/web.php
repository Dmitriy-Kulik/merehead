<?php

Route::get('/', function () {
    return redirect('list');
});

Route::resource('list', 'Book\BookController');