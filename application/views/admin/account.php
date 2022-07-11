<?php include('nav_admin.php'); ?>
<title>Account Manager</title>
<section class="container" id="body">
    <h2 class=" text-center">Danh Sách Tài Khoản</h2>
    <div class="d-flex justify-content-center border-bottom border-secondary pb-3 mb-3"><a href="<?php echo base_url(''); ?>admin/add_account_form" class="btn btn-success">Thêm Tài Khoản</a></div>
    <!-- <hr> -->
    <table class=" table table-striped">
        <tr>
            <th class="col-1 off">STT</th>
            <th class="col-3">Username</th>
            <th class="col-3">Email</th>
            <th class="col-2 off">Số Điện Thoại</th>
            <th class="col-1 off">Status</th>
            <th class="col-1 text-center">Sửa</th>
            <th class="col-1 text-center">Xóa</th>
        </tr>
        <tbody>

            <?php $i = 1 ?>
            <?php foreach ($accountshow as $key => $data) : ?>
                <tr>
                    <td class="off"><?= $i++ ?></td>
                    <td class="username"><?= $data['username'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td class="off"><?= $data['sdt'] ?></td>
                    <?php
                    if ($data['trangthai'] == 1) {
                        echo '<td class="off"><p class="text-success m-0">Enabled</p></td>';
                    } else {
                        echo '<td class="off"><p class="text-danger m-0">Disabled</p></td>';
                    }
                    ?>
                    <td class="text-center"><a href="<?php echo base_url(''); ?>admin/form_edit_account/<?= $data['id'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</a></td>
                    <td class="text-center"><a href="<?php echo base_url(''); ?>admin/delete_account/<?= $data['username'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="col-12 d-flex justify-content-center">
        <?php
        if ($this->session->flashdata("error")) {
            echo $this->session->flashdata("error");
        }
        if ($this->session->flashdata("success")) {
            echo $this->session->flashdata("success");
        }
        ?>
    </div>
</section>
<?php include('page.php'); ?>
<?php include('footer_admin.php'); ?>