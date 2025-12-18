<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return response()->json([
        'status' => 'success',
        'data' => \App\Models\User::all()
    ], 200);
});
