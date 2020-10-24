
<div class="breadcrumb">
	<span><a href="../index.php">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý danh mục</span>
</div>
<div class="section">
<div class="them-sp" onclick="popup_themsp()"><button>Thêm Danh Mục</button></div>
<table id="table-dm">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên Danh Mục</th>
			<th>Thứ Tự</th>
			<th>Hiển Thị</th>
			<th>Thao tác</th>
		</tr>
	</thead>
	<tbody>
<!-- 		<tr>
			<td>1</td>
			<td>Dien thoai</td>
			<td>1</td>
			<td>Hiện</td>
			<td>
				<button class="xoa_sp">Xoá</button><br>
				<button class="sua_sp">Sửa</button>
			</td>
		</tr> -->
	</tbody>
</table>

<!-- popup thêm dm -->
<div class="popup-themsp">
    <div class="popup-themsp__content">
        <div class="popup-themsp__title">Thêm Danh Mục</div>
        <div class="popup-themsp-left">
            <div class="popup-themsp-left__label">Nhập Tên</div>
            <div class="popup-themsp-left__label">Nhập Thứ Tự</div>
            <div class="popup-themsp-left__label">Hiển Thị</div>
        </div>
        <div class="popup-themsp-right">
            <div class="popup-themsp-left__input"><input class="them-ten them-danh-muc" type="text" placeholder="Tên danh mục"></div>
            <div class="popup-themsp-left__input"><input class="them-thu-tu them-danh-muc" type="text" placeholder="Thứ tự danh mục"></div>
            <div class="popup-themsp-left__input">
            	<select  width="30" class="hien-thi them-danh-muc">
            		<option>on</option>
            		<option>off</option>
            	</select>
            </div>
        </div>
        <button class="popup-themsp__btn" onclick="them_danh_muc()">Thêm</button>
        <span class="back" onclick="close_popup_themsp()">&times;</span>
    </div>
</div>
<!-- popup sửa dm -->
<div class="popup-themsp">
    <div class="popup-themsp__content">
        <div class="popup-themsp__title">Sửa Danh Mục</div>
        <div class="popup-themsp-left">
            <div class="popup-themsp-left__label">STT</div>
            <div class="popup-themsp-left__label">Tên</div>
            <div class="popup-themsp-left__label">Thứ Tự</div>
            <div class="popup-themsp-left__label">Hiển Thị</div>
        </div>
        <div class="popup-themsp-right">
            <div class="popup-themsp-left__input"><input class="stt sua-dm" type="text" placeholder="Tên danh mục"></div>
            <div class="popup-themsp-left__input"><input class="them-ten sua-dm" type="text" placeholder="Tên danh mục"></div>
            <div class="popup-themsp-left__input"><input class="them-thu-tu sua-dm" type="text" placeholder="Thứ tự danh mục"></div>
            <div class="popup-themsp-left__input">
            	<select  width="30" class="hien-thi sua-dm">
            		<option>on</option>
            		<option>off</option>
            	</select>
            </div>
        </div>
        <button class="popup-themsp__btn" onclick="sua_danh_muc()">Sửa</button>
        <span class="back" onclick="close_popup_themsp()">&times;</span>
    </div>
</div>