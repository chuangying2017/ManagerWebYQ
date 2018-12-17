<?php

namespace App\Http\Controllers\Admin;

use App\Services\Permission\PermissionInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    protected $permission_operation;

    public function __construct(PermissionInterface $permission)
    {
        $this->permission_operation = $permission;
    }

    public function index()
    {
        return view('admin.role.permission');
    }

    public function permission_add_page(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $this->permission_operation->create($request->only('pid','action_name','name','action'));

            return response()->json(['status'=>1,'message'=>'操作成功']);
        }
        return view('admin.role.permission-add');
    }
}
