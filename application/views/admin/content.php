<?php include('nav_admin.php'); ?>
<title>Content Manager</title>
<section class=" container" id="body">

    <h2 class="text-center">Đây là trang Bài viết</h2>
    <section class=" d-flex container justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="admin/content/page/1">' . $p + 1. . '</a></li>
            <?php
            // if()
            ?>
            <!-- <li class="page-item"><a class="page-link" href="><i class="fas fa-angle-left"></i></a></li> -->
            <?php
            for ($p = 0; $p < $page; $p++) {
                echo '<li class="page-item"><a class="page-link" href="' . base_url('') . 'admin/content/' . $p + 1. . '">' . $p + 1. . '</a></li>';
            }
            ?>
            <!-- <li class="page-item"><p class="page-link">...</p></li> -->
            <!-- <li class="page-item"><a class="page-link" href="><i class="fas fa-angle-right"></i></p></li> -->
        </ul>
        <p class="text-center">1/<?= $page ?></p>
    </nav>
</section>
</section>
<?php include('footer_admin.php'); ?>