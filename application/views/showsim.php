<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dữ Liệu Sim</title>
    <?php include('header.php'); ?>
</head>
<body>
    <main>
        <div class="container">
            <h2 class="text-center">Danh Sách Sim</h2>
            <div class="d-flex justify-content-center"><a href="addsim" class="btn btn-primary">Thêm Sim</a></div>
            <hr>
            <div class="row">
                <?php foreach ($datashow as $key => $value): ?>
                    <div class="card col-md-3 mx-3 mb-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số : <?= $value['so']?></h5>
                            <p class="card-text">Giá : <?= $value['gia']?> đ</p>
                            <a href="editsim/<?= $value['so']?>" class="btn btn-primary">Sửa</a>
                            <a href="xoasim/<?= $value['so']?>" class="btn btn-danger">Xóa</a>
                        </div>
                    </div>
                    
                    
                <?php endforeach ?>

            </div>
            
        </div>


    </main>
    <?php include('footer.php'); ?>
</body>

</html>


