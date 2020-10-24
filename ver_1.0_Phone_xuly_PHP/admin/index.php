<?php  
     session_start();
//session_destroy();
    include_once '../config/connect.php';

    // if (!isset($_SESSION['id'])) {
    //      header('Location: index.php');
    // }

    if (isset($_POST['sm_login'])) {
        $userName = mysqli_real_escape_string($conn, $_POST['user']); // chống tấn công sql_injection
        $passWord = mysqli_real_escape_string($conn, $_POST['passw']);
        $passW = md5($passWord);

        $sql = "SELECT *FROM tbl_user WHERE email = '$userName' AND passw = '$passW'"; // Câu lệnh truy vấn
        $query = mysqli_query($conn, $sql); // Thực thi câu lệnh truy vấn
        $count = mysqli_num_rows($query); // Đếm số bản ghi trả ra sau khi truy vấn
        $row = mysqli_fetch_array($query);

        if ($count == 1) {
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['name'] = $row['name'];
            header("Location: chuyenhuong.php");
        }else{
            $errors = "Username hoặc Password không đúng!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/admin_login.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
        <a href="../index.php"><img src="../image/worldphone_logo.png" alt="?" width="170"></a>
            <div class="content-left"></div>
            <div class="content-right">
                <form action="" method="post">
                    <h1>Admin Login</h1>
                    <p style="color: red;">
                        <?php if(isset($errors)){ echo $errors; } ?>
                    </p>
                    <input name="user" type="email" placeholder="Email" value="<?php if(isset($userName)){ echo $userName; } ?>" /><br>
                    <input name="passw" type="password" placeholder="Password"><br>
                    <button type="submit" name="sm_login">LOGIN</button>
                </form>
            </div>  
        </div>
    </div>
    <!-- Goi y -->
<!--     <div class="goiy" style="position: fixed;
    text-align: center;
    border-radius: 15px;
    top: 10px;right: 10px;
    width:220px;height: 47px;
    padding: 15px;
    background: rgba(0,0,0,0.3);color: white">
        <p>Email : thanh@gmail.com</p>
        <p>Pass : thanh</p>
    </div> -->
    <script src="js/admin_login.js"></script>
</body>

</html>