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
            <?php if ($trang_hien_tai != 1) { ?>
                <li class="page-item"><a class="page-link" href="manager/account/page/<?= $trang_hien_tai - 1 ?>"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item">
                    <!-- Trang đầu và các trang khác -->
                    <?php if ($trang_hien_tai != $page){?>
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
                <?php if ($trang_hien_tai != $page){?>
                    <?php if ($trang_hien_tai <= $page-3){ ?>
                        <?php if($trang_hien_tai < $page-3){ ?>
                                <p class="page-link">...</p>
                            <?php } ?>
                    <li class="page-item"><a class="page-link" href="manager/account/page/<?= $page ?>"><?= $page ?></a></li>
                    <?php } ?>
                <?php } ?>
            </li>
            <!-- Nút trang sau -->
            <?php if ($trang_hien_tai != $page) { ?>
                <li class="page-item"><a class="page-link" href="manager/account/page/<?= $trang_hien_tai + 1 ?>"><i class="fas fa-angle-right"></i></a></li>
            <?php
            }
            ?>
        </ul>
        <p class="text-center"><?= $trang_hien_tai ?>/<?= $page ?></p>
    </nav>
</section>