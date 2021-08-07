
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url().'assets/dashboard/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'assets/dashboard/css/sb-admin-2.min.css'?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                            <img src="<?php echo base_url().'assets/dashboard/img/login.png'?>" width="auto" height="350">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
										<?php echo $this->session->flashdata('msg'); ?>
                                    </div>
									 <form class="mt-4" action="<?php echo base_url().'index.php/Login/auth'?>" method="POST">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Username</label>
													<input class="form-control" name="username" type="text" required="" 
														placeholder="enter your username">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<label for="pwd">Password</label>
													<input class="form-control" name="password" type="password" required="" 
														placeholder="enter your password">
												</div>
											</div>
											<div class="col-lg-12 text-center">
												<input type="submit" name="submit" class="btn btn-block btn-primary" value="Sign In">
											</div>
											
										</div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/dashboard/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/dashboard/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/dashboard/js/sb-admin-2.min.js'?>"></script>

</body>

</html>
