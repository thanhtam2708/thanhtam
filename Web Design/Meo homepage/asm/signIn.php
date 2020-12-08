<?php
require_once "connection.php";
session_start();
if (isset($_SESSION['name'])) {
    header("location:quantri/indexQT.php");
    die;
}
if (isset($_POST['signin'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    //validate form
    $check = "SELECT * FROM user WHERE name = '$name' AND password = '$password' ";
    $count = $conn->prepare($check);
    $count->execute();
    if ($count->rowCount() > 0) {
        $_SESSION['name'] = $name;
        header("Location:quantri/indexQT.php");
    } else {
        $error = "Username hoặc mật khẩu chưa đúng!";
    }
    if ($name == "") {
        $err_name = "Bạn cần nhập username";
    } elseif ($password == "") {
        $err_pass = "Bạn cần nhập password";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/236237b42b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="">
        <div class="container mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col w-1/2">
            <a href="index.php"><i class="fas fa-arrow-circle-left text-3xl text-blue-700"></i></a>
            <h2 class="text-center text-blue-700 font-bold text-2xl">Đăng nhập</h2>
            <form action="" method="post">
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="name"
                        type="text" placeholder="Username">
                    <?php if (isset($err_name)) : ?>
                    <div><?= $err_name ?></div>
                    <?php endif; ?>
                </div>
                <div class="mb-6">
                    <label class="block text-grey-darker text-sm font-bold mb-2">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                        type="password" name="password" placeholder="******************">
                    <?php if (isset($err_pass)) : ?>
                    <div><?= $err_pass ?></div>
                    <?php endif; ?>
                    <?php if (isset($error)) : ?>
                    <div><?= $error ?></div>
                    <?php endif; ?>
                </div>
                <a href="" class="font-bold text-sm text-blue-400 hover:text-blue-700 mb-6">Forfot password?</a>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" name="signin"
                        type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-400 hover:text-blue-700"
                        href="signUp.php">
                        Create Account
                    </a>
                </div>
            </form>

            <?php if (isset($msg)) : ?>
            <h3><?= $msg ?></h3>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>