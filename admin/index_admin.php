<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "header_admin.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";

//controller
if (isset($_GET['act'])) {     // 
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiem tra ng dung co nhap vao nut add hay k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {  // đẩy dữ liệu
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "them thanh cong";
            }
            include "danhmuc/add.php";
            break;
        //add danh muc
        case 'listdm':
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        //danh sach danh muc san pham

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // lấy dữ liệu ở đường link id
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        // xoa danh muc muon xoa

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }

            include "danhmuc/update.php";
            break;
        // sua danh muc 

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cap nhat  thanh cong";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;


//* controler cho san pham
        case 'addsp':
            //kiem tra ng dung co nhap vao nut add hay k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";  // chỉ định thư mục chứa tệ[ ]
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]); // trả về 1 đường dẫn  , đường dẫn tệp tải lên
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {  // di chuyển tệp đã tải đến đích
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "them thanh cong";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;
    //add san pham
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
     //danh sach  san pham

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
        // xoa  muon xoa

        case 'capnhat':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            // $listsanpham = loadAll_sanpham();
            
            include "sanpham/update.php";
            break;
        // sua danh muc 

        case 'updatesp':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                // echo("idsp ".$id . " "."iddm" .$iddm . " ". $tensp. " ". $giasp. " ". $mota);
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                update_sanpham($id,$iddm,$tensp,$giasp,$hinh,$mota);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham("", 0);
            include "sanpham/list.php";
            break;
// tai khoan khach hang
        case 'list':
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;
    //xoa tai khoan da dang nhap
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']); 
            }
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;
    // sua tai khoan da dang nhap
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']); // sửa 1 tài khoản mà bạn cần sửa 
            }
            //$listdanhmuc = loadAll_danhmuc();
            $listtaikhoan = loadAll_taikhoan();// hiện toàn bộ danh sách khách hàng khi đăng ký đăng nhập vào
            include "taikhoan/update.php";
            break;
    // update tai khoan 
        case 'update':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                update_taikhoan($id, $user, $password,$email, $address,$tel);
                $thongbao = "them thanh cong";
            }

            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;
// danh sach khach hang binh luan
        case 'dsbl':
            $listbl = loadAll_binhluan(0);
            include "binhluan/listbl.php";
            break;
              //xoa tai khoan da dang nhap
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbl = loadAll_binhluany();
            include "binhluan/listbl.php";
            break;
        case 'thongke':
            $listthongke = loadAll_thongke();
            include "thongke/list.php";
            break;
        default:
            include "home_admin.php";
            break;
    }
} else {
    include "home_admin.php";
}

include "footer_admin.php";
?>