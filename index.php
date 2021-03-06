<?php
    require "config.php";
?>
<html lang="vi">
    <head>
        <title>Hello, Welcome to levandat.tech!</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=BOOTSTRAP_FOLDER_PATH."/css/bootstrap.min.css?v=".time()?>" />
        <link rel="stylesheet" href="<?=ASSET_FOLDER_PATH."/css/main.css?v=".time()?>" />
        <script type="text/javascript" src="<?=BOOTSTRAP_FOLDER_PATH."/js/bootstrap.min.js?v=".time()?>"></script>
        <script type="text/javascript" src="<?=ASSET_FOLDER_PATH."/js/load.js?v=".time()?>"></script>
        <script src="https://kit.fontawesome.com/805c912558.js" crossorigin="anonymous"></script>
        <script src="<?=ASSET_FOLDER_PATH."/js/jquery.min.js"?>" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?=ASSET_FOLDER_PATH."/img/levandat_main_logo.png"?>" alt="" width="24" height="24" class="d-inline-block align-text-top" style="border-radius: 25%">    
                    <b>levandat.tech</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://github.com/lvdat/levandat-main-site" target="_blank"><i class="fas fa-code-branch"></i> main <i class="fas fa-xs fa-external-link-alt"></i></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    
        <div class="container">
            <div class="row mt-2">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fas fa-circle-notch fa-spin"></i> D??? li???u trong c??c b???ng v?? s??? li???u <b class="text-success">Ping</b> ?????n c??c m??y ch??? s??? ???????c c???p nh???t t??? ?????ng sau m???i <b>20 gi??y</b>!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" style="font-weight: bold" aria-current="page">PRODUCT HOSTED BY LEVANDAT</li>
                        </ol>
                    </nav>
                    <div class="table-responsive">
                        <table class="table service">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                <th scope="col" style="width:2%">#</th>
                                <th scope="col" style="width:16%">T??n</th>
                                <th scope="col" style="width:40%">M?? t???</th>
                                <th scope="col" style="width:20%">URL</th>
                                <th scope="col" style="width:12%">T??nh tr???ng</th>
                                <th scope="col" style="width:10%">Ping</th>
                                </tr>
                            </thead>
                            <tbody id="server-running">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" style="font-weight: bold" aria-current="page">TR???NG TH??I M??Y CH??? LEVANDATSMP</li>
                        </ol>
                    </nav>
                    <div class="table-responsive">
                        <table class="table service">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                <th scope="col" style="width:2%">#</th>
                                <th scope="col" style="width:16%">T??n c???m</th>
                                <th scope="col" style="width:40%">M?? t???</th>
                                <th scope="col" style="width:20%">Ch??? ?????</th>
                                <th scope="col" style="width:12%">T??nh tr???ng</th>
                                <th scope="col" style="width:10%">Ping</th>
                                </tr>
                            </thead>
                            <tbody id="levandatsmp-server">
                                
                            </tbody>
                        </table>
                        <div class="alert alert-dark" role="alert">
                            Hi???n t???i levandatSMP v???n ??ang ???????c x??y d???ng cho season m???i, h??y ?????i trong th???i gian s???p t???i ????? ????n ch??? ??i???u b???t ng??? nh??!
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="footer">
    levandat.tech, 2022 ?? levandat<br/>
    </div>

    <script type="text/javascript">
        // Data load javascript.
        load_service();
        setInterval(load_service, 20000);
    </script>
    </body>
</html>