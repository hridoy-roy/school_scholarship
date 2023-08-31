<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\CreateManu;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()

    {

        $menus = CreateManu::where('status', 'Enabled')->get();

        view()->share('menus', $menus);
        

        
    }
}


