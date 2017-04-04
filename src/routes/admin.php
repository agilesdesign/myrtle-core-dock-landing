<?php

Route::get('/', [
    'uses' => \Myrtle\Core\Landing\Http\Controllers\Administrator\FrontpageController::class . '@index',
    'as' => 'frontpage'
]);