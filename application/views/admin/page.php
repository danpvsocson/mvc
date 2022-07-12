<section class=" d-flex container justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php 
                // if()
            ?>
            <li class="page-item"><a class="page-link" href="<?php echo base_url('');?>admin/account/page/<?= $p-1 ?>"><i class="fas fa-angle-left"></i></a></li>
            <?php 
                for ($p=0; $p < $page ; $p++) { 
            ?>
                    <li class="page-item"><a class="page-link" href="<?php echo base_url('');?>admin/account/page/<?= $p+1 ?>"><?= $p+1 ?></a></li>
                    
                <?php 
                }
                ?>
                <li class="page-item"><p class="page-link">...</p></li>
                <li class="page-item"><a class="page-link" href="<?php echo base_url('');?>admin/account/page/<?= $page?>"><?= $page?></a></li>

            <li class="page-item"><a class="page-link" href="<?php echo base_url('');?>admin/account/page/<?= $p+1 ?>"><i class="fas fa-angle-right"></i></a></li>
        </ul>
        <p class="text-center">1/<?=$page?></p>
    </nav>
</section>