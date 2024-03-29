<?php include('nav_admin.php'); ?>
<title>Account Manager</title>
<section class="container" id="body">
    <h2 class=" text-center">Danh Sách Tài Khoản</h2>
    <div class="d-flex justify-content-center border-bottom border-secondary pb-3 mb-3"><a href="<?php echo base_url(''); ?>manager/account/add_account_form" class="btn btn-success">Thêm Tài Khoản</a></div>

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
                    <td class="text-center"><a href="<?php echo base_url(''); ?>manager/account/form_edit_account/<?= $data['id'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</a></td>
                    <td class="text-center"><a href="<?php echo base_url(''); ?>manager/account/delete_account/<?= $data['username'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>

<!-- * Page -->
<section class=" d-flex container justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <!-- Lấy ra trang hiện tại -->
            <?php
            $uri = $_SERVER['REQUEST_URI'];
            $uri = explode("/", $uri);
            $trang_hien_tai = end($uri);
            $trang_hien_tai = intval($trang_hien_tai);
            if ($trang_hien_tai <= 0) {
                $trang_hien_tai = 1;
            }
            ?>
            <!-- Nút Trang Trước -->
            <?php if ($trang_hien_tai > 1) { ?>
                <li class="page-item"><a class="page-link" href="manager/account/page/<?= $trang_hien_tai - 1 ?>"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item">
                    <!-- Trang đầu và các trang khác -->
                    <?php if ($trang_hien_tai <= $page && $trang_hien_tai >= 1){?>
                        <?php if ($trang_hien_tai >= 4){ ?>
                            <li class="page-item"><a class="page-link" href="manager/account/page/1">1</a></li>
                            <?php if($trang_hien_tai > 4){ ?>
                                <p class="page-link">...</p>
                            <?php } ?>
                            <?php } ?>
                    <?php } ?>  
                </li>
            <?php } ?>
            <!-- Trang hiện tại -->
            <?php for ($p = $trang_hien_tai - 2; $p <= $trang_hien_tai + 2; $p++) {
                if ($p == $trang_hien_tai) { ?>      
                    <li class="page-item active">
                        <p class="page-link"><?= $p ?></p>
                    </li>
                    <!-- Loại bỏ số không phải trang -->
                <?php } else {
                    if($p <= 0){
                ?><?php continue;?>
                    <?php } if($p > $page) { continue; }?>
                    <li class="page-item"><a class="page-link" href="manager/account/page/<?= $p ?>"><?= $p ?></a></li>
            <?php } }?>
            <li class="page-item">
                <!-- Trang cuối và các trang khác -->
                <?php if ($trang_hien_tai <= $page && $trang_hien_tai >= 1){?>
                    <?php if ($trang_hien_tai <= $page-3){ ?>
                        <?php if($trang_hien_tai < $page-3){ ?>
                                <p class="page-link">...</p>
                            <?php } ?>
                    <li class="page-item"><a class="page-link" href="manager/account/page/<?= $page ?>"><?= $page ?></a></li>
                    <?php } ?>
                <?php } ?>
            </li>
            <!-- Nút trang sau -->
            <?php if ($trang_hien_tai < $page) { ?>
                <li class="page-item"><a class="page-link" href="manager/account/page/<?= $trang_hien_tai + 1 ?>"><i class="fas fa-angle-right"></i></a></li>
            <?php
            }
            ?>
        </ul>
        <p class="text-center"><?= $trang_hien_tai ?>/<?= $page ?></p>
    </nav>
</section>

<?php include('footer_admin.php'); ?>