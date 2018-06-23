<?php

Route::namespace('Web')->group(function () {
    Route::get('', ['as' => 'web.home', 'uses' => 'PagesController@home']);

    Route::prefix('blog')->group(function () {
        Route::get('', ['as' => 'blog.posts', 'uses' => 'BlogController@posts']);
        Route::get('{posts}', ['as' => 'blog.single', 'uses' => 'BlogController@single']);
        Route::get('category/{category}', ['as' => 'blog.category', 'uses' => 'BlogController@category']);
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/{vue_capture?}', 'AdminController@admin')
        ->where('vue_capture', '[\/\w\.-]*');
});
