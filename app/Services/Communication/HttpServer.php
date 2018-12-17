<?php
/**
 * Created by PhpStorm.
 * User: 张伟
 * Date: 2018/12/4
 * Time: 1:01
 */

namespace App\Services\Communication;


use Workerman\Worker;

class HttpServer implements Protocol
{
    protected $http_worker;

    public function connect()
    {
       $woker = new Worker("http://0.0.0.0:2345");

       $woker->count = 4;

       $this->http_worker = $woker;
    }

    public function OnMessage()
    {
        $this->http_worker->onMessage = function($connection, $data){
            // $_GET, $_POST, $_COOKIE, $_SESSION, $_SERVER, $_FILES are available
            var_dump($_GET, $_POST, $_COOKIE, $_SESSION, $_SERVER, $_FILES, $data);
            // send data to client
            $connection->send("hello world \n");
        };

        Worker::runAll();
    }

    public function OnClose()
    {
        // TODO: Implement OnClose() method.
    }
}