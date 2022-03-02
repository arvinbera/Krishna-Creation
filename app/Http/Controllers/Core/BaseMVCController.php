<?php

namespace App\Http\Controllers\Core;

use App\Core\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BaseMVCController extends Controller
{
    protected   $Token;
    protected $Auth;

    function __construct()
    {
        $this->Token=Helper::$Token;
        $this->Auth=Session::get($this->Token);
    }

    protected function SetSession(object $data){
        Session::put($this->Token,$data);
    }

    public  function GetSession(){
        return Session::get(Helper::$Token);
    }


    public function IsLogin(){

        if(!Session::get($this->Token)){
            return false;
        }

        return true;
    }

    public function RemoveSession():void
    {
        Session::remove($this->Token);
       
    }

}
