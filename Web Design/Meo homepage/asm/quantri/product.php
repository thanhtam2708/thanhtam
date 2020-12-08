<?php
require_once "../connection.php";
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    action("DELETE FROM products where pro_id = '$pro_id'");
    header("location: product.php?message=Xóa thành công");
    die();
}
//delete pro
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
</head>
<style>
table img {
    width: 200px;
    height: 200px;
}
</style>

<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-2 h-full w-full">
                <div class="flex items-center border-b border-gray-300">
                    <img src="//theme.hstatic.net/200000077237/1000632470/14/logo.png?v=723" alt="" class="w-36">
                    <h3 class="text-2xl">Admin</h3>
                </div>
                <!-- <div class="flex items-center  border-b border-gray-300 p-2">
                   <img src="https://i.imgur.com/vrfDxAK.jpg" alt="" class="w-8 h-8 rounded-full">
                    <h3 class="text-2xl">Tống Thị Thanh Tâm</h3>
                </div>-->
                <nav>
                    <li class="block px-8 py-5 border border-b-solid font-bold"><a href="">
                            <i class="fas fa-info-circle px-2"></i>
                            Quản trị Info</a></li>
                    <li class="block px-8 py-5 border border-b-solid font-bold"><a href="indexQT.php">
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
                    <a href="../signOut.php">Đăng xuất</a>

                </header>

                <section class="p-2">
                    <div class="pb-5">
                        <h2 class="text-2xl font-bold pb-5 pt-2">Product</h2>
                        <a href="addProduct.php"
                            class="border border-solid border-blue-500 bg-blue-500 p-2 text-white font-medium rounded-md">Thêm
                            sản
                            phẩm</a>
                    </div>
                    <table class="table-fixed w-full  border border-solid border-gray-300">
                        <thead class="border-b border-gray-300">
                            <tr class="border border-solid border-gray-300">
                                <td class="py-2 px-4 font-bold">Product_id</td>
                                <td class="py-2 px-4 font-bold">Name</td>
                                <td class="py-2 px-4 font-bold">Image</td>
                                <td class="py-2 px-4 font-bold">Price</td>
                                <td class="py-2 px-4 font-bold">Detail</td>
                                <td class="py-2 px-4 font-bold">Cate_name</td>
                                <td class="py-2 px-4 font-bold">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (selectDb("SELECT* FROM products inner join 
                            categories on products.cate_id = categories.cate_id") as $pro) : ?>
                            <tr class="border-b border-gray-300">
                                <td class="py-8 px-4 font-bold"><?= $pro['pro_id'] ?></td>
                                <td class="py-8 px-4 font-bold"><?= $pro['name'] ?></td>
                                <td class="py-8 px-4 font-bold">
                                    <img src="../upload/<?= $pro['image'] ?>" width="200" height="200">
                                </td>
                                <td class="py-8 px-4 font-bold"><?= $pro['price'] ?></td>
                                <td class="py-8 px-4 font-bold"><?= $pro['detail'] ?></td>
                                <td class="py-8 px-4 font-bold"><?= $pro['name'] ?></td>
                                <td class="py-8 px-4">
                                    <a href="editPro.php?pro_id=<?= $pro['pro_id'] ?>"
                                        class="border border-solid border-blue-500 bg-blue-500 p-2 text-white font-medium rounded-md">Update</a>
                                    <a href="product.php?pro_id=<?= $pro['pro_id'] ?>"
                                        onclick="return confirm('Bạn có muốn xóa không?')"
                                        class="border border-solid border-blue-500 bg-blue-500 p-2 text-white font-medium rounded-md">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
            <!--cot2-->
        </div>
    </div>


</body>

</html>