<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Sim</title>
    <?php include('header.php'); ?>
</head>

<body>
    <form class="container" action="../updatesim" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Sửa Sim</h2>
        <hr>
         <?php foreach ($datashow as $key => $value): ?>
        <form action="updatesim" method="post" enctype="multipart/form-data">
           
                <div class="input mb-3">
                <input name="id" value="<?= $value['id']?>" type="hidden" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nhập Số Sim">
                </div>
                <div>Số Sim</div>
                <input name="sosim" value="<?= $value['so']?>" type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nhập Số Sim">
                </div>
                <div class="input mb-3">
                    <div>Giá Sim</div>
                    <input name="giatien" value="<?= $value['gia']?>" placeholder="Nhập Giá Sim" type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center me-3"> <input type="submit" value="Lưu" class="btn btn-success"></div>
                <div><a href=".." class="btn btn-danger">Hủy</a></div>
            </div>
        </form>
        <?php endforeach ?>
    </form>
    <?php include('footer.php'); ?>
</body>

</html>