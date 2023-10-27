<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        } else {
            Alert::toast('Silahkan Login Terlebih Dahulu!', 'warning');
            return route('login');
        }
    }
}
