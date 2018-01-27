<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function changeName(Request $request)
    {
        if($request->input('name') == 'José Luis Macedo') {

            return response()->json(['name' => 'José Macedo']);

        }else{

            return response()->json(['name' => 'José Luis Macedo']);

        }
    }
}
