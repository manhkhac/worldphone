<head>
<!-- <style type="text/css" media="screen">
        .popup-themsp{
        display: block;
        }
    </style> -->
</head>
            <!-- Sửa User -->
           <?php 
            $sqlUser = "SELECT *FROM tbl_user";
            $queryUser = mysqli_query($conn, $sqlUser);


            if (isset($_GET['update_id'])) {
                $update = $_GET['update_id'];
            }

            $sqlInfo = "SELECT *FROM tbl_user where id_user = $update ";
            $queryInfo = mysqli_query($conn, $sqlInfo);
            $rowInfo = mysqli_fetch_array($queryInfo);

            if (isset($_POST['update_rowInfo'])) {
                $name      = $_POST['name'];  
                $dia_chi    = $_POST['dia_chi'];
                $sdt       = $_POST['sdt'];
                $email     = $_POST['email'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $ngsinh    = $_POST['ngsinh'];

                //check mail
                if ($email != $rowInfo['email']) {
                    $CheckMail = "SELECT *FROM tbl_user where email = '$email'";
                    $queryCheckMail = mysqli_query($conn, $CheckMail);
                    $countMail = mysqli_num_rows($queryCheckMail);

                    if ($countMail) {
                        $errosMail = "Email đã tồn tại";
                    }
                }


                // //Check số điện thoại
                // if ($sdt != $rowInfo['sdt']) {
                //     $CheckSdt = "SELECT *FROM tbl_user where sdt = '$sdt'";
                //     $queryCheckSdt = mysqli_query($conn, $CheckSdt);
                //     $countSdt = mysqli_num_rows($queryCheckSdt);

                //     if ($countSdt) {
                //         $errosSdt = "Số điện thoại đã tồn tại";
                //     }
                // }

                //if ($countMail==0 && $countSdt==0) {
                    $sqlUpdate = "UPDATE tbl_user set name = '$name', 
                                                            dia_chi='$dia_chi',
                                                            sdt = '$sdt',
                                                            email =  '$email',
                                                            gioi_tinh='$gioi_tinh',
                                                            ngsinh='$ngsinh'
                                                            where id_user = $update";

                    // UPDATE tbl_user set name = 'msnh', 
                    //                                         diachi='thanh hoá',
                    //                                         sdt = 0938453453,
                    //                                         email =  'sfaf@gmail.com',
                    //                                         gioi_tinh='nam',
                    //                                         ngsinh=2020/01/04
                    //                                         where id_user = 7;

                    $queryUpdate = mysqli_query($conn, $sqlUpdate);

                    if ($queryUpdate) {
                        //$_SESSION['notification'] = 1;
                        echo "<script>
                            alert('Sửa thành công!');
                            window.location = 'chuyenhuong.php?page=qluser';
                        </script>";
    
                    }
                    else {
                        echo "<script>
                            alert('Sửa thất bại!');
                            window.location = 'chuyenhuong.php?page=qluser';
                        </script>";
                    }
                //}

            }

            ?>
            
<!-- popup sửa sp -->
    <form action="" method="POST" role="form">
    <div class="popup-themsp" style="display: block; ">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa User</div>
            <div class="popup-themsp-left" style="width: 30%" >
                
                <!-- <div class="popup-themsp-left__label">STT</div> -->
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label">Địa Chỉ</div>
                <div class="popup-themsp-left__label">SĐT</div>
                <div class="popup-themsp-left__label">Email</div>
                <div class="popup-themsp-left__label">Giới Tính</div>
                <div class="popup-themsp-left__label">Ngày Sinh</div>
            </div>
            <div class="popup-themsp-right" style="width: 65%" />
                <div class="popup-themsp-left__input">

                    <!-- <input class="sua-user" type="text" readonly="" value="<?php echo $stt; ?>" name="password"></div>
                <div class="popup-themsp-left__input"> -->

                    <input class="sua-user" type="text" value="<?php echo $rowInfo['name']; ?>" name="name"></div>
                <div class="popup-themsp-left__input">

                    <input class="sua-user" type="text" value="<?php echo $rowInfo['dia_chi']; ?>" name="dia_chi"></div>
                <div class="popup-themsp-left__input">

                    <input class="sua-user" type="text" value="<?php echo $rowInfo['sdt']; ?>" name="sdt"></div>
                <div class="popup-themsp-left__input">

                    <input class="sua-user" type="text" value="<?php echo $rowInfo['email']; ?>" name="email"></div>
                <div class="popup-themsp-left__input">

                    <input class="sua-user" type="text" value="<?php echo $rowInfo['gioi_tinh']; ?>" name="gioi_tinh"></div>
                <div class="popup-themsp-left__input">

                    <input class="sua-user" type="text" value="<?php echo $rowInfo['ngsinh']; ?>" name="ngsinh"></div>
            </div>
            <button type="submit" class="popup-themsp__btn" name="update_rowInfo" />Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>

    </form>
    
        <!-- <script src="js/all.js"></script> -->
        <script src="../js/test_add.js"></script>