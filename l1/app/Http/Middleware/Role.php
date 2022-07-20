<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roleBetGaliButBetkas)
    {
        $userRole = $request->user()?->role ?? 0; // gaunam useri
        if($roleBetGaliButBetkas == 'admin'){
            if($userRole < 10){ 
                abort(401);
            } 
        }
        elseif($roleBetGaliButBetkas == 'user'){
            if($userRole < 1){
                abort(401);
            } 
        }
        return $next($request);
    }
}
// Php artisan make:middleware RolePlay. Norint, kad middleware veiktu, reikia ji uzregistruoti, neregistruoti middleware neveikia. Registruojami KERNEL.PHP ROUTO MIDDLEWARE