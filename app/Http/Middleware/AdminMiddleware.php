<?php

namespace App\Http\Middleware;

use App\Models\Log;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->exists('id')) {
            return redirect()->Route('admin.login');
        }

        $log = new Log();
        $log->admin_id = session('id');
        $log->description = "Login Activity";
        $log->save();


        return $next($request);
    }
}
