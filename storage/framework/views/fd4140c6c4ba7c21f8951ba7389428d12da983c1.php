<?php echo $__env->make('admin.common.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<title>节点信息编辑</title>
</head>
<body>

<div class="pd-20">
    <div class="Huiform">
        <form id="myFormSubmit">

            <table class="table table-bg">
                <tbody>
                <tr>
                    <th></th>
                    <td>
                        	 <span class="select-box" style='width:200px;'>
	            <select  class='select' name="pid" size="1">
                 <option value="0">栏目标题</option>
                    </select>
	                         </span>
                    </td>
                </tr>
                <tr>
                    <th width="100" class="text-r">权限名称：</th>

                    <td><input type="text" style="width:200px" class="input-text action_name"  datatype="*2-20" errormsg="至少2到20个中文" name="action_name"><div class="Validform_checktip"></div></td>

                </tr>
                <?php echo e(csrf_field()); ?>

                <tr>
                    <th class="text-r"> 方法名称：</th>
                    <td><input type="text" style="width:200px" class="input-text action" datatype="*10-60" errormsg="至少10到60位字符" name="action"><div class="Validform_checktip"></div></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button class="btn btn-success radius" type="submit" onclick='admin_permission_add("<?php echo e(route('manager.permissionAdd')); ?>")'><i class="icon-ok"></i> 确定</button></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<?php echo $__env->make('admin.common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript" src="<?php echo e(asset('hui-admin/lib/Validform/Validform_v5.3.2.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('commonjs/admin-js.js')); ?>"></script>