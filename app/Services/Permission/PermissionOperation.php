<?php
/**
 * Created by PhpStorm.
 * User: 张伟
 * Date: 2018/11/10
 * Time: 15:52
 */

namespace App\Services\Permission;


use App\Models\Admin\User\Permission;

class PermissionOperation implements PermissionInterface
{

    protected $model;

    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }

    public function create(array $data)//添加权限节点
    {
        $permissionModel = $this->model->fill($data);$permissionModel->save();
        if ($data['pid'] > 0)
        {
            $pidModel = $this->model::query()->find($data['pid']);

            $path = $pidModel->path;

            if (substr_count($path,'-'))
            {
                $path = $path .'-'.$permissionModel->id;
            }else{
                $path = $data['pid'] .'-'. $permissionModel->id;
            }
         $permissionModel->path = $path;

         $permissionModel->save();
        }

        return $permissionModel;
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function select()
    {
        // TODO: Implement select() method.
    }

    public function find_one()
    {
        // TODO: Implement find_one() method.
    }

    public function delete()
    {

    }
}