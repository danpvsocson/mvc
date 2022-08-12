<?php include('nav_admin.php'); ?>
<title>Admin Manager</title>
<section class=" container" id="body">

    <h1>Đây là trang chủ admin</h1>
    <div class="col-md-12 input-group">
        <div class="col-md-3" style="display: flex;align-items: center;justify-content:center;">
            <label for="input-img" class="preview" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <!-- <span class="input-group-text" style="height: 30px; background-color: transparent" data-bs-toggle="modal" data-bs-target="#exampleModal1"> -->
                <div class="decoration">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>Chọn Ảnh</span>
                </div>
                <!-- <img src="https://storage.ws.pho.to/s2/fbeee2bfe661a7dd584623fcbb173892eee4cc98_m.jpg" alt=""> -->
            </label>
            <input type="text" hidden id="input-img" name="avatar" />
            <script>
                const inputImg = document.querySelector('#input-img')

                // inputImg.addEventListener('input', (e) => {
                inputImg.onchange = (e) => {
                    let file = e.target.value
                    console.log(e.target.value);
                    if (!file) return

                    let img = document.createElement('img')
                    img.src = file

                    document.querySelector('.preview').appendChild(img)
                }
            </script>
            <!-- <img src="https://localhost/mvc/assets/plugin/filemanager/source/Screenshot%20(1).png" alt=""> -->
        </div>
        <!-- <input type="text" class="form-control" id="link_anh" name="txt_link" placeholder="Chọn ảnh">
        <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-images"></i></span> -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Quản lý File</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" overflowY="auto" height="500px" src="assets/plugin/file/dialog.php?type=0&field_id=input-img&akey=<?= md5(123454321) ?>"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer_admin.php'); ?>