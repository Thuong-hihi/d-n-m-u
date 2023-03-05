<div class="border border-[#15146]">
    <div class=" font-medium text-xl text-center text-[red] border-b bg-gray-200"> Tài Khoản</div>
    <div class="ml-[50px]">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="mt-[20px] flex my-auto">
                <p class=" font-medium  text-[18px]"> Xin Chào :</p>
                <p class="ml-[15px] font-bold text-[red] text-[18px]"><?= $user  ?></p>
            </div>
            <div class="mt-[10px]">
                <li><a href="index.php?act=quenmk" class=" hover:underline hover:text-[#F54748]">Quên Mật Khẩu </a> </li>
                <li> <a href="index.php?act=edit_taikhoan" class=" hover:underline hover:text-[#F54748]">Cập Nhật Tài khoản</a></li>
                <?php if ($role == 1) {
                ?>
                    <li><a href="admin/index_admin.php" class=" hover:underline hover:text-[#F54748]">Đăng Nhập ADMIN </a> </li>
                <?php }
                ?>
                <li><a href="index.php?act=thoat" class=" hover:underline hover:text-[#F54748]">Thoát</a> </li>

            </div>
        <?php
        } else {

        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="mt-[10px]">
                    Tên Đăng Nhập <br>
                    <input type="text" name="user" id="" class="border border-[#000000] rounded-md">
                </div>
                <div class="mt-[10px]">
                    Mật Khẩu <br>
                    <input type="password" name="password" id="" class="border border-[#000000] rounded-md">
                </div>
                <div class="mt-[10px]">
                    <input type="checkbox" name="" id=""> Ghi Nhớ Tài Khoản ? <br>
                </div>
                <div class="mt-[10px]">
                    <input type="submit" value="Đăng Nhập" name="dangnhap" class="mx-auto font-awesome text-[18px] border border-[#15146] w-[150px] hover:bg-[#FFC0CB]">
                </div>
                <div class="mt-[10px]">
                    <li><a href="index.php?act=quenmk" class=" hover:underline hover:text-[#F54748]">Quên Mật Khẩu </a> </li>
                    <li> <a href="index.php?act=dangky" class=" hover:underline hover:text-[#F54748]">Đăng Ký Thành Viên</a>
                    </li>
                </div>

            </form>
        <?php
        }
        ?>
    </div>
</div>
<!--end tai khoan-->
<div class="mt-[20px] border border-[#15146]">
    <div class="font-medium text-xl text-center text-[red] border-b bg-gray-200"> Danh Mục</div>
    <div class=" ml-[px]">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo ' <li class="block border-b p-2  hover:bg-[#FFEEEE] hover:text-[#F54748]"><a href="' . $linkdm . '" > ' . $name . ' </a></li>';
            }
            ?>
            <!--  <li class="mt-[10px] border-b "><a href="#">Đồng Hồ </a></li>
                    <li class="mt-[10px] border-b"><a href="#">LapTop</a></li>
                    <li class="mt-[10px] border-b"><a href="#">Điện Thoại </a></li>
                    <li class="mt-[10px] border-b"><a href="#">Tai Nghe</a></li> -->
        </ul>
    </div>
    <div class=" mt-2 p-2 bg-[#FFEEEE] ">
        <form action="index.php?act=sanpham" method="post" class="flex space-x-2">
            <input name="kyw" type="text" placeholder="Tìm kiếm tên danh mục" class="border w-full px-2 py-1">
            <input type="submit" value="Tìm kiếm" name="timkiem" class="border px-2 py-1 text-[#F54748] bg-[#FFFFFF] hover:bg-[#FFC0CB]">
        </form>
    </div>
</div>
<!--end danh muc-->

<div class="mt-[20px] border border-[#15146]">
    <div class="font-medium text-xl text-center text-[red] border-b bg-gray-200"> Top 10 Yêu Thích</div>
    <ul class="category_list">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $hinh = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo ' <li class="flex items-center space-x-2">
                        <img class="w-[50px] border rounded-md" src="' . $hinh . '" alt="">
                        <a class="block w-full border-red-400 p-2 text-lg hover:underline hover:text-[#F54748]" href="' . $linksp . '">' . $name . '</a>
                   
                   <div class="flex flex-col text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="35" fill="red" class="bi bi-eye mx-auto" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                    <span class="text-slate-400">' . $luotxem . '</span>
                    </div>
                    </li>';
        }
        ?>

        <!-- <li class="flex items-center space-x-2">
                    <img class="w-[50px] border rounded-md" src="asset/img/apple.jpg" alt="">
                    <a class="block w-full border-red-400 p-2 text-lg hover:underline hover:text-[#F54748]" href="">Tai
                        nghe </a>
                </li>
                <li class="flex items-center space-x-2">
                    <img class="w-[50px] border rounded-md" src="asset/img/hp.jpg" alt="">
                    <a class="block w-full border-red-400 p-2 text-lg hover:underline hover:text-[#F54748]"
                        href="">Apple watch</a>
                </li>
                <li class="flex items-center space-x-2">
                    <img class="w-[50px] border rounded-md" src="asset/img/dongho.jpg" alt="">
                    <a class="block w-full border-red-400 p-2 text-lg hover:underline hover:text-[#F54748]" href="">Đồng
                        Hồ Mạ Vàng</a>
                </li>
                <li class="flex items-center space-x-2">
                    <img class="w-[50px] border rounded-md" src="asset/img/dell.jpg" alt="">
                    <a class="block w-full border-red-400 p-2 text-lg hover:underline hover:text-[#F54748]" href="">Máy
                        Tính Cây DELL sr51a7 </a>
                </li>
            </ul> --><!-- End .category_list-->
        <div class=" mt-2 p-2 bg-[#FFEEEE] ">
            <form action="index.php?act=sanpham" method="post" class="flex space-x-2">
                <input name="kyw" type="text" placeholder="Tìm kiếm top yêu thích" class="border w-full px-2 py-1">
                <input type="submit" value="Tìm kiếm" name="timkiem" class="border px-2 py-1 text-[#F54748] bg-[#FFFFFF] hover:bg-[#FFC0CB]">
            </form>
        </div>
</div>
<!--endtop 10 yeu thich-->
</div>