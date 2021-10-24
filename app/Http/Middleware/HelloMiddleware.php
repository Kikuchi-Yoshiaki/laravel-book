<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $hello = 'こんにちは！これはミドルうぇあです';
        $bye = 'さようなら、ミドルうぇあ…。';
        $data = [
            'hello' => $hello,
            'bye' => $bye,
        ];
        $request->merge($data);
        return $next($request);
    }
}
