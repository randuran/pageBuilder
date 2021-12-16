<?php

namespace Randyduran\Pagebuilder\Http\Middleware;

use Closure;
use Randyduran\Pagebuilder\Models\Page;
use Illuminate\Http\Request;

class CheckIfPageExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $parameters = $request->route()->parameters();

        if (isset($parameters['slug']) && $parameters['slug'] == 'login') {
            return $next($request);
        }

        /**
         * If does not have any parameters then is index
         */
        if (count($parameters)) {
            $slug = $parameters['slug'];

            $exist = Page::whereSlug($slug)->first();

            //If page does not exist then abort
            if (!$exist) {
                abort(404);
            }
        }

        return $next($request);
    }
}