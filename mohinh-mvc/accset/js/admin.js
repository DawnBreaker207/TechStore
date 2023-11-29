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
    validateForm();


});

function validateForm() {
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
        sendData(user, pass, email, diachi, phone, role);
    }
    ;
}

function sendData(user, pass, email, diachi, phone, role) {
    // Thực hiện các bước để gửi dữ liệu đi (ví dụ: sử dụng AJAX để gửi dữ liệu đến server)
    console.log("Dữ liệu đã được gửi:");
    console.log("User:", user);
    console.log("Pass:", pass);
    console.log("Email:", email);
    console.log("Địa chỉ:", diachi);
    console.log("Phone:", phone);
    console.log("Role:", role);

    let form = document.getElementById("myForm");

    form.submit();
}
