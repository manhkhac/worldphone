<?php
    if (isset( $_GET['submit']) && $_GET["search"] != '') {
        $search = $_GET['search'];
        $query = "SELECT * FROM tbl_sanpham WHERE (tensp like '%$search%') OR (chi_tiet like '%$search%') ";
 
        $sql = mysqli_query($conn, $query);
        $num = mysqli_num_rows($sql);
        //echo $num;
        // if ($num > 0) {
        ?>
<div class="khung_sp_header">
    <hr class="small_hr" style="width: 50px">
    <span class="small_txt">KẾT QUẢ TÌM KIẾM: (<?php echo $num ?>) - TỪ KHOÁ: (<?php echo $search ?>)</span>
    <hr class="long_hr" style="width: 200px">
    <span class="big_txt">YOUR SEARCH<span style="letter-spacing:0"></span>
</div>
<!-- phần tiêu đề của khung -->
 <!-- BƯỚC 2: TÌM TỔNG SỐ RECORDS -->
    <?php 
    $result = mysqli_query($conn, 'select count(tensp) WHERE (tensp) as total from tbl_sanpham');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row;


    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page_trang']) ? $_GET['page_trang'] : 1;
    $limit = 10 ;

    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    // Tìm Start
    $start = ($current_page - 1) * $limit;

    // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH
    // Có limit và start rồi thì truy vấn CSDL lấy danh sách
    $result = mysqli_query($conn, "SELECT * FROM tbl_sanpham LIMIT $start, $limit");

        while(  $array = mysqli_fetch_array($result))
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

                } 
            else {
                echo "Khong tim thay ket qua!";
            }
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


    
    </div>
    <!-- END phần tiêu đề của khung -->
    <!-- phần khung dùng để thêm sản phẩm bằng JS-->
    <div class="list_sp"></div>
    <!--phần khung dùng để chứa số trang-->
    <div class="chuyen_trang clear_both">

    <?php 
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
            echo '<a href="index.php?search=no&submit=TÌM&page_trang='.($current_page-1).'">Prev</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="index.php?search=no&submit=TÌM&page_trang='.$i.'">'.$i.'</a> | ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="index.php?search=no&submit=TÌM&page_trang='.($current_page+1).'">Next</a> | ';
        }
       ?>
    </div>
    <!-- <div class="chuyen_trang clear_both">
        <a href="" class="so_trang">1</a><a href="index.html?0&amp;12" class="so_trang">2</a><a href="index.html?0&amp;24" class="so_trang">3</a><a href="index.html?0&amp;36" class="so_trang">4</a><a href="index.html?0&amp;48" class="so_trang block_trang">5</a>
    </div> -->