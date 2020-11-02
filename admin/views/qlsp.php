
<div class="breadcrumb">
    <span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý sản phẩm</span>
</div>
<div class="section">
    <div class="them-sp"><button onclick="popup_themsp()">Thêm Sản Phẩm</button></div>
    <table id="table-sp">
        <thead>
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Loại</th>
                <th>Mã</th>
                <th>Hiển Thị</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php

    // BƯỚC 2: TÌM TỔNG SỐ RECORDS
    $result = mysqli_query($conn, 'select count(id_sanpham) as total from tbl_sanpham');
    $array = mysqli_fetch_array($result);
    $total_records = $array['total'];


    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page_trang']) ? $_GET['page_trang'] : 1;
    $limit = 8 ;

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
    $result = mysqli_query($conn, "SELECT tbl_sanpham.hinh, tbl_sanpham.tensp, tbl_sanpham.gia, tbl_danhmuc.ten,tbl_sanpham.masp, tbl_danhmuc.hien_thi
FROM tbl_sanpham, tbl_danhmuc
WHERE tbl_sanpham.id_dm = tbl_danhmuc.id_danhmuc LIMIT $start, $limit");
                
                $stt = 0;
                while ($array = mysqli_fetch_array($result)){
                $stt += 1;
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><img src="../<?php echo $array['hinh']; ?>" width="110px"></td>
                <td><?php echo $array['tensp']; ?></td>
                <td><?php echo $array['gia']; ?></td>
                <td><?php echo $array['ten']; ?></td>
                <td><?php echo $array['masp']; ?></td>
                <td><?php echo $array['hien_thi']; ?></td>  
                </td>
            <td>
                <a onclick="return confirm('Bạn có thực sự muốn xóa user này không?');" href="chuyenhuong.php?page=delete_user&id_user=<?php echo $array['id_user']; ?>">
                    <button class="xoa_sp">Xóa</button><br>
                </a>

                <a href="chuyenhuong.php?page=edit_user&update_id=<?php echo $array['id_user']; ?>">
                    <button class="sua_sp">Sửa</button>
                </a>
                
            </td>
        </tr>
    <?php
        }
    ?>
        </tbody>
    </table>
</div>
<div class="chuyen_trang clear_both" >

       <?php 
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
            echo '<a class="so_trang" href="chuyenhuong.php?page=qlsp&page_trang='.($current_page-1).'">Prev</a> ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span class="so_trang block_trang" >'.$i.'</span> ';
            }
            else{
                echo '<a  class="so_trang" href="chuyenhuong.php?page=qlsp&page_trang='.$i.'">'.$i.'</a> ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a class="so_trang" href="chuyenhuong.php?page=qlsp&page_trang='.($current_page+1).'">Next</a> ';
        }
       ?>
    </div>
   <!--  <div class="chuyen_trang clear_both"><a href="index.html?0&amp;0" class="so_trang">1</a><a href="index.html?0&amp;12" class="so_trang">2</a><a href="index.html?0&amp;24" class="so_trang">3</a><a href="index.html?0&amp;36" class="so_trang">4</a><a href="index.html?0&amp;48" class="so_trang block_trang">5</a></div> -->
<!-- popup thêm sp -->
<?php 
    $sqlUser = "SELECT *FROM tbl_user";
    $queryUser = mysqli_query($conn, $sqlUser);

    if (isset($_POST['qlsp_submit'])) {
        $name      = $_POST['name']; 
        $passw     = $_POST['passw'];  
        $dia_chi   = $_POST['dia_chi'];
        $sdt       = $_POST['sdt'];
        $email     = $_POST['email'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $ngsinh    = $_POST['ngsinh'];

        $sqlInsert = "INSERT into tbl_user(name, passw, dia_chi, sdt, email, gioi_tinh, ngsinh) VALUES ('$name','$passw','$dia_chi','$sdt','$email','$gioi_tinh','$ngsinh')";

            $queryInsert = mysqli_query($conn, $sqlInsert);

            if ($queryInsert){
                echo '<script>
                    alert("Thêm thành công!");
                    header("Location: chuyenhuong.php?page=qluser");
                </script>';
                //$_SESSION['noti'] = 1;     
        }
    }
?>



<form action="" method="poss" accept-charset="utf-8">

    <div class="popup-themsp">
        <div class="popup-themsp__content" style="width: 40%">
            <div class="popup-themsp__title">Thêm Sản Phẩm</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">Nhập Tên</div>
                <div class="popup-themsp-left__label">Nhập Giá</div>
                <div class="popup-themsp-left__label">Nhập Mã</div>
                <div class="popup-themsp-left__label">Chọn Hình</div>
                <div class="popup-themsp-left__label">Nhập Loại</div>
                <div class="popup-themsp-left__label">Hiển Thị</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-ten them-mot-sp" type="text" placeholder="Tên sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-gia them-mot-sp" type="text" placeholder="Giá sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu them-mot-sp" type="text" placeholder="Mã sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh them-mot-sp" type="file"></div>
                <div class="popup-themsp-left__input"><input class="them-loai them-mot-sp" type="text" placeholder="Loại sản phẩm"></div>
                <div class="popup-themsp-left__input">
                    <select  width="30" class="them-mot-sp">
                        <option>on</option>
                        <option>off</option>
                    </select>
                </div>
            </div>
            <button name="qlsp_submit" class="popup-themsp__btn" onclick="them_mot_sp()">Thêm</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
</form>

 

<script src="js/test_add.js"></script>