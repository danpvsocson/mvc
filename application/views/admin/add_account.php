<?php include('nav_admin.php'); ?>
<title>Account Manager</title>
<section class=" container">
    <h2 class=" text-center">Thêm Tài Khoản</h2>
    <hr>
    <form class="row g-3" action="<?php echo base_url(''); ?>admin/add_account" method="post" enctype="multipart/form-data" autocomplete="on">
        <p class="mb-0">Hãy điền đủ mục (<label class="text-danger">*</label>)</p>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Họ Và Tên</label>
                <input type="text" class="form-control" name="hoten" placeholder="Nhập Họ Và Tên" aria-label="fullname" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập Email" aria-label="email" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Địa Chỉ</label>
                <input type="text" class="form-control" name="diachi" placeholder="Nhập Địa Chỉ" aria-label="address" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Tài Khoản</label>
                <input type="text" class="form-control" name="username" placeholder="Nhập Tên Đăng Nhập" aria-label="username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Mật Khẩu</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập Mật Khẩu" aria-label="password" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Số Điện Thoại</label>
                <input type="number" class="form-control" name="sdt" placeholder="Nhập Số Điện Thoại" aria-label="phone" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-2" id="gioitinh">
            <select class="form-select gioitinh" aria-label="Default select example" name="gioitinh">
                <option value="0">Giới Tính</option>
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div class="col-md-5" id="avatar">
            <div class="input-group mb-3">
                <input type="file" name="avatar" id="img" style="display:none;" />
                <label for="img" class="input-group-text" id="basic-addon1">Chọn Ảnh Đại Diện</label>
            </div>

        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="trangthai">
                <label class="form-check-label" for="gridCheck">
                    Kích hoạt
                </label>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a type="submit" class="btn btn-primary me-2" name="btnluu" href="<?php echo base_url(''); ?>admin/add_account">Lưu</a>
            <a href="<?php echo base_url(''); ?>admin/account" type="button" class="btn btn-danger">Hủy</a>
        </div>
    </form>
</section>
<?php include('footer_admin.php'); ?>