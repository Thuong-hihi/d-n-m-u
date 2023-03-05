<section class="content w-11/12 grid grid-cols-[80%20%] mt-8 mx-auto gap-2 ">
    <div>
    <div class=" border border-[#15146] ">
            <p class="text-2xl font-bold bg-gray-200 pl-[10px]">Sản Phẩm   <strong><?=$tendm?></strong> </p>
       
        <div class=" mx-[5px] grid grid-cols-3 gap-10 mt-[8px] text-center">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)|| ($i == 10)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                echo '  <div class="content-item ">
                        <a href="' . $linksp . '"><img class="w-full h-[300px]" src="' . $hinh . '" alt=""></a>
                        <p class="text-teal-800 text-xl fold-semibold ">  <a href="' . $linksp . '">' . $name . '</a></p>
                        <a href=""  class="px-2 text-red-600 font-bold  text-[red]" >' . $price . '</a>
                    </div> ';
                $i += 1;
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
