<?php include_once '../config/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'layout/link.php'; ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <?php include_once 'layout/header.php'; ?>
            </div>
            <div class="left-menu">
                <?php include_once 'layout/col_left.php'; ?>
            </div>
            <div class="main">
                <?php   
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    }else{
                        $page = 'thongke';
                    }

                    if (file_exists('views/'.$page.'.php')) {
                        include_once 'views/'.$page.'.php';
                    }
                    else if (file_exists('xuly/'.$page.'.php')) {
                        include_once 'xuly/'.$page.'.php';
                    }else{
                        echo "<h3 style='color: red;'>ERROR 404 trang không tồn tại!</h3>";
                    }

                ?>
            </div>
            <div class="footer">
                <?php include_once 'layout/footer.php'; ?>
            </div>
        </div>
        <!-- <script src="js/all.js"></script> -->
    </body>
</html>