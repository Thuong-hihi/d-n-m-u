<?php
if(is_array($dm)){
    extract($dm);
}
?>

<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
    CẬP NHẬP LOẠI HÀNG
</p>
            <div class="form mt-5 leading-8">
                <form action="index_admin.php?act=updatedm" method="post" > <!-- lay du lieu từ from  -->
                    <p>Mã loại hàng</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" disabled name="maloai"
                           placeholder="Auto number">
                    <p>Tên loại</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" name="tenloai" required
                          value="<?php if (isset($name) && ($name != ""))  //khai bao
                              echo $name;?>"
                           placeholder="Tên loại hàng..">
                    

                 <div class="mt-[20px]">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id>0))
                              echo $id;?>">
                    <input type="submit" value="cap nhat"  name="capnhat" class="border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                    <input class="border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]" type="reset" value="nhap lai">
                    <a href="index_admin.php?act=listdm"><input type="button" value="Danh Sach" class=" border px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]"></a>
                 </div>

                 <?php
                    if(isset($thongbao) && ($thongbao))
                 echo $thongbao;
                 ?>
                </form>
            </div>
        </div> <!-- End .main-->
    </div> <!-- End .container-->