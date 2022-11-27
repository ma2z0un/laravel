<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(middleware:'auth')->except(methods:'showAdminName1');
        
    }
    public function showAdminName(){
        return 'Ali Chreif';
    }
    public function showAdminName1(){
        return 'Ali Chreif1';
    }
    public function showAdminName2(){
        return 'Ali Chreif2';
    }
}
