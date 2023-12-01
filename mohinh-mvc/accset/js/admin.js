let links = document.querySelectorAll('a');

// Duyệt qua mỗi thẻ a và thêm sự kiện click
links.forEach(function (link) {
    link.addEventListener('click', function () {
        // Đặt lại font-weight của tất cả các thẻ a về bình thường (font-weight: normal)
        links.forEach(function (otherLink) {
            otherLink.style.fontWeight = 'normal';
        });

        // Đặt font-weight của thẻ a được click sang bold
        this.style.fontWeight = 'bold';
    });
});

// biểu đồ


// Validate account add
document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();
    validateFormAccount();
});document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();
    validateFormCategory();
});

function validateFormAccount() {
    let user = document.getElementById("user").value;
    let pass = document.getElementById("pass").value;
    let email = document.getElementById("email").value;
    let diachi = document.getElementById("diachi").value;
    let phone = document.getElementById("phone").value;
    let role = document.getElementById("role").value;

    document.getElementById("userError").innerText = user === "" ? "Không được bỏ trống mục này" : "";
    document.getElementById("passError").innerText = pass === "" ? "Không được bỏ trống mục này" : "";
    document.getElementById("emailError").innerText = email === "" ? "Không được bỏ trống mục này" : "";
    document.getElementById("diachiError").innerText = diachi === "" ? "Không được bỏ trống mục này" : "";
    document.getElementById("phoneError").innerText = phone === "" ? "Không được bỏ trống mục này" : "";
    document.getElementById("roleError").innerText = role === "" ? "Không được bỏ trống mục này" : "";

    if (user !== "" && pass !== "" && email !== "" && diachi !== "" && phone !== "" && role !== "") {
        sendDataAccount(user, pass, email, diachi, phone, role);
    }

}
function sendDataAccount(user, pass, email, diachi, phone, role) {

    let form = document.getElementById("myForm");

    form.submit();
}

function validateFormCategory() {
    let madm = document.getElementById("madm").value;
    let tendm = document.getElementById("tendm").value;


    document.getElementById("madmError").innerText = madm === "" ? "Không được bỏ trống mục này" : "";
    document.getElementById("tendmError").innerText = tendm === "" ? "Không được bỏ trống mục này" : "";


    if (madm !== "" && tendm !== "" ) {
        sendDataAccountCategory(madm, tendm);
    }

}
function sendDataAccountCategory(madm, tendm) {

    let form = document.getElementById("myForm");

    form.submit();
}