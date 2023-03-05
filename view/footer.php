</body>
</html>
<?php
// show_array($new_pro);
// echo $new_pro[0]['pro_image'];
// show_array($list_cate);
// show_array($list_top_10);


?>

<script>
    var images = [];
    var index = 1;
    function loadAnh() {
        for (var i = 1; i < 4; i++) {
            images[i] = new Image();
            images[i].src = "asset/img/" + i + ".jpg";
        }
        auto();
    }

    function auto() {
        document.getElementById("anh").src = images[index].src;
        if (index == 3) {
            index = 1;
        } else {
            index++;
        }
        setTimeout(auto, 2000);
    }
    function next() {
        index++;
        if (index >= images.length) {
            index = 1;
        }
        document.getElementById("anh").src = images[index].src;
    }
    function prev() {
        index--;
        if (index < 1) {
            index = images.length - 1;
        }
        document.getElementById("anh").src = images[index].src;


    }

</script>