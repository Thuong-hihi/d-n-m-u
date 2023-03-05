<?php
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc(name) values ('$tenloai')";
    pdo_execute($sql);
}
// thao tac them

function delete_danhmuc($id){
    $sql = "DELETE FROM danhmuc WHERE id=".$id;
    pdo_execute($sql);
}
// thao tac xoa
function loadAll_danhmuc(){
    $sql = "select * from danhmuc order by name";
    $listdanhmuc= pdo_query($sql);
    return $listdanhmuc;
}
//lay nhieu danh muc 
function loadone_danhmuc($id){
    $sql = "SELECT* FROM danhmuc WHERE id=".$id;
    $dm=pdo_query_one($sql);//chi tiet danh muc
    return $dm;
}
//lay 1 danh muc 
function update_danhmuc($id,$tenloai){
    $sql = "UPDATE danhmuc set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);

}
//$listtaikhoan = loadAll_taikhoan()
?>