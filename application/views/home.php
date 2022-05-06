<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dữ Liệu Sim</title>
    <!-- * Boostrap  --->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/assets/css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/assets/css/aos-animasiton-scroll/dist/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>/assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/swiper-slide.css">
    <!--* JQuery -->
    <script type="text/javascript" src="<?php echo base_url(''); ?>/assets/js/main.js"></script>
    <script src="<?php echo base_url(''); ?>/assets/js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <main>
        <form class="container" action="themSoSim" method="post">
            <h2 class="text-center">Thêm Sim Mới</h2>
            <hr>
            <div class="input mb-3">
                <div >Số Sim</div>
                <input type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nhập Số Sim">
            </div>
            <div class="input mb-3">
                <div >Giá Sim</div>
                <input placeholder="Nhập Giá Sim" type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
           <div class="d-flex justify-content-center"> <input type="submit" value="Thêm" class="btn btn-success"></div>
        </form>
    </main>



    <script type="text/javascript" src="<?php echo base_url(''); ?>/assets/css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assets/css/aos-animasiton-scroll/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>