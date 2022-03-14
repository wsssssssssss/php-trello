<?php

use src\App\Route;

Route::get("/", "PageController@main");

Route::get("/logout", "PageController@logout");
Route::post("/join", "PageController@joinProcess");
Route::post("/login", "PageController@loginProcess");

