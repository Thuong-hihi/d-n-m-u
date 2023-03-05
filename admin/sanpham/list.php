<?php
    function show_array($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    // show_array($listsanpham);
?>

<div>
    <p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
        DANH SÁCH SẢN PHẨM
    </p>
    <?php
        if(isset($thong_bao)) echo ($thong_bao);
    ?>
    <form action="index_admin.php?act=listsp" method="post" class="mt-[20px] ">
        <input type="text" name="kyw" id="" class="px-3 border rounded-[4px] h-[30px]" placeholder="Tìm kiếm sản phẩm...">
        <select name="iddm"  class="px-3 border rounded-[4px] h-[30px]">
            <option value="">--Chọn Tất Cả --</option>
            <?php foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="GO" class="px-3 border rounded-[4px] h-[30px]">
    </form>
    <div class="mt-[20px]">
        <table class="border w-full mx-auto text-center">
            <tr class="bg-[#FFC0CB] py-2 border text-center text-red-600 h-[50px]">
                <td class="border w-[55px] "></td>
                <td class="w-[140px]">Mã Sản Phẩm</td>
                <td class="border ">Tên Sản Phẩm</td>
                <td class="w-[140px]">Ảnh Sản Phẩm</td>
                <td class="w-[140px]">Giá Sản Phẩm</td>
                <td class="w-[140px]">Lượt Xem</td>
                <td class="w-[140px]">Mô Tả</td>
                <td class="border w-[120px]">Thao Tác</td>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index_admin.php?act=capnhat&id=" . $id;
                $xoasp = "index_admin.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "'  height='80'>";
                } else {
                    $hinh = "no photo";
                }
            ?>
                    <tr>
                    <td class="border h-[50px]"><input type="checkbox" name="" id=""></td>
                    <td class="border h-[50px]"><?=$id?></td>
                    <td class="border h-[50px]"><?=$name?></td>
                    <td class="border h-[50px]"><?=$hinh?></td>
                    <td class="border h-[50px]"><?=$price?></td>
                    <td class="border h-[50px]"><?=$luotxem?></td>
                    <td class="border h-[50px]"><?=$mota?></td>
                    <td class="border h-[50px]">
                     <a href="<?=$suasp?>"><input type="button" value="Sửa" class="border w-[50px] hover:bg-[#FFC0CB]"></a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="<?=$xoasp?>"><input type="button" value="Xóa"  class="border w-[40px] hover:bg-[#FFC0CB]"></a> 
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="action w-full mx-auto mt-4 space-x-1">
        <input type="button" value="Chọn Tất Cả" class="border  mx-auto">
        <input type="button" value="Bỏ Chọn Tất Cả" class="border  mx-auto ml-[10px]">
        <input type="button" value="Xóa Các Mục Đã chọn" class="border  mx-auto  ml-[10px]">
        <a href="index_admin.php?act=addsp"><input type="button" value="Nhập Thêm" class="  mx-auto  ml-[10px] bg-[#FFC0CB]"></a>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <style>

        body{
            font-family: 'Roboto', sans-serif;

        }
        table{
            border-collapse: collapse;
        }
        tr>a{
            padding: 7px 0;
            border: 1px solid gray;
        }
        .show a{
            padding: 4px 8px;
            margin-right: 5px;
            background-color: #FFC0CB;
            border: 1px solid darkgray;
            border-radius: 4px;
        }
        .show a:hover{
            color: rgb(239 68 68);
        }
        .action>input{
            background-color: #FFC0CB;
            padding: 5px 15px;
            border-radius: 4px;
        }
        .action>a{
            background-color: #FFC0CB;
            padding: 5px 15px;
            border-radius: 4px;
}
        .action>input:hover{
            color: rgb(239 68 68);
            font-weight:500;
        }
    </style>