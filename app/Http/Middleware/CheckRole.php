<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek udah login belum
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Cek role sesuai
        if (auth()->user()->role != $role) {
            abort(403, 'Akses ditolak!');
        }

        return $next($request);
    }
}