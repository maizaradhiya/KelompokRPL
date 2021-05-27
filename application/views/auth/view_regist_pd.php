<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>" />
    <br></br><br></br><br></br>

</head>
<!-- ============================================================================================================ -->

<body>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto text-white bg-dark mb-3">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-white-900 mb-4">Create an Account!</h1>
                                <p> Help those in needs.</p>
                            </div>
                            <form method="POST" action="<?php echo base_url('auth/regist_pd')?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <p>Username: </p>
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username..." value="<?= set_value('username') ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Nama Lengkap: </p>
                                    <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap..." value="<?= set_value('nama_lengkap') ?>">
                                    <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Nomor Ponsel: </p>
                                    <input type="text" class="form-control form-control-user" id="nomor_ponsel" name="nomor_ponsel" placeholder="Nomor ponsel..." value="<?= set_value('nomor_ponsel') ?>">
                                    <?= form_error('nomor_ponsel', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Alamat Email: </p>
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email..." value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Nomor KTP: </p>
                                    <input type="text" class="form-control form-control-user" id="nomor_ktp" name="nomor_ktp" placeholder="Nomor ktp..." value="<?= set_value('nomor_ktp') ?>">
                                    <?= form_error('nomor_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Foto KTP: </p>
                                    <input type="file"name="foto_ktp">
                                </div>
                                <p>Password: </p>
                                <div class="form-group row mb-5">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger btn-user">
                                    Register Account
                                </button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" style="color: mediumturquoise" href="<?= base_url('web/pilih_login'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- ============================================================================================================ -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>