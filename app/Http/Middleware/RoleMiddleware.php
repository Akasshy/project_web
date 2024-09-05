<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;

            if ($userRole == 'admin') {
                // Admin bisa mengakses semua halaman
                return $next($request);
            } elseif ($userRole == 'user' && $role == 'user') {
                // User hanya bisa mengakses halaman user
                return $next($request);
            } else {
                // Jika user mencoba akses halaman admin, redirect ke halaman user
                return redirect('/dasboard')->with('error', "Anda tidak memiliki akses ke halaman admin.");
            }
        }

        return redirect('/')->with('error', "Silakan login terlebih dahulu.");
    }
}
