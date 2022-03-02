<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use App\Core\Helper;
use App\Http\Controllers\Core\BaseMVCController;
use Closure;

class CheckUserLoggedin extends BaseMVCController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  if(!$this->IsLogin()){
          return  redirect('signin');
        }
        return $next($request);
    }
}
