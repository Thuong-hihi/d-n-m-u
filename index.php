<?php
 ob_start();
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "globel.php";
include "model/taikhoan.php";

$dsdm = loadAll_danhmuc();
$spnew = loadAll_sanpham_dm();
$dstop10 = loadAll_sanpham_top10();



if ((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch($act){
        //thong tin gioi thieu lien he :dung switch case de lien ket trang này đến phần trang chủ khi kích vào 
        case 'sanpham':
            //seach dm
            if (isset($_POST['kyw']) && ($_POST['kyw']!="")) {
                    $kyw =$_POST['kyw'];
            }else{
                $kyw ="";
            }

            if (isset($_GET['iddm']) && ($_GET['iddm']>0)) {
                $iddm=$_GET['iddm'];
            }else{
               $iddm = 0;
            }
            
            $dssp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_tendm($iddm);
            include "view/sanpham.php";
        break;
            // phan spdanhmuc.php
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp']>0)) {
                $id=$_GET['idsp'];
                $onesp=loadone_sanpham($id);
            
                extract($onesp);
                $spcungloai = load_sanpham_cungloai($id,$iddm);
                include 'view/sanphamct.php';
            }else{
                include 'view/home.php';
            }
             // phan sanphamct.php phan top10 sanpham
        break;
        // đăng ký đăng nhập ,...
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $email= $_POST['email'];
                    $user= $_POST['user'];
                    $password= $_POST['password'];
                    insert_taikhoan($email, $user, $password);
                    $thongbao="Đăng Ký Thành Công. Vui Lòng Đăng Nhập!";
            }
            include 'view/taikhoan/dangky.php';
        break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $user= $_POST['user'];
                    $password= $_POST['password'];
                    $checkuser=checkuser($user,$password);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('Location:index.php');
                    //$thongbao="Đăng Nhập Thành Công!";
                    }else{
                        $thongbao="Tài Khoản Không Tồn Tại . Vui Lòng Nhập Lại!";
                    }
                   
            }
            include 'view/taikhoan/dangky.php';
        break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id= $_POST['id'];
                $email= $_POST['email'];
                    $user= $_POST['user'];
                    $password= $_POST['password'];
                  
                    $address= $_POST['address'];
                    $tel= $_POST['tel'];
                   
                    update_taikhoan($id ,$email,$user,$password,$address,$tel);
                   $_SESSION['user'] = checkuser($user,$password);
            }
            include 'view/taikhoan/edit_taikhoan.php';
        break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email= $_POST['email'];
                    $checkemail= checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao ="mật khẩu của bạn là : ". $checkemail['password'];
                    }else{
                        $thongbao ="Email không tồn tại : ";
                    }
            }
            include 'view/taikhoan/quenmk.php';
        break;
        case 'thongtin':
            include 'view/thongtin.php';
        break;
        case 'gioithieu':
            include 'view/gioithieu.php';
        break;
        case 'lienhe':
            include 'view/lienhe.php';
        break;
        case 'thoat':
            session_unset();
            header('Location:index.php');
        break;
        default:
        include "view/home.php";
        break;
    }
}else{
    include "view/home.php";
}

include "view/footer.php";
