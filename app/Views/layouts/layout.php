<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/de432955b2.js" crossorigin="anonymous"></script>

    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- bootstrap scripts  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!--  sweet alert 2  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        .sidebar{height: 100vh;}
    </style>
</head>
<body>
    <header>
        <div class="container w50 text-center">
            <div class="row">
                <div class="col-md-12 ">
                    <h3 class="">LOGOTIPO</h3>
                </div>
            </div><!-- row text right -->
        </div><!-- container -->
        
    </header>

    <section id="sidebar" class='float-left'>
        <div class="container">
            <div class="row">
                <div class="col-md-3 bg-primary">
                    [SIDEBAR]
                    <div class="avatar">
                        <img src="<?= base_url() ?>/assets/img/avatar1.png" alt="user-avatar">
                        <h3>Fulano de Tal</h3>
                    </div><!-- avatar -->

                    <div class="numbers">
                        [AQUI FICAM OS NÚMEROS]

                    </div><!-- numbers -->

                </div>
                <div class="col-md-8 mt-5">
                    <?= $this->renderSection('content')?>        
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- sidebar -->
    
    
    
    
    <footer>
        <div class="container text-center">
            <hr>
            <p>COPYRIGHT</p>
        </div>
        
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>