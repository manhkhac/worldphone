<?php 
    if (isset($_POST['sm_login'])) {
        $userName = mysqli_real_escape_string($conn, $_POST['user']); // chống tấn công sql_injection
        $passWord = mysqli_real_escape_string($conn, $_POST['passw']);
        $passW = md5($passWord);

        $sql = "SELECT *FROM tbl_user WHERE email = '$userName' AND passw = '$passW'"; // Câu lệnh truy vấn
        $query = mysqli_query($conn, $sql); // Thực thi câu lệnh truy vấn
        $count = mysqli_num_rows($query); // Đếm số bản ghi trả ra sau khi truy vấn
        $row = mysqli_fetch_array($query);
        echo $count;

        if ($count == 1) {
            // $_SESSION['id'] = $row['id_user'];
            // $_SESSION['name'] = $row['name'];
            echo "<script>
                alert('Đăng nhập thành công!');
                window.location = 'index.php?page=trangchu';
            </script>";
        }else{
            $errors = "Username hoặc Password không đúng!";
        }
    }

?>

<body onload="login()">
        <div class="khung_sp">
            <!-- phần tiêu đề của khung -->
            <div class="khung_sp_header">
                <hr class="small_hr">
                <span class="small_txt">ĐĂNG NHẬP VỚI CHÚNG TÔI</span>
                <hr class="long_hr">
                <span class="big_txt">LOGIN NOW</span>
            </div>
            <!-- END phần tiêu đề của khung -->
            <!--form đăng nhập-->
            <form action="#" method="post">
                <!--LOGIN-->
                <div class="dangnhap">
                    <!--LOGIN trai-->
                    <div class="dangnhap-l">
                        <!--dangnhap-->
                        <DIV class="item-login">
                            <p class="font-login">Đăng nhập:</p>
                            <input id="dangnhap" name="user" class="login" type="text" placeholder="Email" onKeyUp="check()">
                            <p class="login-last" id="bk1">Hãy nhập đầy đủ thông tin!</p>
                        </DIV>
                        <!--het dangnhap-->
                        <!--mat khau-->
                        <div class="item-login">
                            <p class="font-login">Mật khẩu:</p>
                            <input class="login" name="passw" id="matkhau" type="password" placeholder="Tối thiểu 5 ký tự" onKeyUp="check()">
                            <p class="login-last" id="bk2">Hãy nhập đầy đủ thông tin!</p>
                        </div>
                        <!--het mat khau-->
                        <!--quên mật khẩu-->
                        <div class="item-login" style="width: 300px" align="right"><a href="#" class="quenmk">
                            <p class=" quenmk">Quên mật khẩu?</p>
                        </a>
                    </div>
                    <!--het quên mật khẩu-->
                </div>
                <!--het LOGIN trai-->
                <!--LOGIN phai-->
                <div class="dangnhap-l" style="margin-top: 30px;">
                    <!-- login-->
                    <div class="item-login">
                        <input type="submit" class="submit" name="sm_login" value="ĐĂNG NHẬP" onClick="sub()">
                        <P class="font-login">Hoặc đăng nhập bằng: </P>
                    </div>
                    <!--het login-->
                    <!--login fb-->
                    <div class="item-login">
                        <button type="button" class="login-fb" value="" name="login-fb">FACEBOOK</button>
                    </div>
                    <!--het login fb-->
                    <!--login gmail-->
                    <div class="item-login">
                        <input type="button" class="login-g" value="GOOLGE" name="login-g">
                    </div>
                    <!--het login gmail-->
                </div>
                <!--het LOGIN phai-->
            </div>
            <!--het LOGIN-->
        </form>
        <!--end form đăng nhập-->
    </div>
</body>
    <!-- END phần khung chứa tất cả sản phẩm và tiêu đề -->
    <script>
    function check() {
    document.getElementById('bk1').style.display = 'block';
    document.getElementById('bk2').style.display = 'block';
    var tk = document.getElementById("dangnhap").value;
    var mk = document.getElementById("matkhau").value;
    if (tk == "") {
    document.getElementById('dangnhap').style.borderColor = 'red';
    } else {
    document.getElementById('bk1').style.display = 'none';
    document.getElementById('dangnhap').style.borderColor = 'rgb(186, 186, 186)';
    }
    if (mk == "" || mk.length < 5) {
    document.getElementById('matkhau').style.borderColor = 'red';
    } else {
    document.getElementById('bk2').style.display = 'none';
    document.getElementById('matkhau').style.borderColor = 'rgb(186, 186, 186)';
    }
    }
    function sub() {
    var tk = document.getElementById("dangnhap").value;
    var mk = document.getElementById("matkhau").value;
    if (tk == "" || mk == "") {
    alert("Vui lòng không bỏ trống các thông tin!");
    } else
    if (mk.length <5) {
    alert('Mật khẩu phải trên 5 ký tự');
    } else {
    dang_nhap_fuc();
    }
    }
    </script>
    <!-- <script src="js\all.js"></script> -->