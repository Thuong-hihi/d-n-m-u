<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
    THÊM MỚI SẢN PHẨM
</p>
<div class="form mt-5 leading-8">
    <form action="index_admin.php?act=addsp" method="post" enctype="multipart/form-data" > <!-- đẩy file ảnh lên  -->
      
        <p>Mã Sản Phẩm</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" disabled name="ma_loai"
                           placeholder="Auto number">
        <p>Tên Sản Phẩm</p>
        <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]" type="text" name="tensp" required
            placeholder="vui long nhap ten san pham">

        <p>Giá Sản Phẩm</p>
        <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]" type="text" name="giasp" required
            placeholder="vui long nhap gia san pham">
        <p>Ảnh Sản Phẩm</p>
        <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]" type="file" name="hinh" required>
        <p>Mô Tả Sản Phẩm</p>
        <textarea name="mota" id="" cols="30" rows="10" class="border w-full rounded-[4px] h-[70px] px-3 border-[#FFC0CB]"
            placeholder="mo ta san pham...."></textarea>

            <p>Danh Mục </p>
        <select name="iddm"  class="w-full px-3 border rounded-[4px] h-[40px]">
            <option value="">--Chọn--</option>
            <?php foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>


        <div class="mt-[20px]">
            <input type="submit" value="Thêm Mới" name="themmoi"
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