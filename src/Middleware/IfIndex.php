<?php

namespace Bavix\Middleware;

use Illuminate\Http\Request;

class IfIndex
{

    public function handle(Request $request, \Closure $next)
    {
        $uri  = $request->server('REQUEST_URI');
        $name = $request->server('SCRIPT_NAME');

        if (strpos($uri, $name) !== false)
        {
            $path  = '/' . ltrim($request->path(), '/');
            $query = $request->getQueryString();

            if (null !== $query)
            {
                $path .= '?' . $query;
            }

            // disabled laravel redirect
            header('location: ' . $path, true, 301);
            die;
        }

        return $next($request);
    }

}
