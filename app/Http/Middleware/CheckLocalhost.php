<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLocalhost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $ip = '127.0.0.1'; // Tên host được cho phép truy cập API
        // // dd($request->ip());
        // if ($request->ip() !== $ip) {
        // abort(403, 'Unauthorized'); // Hoặc thực hiện xử lý khác tùy ý
        // }

        return $next($request);

        // $apiKey = $request->header('Api-Key');

        // // Kiểm tra xem API key có hợp lệ hay không
        // if ($apiKey !== 'YOUR_API_KEY') {
        //     return response()->json(['message' => 'Unauthorized'], 401);
        // }

        // return $next($request);
    }
}
