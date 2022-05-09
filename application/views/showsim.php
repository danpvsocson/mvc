
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
                            <a href="editsim" class="btn btn-primary">Sửa</a>
                        </div>
                    </div>
                    
                    
                <?php endforeach ?>

            </div>
            
        </div>


    </main>



