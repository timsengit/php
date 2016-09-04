function check(form) {
    //判断账号不为空
    if(form.username.value==""){
        alert("请输入账号");
        form.username.focus();
        return false;
    }
    //判断密码不为空
    if(form.pass.value==""){
        alert("请输入密码");
        form.pass.focus();
        return false;
    }
    //判断两次密码要一致
    if(form.pass.value!=form.passconfirm.value){
        alert("两次密码不一致");
        form.passconfirm.focus();
        return false;
    }
    //判断下拉框不为空
    if(form.city.value==""){
        alert("请选择城市");
        form.city.focus();
        return false;
    }
    //判断图片不为空
    if(form.file.value==""){
        alert("请选择图片");
        form.file.focus();
        return false;
    }
    //判断文本不为空
    if(form.info.value==""){
        alert("请输入个人简介");
        form.info.focus();
        return false;
    }
    return true;
}