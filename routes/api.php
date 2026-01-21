<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return '
        <html>
            <body>
                <h1>Harry Fernandez</h1>
                <p>IT3R10</p>
            </body>
        </html>
    ';
});
