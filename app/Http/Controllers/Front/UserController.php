<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function showuser(){
        return 'Ali Chreif';
    }

    public function showuser1(){
        return 'Ali Chreif 1';
    }
    
}
