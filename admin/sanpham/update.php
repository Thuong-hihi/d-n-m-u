<?php
    function show_array($arr){
    }
    
    // show_array($list_pro);
    show_array($sanpham);
    
    // show_array($listsanpham);
if (is_array($sanpham)) {
    extract($sanpham);  // trích dẫn sản phẩm
}  
$hinhpath = "../upload/" . $img; // đường dẫn
// echo($hinhpath);
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "'  height='80' width='150'> ";
} else {
    $hinh = "no photo";
}
?>

<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
    CẬP NHẬP SẢN PHẨM
</p>
<div class="form mt-5 leading-8">
    <form action="index_admin.php?act=updatesp" method="post" enctype="multipart/form-data">
    
        <label>Mã sản phẩm</label>
        <input class="border w-full rounded-[4px] px-3 h-[40px]"
                type="text" disabled name="ma_san_pham" id="ma_san_pham"
                placeholder="Auto number" value="<?=$id?>">
               
        <p>Tên Sản Phẩm</p>
        <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]" type="text" name="tensp" required
            placeholder="" value="<?= $name ?>">

        <p>gia Sản Phẩm</p>
        <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]" type="text" name="giasp" required
            value="<?= $price ?>">


        <p>anh Sản Phẩm</p>
        <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]" type="file" name="hinh" >
        <?= $hinh ?>

        <p>mo ta Sản Phẩm</p>
        <textarea name="mota" id="" cols="30" rows="10"
            class="border  rounded-[4px] w-full px-3 h-[100px]"><?= $mota ?></textarea>

            <p>Danh Mục </p>
        <select name="iddm"  class="w-full px-3 border rounded-[4px] h-[40px]">
            <option value="">--Chọn Tất Cả --</option>
            <?php foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                if($iddm==$id)  $s="selected"; else $s="";
                echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
            }
            ?>
        </select>

        <div class="mt-[20px]">
            <input type="hidden" name="id" value="<?php echo $sanpham['id'] ?>">
            <input type="submit" value="Cập Nhật" name="capnhat"
                class="border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
            <input class="border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]" type="reset"
                value="Nhập Lại">
            <a href="index_admin.php?act=listsp"><input type="button" value="Danh Sách"
                    class=" border px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]"></a>
        </div>

        <?php
        if (isset($thongbao) && ($thongbao))
            echo $thongbao;
        ?>
    </form>
</div>
</div> <!-- End .main-->
</div> <!-- End .container-->