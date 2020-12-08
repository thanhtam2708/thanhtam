<?php
require_once "../connection.php";
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    //$name = $_GET['name'];
    $imgname = null;
    //$price = $_GET['price'];
    //$detail = $_GET['detail'];
    //$cate_id = $_GET['cate_id'];
    foreach (selectDb("SELECT * FROM products WHERE pro_id = '$pro_id'") as $pro) {
        $name = $pro['name'];
        $image = $pro['image'];
        $price = $pro['price'];
        $detail = $pro['detail'];
        $cate_id = $pro['cate_id'];
    }
    if (isset($_POST['btnSua'])) {
        $name_new = $_POST['name'];
        $price_new = $_POST['price'];
        $detail_new = $_POST['detail'];
        $cate_id_new = $_POST['cate_id'];
        $img = $_FILES['image'];
        $dir = '../upload/';
        if ($_FILES['image']['size'] > 0) {
            $img_name_new = $img['name'];
            move_uploaded_file($img['tmp_name'], $dir . $img_name_new);
        } else {
            $image == "";
        }
        action("UPDATE products SET name='$name_new',image = '$img_name_new',price='$price_new',detail='$detail_new',
        cate_id='$cate_id_new' WHERE pro_id = '$pro_id'");
        header("Location:product.php");
    }
} else {
    header("Location:product.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-2 h-full">
                <div class="flex items-center border-b border-gray-300">
                    <img src="//theme.hstatic.net/200000077237/1000632470/14/logo.png?v=723" alt="" class="w-36">
                    <h3 class="text-2xl">Admin</h3>
                </div>
                <div class="flex items-center  border-b border-gray-300 ">
                    <!--<img src="https://i.imgur.com/vrfDxAK.jpg" alt="" class="w-8 h-8 rounded-full">-->
                    <h3 class="text-2xl text-center">Tống Thị Thanh Tâm</h3>
                </div>
                <nav>
                    <li class="block px-8 py-5 border border-b-solid font-bold"><a href="">
                            <i class="fas fa-info-circle px-2"></i>
                            Quản trị Info</a></li>
                    <li class="block px-8 py-5 border border-b-solid font-bold"><a href="">
                            <i class="fas fa-user px-2"></i>
                            Quản trị tài khoản</a></li>
                    <li class="block px-8 py-5 border border-b-solid font-bold"><a href="categories.php">
                            <i class="fas fa-bars px-2"></i>
                            Quản trị danh mục</a></li>
                    <li class="block px-8 py-5 border border-b-solid font-bold"><a href="product.php">
                            <i class="fab fa-product-hunt px-2"></i>
                            Quản trị sản phẩm</a></li>
                </nav>
            </div>
            <!--cot1-->
            <div class="col-span-10 ">
                <header class="flex items-center pt-2 border-b border-gray-300 p-4">
                    <i class="fas fa-bars px-2"></i>
                    <a href="index.php">Home web</a>
                    <form action="" class="px-4 ">
                        <input type="text" placeholder="search "
                            class="border border-solid border-gray-300 rounded-md p-2">
                        <button type="submit" class="border border-solid border-gray-300 rounded-md p-2">Search</button>
                    </form>

                </header>

                <section class="p-2">
                    <h2 class="text-2xl font-bold pb-5 pt-2">Sửa sản phẩm</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="grid grid-cols-9 gap-5">
                            <div class="col-span-6">
                                <div class="py-5">
                                    <label for="" class="text-xl pb-2 font-bold">Tên sản phẩm</label><br>
                                    <input type="text" name="name" id="" value="<?= $pro['name'] ?>"
                                        class="border border-solid border-black rounded-md w-full p-2"
                                        placeholder="Tên sản phẩm">
                                </div>
                                <div class="py-5">
                                    <label for="" class="text-xl pb-2 font-bold">Giá</label><br>
                                    <input type="text" name="price" id="" value="<?= $pro['price'] ?>"
                                        class="border border-solid border-black rounded-md w-full p-2">
                                </div>
                                <div class="py-5">
                                    <label for="" class="text-xl pb-2 font-bold">Chi tiết sản phẩm</label><br>
                                    <textarea name="detail" id="" cols="130" rows="10"
                                        class="border border-solid border-black rounded-md w-full p-2"><?= $pro['detail'] ?></textarea>
                                </div>
                                <div>
                                    <button type="submit" name="btnSua"
                                        class="border border-solid border-blue-500 bg-blue-500 p-2 text-white font-medium rounded-md">Sửa
                                        sản phẩm</button>
                                    <a href="product.php"
                                        class="border border-solid border-blue-500 bg-blue-500 p-2 text-white font-medium rounded-md">Quay
                                        lại</a>
                                </div>
                            </div>

                            <div class="col-span-3">
                                <img src="../upload/<?= $pro['image'] ?>" alt="" width="200">
                                <div class="py-5">
                                    <label for="" class="text-xl pb-2 font-bold">Ảnh</label>
                                    <input type="file" name="image" id="" placeholder="Chọn file"
                                        class="border border-solid border-black rounded-md w-full p-2">
                                </div>
                                <div class="py-5">
                                    <label for="" class="text-xl pb-2 font-bold">Danh mục</label> <br>
                                    <select id="" name="cate_id"
                                        class="border border-solid border-black rounded-md w-full p-2">
                                        <?php foreach (selectDb("SELECT * FROM categories") as $cate) : ?>
                                        <option value="<?= $cate['cate_id'] ?>"><?= $cate['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <!--cot2-->
        </div>
    </div>


</body>

</html>