
<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
    THÊM MỚI LOẠI HÀNG
</p>
            <div class="form mt-5 leading-8">
                <form action="index_admin.php?act=adddm" method="post" >
                    <p>Mã loại hàng</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" disabled name="maloai"
                           placeholder="Auto number">
                    <p>Tên loại</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" name="tenloai" required
                           title="Tên loại hàng"
                           placeholder="Tên loại hàng..">
                    

                 <div class="mt-[20px]">
                    <input type="submit" value="Thêm Mới"  name="themmoi" class="border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                    <input class="border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]" type="reset" value="Nhập Lại">
                    <a href="index_admin.php?act=listdm"><input type="button" value="Danh Sách" class=" border px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]"></a>
                 </div>

                 <?php
                    if(isset($thongbao) && ($thongbao))
                 echo $thongbao;
                 ?>
                </form>
            </div>
        </div> <!-- End .main-->
    </div> <!-- End .container-->