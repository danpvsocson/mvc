<?php include('nav_admin.php'); ?>
<title>Account Manager</title>
<section class=" container">
    <h2 class=" text-center">Thêm Tài Khoản</h2>
    <hr>
    <form class="row g-3 form-add" action="<?php echo base_url(''); ?>admin/add_account" method="post" enctype="multipart/form-data" autocomplete="on">
        <p class="mb-0">Hãy điền đủ mục (<label class="text-danger">*</label>)</p>
        <div class="col-md-3" style="display: flex;align-items: center;justify-content:center;">
            <label for="input-img" class="preview" style="cursor: pointer;">
                <div class="decoration">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>Chọn Ảnh</span>
                </div>
                <!-- <img src="https://storage.ws.pho.to/s2/fbeee2bfe661a7dd584623fcbb173892eee4cc98_m.jpg" alt=""> -->
            </label>
            <input type="file" hidden id="input-img" name="avatar" />
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
                        <input type="text" class="form-control" name="hoten" required placeholder=" " aria-label="fullname" aria-describedby="basic-addon1">
                        <label for="" class="input-name">Họ Và Tên</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-4">
                        <input type="email" class="form-control" name="email" required placeholder=" " aria-label="email" aria-describedby="basic-addon1">
                        <label for="" class="input-name">Email</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-4">
                        <input type="number" class="form-control" name="sdt" required placeholder=" " aria-label="phone" aria-describedby="basic-addon1">
                        <label for="" class="input-name">Số Điện Thoại</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-4">
                        <input type="date" class="form-control" name="ngaysinh" placeholder=" " aria-label="address" aria-describedby="basic-addon1" id="date">
                        <label for="date" class="input-name">Ngày Sinh</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" name="diachi" required placeholder=" " aria-label="address" aria-describedby="basic-addon1">
                        <label for="" class="input-name">Địa Chỉ</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-4">
                        <select class="form-select " name="gioitinh" aria-label="Default select example">
                            <option selected value="">Giới Tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" name="username" required placeholder=" " aria-label="username" aria-describedby="basic-addon1">
                        <label for="" class="input-name">Tài Khoản</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-4">

                        <input type="password" class="form-control" name="password" required id="password-field" placeholder=" " aria-label="password" aria-describedby="basic-addon1">
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
                <div class="col-md-2">
                    <div class="input-group mb-4">
                        <select id="status" onchange="change()" name="trangthai" class="form-select text-danger" aria-label="Default select example">
                            <option value="1" class=" text-success">Enabled</option>
                            <option value="2" selected class=" text-danger">Disabled</option>
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
            <input type="submit" class="btn btn-primary me-2 btn_thong_bao" name="btnluu" href="<?php echo base_url(''); ?>admin/add_account" value="Thêm">
            <a href="<?php echo base_url(''); ?>admin/account" type="button" class="btn btn-danger">Hủy</a>
        </div>
        
        <div class="col-12 d-flex justify-content-center">
            <?php
            if ($this->session->flashdata("error")) {
                echo $this->session->flashdata("error");
            }
            if ($this->session->flashdata("success")) {
                echo $this->session->flashdata("success");
            }
            ?>
        </div>

    </form>

</section>
<?php include('footer_admin.php'); ?>