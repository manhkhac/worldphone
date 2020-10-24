// function Admin(email, pass) {
//     this.email = email;
//     this.pass = pass;
// }
// var admin = new Array();
// admin[0] = new Admin('admin@gmail.com', 'admin');
// admin[1] = new Admin('manh@gmail.com', 'manh');
// admin[2] = new Admin('cho@gmail.com', 'cho');

// function check() {
//     var k = true;
//     var email = document.getElementById('email');
//     var pass = document.getElementById('pass');
//     for (var i = 0; i < admin.length; i++) {
//         if (email.value === admin[i].email && pass.value === admin[i].pass) {
//             window.location = 'admin.php';
//             return true;
//         }
//     }
//     if (email.value === '') {
//         email.style.borderBottom = '2px solid #FA5326';
//         email.target;
//     } else
//     if (pass.value === '') {
//         pass.style.borderBottom = '2px solid #FA5326';
//         pass.target;
//     } else {
//         alert('Tài khoản không tồn tại');
//     }
//     return false;
// }

/*function checkEmail(){
    var email = document.getElementById("email").value;
    var check_error_email = document.getElementById("error_user");
    var regexEmail = /\b[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,6}\b/i;

    if (email == ""){
        check_error_email.innerHTML = "Email không được để trống!";
    }else if(!regexEmail.test(email)){
        check_error_email.innerHTML = "Email không hợp lệ!";
    }else{
        check_error_email.innerHTML = "";
        return email;
    }
}

function validate(){
    if (checkEmail()){
        
        alert("Gửi thành công!");
        return false;
    }else{
        alert("Dữ liệu không được để trống!");
        return false;
    }
    
    return false;
}*/