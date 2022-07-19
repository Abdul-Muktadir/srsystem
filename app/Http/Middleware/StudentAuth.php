<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentAuth
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
        if (auth()->guard('student')->check()) {
            if (!auth()->guard('student')->user()->email && auth()->guard('student')->user()->password) {
                return redirect()->route('getStudentLogin')->with('success', 'You Have To Be An Admin');
            }
        }else {
            return redirect()->route('getStudentLogin')->with('error', 'You have to be logged in to access this page');
        }
        $response = $next($request);

        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')

            ->header('Pragma','no-cache')

            ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
