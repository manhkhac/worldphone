
<body onload="thong_tin_sp()">
    <div class="wrapper">

        <!-- phần khung chứa tất cả sản phẩm và tiêu đề -->
        <div class="khung_sp">
            <!-- phần tiêu đề của khung -->
            <div class="khung_sp_header">
                <hr class="small_hr">
                <span class="small_txt">THÔNG TIN SẢN PHẨM</span>
                <hr class="long_hr">
                <span class="big_txt">INFOMATION</span>
            </div>
            <!-- END phần tiêu đề của khung -->
            <!--Chi tiết sản phẩm-->
            <div class="hinh-san-pham">
                <img class="hinh-to ttsp_hinh">
                <img class="hinh-nho ttsp_hinh">
                <img class="hinh-nho ttsp_hinh">
                <img class="hinh-nho ttsp_hinh">
            </div>
            <div class="thong-tin-san-pham">
                <p class="ten_sp">Điện thoại 1</p>
                <p class="gia-tien"></p>
                <span class="gia-cu">120.000.000đ</span>
                <br>
                <br>
                <input type="checkbox"><b> Yêu cầu nhân viên kỹ thuật giao hàng:</b> hỗ trợ copy danh bạ,hướng dẫn sử dụng máy mới, giải đáp thắc mắc sản phẩm. <br>
                <br>
                Gọi đặt mua: 1800.1060 (miễn phí - 7:30-22:00)<br>
                <br>
                <button onclick="xac_nhan(this)" class="ttsp_them">Thêm Vào Vỏ Hàng</button>
                <!-- <button onclick="alert('Mua thành công')" class="ttsp_mua">Mua Ngay</button> -->
            </div>
            <div class="clear_both"></div>
            <hr class="ngan_chia clear_both">
            <div class="thong-tin-chi-tiet">
                <p class="title">Thông số kỹ thuật : </p>
                <p><span class="l">Màn hình:</span><span class="r">Super AMOLED, 6.2", Quad HD+ (2K+)</span></p>
                <p><span class="l">Hệ điều hành:</span><span class="r">iOS</span></p>
                <p><span class="l">Camera sau:</span><span class="r">2 camera 12 MP</span></p>
                <p><span class="l">Camera trước:</span><span class="r">8 MP</span></p>
                <p><span class="l">CPU:</span><span class="r">Exynos 9810 8 nhân 64 bit</span></p>
                <p><span class="l">RAM:</span><span class="r">6 GB</span></p>
                <p><span class="l">Bộ nhớ trong:</span><span class="r">64 GB</span></p>
                <p style="border-bottom:none;"><span class="l">Dung lượng pin:</span><span class="r">3500 mAh, có sạc nhanh</span></p>
            </div>
            <div class="danh-gia-san-pham">
                <h3>Xứng đáng là một trong những smartphone siêu phẩm trên thế giới, Samsung Galaxy S9 Plus bản 64 GB sở hữu nhiều tính năng vượt trội mà khó có chiếc điện thoại nào sánh bằng.</h3>
                <b>Thiết kế sang trọng và tinh tế</b><br>
                <br>
                Nhờ thiết kế tràn viền, tổng thể S9 Plus vẫn đem lại cảm giác nhỏ gọn, chắc chắn trong lòng bàn tay nhưng màn hình vẫn rộng rãi để thoải mái trải nghiệm.<br>
                <br>
                Khung của máy vẫn là kim loại kết hợp 2 mặt kính cường lực được bo cong các cạnh đầy "quyến rũ" và hiện đại.
                Với chip Core i3 thế hệ thứ 7 kết hợp 4 GB RAM được tích hợp, HP 15 da0055TU (4NA89PA) cho hiệu năng ổn định mượt mà đối với các tác vụ như soạn thảo, nhập liệu.... Ổ cứng HDD lên đến 1 TB cho người dùng thoải mái lưu trữ dữ liệu không lo hết dung lượng.
            </div>
            <!--END chi tiết sp-->
            <!--sp khác-->
            <div class="khung_sp_header">
                <hr class="small_hr">
                <span class="small_txt">SẢN PHẨM NỔI BẬT KHÁC</span>
                <hr class="long_hr">
                <span class="big_txt">ANOTHER</span>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>
            <div class="product-box">
                <a class="box" href="thong_tin_sp.php?46&0">
                    <div class="hinh-sp">
                        <div style="background-image: url(image/phone/htc-u12-life-1-400x400.jpg)" class="hinh"></div>
                    </div>
                    <p class="ten-sp">Htc U12 Life</p>
                    <p class="gia-tien">20.000.000đ<span class="gia-cu">500.000.000đ</span></p>
                </a>
                <div class="them-vao-gio-hang"><button title="Thêm sản phẩm này vào giỏ hàng của bạn" value="46&0" style="button" class="them">Add <img class="icon-cart" src="image/icon/icon-cart.png"></button></div>
            </div>

            <!--END sp khác-->
        </div>
        <!-- END phần khung chứa tất cả sản phẩm và tiêu đề -->
    </div>
    <!--END wrapper-->
    <!--Chỉ là một div rỗng-->
    <div style="height: 50px;width: 100%;clear: both;"></div>
    
    
    <!--end scroll to top-->
    <script type="text/javascript">
        function go_to_index() {
            var input_name = document.getElementById('input_name').value;
            window.location = 'index.php?6&0&account=' + input_name;
        }

    </script>
    <!-- <script src="js/all.js"></script> -->
</body>

</html>
