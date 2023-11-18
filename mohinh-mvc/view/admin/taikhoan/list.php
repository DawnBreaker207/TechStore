<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../accset/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form">
        <form action="" method="post" class="form-serch">
            <input type="search" class="input-search" placeholder="Tìm kiếm">
            <input type="submit" value="Gửi" class="btn-sm">
        </form>
        <a href="addTK.html" class="btn-add"><svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M10 15.8333L15.8333 10L18.3333 12.5L12.5 18.3333L10 15.8333Z" stroke="#FFFCFE"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 10.8334L13.75 4.58335L1.66666 1.66669L4.58332 13.75L10.8333 15L15 10.8334Z"
                    stroke="#FFFCFE" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M1.66666 1.66669L7.98832 7.98835" stroke="#FFFCFE" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M9.16667 10.8333C10.0871 10.8333 10.8333 10.0871 10.8333 9.16667C10.8333 8.24619 10.0871 7.5 9.16667 7.5C8.24619 7.5 7.5 8.24619 7.5 9.16667C7.5 10.0871 8.24619 10.8333 9.16667 10.8333Z"
                    stroke="#FFFCFE" stroke-linecap="round" stroke-linejoin="round" />
            </svg>Thêm</a>
    </div>
    <div>
        <table class="table" border="0">
            <tr>
                <td>ID</td>
                <td>User</td>
                <td>Pass</td>
                <td>Email</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Role</td>
                <td>Tùy chỉnh</td>
            </tr>
            <tr>
                <td>ID</td>
                <td>User</td>
                <td>Pass</td>
                <td>Email</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Role</td>
                <td><a href="updateTK.html" class="btn-sm">Sửa</a>
                    <a href="index.php?act=danhmuc&idsp=1" class="btn-sm">Xóa</a>
                </td>
            </tr>

        </table>
    </div>
</body>

</html>