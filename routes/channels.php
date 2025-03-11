<?php

use Illuminate\Support\Facades\Route;


Route::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
