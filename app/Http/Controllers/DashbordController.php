<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashbordController extends Controller
{
    public function __invoke()
    {
        return self::view('manager.index');
    }
}
