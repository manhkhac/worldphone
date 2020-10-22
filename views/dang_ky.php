
<body onload="dang_ky()">
    <!-- phần khung chứa tất cả sản phẩm và tiêu đề -->
    <div class="khung_sp">
        <!-- phần tiêu đề của khung -->
        <div class="khung_sp_header">
            <hr class="small_hr">
            <span class="small_txt">ĐĂNG KÝ THÀNH VIÊN</span>
            <hr class="long_hr">
            <span class="big_txt">SIGN UP NOW</span>
        </div>
        <!-- END phần tiêu đề của khung -->
        <!--dang ký-->
        <div class="dangky">
            <!--trái-->
            <div class="dangky1" align="left">
                <!--sdt-->
                <div class="item-dk">
                    <p class="font-dk">Số điện thoại*</p>
                    <input class="input-l" type="number" id="phone" name="user" placeholder="Nhập số điện thoại của bạn" onkeyup="check_phone()">
                </div>
                <!--hết sdt-->
                <!--mật khẩu-->
                <div class="item-dk">
                    <p class="font-dk">Mật khẩu*</p>
                    <input class="input-l" type="password" id="pass" name="passw" placeholder="tối thiểu 6 ký tự" onkeyup="passw()">
                </div>
                <!--hết mật khẩu-->
                <!--ngày sinh,gioi tính-->
                <div class="item-dk" style="padding-top:16px;">
                    <!--ngay sinh-->
                    <div class="item-ns">
                        <p class="font-dk">Ngày sinh</p>
                        <select style="color: rgb(94, 94, 94);" name="thang" id="thang" class="input-ns" onchange="day_func()">
                            <option class="" value="">tháng</option>
                        </select>
                        <select style="color: rgb(94, 94, 94); width: 60px" name="ngay" id="ngay" class="input-ns">
                        </select>
                        <select style="color: rgb(94, 94, 94);" name="nam" id="nam" class="input-ns">
                        </select>
                    </div>
                    <!--hết ngay sinh-->
                    <!--giới tính-->
                    <div class="item-gt">
                        <p class="font-dk">Giới tính</p>
                        <select class="gt font-dk" name="gt" id="sex">
                            <option checked>Chọn</option>
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </div>
                </div>
                <!--het ngày sinh,giới tính-->
            </div>
            <!--het trai-->
            <!--giua-->
            <div class="dangky1" align="left">
                <!--ten-->
                <div class="item-dk">
                    <p class="font-dk">Họ tên*</p>
                    <input type="text" class="input-l" id="hoten" placeholder="Họ tên" name="hoten" onkeyup="ht()">
                </div>
                <!--het tên-->
                <!--email-->
                <div class="item-dk">
                    <p class="font-dk">Địa chỉ Email*</p>
                    <input type="text" style="border: rgb(193, 193, 193) solid 1px;" class="input-l" id="email" placeholder="Vui lòng nhập email" name="email" onkeyup="mail()">
                </div>
                <!--het email-->
                <!--dang ky-->
                <div class="item-dk" style="margin-top: 0 ;">
                    <div>
                        <input type="checkbox" value="on" id="checkbox" name="dieukhoan">
                        <span class="font-dk" style="padding-bottom:5px;display:inline-block;">Tôi đã đồng ý với chính sách bảo mật</span><br>
                    </div>
                    <div>
                        <button class="submit-dk" type="submit" onclick="dk()">đăng ký</button>
                    </div>
                </div>
            </div>
            <!--het giua-->
            <!--phai-->
            <div class="dangky1" align="left">
                <div class="item-dk">
                    <p class="font-dk">Hoặc đăng ký với:</p>
                </div>
                <div class="item-dk">
                    <input class="dk-fb" type="button" name="dk-fb" value="FACEBOOK">
                </div>
                <div class="item-dk">
                    <input class="dk-g" type="button" name="dk-g" value="GOOGLE">
                </div>
            </div>
            <!--phai-->
        </div>
        <!--end dang ký-->
    </div>
    <!-- END phần khung chứa tất cả sản phẩm và tiêu đề -->
</div>
<!--END wrapper-->