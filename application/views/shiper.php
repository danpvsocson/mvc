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
        
        <form class="form row" method="post" action="<?php echo base_url('');?>index.php/shiper/addshiper" enctype="multipart/form-data">
            <h3 class="text-center text-primary pt-3">Thêm Shiper Mới</h3>
            <hr class=" text-danger">
            <div class="mb-3 col-md-6">
                <span>Tên</span>
                <input type="text" class="form-control" placeholder="Nhập tên" name="hoten">
            </div>
            <div class=" mb-3 col-md-3">
                <span>SĐT</span>
                <input type="number" class="form-control" placeholder="Nhập SDT" name="sdt">
            </div>
            <div class=" mb-3 col-md-1">
                <span>Tuổi</span>
                <input type="number" class="form-control" placeholder="Tuổi" name="tuoi">
            </div>
            <div class=" mb-3 col-md-2">
                <span>Số đơn hàng</span>
                <input type="number" class="form-control" placeholder="Nhập số đơn" name="sodonhang">
            </div>
            <div class=" mb-3 col-md-6">
                <span>Link FaceBook</span>
                <input type="text" class="form-control" placeholder="https://www.facebook.com" name="linkfb">
            </div>
            <div class=" mb-3 col-md-6">
                <span>Chọn Ảnh Đại Diện</span>
                <input type="file" class="form-control" name="avatar">
            </div>
            <div class="d-flex justify-content-center btnadd">
                <input type="submit" value="Thêm" class="btn btn-primary mb-2">
            </div>
        </form>
        </form>
        <section class="">
            <h2 class="text-center ">Danh Sách Shiper</h2>
            <hr>
            <div class="mb-4 item-shiper">
                <div class="card">
                    <img class="avatarShiper" src="https://i.ytimg.com/vi/HH1fZ7rx5pQ/maxresdefault.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nguyễn Văn A</h5>
                        <p class="card-text">18 tuổi</p>
                        <p class="card-text m-0">SDT : 0123456789</p>
                        <p class="card-text m-0">Số đơn : 9</p>
                        <p class="card-text fs-1 mb-1"><a href=""><i class="fab fa-facebook-square"></i></a></p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary me-2">Sửa</a>
                            <a href="#" class="btn btn-danger">Xóa</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <?php include('footer.php'); ?>
</body>

</html>