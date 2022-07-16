<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/admin/logo/logo.png" type="image/x-icon">
    <base href="<?php echo base_url(); ?>">
    <!-- * Boostrap  --->
    <link rel="stylesheet" href="assets/css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos-animasiton-scroll/dist/aos.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-slide.css">
    <link rel="stylesheet" href="assets/css/admin/style.css">
    <link rel="stylesheet" href="assets/css/admin/responsive.css">
    <!--* JQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<body onload="checkPage()">
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed menu" style="top: 0; left:0; right:0;z-index: 99;">
            <div class="container-fluid" style="z-index: 9;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">CMS</a> -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="manager/home"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="manager/account"><i class="fas fa-user"></i> Tài Khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="manager/content"><i class="fas fa-newspaper"></i> Bài Viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="manager/shop"><i class="fab fa-shopify"></i> Sản Phẩm</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <i class="fas fa-cog"></i> Modul <i class="fas fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark" href="manager/modul/product_group">Nhóm Sản Phẩm</a></li>
                                <li><a class="dropdown-item text-dark" href="manager/modul/content_group">Nhóm Bài Viết</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="manager/help"><i class="fas fa-life-ring"></i> Hỗ Trợ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="manager/bug"><i class="fas fa-bug"></i> Truy Vết</a>
                        </li>
                    </ul>
                </div>
                <nav class="float-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-while dropdown-toggle ps-0" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-cog"></i> Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div class="btn btn-white dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Đổi mật khẩu <i class="fas fa-key"></i>
                                </div>
                            </li>
                            <li><a class="dropdown-item" href="admin/logout">Thoát <i class="fas fa-sign-out-alt"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <!--modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thay Đổi Mật Khẩu Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo base_url(''); ?>admin/edit_password_admin" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div>Mật khẩu mới</div>
                            <div class="input-group flex-nowrap">
                                <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu admin mới" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                            <input type="submit" class="btn btn-primary" value="Lưu">
                        </div>
                    </form>
                </div>
            </div>
        </div>