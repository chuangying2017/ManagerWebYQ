<?php

namespace App\Http\Controllers\Communication;

use App\Services\Communication\HttpServer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function entrance()
    {
        $httpServer = new HttpServer();

        $httpServer->connect();

        $httpServer->OnMessage();
    }
}
