<?php
require_once "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-yellow-500">
        <div class="container mx-auto p-4">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <i class="fas fa-phone-alt text-red-600"></i>
                    <p class="pl-4 text-red-600">Hotline: 0983 426 052</p>
                </div>
                <div class="flex">
                    <a class="flex items-center hover:text-red-600">
                        <i class="fas fa-edit "></i>
                        <p class="px-2">Kiểm tra đơn hàng</p>
                    </a>
                    <a href="" class=" pl-4 flex items-center hover:text-red-600">
                        <i class="fas fa-shopping-cart"></i>
                        <p class="px-2">Giỏ hàng</p>
                    </a>
                    <?php
                    session_start();
                    if (isset($_SESSION['name'])) {
                    ?>
                    <a href="indexQT.php" class="pl-4 flex items-center hover:text-red-600">Admin</a>
                    <a href="../signOut.php" class="pl-4 flex items-center hover:text-red-600">Đăng xuất</a>
                    <?php
                    } else {
                    ?>
                    <a href="../signIn.php" class="pl-4 flex items-center hover:text-red-600">
                        <i class="fas fa-sign-in-alt"></i>
                        <p class="px-2">Đăng nhập</p>
                    </a>
                    <a href="../signUp.php" class="pl-4 flex items-center hover:text-red-600">
                        <i class="fas fa-user-plus"></i>
                        <p class="px-2">Đăng kí</p>
                    </a>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </header>
    <!--end header-->

    <section class="bg-yellow-100">
        <div class="container mx-auto">
            <div class="grid grid-cols-8 gap-8 flex items-center">
                <div class="col-span-2">
                    <img src="//theme.hstatic.net/200000077237/1000632470/14/logo.png?v=723" alt="">
                </div>
                <div class="col-span-4">
                    <form action="" class="flex ">
                        <input type="text" name="" id="" placeholder="Nhập từ khóa tìm kiếm"
                            class="border border-solid w-9/12 h-full p-4">
                        <button type="submit" class="bg-yellow-500 font-bold text-white p-4">Tìm kiếm</button>
                    </form>
                </div>
                <div class="col-span-2">

                </div>
            </div>

        </div>
    </section>
    <!--end banner-->

    <section class="bg-yellow-500">
        <div class="container mx-auto ">
            <div class="grid grid-cols-8 gap-8 ">
                <div class="col-span-2 flex items-center bg-yellow-800">
                    <p class="font-bold uppercase text-xl p-3 text-white">Danh mục sản phẩm</p>
                    <a href=""><i class="fas fa-bars pl-20 text-white text-xl"></i></a>
                </div>

                <div class="col-span-6 ">
                    <ul class="flex p-3">
                        <li class="px-8 text-lg text-white uppercase hover:font-bold hover:underline"><a href=""
                                class="">Trang chủ</a></li>
                        <li class="px-8 text-lg text-white uppercase hover:font-bold hover:underline"><a href="">Giới
                                thiệu</a></li>
                        <li class="px-8 text-lg text-white uppercase hover:font-bold hover:underline"><a href="">Sản
                                phẩm</a></li>
                        <li class="px-8 text-lg text-white uppercase hover:font-bold hover:underline"><a href="">Tin
                                tức</a></li>
                        <li class="px-8 text-lg text-white uppercase hover:font-bold hover:underline"><a href="">Liên
                                hệ</a></li>
                        <li class="px-8 text-lg text-white uppercase hover:font-bold hover:underline"><a
                                href="indexQT.php">Quản trị</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--end menu-->

    <section>
        <div class="container mx-auto">
            <div class="grid grid-cols-8 gap-8">
                <div class="col-span-2">
                    <ul class="border border-l-solid">
                        <?php foreach (selectDb("SELECT * FROM categories") as $cate) : ?>
                        <li><a href="" class="block px-8 py-5 border border-b-solid  hover:bg-yellow-500">
                                <?= $cate['name'] ?> </a>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </div>

                <div class="col-span-6">
                    <div class="" style="height: 100%; height: calc(100% - 78px);">
                        <img src="//theme.hstatic.net/200000077237/1000632470/14/ms_banner_img4.jpg?v=723" alt=""
                            class="h-full object-cover w-full">

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--categories-->

    <section class="mt-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-8">
                <div class="relative">
                    <a href="">
                        <img src="//product.hstatic.net/200000077237/product/layout_bo_so_mi-06__copy__e0850b7dd5b44d188b7bf4ce105d385d_large.jpg"
                            alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 ml-20 mb-5">
                            <h3 class="text-xl font-bold">Shirt Dresses Collection</h3>
                            <span>Trending 2020</span>
                            <hr class="w-12 h-1 rounded-full bg-black">
                        </div>
                    </a>

                </div>
                <div class="relative">
                    <a href="">
                        <img src="//product.hstatic.net/200000077237/product/layout-08__copy__15e92dd0688348e987be3712ece7ea46_large.jpg"
                            alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 ml-32 mb-5">
                            <h3 class="text-xl font-bold">Semi - Formal</h3>
                            <span>Trending 2020</span>
                            <hr class="w-12 h-1 rounded-full bg-black">
                        </div>
                    </a>

                </div>
                <div class="relative">
                    <a href="">
                        <img src="//product.hstatic.net/200000077237/product/layout-01__copy__9d26adb375784f64b9d917dbab70e913_large.jpg"
                            alt="" class="w-full">
                        <div class="absolute bottom-0 left-0 ml-20 mb-5">
                            <h3 class="text-xl font-bold">Classic Tweed</h3>
                            <span>Trending 2020</span>
                            <hr class="w-12 h-1 rounded-full bg-black">
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="mt-8">
        <div class="container mx-auto">
            <h2 class="uppercase text-center font-bold text-3xl">Bộ sưu tập</h2>
            <div class="text-center flex justify-center w-full py-5 ">
                <nav class="mt-8">
                    <ul class="flex">
                        <li class="px-4 hover:font-bold hover:underline"><a href="">POPUNIQUE</a></li>
                        <li class="px-4 hover:font-bold hover:underline"><a href="">THE INFINITE GARDEN</a></li>
                        <li class="px-4 hover:font-bold hover:underline"><a href="">LEN ĐẦU MÙA</a></li>
                        <li class="px-4 hover:font-bold hover:underline"><a href="">WORLD WIDE FRIENDSHIP</a></li>
                        <li class="px-4 hover:font-bold hover:underline"><a href="">OUR PRETTIEST</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="mt-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-8"><?php foreach (selectDb("SELECT * FROM products") as $pro) : ?>
                <div class="">
                    <a href="">
                        <img src="../upload/<?= $pro['image'] ?>" alt="" class="w-full">
                    </a>
                    <div class="flex mt-4 justify-between">
                        <a href="">
                            <h3 class="uppercase font-medium"><?= $pro['name'] ?></h3>
                        </a>
                        <p class="text-red-600 font-medium"><?= $pro['price'] ?></p>
                    </div>

                </div><?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--products-->

    <section class="mt-10">
        <div class="container mx-auto">
            <div class="flex items-center">
                <hr class="w-2/5 h-1 rounded-full bg-black">
                <a href="" class="px-20 w-1/5 uppercase font-bold text-center">Xem tất cả</a>
                <hr class="w-2/5 h-1 rounded-full bg-black">
            </div>
        </div>
    </section>


    <footer>
        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-8">
                <div>
                    <a href=""><img src="//theme.hstatic.net/200000077237/1000632470/14/logo.png?v=723" alt=""></a>
                    <h2 class="text-4xl text-yellow-500">Thông tin liên hệ</h2>
                    <span class="flex items-center py-2">
                        <i class="fas fa-map-marker-alt text-yellow-500 text-2xl"></i>
                        <p class="px-4 text-xl">Địa chỉ: 300 Nguyễn Trãi, P. Trung Văn, Q. Nam Từ Liêm, TP Hà Nội.</p>
                    </span>
                    <span class="flex items-center py-2">
                        <i class="fas fa-phone-alt text-yellow-500 text-2xl"></i>
                        <p class="px-4 text-xl">Số điện thoại: 0983 426 052</p>
                    </span>
                    <span class="flex items-center py-2">
                        <i class="fas fa-envelope text-yellow-500 text-2xl"></i>
                        <p class="px-4 text-xl">Email: salesonline.meoshop@gmail.com</p>
                    </span>
                    <p class="text-xl">Thời gian mở cửa: Thứ 2 đến Chủ Nhật từ 8h30 đến 22h30</p>
                </div>

                <div>
                    <h2 class="text-4xl text-yellow-500 mt-32">Đăng kí nhận tin</h2>
                    <form action="" method="post" class="py-2">
                        <input type="text" name="" id="" placeholder="nhập địa chỉ email của bạn....."
                            class="border border-solid w-9/12 h-full p-3">
                        <button type="submit" class="bg-yellow-500 text-white p-3">Đăng kí</button>
                    </form>
                    <a href="">
                        Tìm kiếm / Giới thiệu / Chính sách đổi trả / Chính sách thanh toán / Chính sách Khách hàng thân
                        thiết / Chính sách bảo mật / Điều khoản dịch vụ
                    </a>
                </div>

                <div>
                    <h2 class="text-4xl text-yellow-500 mt-32">Kết nối với chúng tôi</h2>
                    <ul class="flex py-2">
                        <li class="px-2">
                            <a href=""><i class="fab fa-facebook-f text-blue-600 text-2xl"></i></a>
                        </li>
                        <li class="px-2">
                            <a href=""><i class="fab fa-youtube text-red-600 text-2xl"></i></a>
                        </li>
                        <li class="px-2">
                            <a href=""><i class="fab fa-instagram text-pink-700 text-2xl"></i></a>
                        </li>
                        <li class="px-2">
                            <a href=""><i class="fab fa-skype text-blue-500 text-2xl"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <p class="text-center text-xl py-2"> Copyrights © 2020 by <a href=""
                    class="hover:text-yellow-500 hover:underline">Méo</a> .</p>
        </div>
    </footer>


</body>

</html>