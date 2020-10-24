

<body onload="gio_hang()">
       
        <!-- phần khung chứa tất cả sản phẩm và tiêu đề -->
        <div class="khung_sp">
            <!-- phần tiêu đề của khung -->
            <div class="khung_sp_header">
                <hr class="small_hr">
                <span class="small_txt">GIỎ HÀNG CỦA BẠN</span>
                <hr class="long_hr">
                <span class="big_txt">YOUR CART</span>
            </div>
            <!-- END phần tiêu đề của khung -->
            <div>
                <span class="clear_all_cart">XÓA TẤT CẢ SẢN PHẨM</span>
            </div>
            <!--Summary-->
            <div class="summary-section">
                <div class="summary-heading">
                    Thông tin đơn hàng:
                    <span onclick="location.reload()" class="refresh_cart">Cập nhật!</span>
                </div>
                <div class="rows">
                    <div class="summary-label" id="dem_sp">Tạm tính (0 sản phẩm):</div>
                    <div class="summary-value tong_tien"></div>
                </div>
                <div class="rows">
                    <div class="summary-label">Phí giao hàng:</div>
                    <div class="summary-value">miễn phí</div>
                </div>
                <div class="ma-giam-gia rows">
                    <input type="text" name="" id="mgg_txt" placeholder="Nhập mã giảm giá">
                    <input onclick="if(document.getElementById('mgg_txt').value != '') alert('Đã nhận mã giảm giá 0%');else alert('Vui lòng nhập mã giảm giá')" type="button" value="ÁP DỤNG">
                </div>
                <div class="rows">
                    <div class="summary-label">Tổng cộng:</div>
                    <div class="summary-value" style="color:#f57224;padding-bottom:10px"><span class="tong_tien"></span><br>Đã bao gồm VAT (nếu có)</div>
                </div>
                <input onclick="xac_nhan_gio_hang()" class="xac-nhan rows" type="button" value="XÁC NHẬN GIỎ HÀNG">
            </div>
            <!--End Summary-->
            <!--List cart-->
            <div class="list_sp">
            </div>
            <!--End List cart-->
        </div>
        <!-- END phần khung chứa tất cả sản phẩm và tiêu đề -->
    </div>
    <!--END wrapper-->
    <!--Chỉ là một div rỗng-->
    <div style="height: 50px;width: 100%;clear: both;"></div>
    
</body>

</html>
