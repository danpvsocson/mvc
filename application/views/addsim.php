<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sim</title>
    <?php include('header.php'); ?>
</head>

<body>
    <main>
        <form class="container" action="themsosim" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Thêm Sim Mới</h2>
            <hr>
            <div class="input mb-3">
                <div>Số Sim</div>
                <input name="sosim" type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nhập Số Sim">
            </div>
            <div class="input mb-3">
                <div>Giá Sim</div>
                <input name="giatien" placeholder="Nhập Giá Sim" type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center me-3"> <input type="submit" value="Thêm" class="btn btn-success"></div>
                <div><a href="./" class="btn btn-danger">Hủy</a></div>
            </div>
        </form>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>