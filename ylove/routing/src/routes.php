<?php

use Ylove\Routing\PostsController;
use Ylove\Routing\UsersPostsController;
use Ylove\Routing\CategoriesPostsController;

Route::resource('posts', PostsController::class);
Route::resource('users.posts', UsersPostsController::class);
Route::resource('categories.posts', CategoriesPostsController::class);

// "If a controller or method does not exist, then throw an exception."

Route::fallback( function() {
	throw new Exception('Unsupported controller or method.');
} );