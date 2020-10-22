<div class="breadcrumb">
	<span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý User</span>
</div>
    <div class="section">
        <div class="them-sp" onclick="popup_themsp()"><button>Thêm User</button></div>
        <table id="table-user">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ Tên</th>
                    <th>Địa Chỉ</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT *FROM tbl_user";
                    $query = mysqli_query($conn, $sql);
                    $stt = 0;
                    while ($array = mysqli_fetch_array($query)){
                    $stt += 1;
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $array['name']; ?></td>
                    <td><?php echo $array['dia_chi']; ?></td>
                    <td><?php echo $array['sdt']; ?></td>
                    <td><?php echo $array['email']; ?></td>
                    <td><?php echo $array['gioi_tinh']; ?></td>
                    <td><?php echo date('m/d/Y', $array['ngsinh'])  ?></td>  
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
    </div>
</div>
<!-- popup thêm sp -->
<?php 
$sqlUser = "SELECT *FROM tbl_user";
$queryUser = mysqli_query($conn, $sqlUser);

if (isset($_POST['add_user'])) {
    $name      = $_POST['name']; 
    $passw     = $_POST['passw'];  
    $dia_chi   = $_POST['dia_chi'];
    $sdt       = $_POST['sdt'];
    $email     = $_POST['email'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $ngsinh    = $_POST['ngsinh'];

    // $a = '04/03/2020';
    // echo time($a);
    // die();

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

<form action="" method="POST" role="form">
<div class="popup-themsp" >
    <div class="popup-themsp__content" style="width: 500px">
        <div class="popup-themsp__title">Thêm Danh Mục</div>
        <div class="popup-themsp-left" style="width: 20%">
            <div class="popup-themsp-left__label">Tên</div>
            <div class="popup-themsp-left__label">Mật khẩu</div>
            <div class="popup-themsp-left__label">Địa Chỉ</div>
            <div class="popup-themsp-left__label">SĐT</div>
            <div class="popup-themsp-left__label">Email</div>
            <div class="popup-themsp-left__label">Giới Tính</div>
            <div class="popup-themsp-left__label">Ngày Sinh</div>
        </div>
        <div class="popup-themsp-right" style="width: 70%"/>

            <div class="popup-themsp-left__input"><input name="name" class="them-user" type="text" required=""></div>
            <div class="popup-themsp-left__input"><input name="passw" class="them-user" type="text" required=""></div>
            <div class="popup-themsp-left__input"><input name="dia_chi" class="them-user" type="text" required=""></div>
            <div class="popup-themsp-left__input"><input name="sdt" class="them-user" type="number" required=""></div>
            <div class="popup-themsp-left__input"><input name="email" class="them-user" type="email" required=""></div>
            <div class="popup-themsp-left__input"><input name="gioi_tinh" class="them-user" type="text" required=""></div>
            <div class="popup-themsp-left__input"><input name="ngsinh" class="them-user" type="date" required=""></div>
        </div>
        <button type="submit" name="add_user" class="popup-themsp__btn">Thêm</button>
        <span class="back" onclick="close_popup_themsp()">&times;</span>
    </div>
    <script src="js/test_add.js"></script>
</div>
</form>
<!-- End Them User -->

<!-- START EDIT -->

<!-- END EDIT -->