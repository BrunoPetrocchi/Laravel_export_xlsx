<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UserExport;

class UserController extends Controller
{
    public function export()
    {
        return new UserExport;
    }
}
