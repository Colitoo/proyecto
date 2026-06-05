<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ChequeoRol
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, mixed ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (!in_array(Auth::user()->perfiles_id, $roles)) {
            // Si el perfiles_id no es 1 (Admin), bloquea el acceso
            abort(403, 'No tenes permisos para acceder a esta sección.');
        }
        return $next($request);
    }
}
