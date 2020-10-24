function Admin(email, pass) {
    this.email = email;
    this.pass = pass;
}
var admin = new Array();
admin[0] = new Admin('admin@gmail.com', '12345');
admin[1] = new Admin('manh@gmail.com', 'manh');
admin[2] = new Admin('cho@gmail.com', 'cho');

function check() {
    var k = true;
    var email = document.getElementById('email');
    var pass = document.getElementById('pass');
    for (var i = 0; i < admin.length; i++) {
        if (email.value === admin[i].email && pass.value === admin[i].pass) {
            window.location = 'admin.html';
            return true;
        }
    }
    if (email.value === '') {
        email.style.borderBottom = '2px solid #FA5326';
        email.target;
    } else
    if (pass.value === '') {
        pass.style.borderBottom = '2px solid #FA5326';
        pass.target;
    } else {
        alert('Tài khoản không tồn tại');
    }
    return false;
}