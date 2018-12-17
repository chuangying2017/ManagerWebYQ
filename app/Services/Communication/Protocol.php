<?php
/**
 * Created by PhpStorm.
 * User: 张伟
 * Date: 2018/12/4
 * Time: 0:10
 */

namespace App\Services\Communication;


interface Protocol
{
    public function connect();//连接

    public function OnMessage();//发送

    public function OnClose();//关闭
}