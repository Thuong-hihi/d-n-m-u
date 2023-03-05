<section class="content w-11/12 grid grid-cols-[80%20%] mt-8 mx-auto gap-2 ">
    <div>
        <div class="w-full border border-[#15146] content w-5/6 mt-10 mx-auto grid grid-cols-[50%50%] h-[500px]">
        
            <?php
            extract($onesp);
            $hinh = $img_path . $img;
            echo '<div ><img src="' . $hinh . '" alt=""class="w-full mx-auto"></div>';
            ?>
            <div class="ml-[50px] mt-[50px] mt-[10px]">
                <div class="">
                <a href="index.php" class="pt-[10px] text-slate-400 font-[500] text-xl hover:text-[red]">Trang Chu / </a>
                    <a href="" class="pt-[10px] text-slate-400 font-[500] text-xl hover:text-[red]"><?=load_tendm($iddm)?></a>
                </div>
               
                <p class="text-[25px] font-[600] ">     
                        <?= $name ?>
                </p>
                <p class="font-[500] text-red-500 mt-[10px]" > 
                        <?= $price ?> đ
                </p>
                <p class="font-[500] mt-[10px] text-xl">
                    Mô Tả :    <?= $mota ?>
                </p>
                
            </div>
        </div> <br>
        <!--end chi tiet san pham-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                });
        </script> 
        <div class=" border border-[#15146]" id="binhluan">
        </div> <br>
       <!-- end binh luan -->

        <div class=" border border-[#15146]">
            <p class=" text-2xl border-b text-[22px] font-bold  bg-gray-200 pl-[10px]">Sản Phẩm Cùng Loại</p>
            <div class="grid grid-cols-3 gap-5 my-[10px] text-center">
                <?php
                foreach ($spcungloai as $spcungloai) {
                   
                    extract($spcungloai);
                    $hinh = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    echo '  <div class="ml-[20px]  border w-[250px]">
                    <a href="'. $linksp.'"><img class=" w-full h-[300px]" src="'.$hinh.'" alt=""></a>
                    <p class="px-3 font-[500] text-[20px] text-teal-800">  <a href="' . $linksp . '">' . $name . '</a></p>
                    <a href=""  class="font-[600] text-red-500" >' . $price . ' đ</a>
                </div> ';
                }
                ?>
            </div>

        </div>
        <!--end san pham cung loai-->
    </div>

    <aside class="w-11.5/12 ">
        <?php include "aside.php"; ?>
    </aside>
</section>
