<?php

Route::get('/', ['uses' => \Myrtle\Core\Landing\Http\Controllers\LandingController::class . '@index', 'as' => 'landing']);