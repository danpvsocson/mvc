<?php
defined('BASEPATH') or exit('No direct script access allowed');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Manager</title>
    <?php include('header.php'); ?>
</head>

<body>
    <main>
        <?php include('nav_admin.php'); ?>
        <!--modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thay Đổi Mật Khẩu Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo base_url(''); ?>admin/edit_password_admin" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div>Mật khẩu mới</div>
                            <div class="input-group flex-nowrap">
                                <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu admin mới" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                            <input type="submit" class="btn btn-primary" value="Lưu">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>