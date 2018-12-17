/*后台-权限节点添加*/

function admin_permission_add(url) {
   let myform = $("#myFormSubmit");
    myform.Validform();

    myform.ajaxForm({
       url: url,
       type: 'post',
       success: function(data)
       {
        if (data.status == 1)
        {
            layer.msg(data.message, {icon: 1, time: 1000});
        }else{
            layer.msg('操作失败', {icon: 2, time:1000});
        }
       },error:function(err)
       {
            console.log(err);
       },
       clearForm: true,
       timeout: 5000
   });
}