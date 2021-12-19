<?php

/**
 * Route::prefix('user')->namespace('User')->name('user.')->group(base_path('/routes/user/user.php'));
 */

Route::get('/', 'DashboardController@Index')->name('dashboard');
