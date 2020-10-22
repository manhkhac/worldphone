<?php 
    include_once('config/connect.php');
 ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <?php include_once 'includes/link.php'; ?>
</head>


    <div class="wrapper">
        <!-- phần tiêu đề của trang -->
        <div class="header">
            <?php include_once 'includes/header.php'; ?>
        </div>
        <!-- END phần tiêu đề của trang -->
        <!-- phần banner quảng cáo -->
        <div class="banner clear_both">
            <?php include_once 'includes/slide.php'; ?>
        </div>
        <!-- END phần banner quảng cáo -->
        <!-- phần menu bên trái -->
        <div class="wrap_left_menu">
            <div class="left_menu">
                <div class="left_menu_header">DANH MỤC SẢN PHẨM </div>
                <div class="list_danh_muc">
                    <a class="use_for_login" href="index.php?">
                        <div class="danh_muc_item">Điện thoại</div></a>
                    <a class="use_for_login" href="index.php?1&amp;0">      
                        <div class="danh_muc_item">Laptop</div>    </a>
                    <a class="use_for_login" href="index.php?2&amp;0">      
                        <div class="danh_muc_item">Máy ảnh</div>    </a>
                    <a class="use_for_login" href="index.php?3&amp;0">      
                        <div class="danh_muc_item">Máy tính bảng</div></a>
                    <a class="use_for_login" href="index.php?4&amp;0">      
                        <div class="danh_muc_item">Phụ kiện</div>    
                    </a>
                </div>
            </div>
        </div>
        <!-- END phần menu bên trái -->
        <!-- phần khung chứa tất cả sản phẩm và tiêu đề -->
        <div class="khung_sp">
            <?php   
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else{
                    $page = 'trangchu';
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
        <!-- END phần khung chứa tất cả sản phẩm và tiêu đề -->
    </div>
    <!--END wrapper-->
    <!--FOOTER-->
    <div class="footer clear_both">
        <?php include_once 'includes/footer.php'; ?>
    </div>
    <!-- END FOOTER-->
    <!-- thong tin khach hang -->
    <div class="thong_tin_khach_hang">
        <div class="btn_x">&times</div>
        <div class="content">
            <div class="user"></div>
            <div class="ho_ten"></div>
            <div class="email"></div>
            <div class="gioi_tinh"></div>
            <div class="ngay_sinh"></div>
            <div class="sdt"></div>
        </div>
    </div>
    <!-- end thong tin khach hang -->
    <!--thông báo đăng nhập-->
    <div id="thong-bao-dang-nhap">
        <p style="color: white;font-size:30px;padding-bottom:30px">Bạn có muốn đăng nhập để tiếp tục mua sắm??</p>
        <button type="button" id="yes">Đăng nhập</button>
        <button type="button" id="no">Không</button>
    </div>
    <!--end thông báo đăng nhập-->
    <!--scroll to top-->
    <div class="scroll_to_top">
        <div class="scroll_btn"></div>
    </div>
    <!--end scroll to top-->
    <script src="js/all.js"></script>

</html>
