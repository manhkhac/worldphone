function popup_themsp() {
	document.querySelectorAll('.popup-themsp__content .them-user');
    document.getElementsByClassName('popup-themsp')[0].style.display = 'block';
}

function close_popup_themsp() {
    document.getElementsByClassName('popup-themsp')[0].style.display = 'none';
    try {
        document.getElementsByClassName('popup-themsp')[1].style.display = 'none';
    } catch (e) {
        console.log("Đang ở trang Quản lý Đơn Hàng");
    }
}

// function them_thong_tin_sua_user(e, i) {
//     var sua_user = document.getElementsByClassName('sua-user');
//     // var thong_tin = document.querySelectorAll('tbody tr td');
//     e.addEventListener('click', function() {
//         document.getElementsByClassName('popup-themsp')[1].style.display = 'block';
//         // sua_user[0].value = thong_tin[i * 8 + 0].innerHTML;
//         // sua_user[1].value = thong_tin[i * 8 + 1].innerHTML;
//         // sua_user[2].value = thong_tin[i * 8 + 2].innerHTML;
//         // sua_user[3].value = thong_tin[i * 8 + 3].innerHTML;
//         // sua_user[4].value = thong_tin[i * 8 + 4].innerHTML;
//         // sua_user[5].value = thong_tin[i * 8 + 5].innerHTML;
//         // sua_user[6].value = thong_tin[i * 8 + 6].innerHTML;
//     });
// }
