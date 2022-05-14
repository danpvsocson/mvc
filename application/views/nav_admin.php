<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">CMS</a> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#" action='<?php echo base_url(''); ?>admin/ok'><i class="fas fa-home"></i> Home</a>
                </li>
                <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tài Khoản
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Q</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li> -->
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="admin/account"><i class="fas fa-user"></i> Tài Khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-newspaper"></i> Bài Viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#"><i class="fab fa-shopify"></i> Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-cog"></i> Modul</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-life-ring"></i> Hỗ Trợ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-bug"></i> Truy Vết</a>
                </li>
            </ul>
        </div>
        <nav class="float-end">
            <div class="btn-group">
                <button type="button" class="btn btn-while dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="btn btn-white dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Đổi mật khẩu
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="admin">Thoát</a></li>
                </ul>
            </div>
        </nav>
    </div>

</nav>