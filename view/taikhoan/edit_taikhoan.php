
<section class="content w-11/12 grid grid-cols-[80%20%] mt-8 mx-auto gap-5 ">
   

   <div class=" border border-[#15146] w-full  mx-auto h-[300px]">
           <p class="text-xl text-[red] font-bold bg-gray-200 pl-[10px] ">Cập Nhật Tài Khoản</p>
           <?php  
            if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);

            }
           ?>
           <form action="index.php?act=edit_taikhoan" method="post" class="ml-[40px] mr-[40px]">
                   <div class="mt-[20px]">
                       Email <br>
                       <input type="email" name="email" value="<?=$email?>" class="border border-[#000000] rounded-md w-full ">
                   </div>
                   <div class="mt-[10px]">
                       Tên Đăng ký <br>
                       <input type="text" name="user" value="<?=$user?>" class="border border-[#000000] rounded-md w-full">
                   </div>
                   <div class="mt-[10px]">
                       Mật Khẩu <br>
                       <input type="password" name="password" value="<?=$password?>" class="border border-[#000000] rounded-md w-full">
                   </div>
                   <div class="mt-[10px]">
                       Địa Chỉ  <br>
                       <input type="text" name="address" value="<?=$address?>" class="border border-[#000000] rounded-md w-full">
                   </div>
                    <div class="mt-[10px]">
                       Số Điện Thoại <br>
                       <input type="text" name="tel" value="<?=$tel?>" class="border border-[#000000] rounded-md w-full">
                   </div>
                   <div class="mt-[20px] ">
                                <input type="hidden" name="id" value="<?=$id?>">

                       <input type="submit" value="Cập Nhật" name="capnhat"
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
   
   <aside class="w-11.5/12 ">
   <?php include "view/aside.php";?>
   </aside>
</section>
