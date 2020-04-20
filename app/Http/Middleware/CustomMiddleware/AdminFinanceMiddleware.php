<?php

namespace App\Http\Middleware\CustomMiddleware;

use Closure;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\API\BaseController as BaseController;

class AdminFinanceMiddleware extends BaseController
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
        if (Auth::user()->usertype == 3) {
            return $next($request);
        }
        $data['respon'] = 'Access Denied';
        return $this->sendError(401, $data);
    }
}
