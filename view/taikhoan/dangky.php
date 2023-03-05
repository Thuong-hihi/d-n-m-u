
    <section class="content w-11/12 grid grid-cols-[80%20%] mt-8 mx-auto gap-5 ">
   

    <div class=" border border-[#15146] w-full  mx-auto h-[300px]">
            <p class="text-xl text-[red] font-bold bg-gray-200 pl-[10px] ">Đăng ký thành viên</p>
            <form action="index.php?act=dangky" method="post" class="ml-[40px] mr-[40px]">
                    <div class="mt-[20px]">
                        Email <br>
                        <input type="email" name="email" id="" class="border border-[#000000] rounded-md w-full ">
                    </div>
                    <div class="mt-[10px]">
                        Tên Đăng ký <br>
                        <input type="text" name="user" id="" class="border border-[#000000] rounded-md w-full">
                    </div>
                    <div class="mt-[10px]">
                        Mật Khẩu <br>
                        <input type="password" name="password" id="" class="border border-[#000000] rounded-md w-full">
                    </div>
                    
                    <div class="mt-[20px] ">
                        <input type="submit" value="Đăng ký" name="dangky"
                            class="mx-auto font-awesome text-[18px] border border-[#000000] w-[150px] hover:bg-[#FFC0CB] rounded-md">
                 
                        <input type="reset" value="Nhập Lại" name="nhaplai"
                            class="mx-auto font-awesome text-[18px] border border-[#000000] w-[150px] hover:bg-[#FFC0CB] rounded-md">
                    </div>

                </form>
                <div class="text-[red]">
                <?php 
               if (isset($thongbao) && ($thongbao!="")) {
                    echo $thongbao;
               }
                ?>
                </div>
               
        </div> 
    
    <aside class="w-11/12 ">
    <?php include "view/aside.php";?>
    </aside>
</section>
