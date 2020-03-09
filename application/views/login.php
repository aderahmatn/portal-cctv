<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portal CCTV - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url().'assets/vendor/fontawesome/css/all.min.css'?>" rel="stylesheet" type="text/css">
  <link href="<?=base_url().'assets/css/font.css'?>" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="<?=base_url().'assets/css/sb-admin-2.css'?>" rel="stylesheet">

</head>

<body class="bg-gray-900">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h1 text-gray-900 mb-2"><i class="fad fa-cctv"></i></61>
                    <h1 class="h4 text-gray-900 mb-4"><strong>PORTAL CCTV</strong></h1>
                  </div>
                  <hr>
                  <form class="user" action="../function/act_login.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="funame" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="fpass" placeholder="Password" autocomplete="off">
                    </div>
                    <button class="btn btn-secondary btn-user btn-block mb-3" type="submit">LOGIN</button>
                    
                    <hr>
                    <div class="text-center">
                      <p class="text-gray-400 text-xs">Copyright &copy; Portal CCTV v.2.0 - <a href="https://github.com/aderahmatn" target="_blank">ADRN</a> <?=date('Y') ?></p>
                  </div>
                  </form>
                  <?php 
                  if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                      echo '<div class="alert alert-danger">
                      Username atau Password salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button> </div>';
                    }else if($_GET['pesan'] == "logout"){
                      echo '<div class="alert alert-success">
                      Anda sudah Log Out <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button> </div>';
                    }else if($_GET['pesan'] == "logindulu"){
                      echo '<div class="alert alert-danger">
                      Anda harus login terlebih dahulu! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button> </div>';
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?=base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url().'assets/js/sb-admin-2.min.js'?>"></script>

</body>

</html>
