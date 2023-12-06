
    <div class="form">
        <form action="index.php?act=taiKhoan&nd=seach" method="post" class="form-serch">
            <input type="search" name="keyword" class="input-search" placeholder="Tìm kiếm">
            <input type="submit" value="Gửi" class="btn-sm">
        </form>
        <a href="index.php?act=taiKhoan&nd=addTk" class="btn-add"><svg width="16" height="16" viewBox="0 0 20 20" fill="none"
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
            <?php foreach ($loadallTK as $tk){
                extract($tk)?>
            
            <tr>
                <td><?php echo $ma_tk; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $pass ;?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $dia_chi; ?></td>
                <td><?php echo $sdt;?></td>
                <td><?php echo $ma_vaitro;?></td>           
                <td><a href="index.php?act=taiKhoan&nd=update&ma_tk=<?php echo $ma_tk; ?>" class="btn-sm">Sửa</a>
                    <a href="index.php?act=taiKhoan&nd=delete&ma_tk=<?php echo $ma_tk; ?>" class="btn-sm">Xóa</a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </div>
</body>

</html>