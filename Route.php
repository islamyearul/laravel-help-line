//Clear Config cache:
Route::get('/cc', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>All Config cleared</h1>';
});

// Storage Link

Route::get('/link', function () {
    $exitCode = Artisan::call('storage:link');
    return '<h1>All Config cleared</h1>';
});
