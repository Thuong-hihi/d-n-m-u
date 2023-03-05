<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="border w-full mx-auto text-center">
<tr class="bg-[#FFC0CB] py-2 border text-center text-red-600 h-[50px]" >
            <th class="border ">Mã Danh Mục</th>
            <th class="border ">Tên Danh Mục</th>
            <th class="border ">số lượng </th>
            <th class="border ">giá cao nhất </th>
            <th class="border ">giá thấp nhất</th>
            <th class="border ">giá trung bình</th>
        </tr>
        <?php
                foreach($listthongke as $thongke){
                        extract($thongke);
                    echo ' <tr>
                        <td class="border h-[50px]">'.$madm.'</td>
                        <td class="border h-[50px]">'.$tendm.'</td>
                        <td class="border h-[50px]">'.$countsp.'</td>
                        <td class="border h-[50px]">'.$maxprice.' đ</td>
                        <td class="border h-[50px]">'.$minprice.' đ</td>
                        <td class="border h-[50px]">'.$avgprice.' đ</td>
                    </tr>';
                }
        ?>

    </table>
</body>
</html>