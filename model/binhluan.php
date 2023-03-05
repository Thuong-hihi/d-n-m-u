<?php
function insert_binhluan($iduser,$idpro,$ngay_bl,$noidung){
    $sql = "insert into binhluan(iduser,idpro,ngay_bl,noidung) values ('$iduser','$idpro','$ngay_bl','$noidung')";
    pdo_execute($sql);
}

function loadAll_binhluan($idpro){
    $sql = "select * from binhluan where 1";
   if($idpro>0) $sql.=" AND idpro='".$idpro."' ";
   $sql .=" order by id ";
    $listbl= pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $id;
    pdo_execute($sql);
}
function  loadAll_binhluany(){
    $sql = "SELECT* FROM binhluan order by id desc";
    $listbl= pdo_query($sql);
    return $listbl;
}
?>