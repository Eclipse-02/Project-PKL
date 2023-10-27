<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class PasswordExpired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $exipred_pwd = new Carbon(($user->exipred_pwd) ? $user->exipred_pwd : $user->created_at);

        if (Carbon::now()->diffInDays($exipred_pwd) >= 30) {
            Alert::toast('Password anda sudah kadaluarsa!', 'warning');
            return redirect()->route('password.expired');
        }

        return $next($request);
    }
}
