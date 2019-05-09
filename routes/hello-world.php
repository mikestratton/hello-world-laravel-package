<?php


Route::get('hello-world/{name?}', 'Mikestratton\Hello\Http\HelloWorldController@hello');