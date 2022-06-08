<?php include('nav_admin.php'); ?>
<title>Account Manager</title>
<section class=" container" id="body">
    <h2 class=" text-center">Danh Sách Tài Khoản</h2>
    <div class="d-flex justify-content-center"><a href="<?php echo base_url(''); ?>admin/add_account_form" class="btn btn-success">Thêm Tài Khoản</a></div>
    <hr>
    <table class=" table table-striped">
        <tr>
            <th class="col-1 off">STT</th>
            <th class="col-3">Username</th>
            <th class="col-3">Email</th>
            <th class="col-2 off">Số Điện Thoại</th>
            <th class="col-1">Trạng Thái</th>
            <th class="col-1 text-center">Sửa</th>
            <th class="col-1 text-center">Xóa</th>
        </tr>
        <tbody>

            <?php $i = 1 ?>
            <?php foreach ($accountshow as $key => $data) : ?>
                <tr>
                    <td class="off"><?= $i++ ?></td>
                    <td><?= $data['username']?></td>
                    <td><?= $data['email']?></td>
                    <td class="off"><?= $data['sdt']?></td>
                    <?php
                    if ($data['trangthai'] == 1) {
                    echo'<td><p class="text-success m-0">Kích hoạt</p></td>';
                    } else {
                    echo'<td><p class="text-danger m-0">Vô hiệu hóa</p></td>';
                    }
                    ?>
                    <td class="text-center"><a href="<?php echo base_url('');?>admin/form_edit_account/<?= $data['username']?>" class="btn btn-primary btn-sm">Sửa</a></td>
                    <td class="text-center"><a href="<?php echo base_url('');?>admin/delete_account/<?= $data['username']?>" class="btn btn-danger btn-sm">Xóa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</section>
<?php include('footer_admin.php'); ?>