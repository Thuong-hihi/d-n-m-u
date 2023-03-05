<div>
<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
                Danh Sách Bình Luận
</p>
    <div  class="mt-[20px]">
        <table class="border w-full mx-auto text-center">
        <tr class="bg-[#FFC0CB] py-2 border text-center text-red-600 h-[50px]" >
            <td class="border w-[55px] "></td>
            <td class="border w-[100px]">ID</td>
            <td class="border w-[100px]">IDUSER</td>
            <td class="border ">IDPRO</td>
            <td class="border w-[300px]">DATE</td>
            <td class="border ">NỘI DUNG</td>
           
            <td class="border w-[120px]">Thao Tác</td>
        </tr>
            <?php
                foreach ($listbl as $bl){
                    extract($bl);
                    $suabl = "index_admin.php?act=suabl&id=".$id;
                    $xoabl = "index_admin.php?act=xoabl&id=".$id;
            ?>
            <tr>
                    <td class="border h-[50px]"><input type="checkbox" name="" id=""></td>
                    <td class="border h-[50px]"><?=$id?></td>
                    <td class="border h-[50px]"><?=$iduser?></td>
                    <td class="border h-[50px]"><?=$idpro?></td>
                    <td class="border h-[50px]"><?=$ngay_bl?></td>
                    <td class="border h-[50px]"><?=$noidung?></td>
                     <td class="border h-[50px]">
                    <a href="<?=$suabl?>"><input type="button" value="Sửa" class="border w-[40px] hover:bg-[#FFC0CB]"></a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="<?=$xoabl?>"><input type="button" value="Xóa"  class="border w-[40px] hover:bg-[#FFC0CB]"></a> 
                    </td>
                </tr>
                <?php }
                ?>
        </table >
    </div>
    <div class="action w-full mx-auto mt-4 space-x-1 mt-[20px] ">
        <input type="button" value="Chọn Tất Cả"  class="border  mx-auto">
        <input type="button" value="Bỏ Chọn Tất Cả"  class="border  mx-auto ml-[10px]">
        <input type="button" value="Xóa Các Mục Đã chọn"  class="border  mx-auto  ml-[10px]">
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <style>

        body{
            font-family: 'Roboto', sans-serif;

        }
        table{
            border-collapse: collapse;
        }
        tr>a{
            padding: 7px 0;
            border: 1px solid gray;
        }
        .show a{
            padding: 4px 8px;
            margin-right: 5px;
            background-color: #FFC0CB;
            border: 1px solid darkgray;
            border-radius: 4px;
        }
        .show a:hover{
            color: rgb(239 68 68);
        }
        .action>input{
            background-color: #FFC0CB;
            padding: 5px 15px;
            border-radius: 4px;
        }
        .action>a{
            background-color: #FFC0CB;
            padding: 5px 15px;
            border-radius: 4px;
}
        .action>input:hover{
            color: rgb(239 68 68);
            font-weight:500;
        }
    </style>