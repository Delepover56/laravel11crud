<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

route::get('/', [UserController::class, 'index'])->name('AllUsers');
route::get('signup', [UserController::class, 'signup'])->name('UserCreate');
route::post('signup', [UserController::class, 'store'])->name('UserStore');
route::get('/login', [UserController::class, 'login'])->name('UserLogin');
