<?php
//insert dữ liệu khi đăng ký
function insert_taikhoan($email, $user, $password)
{
    $sql = "insert into taikhoan(email,user,password) values('$email', '$user', '$password')";
    pdo_execute($sql);
}
// đăng nhập tài khoản
function checkuser($user,$password)
{
    $sql = "select * from taikhoan WHERE user='". $user."' and password='". $password."'  ";
    $sp = pdo_query_one($sql);
    return $sp;
}
// quên mật khẩu để ng dùng đặt lại
function checkemail($email)
{
    $sql = "select * from taikhoan WHERE email='". $email."'  ";
    $sp = pdo_query_one($sql); 
    return $sp;
}
//cập nhật tài khoản
function update_taikhoan($id,$email,$user,$password,$address,$tel)
{
    $sql = "UPDATE taikhoan SET  user='".$user."', password='".$password."', email='".$email."', address='".$address."', tel='".$tel."' where id=" . $id;
    pdo_execute($sql);
}
//load tat ca danh muc tai khoan trong admin
function  loadAll_taikhoan(){
    $sql = "SELECT* FROM taikhoan order by id desc";
    $listtaikhoan= pdo_query($sql);
    return $listtaikhoan;
}
// xóa tài khoản 
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id=" . $id;
    pdo_execute($sql);
}
//lay 1 tai khoan can chỉnh sửa trong admin
function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan WHERE id=" . $id;
    $sp = pdo_query_one($sql); 
    return $sp;
}

?>