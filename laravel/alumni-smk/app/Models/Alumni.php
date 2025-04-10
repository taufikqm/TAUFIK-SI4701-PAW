<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AlumniController;

Route::get('/alumni', [AlumniController::class, 'index']);


class Alumni extends Model
{
    //  
}
