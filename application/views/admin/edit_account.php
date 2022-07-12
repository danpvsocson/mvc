<?php

use function PHPSTORM_META\type;

include('nav_admin.php'); ?>
<title>Account Manager</title>
<section class=" container" data-set="account" >
    <h2 class=" text-center">Sửa Tài Khoản</h2>
    <hr>
    <?php foreach ($accountshow as $key => $data) : ?>
        <form class="row g-3 form-add" action="<?php echo base_url(''); ?>manager/account/edit_account" method="post" enctype="multipart/form-data" autocomplete="on">
            <p class="mb-0">Hãy điền đủ mục (<label class="text-danger">*</label>)</p>
            <input type="hidden" value="<?= $data['id'] ?>" name="id">
            <div class="col-md-3" style="display: flex;align-items: center;justify-content:center;">
                <label for="input-img" class="preview" style="cursor: pointer;">
                    <div class="decoration">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span>Chọn Ảnh</span>
                    </div>
                    <img src="<?= $data['avatar'] ?>" alt="">
                </label>
                <input type="file" hidden id="input-img" name="avatar" />
                <input type="text" hidden name="avatar_old" value="<?= $data['avatar'] ?>" />
                <script>
                    const inputImg = document.querySelector('#input-img')

                    inputImg.addEventListener('change', (e) => {
                        let file = e.target.files[0]
                        if (!file) return
                        let img = document.createElement('img')
                        img.src = URL.createObjectURL(file)
                        document.querySelector('.preview').appendChild(img)
                    })
                </script>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="hoten" value="<?= $data['hoten'] ?>" placeholder=" " aria-label="fullname" aria-describedby="basic-addon1">
                            <label for="" class="input-name">Họ Và Tên</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-4">
                            <input type="email" class="form-control" name="email" placeholder=" " aria-label="email" aria-describedby="basic-addon1" value="<?= $data['email'] ?>">
                            <label for="" class="input-name">Email</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-4">
                            <input type="number" class="form-control" name="sdt" placeholder=" " aria-label="phone" aria-describedby="basic-addon1" value="<?= $data['sdt'] ?>">
                            <label for="" class="input-name">Số Điện Thoại</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-4">
                            <input type="date" class="form-control" name="ngaysinh" placeholder=" " aria-label="address" aria-describedby="basic-addon1" id="date" value="<?= $data['ngaysinh'] ?>" style="cursor: pointer;">
                            <label for="date" class="input-name">Ngày Sinh</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="diachi" placeholder=" " aria-label="address" aria-describedby="basic-addon1" value="<?= $data['diachi'] ?>">
                            <label for="" class="input-name">Địa Chỉ</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-4">
                            <select class="form-select " aria-label="Default select example" name="gioitinh">
                                <?php
                                switch ($data['gioitinh']) {
                                    case 1:
                                        echo ' <option selected value="1">Nam</option>
                                        <option value="2">Nữ</option>';
                                        break;
                                    case 2:
                                        echo '<option selected value="2">Nữ</option>
                                        <option value="1">Nam</option>';
                                        break;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="username" placeholder=" " aria-label="username" aria-describedby="basic-addon1" value="<?= $data['username'] ?>">
                            <label for="" class="input-name">Tài Khoản</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group mb-4">

                            <input type="password" class="form-control" name="password" id="password-field" placeholder=" " aria-label="password" aria-describedby="basic-addon1" value="<?= $data['password'] ?>">
                            <label for="" class="input-name">Mật Khẩu</label>
                            <i class="fas fa-eye-slash position-absolute top-50 end-0 translate-middle-y pe-2 field-icon toggle-password" toggle="#password-field" style="cursor: pointer; z-index: 9;" id="togglePassword"></i>
                            <script>
                                $(".toggle-password").click(function() {

                                    $(this).toggleClass("fa-eye fa-eye-slash");
                                    var input = $($(this).attr("toggle"));
                                    if (input.attr("type") == "password") {
                                        input.attr("type", "text");
                                    } else {
                                        input.attr("type", "password");
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-md-2 stt">
                        <div class="input-group mb-4">
                            <select id="status" onchange="change()" class="form-select 
                                <?php
                                switch ($data['trangthai']) {
                                    case 1:
                                        echo 'text-success';
                                        break;
                                    case 2:
                                        echo 'text-danger';
                                        break;
                                } ?>" aria-label="Default select example" name="trangthai">
                                <?php
                                switch ($data['trangthai']) {
                                    case 1:
                                        echo ' <option value="1" select class=" text-success">Enabled</option>
                                <option value="2" class=" text-danger">Disabled</option>';
                                        break;
                                    case 2:
                                        echo ' <option value="2" class=" text-danger" select>Disabled</option>
                                <option value="1" class=" text-success">Enabled</option>';
                                        break;
                                    default:
                                        echo 'Error';
                                }
                                ?>
                            </select>
                            <script>
                                function change() {
                                    var status = document.querySelector("#status");
                                    if (status.value == 1) {
                                        status.classList.add('text-success');
                                        status.classList.remove('text-danger');
                                    }
                                    if (status.value == 2) {
                                        status.classList.remove('text-success')
                                        status.classList.add('text-danger')
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary me-2" href="<?php echo base_url(''); ?>manager/account/edit_account" value="Lưu">
                <a href="<?php echo base_url(''); ?>manager/account" type="button" class="btn btn-danger">Hủy</a>
            </div>
            
        </form>
        <?php endforeach ?>
        
</section>
<?php include('footer_admin.php'); ?>