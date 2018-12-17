<?php
/**
 * Created by PhpStorm.
 * User: 张伟
 * Date: 2018/11/10
 * Time: 15:46
 */

namespace App\Services\Permission;


interface PermissionInterface
{
    public function create(array $data);

    public function update();

    public function select();

    public function find_one();
}