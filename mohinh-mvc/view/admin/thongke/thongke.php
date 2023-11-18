
<!-- Liên kết từ CDN (nếu bạn có kết nối internet) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <h2>Biểu Đồ Doanh Thu</h2>

    <!-- Phần tử canvas để vẽ biểu đồ -->
    <canvas id="revenueChart"></canvas>

    <script>
        // Dữ liệu mẫu cho biểu đồ pie
        var revenueData = {
            labels: ['Sản phẩm A', 'Sản phẩm B', 'Sản phẩm C'],
            datasets: [{
                data: [3000, 4500, 2000],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        };

        // Lấy thẻ canvas và vẽ biểu đồ pie
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var revenueChart = new Chart(ctx, {
            type: 'pie',
            data: revenueData,
            options: {
                responsive: false, // Tắt tính năng điều chỉnh kích thước tự động
                maintainAspectRatio: false, // Tắt duy trì tỷ lệ khung hình
                width: 300, // Đặt chiều rộng
                height: 300 // Đặt chiều cao

            }
        });
    </script>

