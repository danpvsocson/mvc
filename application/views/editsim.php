<form class="container" action="home/themSoSim" method="post" enctype="multipart/form-data">
    <h2 class="text-center">Sửa Sim</h2>
    <hr>
    <div class="input mb-3">
        <div>Số Sim</div>
        <input name="sosim" value="" type="text" class="form-control shadow-none" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nhập Số Sim">
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