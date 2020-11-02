
<div class="breadcrumb">
	<span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý Đơn hàng</span>
</div>
<div class="section">
	<table id="table-dh">
		<thead>
			<tr>
				<th colspan="6">DANH SÁCH ĐƠN HÀNG</th>
			</tr>
			<tr>
				<th colspan="3">Chọn ngày
					<input type="date" value="2016-07-22"><span> - </span><input type="date" value="2019-07-22">
				</th>
				<th colspan="3">Trạng thái
					<select id="trang_thai">
						<option value="Đã giao">Đã giao</option>
						<option value="Chưa giao">Chưa giao</option>
						<option value="Chưa liên lạc">Chưa liên lạc</option>
						<option value="all" selected>Tất cả</option>
					</select>
				</th>
			</tr>
			<tr>
				<th>STT</th>
				<th>Khách Hàng</th>
				<th>Thời Điểm Đặt Hàng</th>
				<th>Tổng Tiền</th>
				<th>Tình Trạng</th>
            	<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			 <?php
                    $sql = "SELECT *FROM tbl_donhang";
                    $query = mysqli_query($conn, $sql);
                    $stt = 0;
                    while ($array = mysqli_fetch_array($query)){
                    $stt += 1;
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $array['khach_hang']; ?></td>
                    <td><?php echo $array['thoi_diem']; ?></td>
                    <td><?php echo $array['tong_tien']; ?></td>
                    <td><?php echo $array['tinh_trang']; ?></td>
                    
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

<!-- popup thong tin chi tiet don hang -->
<div class="popup-themsp">
	<div class="popup-themsp__content">
		<div class="popup-themsp__title">Chi Tiết Đơn Hàng</div>
		<div class="popup-themsp-left">
			<div class="popup-themsp-left__label">Khách hàng</div>
			<div class="popup-themsp-left__label">Thời điểm đặt hàng</div>
			<div class="popup-themsp-left__label">Iphone XS MAX</div>
			<div class="popup-themsp-left__label">Tổng tiền</div>
			<div class="popup-themsp-left__label">Tình trạng</div>
		</div>
		<div class="popup-themsp-right">
			<div class="popup-themsp-left__input">xxx</div>
			<div class="popup-themsp-left__input">xxx</div>
			<div class="popup-themsp-left__input">xxx</div>
			<div class="popup-themsp-left__input">xxx</div>
			<div class="popup-themsp-left__input">xxx</div>
		</div>
		<span class="back" onclick="close_popup_themsp()">&times;</span>
	</div>
</div>
<!-- popup sửa sp -->
<div class="popup-themsp">
    <div class="popup-themsp__content">
        <div class="popup-themsp__title">Sửa Đơn Hàng</div>
        <div class="popup-themsp-left">
            <div class="popup-themsp-left__label">STT</div>
            <div class="popup-themsp-left__label">Khách Hàng</div>
            <div class="popup-themsp-left__label">Thời Điểm</div>
            <div class="popup-themsp-left__label">Tổng Tiền</div>
            <div class="popup-themsp-left__label">Tình Trạng</div>
        </div>
        <div class="popup-themsp-right">
            <div class="popup-themsp-left__input"><input class="sua-user" type="text" readonly=""></div>
            <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
            <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
            <div class="popup-themsp-left__input"><input class="sua-user" type="text"></div>
            <div class="popup-themsp-left__input">
            	<select class="sua-user">
            		<option>Chưa giao</option>
            		<option>Đã giao</option>
            		<option>Chưa liên lạc</option>
            	</select>
            </div>
        </div>
        <button class="popup-themsp__btn" onclick="sua_thong_tin_don_hang()">Sửa</button>
        <span class="back" onclick="close_popup_themsp()">&times;</span>
    </div>
</div>