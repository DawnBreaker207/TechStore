<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacked Bar/Line Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <canvas id="myChart" width="800" height="400"></canvas>

    <script>
        // Dữ liệu mẫu, bạn cần thay thế bằng dữ liệu từ cơ sở dữ liệu
        var data = {
            labels: ["Label 1", "Label 2", "Label 3", "Label 4"],
            datasets: [
                {
                    label: "Dataset 1",
                    data: [10, 20, 30, 40],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: "Dataset 2",
                    data: [5, 15, 25, 35],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
        };

        // Cấu hình biểu đồ
        var options = {
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true
                }
            }
        };

        // Vẽ biểu đồ
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // Loại biểu đồ
            data: data,
            options: options
        });
    </script>

</body>
</html>
