<a href="index.php" class="logo_worldphone">
    <img src="image/worldphone_logo.png" alt="image/worldphone_logo">
</a>
<form action="index.php?page=tim_kiem" method="post">
    <div class="search_and_cart">
        <div class="search_bar">

            <input type="text" name="search" id="search_txt" placeholder="Tìm ở world phone" required="Nhập giá trị cần tìm"><input type="submit" name="submit" value="TÌM">

            <a href="gio_hang.php" class="gio_hang"><img src="image/icon/icon-cart.png" alt=""></a>
            <div class="title_tim_nang_cao">TÌM KIẾM NÂNG CAO</div>
        </div>
    </div>
</form>

<div class="nav_wrap">
    <div class="nav">
        <div id="dia_diem">
            <img src="image/icon/marker_compact.png" alt="">
            <span>ĐỊA ĐIỂM CỬA HÀNG</span>
            <img style="margin-left:50px;" src="image\icon\car_compact.png" alt="">
            <span>GIAO HÀNG 24/7</span>
        </div>
        <a id="home" href="index.php?page=trangchu">HOME</a>
        <a id="login" href="index.php?page=login">
            <?php if (isset($_SESSION['name'])) 
            {
                    echo $_SESSION['name'];
            } else {
                echo 'ĐĂNG NHẬP';
            } ?></a>
        <a id="dang_ky" href="">
                        ĐĂNG KÝ
        </a>

        <a href="index.php?page=gio_hang">ĐƠN HÀNG</a>
    </div>
</div>