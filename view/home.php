

<div class="banner relative min-h-[700px] w-full mt-2">
    <button class="absolute top-1/2" onclick="prev();">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red"
            class="hover:fill-[#000000] bi bi-arrow-left-circle " viewBox="0 0 16 16">
            <path
                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </button>
    <a href="" class="">
        <img title="banner" id="anh" class="w-full h-full" src="asset/img/0.jpg" alt="">
    </a>
    <button class="absolute top-1/2 right-0" onclick="next();">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red"
            class="hover:fill-[#000000] bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path
                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />

        </svg>
    </button>
</div> <!-- End .banner-->
<div class="p_shop w-5/6 mx-auto mt-5 text-center text-2xl font-semibold text-[#F54748] ">
            <span class="italic">FPT SHOP - CÔNG NGHỆ TOÀN CẦU</span>
        </div> <!-- End .p_shop-->

        <section class="content w-11/12 grid grid-cols-[75%25%] mt-8 mx-auto gap-2 ">

<div class="grid grid-cols-3 gap-x-4 text-center ">
    
       <?php
       $i = 0;
            foreach($spnew as $sp){
           extract($sp);
           $hinh = $img_path . $img;
           if(($i==2)||($i==5)||($i==8)){
               $mr = "";
           }else{
            $mr = "mr";
           }
           $linksp = "index.php?act=sanphamct&idsp=".$id;
           echo '  <div class="content-item ">
                    <a href="'. $linksp.'"><img class=" w-full h-[340px] bg-clip-padding bg-gray-200 " src="'.$hinh.'" alt=""></a>
                    <p class="pt-[10px] text-slate-400">'.load_tendm($iddm).'</p>
                    <p class="text-teal-800 text-xl fold-semibold  ">  <a href="'. $linksp.'">'.$name.'</a></p>
                    <a href=""  class="px-2 text-red-600 font-bold  text-[red]" >'.$price.' đ</a>
            </div> ';
           $i += 1;
            }
       ?>
            
    </div>
    <aside class="w-11.5/12 ">
    <?php include "aside.php";?>
    </aside>
</section>