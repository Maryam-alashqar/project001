<?php
namespace App\Http\Traits;

use App\Providers\RouteServiceProvider;
use Illuminate\Routing\Route;

trait AuthTrait
{
    public function checkGuard($request){
        if($request->type=='author'){
            $guardName = 'author';
        }
        if($request->type=='visitors'){
            $guardName = 'visitor';
        } else{
            $guardName = 'web';
        }
        return $guardName;
    }
    public function redirect($request){
        if($request->type=='author'){
           return redirect()->intended( RouteServiceProvider::AUTHORDASHBOARD);
        }
        if($request->type=='visitors'){
            return redirect()->intended( RouteServiceProvider::VISITOR);
        } else{
            return redirect()->intended( RouteServiceProvider::HOME);
        }

    }
}
?>
