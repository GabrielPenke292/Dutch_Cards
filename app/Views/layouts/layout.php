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
    <header class="p-2 mb-5">
        <div class="container w50 text-center">
            <div class="row">
                <div class="col-md-8 logo">
                    <h3 class=""><a href="<?= base_url()?>" >LOGOTIPO</a></h3>
                </div>
                <div class="col-md-4 pt-2">
                    <a href="logout" class="text-white">Logout</a>
                </div>
            </div><!-- row text right -->
        </div><!-- container -->
        
    </header>

    <?= $this->renderSection('content')?>   
    
    
    
    
    <footer>
        <div class="container text-center">
            <hr>
            <p>COPYRIGHT</p>
        </div>
        
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>