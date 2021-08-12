<?php

use Edwinhuish\DcatExt\FileLibrary\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('dcat-ext-file-library', Controllers\DcatExtFileLibraryController::class.'@index');