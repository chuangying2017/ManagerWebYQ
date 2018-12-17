<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\HttpKernel\Tests\controller_func;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        echo date('H:i:s',time());
        echo "<br/>";
        $result = $this->stairsCount(10);
        dump($result);
        echo "<br>";
        echo date('H:i:s',time());
    }

    private function stairsCount(int $int)
    {
        if ($int <= 2) return $int;

        $x = $this->stairsCount($int - 1 ) + $this->stairsCount($int - 2 );

        return $x;
    }
}
