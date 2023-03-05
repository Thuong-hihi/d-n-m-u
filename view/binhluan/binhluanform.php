<?php
 session_start();
 include "../../model/pdo.php";
 include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];

$dsbl = loadAll_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="border border-[#15146] ">
        <div class="text-2xl border-b text-[22px] font-bold  mt-[80px]">Bình Luận</div>
        <div class="  h-[300px] w-full">
            <table class="">
                <?php    
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr class="flex"> <td class="block border-b p-2  hover:bg-[#FFEEEE] hover:text-[#F54748]">' . $id . '</td>';
                    echo '<td class="block border-b p-2  hover:bg-[#FFEEEE] hover:text-[#F54748] ">' . $ngay_bl . '</td>';
                    echo '<td class="block border-b p-2  hover:bg-[#FFEEEE] hover:text-[#F54748] ">' . $noidung . '</td></tr>';
                }
                ?>
            </table>

        </div>
        <div class=" p-2 bg-[#FFEEEE]">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="flex space-x-2">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">

                <input class="border w-full px-2 py-1 " name="noidung" type="text" placeholder="Bình Luận">
                <input class="border px-2 py-1 text-[#F54748] bg-[#FFFFFF] hover:bg-[#FFC0CB]" type="submit"
                    value="Gửi Bình Luận" name="guibinhluan">
            </form>

        </div>
        <?php
         if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
             $iduser = $_SESSION['user']['id'];
             $idpro = $_POST['idpro'];
             $ngay_bl = date('h:i:sa d/m/Y');
             $noidung = $_POST['noidung'];
           insert_binhluan($iduser, $idpro, $ngay_bl, $noidung);
            header("location: " . $_SERVER['HTTP_REFERER']);
         }

        ?>

    </div>
</body>

</html>