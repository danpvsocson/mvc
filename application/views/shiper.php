<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Shiper</title>
    <?php include('header.php'); ?>
</head>

<body>
    <main class="container">

        <!-- <form class="form row" method="post" action="<?php echo base_url(''); ?>index.php/shiper/addshiper" enctype="multipart/form-data"> -->
        <div class="form row">
            <div class="txttitle">
                <h3 class="text-center text-primary pt-3 txttitle">Thêm Shiper Mới</h3>
                <hr class=" text-danger">
            </div>
            <div class="mb-3 col-md-6">
                <span>Tên</span>
                <input type="text" class="form-control" placeholder="Nhập tên" name="hoten" id="hoten">
            </div>
            <div class=" mb-3 col-md-3">
                <span>SĐT</span>
                <input type="number" class="form-control" placeholder="Nhập SDT" name="sdt" id="sdt">
            </div>
            <div class=" mb-3 col-md-1">
                <span>Tuổi</span>
                <input type="number" class="form-control" placeholder="Tuổi" name="tuoi" id="tuoi">
            </div>
            <div class=" mb-3 col-md-2">
                <span>Số đơn hàng</span>
                <input type="number" class="form-control" placeholder="Nhập số đơn" name="sodonhang" id="sodonhang">
            </div>
            <div class=" mb-3 col-md-6">
                <span>Link FaceBook</span>
                <input type="text" class="form-control" placeholder="https://www.facebook.com" name="linkfb" id="linkfb">
            </div>
            <div class=" mb-3 col-md-6">
                <span>Chọn Ảnh Đại Diện</span>
                <input type="file" class="form-control" name="avatar" id="avatar">
            </div>
            <div class="d-flex justify-content-center btnadd">
                <!-- <input type="submit" value="Thêm" class="btn btn-primary mb-2"> -->
                <button class="btn btn-primary mb-2" id="add">Thêm</button>
            </div>
        </div>
        <!-- </form> -->
        <section class="">
            <h2 class="text-center ">Danh Sách Shiper</h2>
            <hr>
            <div class="mb-4 item-shiper">
                <?php foreach ($datashow as $key => $value): ?>
                    <div class="card">
                        <img class="avatarShiper" src="<?= $value['avatar']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <input type="hidden" name="id" id="" value="<?= $value['id']?>">
                            <h5 class="card-title"><?= $value['hoten']?></h5>
                            <p class="card-text"><?= $value['tuoi']?> tuổi</p>
                            <p class="card-text m-0">SDT : <?= $value['sdt']?></p>
                            <p class="card-text m-0">Số đơn : <?= $value['sodonhang']?></p>
                            <p class="card-text fs-1 mb-1"><a href="<?= $value['linkfb']?>"><i class="fab fa-facebook-square"></i></a></p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary me-2">Sửa</a>
                                <a href="#" class="btn btn-danger">Xóa</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
        <script>
            $('#add').click(function(event) {
                $.ajax({
                        type: "post",
                        url: "shiper/addbyajax",
                        data: {
                            hoten: $('#hoten').val(),
                            tuoi: $('#tuoi').val(),
                            sdt: $('#sdt').val(),
                            sodonhang: $('#sodonhang').val(),
                            linkfb: $('#linkfb').val(),
                            avatar: $('#avatar').val()
                        },
                        dataType: "json",
                        success: function() {}
                    })
                    .always(function() {
                        data = '<div class="card">';
                        data += '<img class="avatarShiper" src="' + $('#avatar').val() + '" class="card-img-top" alt="Name Avatar">';
                        data += '<div class="card-body">';
                        data += '<h5 class="card-title">' + $('#hoten').val() + '</h5>';
                        data += '<p class="card-text">18 tuổi</p>';
                        data += '<p class="card-text m-0">SDT : ' + $('#sdt').val() + '</p>';
                        data += '<p class="card-text m-0">Số đơn : ' + $('#sodonhang').val() + '</p>';
                        data += '<p class="card-text fs-1 mb-1"><a href="' + $('#linkfb').val() + '"><i class="fab fa-facebook-square"></i></a></p>';
                        data += '<div class="d-flex justify-content-center">';
                        data += '<a href="#" class="btn btn-primary me-2">Sửa</a>';
                        data += '<a href="#" class="btn btn-danger">Xóa</a>';
                        $('.item-shiper').append(data);
                        $('#hoten').val('');
                        $('#tuoi').val('');
                        $('#sdt').val('');
                        $('#sodonhang').val('');
                        $('#linkfb').val('');
                        $('#avatar').val('');
                    })
            });
        </script>

    </main>
    <?php include('footer.php'); ?>
</body>

</html>