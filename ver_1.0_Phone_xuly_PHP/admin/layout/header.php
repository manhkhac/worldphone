<span class="title-header">ADMIN AREA</span>
<div class="nav-right">
    <img src="image/icon/user-icon.svg">
    <div class="ten-admin"><?php 
            if (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            } 
        ?>  - </div>
    <a href="xuly/logout.php">
        <div style="font-size: 15px;margin:17px 8px 0 8px">Đăng Xuất</div>
    </a>
</div>