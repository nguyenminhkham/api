<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Course;
use Illuminate\Support\Facades\URL;


class HomeController extends Controller
{
    public function index(): View
    {
        $courses = Course::orderBy('serial_no')->get();

        return view('clients.home')->with('courses', $courses);
    }

    public function courses(): View {
        $courses = Course::orderBy('serial_no')->get();

        return view('clients.courses')->with('courses', $courses);
    }
    public function drawing(): View {
        $courses = Course::orderBy('serial_no')->get();

        return view('clients.drawing')->with('courses', $courses);
    }
    public function documentation(): View {
        $courses = Course::orderBy('serial_no')->get();

        return view('clients.documentation')->with('courses', $courses);
    }
    public function login(): View {
        return view('clients.login');
    }
    public function register(): View {
        return view('clients.register');
    }
    public function getPublicIP(Request $request) {
        $ip = $request->ip();
        return response()->json(['ip' => $ip]);
    }

}
