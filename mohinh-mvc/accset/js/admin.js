var links = document.querySelectorAll('a');

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
