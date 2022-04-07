<?php
    require "config.php";
?>
<html lang="vi">
    <head>
        <title>Hello, Welcome to levandat.tech!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=BOOTSTRAP_FOLDER_PATH."/css/bootstrap.min.css?v=".time()?>" />
        <script type="text/javascript" src="<?=BOOTSTRAP_FOLDER_PATH."/js/bootstrap.min.js?v=".time()?>"></script>
        <script src="https://kit.fontawesome.com/805c912558.js" crossorigin="anonymous"></script>
        <script src="<?=ASSET_FOLDER_PATH."/js/jquery.min.js"?>" crossorigin="anonymous"></script>
    </head>
    <body style="padding-top: 4.2em">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?=ASSET_FOLDER_PATH."/img/levandat_main_logo.png"?>" alt="" width="24" height="24" class="d-inline-block align-text-top" style="border-radius: 25%">    
                    <b>levandat x CTU.UTC</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" target="_blank" href="http://status.levandat.tech"><i class="fas fa-server"></i> Trạng thái server <i class="fas fa-xs fa-external-link-alt"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="https://github.com/lvdat/levandat-main-site" target="_blank"><i class="fab fa-github"></i> Github <i class="fas fa-xs fa-external-link-alt"></i></a>
                    </li>
                </ul>

                </div>
            </div>
        </nav>
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2>Cảm ơn vì đã đến đây, giờ bạn muốn tìm gì?</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-xs-12 col-md-8">

                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <i class="fas fa-list"></i> <b>Dịch vụ đang chạy</b>
                        </div>
                        <div class="card-body">
                            <div class="text-center"><h2><i class="fas fa-circle-notch fa-spin"></i> Đang tải...</h2></div>    

                        </div>
                    </div>


                </div>
                <div class="col-xs-12 col-md-4">
                    test
                </div>
            </div>
        </div>

    </body>
</html>