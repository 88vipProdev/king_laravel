<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Auth;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {  
        
   
        // Kiểm tra xem người dùng đã xác thực hay chưa
            if (!Auth::check()) {
                // Người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
                return redirect()->route('viewlogin');
            }

            // Kiểm tra xem người dùng có quyền admin hay không
            if (Auth::user()->isAdmin()) {
                // Người dùng là admin, chuyển hướng tới trang admin
                return redirect()->route('admin.index');
            }

            // Người dùng không phải là admin, chuyển hướng hoặc trả về lỗi 403 Unauthorized
            return abort(403, 'Unauthorized');
    }
    }

    

