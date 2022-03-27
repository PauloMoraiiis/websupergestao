<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

class LogAcessoMiddleware
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

        //return $next($request);
        LogAcesso::create(['log' => 'IP xyz requisitoi a rota abcdd']);
        return Response('Chegamos no middleware e finalizamos no proprio middleaware');
    }
}
