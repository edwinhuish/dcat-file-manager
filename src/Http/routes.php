<?php

use Edwin\DcatFileManager\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('edwin-file-manager', Controllers\FileManager::class.'@index');
