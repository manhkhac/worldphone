<!-- <body onload="trang_chinh()"> -->
<!-- phần tiêu đề của khung -->
<div class="khung_sp_header">
    <hr class="small_hr">
    <span class="small_txt">SẢN PHẨM NỔI BẬT</span>
    <hr class="long_hr">
    <span class="big_txt">FEATURED ITEMS</span>
    <?php 
        $sql = "SELECT hinh,tensp,gia FROM tbl_sanpham WHERE gia > 20000000 ";
        $query = mysqli_query($conn,$sql);
            while(  $array = mysqli_fetch_array($query))
            {
    ?>
    <div class="product-box">
        <a class="box" href="thong_tin_sp.php?' + i + '&0">
          <div class="hinh-sp">
            <div style="background-image: url('<?php echo $array['hinh']; ?>')" class="hinh"></div>
          </div>
          <p class="ten-sp"><?php echo $array['tensp']; ?></p>
          <p class="gia-tien"><?php echo $array['gia']; ?><span class="gia-cu">500.000.000đ</span></p>
        </a>
        <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn"  value="' + i + '&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
      </div>
    <?php
        }
     ?>

</div>
<!-- END phần tiêu đề của khung -->
<!--khung tim kiem-->
<div class="thanh_tim_kiem_nang_cao">
    <span style="text-align: left;float: left">TÌM KIẾM NÂNG CAO:</span>
    <input type="text" name="noi_dung_tknc" id="noi_dung_tknc" placeholder="Tìm theo tên sản phẩm">
    <div class="gia_tien">
        GIÁ TIỀN:
        <!--onchange="search_gia(this)"-->
        <select id="gia_id">
            <option value="-1">TẤT CẢ</option>
            <option value="10">1.000.000 - 10.000.000</option>
            <option value="50">10.000.000 - 50.000.000</option>
            <option value="100">50.000.000 - 100.000.000</option>
        </select>
    </div>
    <div class="loai">
        LOẠI:
        <select id="loai_id">
            <option value="-1">TẤT CẢ</option>
            <option value="0">Điện thoại</option>
            <option value="1">Laptop</option>
            <option value="2">Máy ảnh</option>
            <option value="3">Máy tính bảng</option>
            <option value="4">Phụ kiện</option>
        </select>
    </div>
    <input type="button" class="sub_tknc" value="Tìm" onclick="tim_kiem_nang_cao()">
</div>
<!--end khung tim kiem-->
<!-- phần khung dùng để thêm sản phẩm bằng JS-->
<div class="list_sp"></div>
<!-- phần tiêu đề của khung -->
<div class="khung_sp_header">
    <hr class="small_hr">
    <span class="small_txt">SẢN PHẨM BÁN CHẠY</span>
    <hr class="long_hr">
    <span class="big_txt">BEST SELLERS</span>

    <?php 
        $sql = "SELECT hinh,tensp,gia FROM tbl_sanpham";
        $query = mysqli_query($conn,$sql);
            while(  $array = mysqli_fetch_array($query))
            {
    ?>
    <div class="product-box">
        <a class="box" href="thong_tin_sp.php?' + i + '&0">
          <div class="hinh-sp">
            <div style="background-image: url('<?php echo $array['hinh']; ?>')" class="hinh"></div>
          </div>
          <p class="ten-sp"><?php echo $array['tensp']; ?></p>
          <p class="gia-tien"><?php echo $array['gia']; ?><span class="gia-cu">500.000.000đ</span></p>
        </a>
        <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn"  value="' + i + '&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
      </div>
    <?php
        }
     ?>

    </div>
    <!-- END phần tiêu đề của khung -->
    <!-- phần khung dùng để thêm sản phẩm bằng JS-->
    <div class="list_sp"></div>
    <!--phần khung dùng để chứa số trang-->
    <div class="chuyen_trang clear_both"></div>
</body>