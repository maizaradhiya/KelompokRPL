<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>" />
    <br></br><br></br><br></br>

    <!-- ============================================================================================================ -->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-right">

        <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 text-white bg-dark mb-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-white-900 mb-4">Login Admin</h1>
                                        <p>Halaman Akun Admin WeCan</p>
                                    </div>

                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="POST" action="<?= base_url('Auth/login_admin'); ?>">
                                        <div class="form-group">
                                            <p>Username: </p>
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username..." value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group mb-5">
                                            <p>Password: </p>
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password...">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-info btn-user">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <!-- <a class="small" style="color: mediumturquoise" href="<?= base_url('web/pilih_register'); ?>">Create an Account!</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <body class="bg-gradient-bmth" style="background-size:1920px 1080px; background-image: url('<?= base_url('assets/img/child1.jpg'); ?>')">