<?php
// thao tac them
function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp', '$giasp', '$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

// thao tac xoa
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=" . $id;
    pdo_execute($sql);
}
//lay nhieu san pham
function loadAll_sanpham($kyw="", $iddm=0)
{
    $sql = "SELECT * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%{$kyw}%' ";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='{$iddm}'";
    }
    $sql .= " order by id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//lay nhieu san pham trong home
function loadAll_sanpham_dm()
{
    $sql = "select * from sanpham where 1 order by name desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//lay 1 san pham 

function loadAll_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//lay san pham hien thi trong danh muc nao
function load_tendm($iddm)
{
    if($iddm >0){
        $sql = "select * from danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql); //chi tiet san pham
        extract($dm);
        return $name;
    }else{
        return "";
    }
    
}

//lay 1 san pham
function loadone_sanpham($id)
{
    $sql = "select * from sanpham WHERE id=" . $id;
    $sp = pdo_query_one($sql); //chi tiet san pham
    return $sp;
}
//lay 1 san pham cung loai
function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sanpham WHERE iddm =".$iddm." AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//update san pham
function update_sanpham($id,$iddm,$tensp,$giasp,$hinh,$mota)
{
    if($hinh !== "../upload/") {
        $sql = "UPDATE `sanpham` SET iddm='{$iddm}', name='{$tensp}', price='{$giasp}', img='{$hinh}', mota='{$mota}' where id=" . $id;
    }else {
        $sql = "UPDATE `sanpham` SET iddm='{$iddm}', name='{$tensp}', price='{$giasp}', mota='{$mota}' where id=" . $id;
    }
    
    pdo_execute($sql);
}
?>