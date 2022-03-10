<?php
include "Response.php";
include "Request.php";
class Router
{
    public function get($path, $callback)
    {
        $response = new Response();
        $request = new Request();
        if ($request->getMethod() == "GET" && $request->getPath() == $path) {
            $callback($request, $response);
        }
    }
}