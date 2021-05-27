<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>" />
    <br></br><br></br><br></br>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto text-white bg-dark mb-3">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-white-900 mb-4">Buat Akun!</h1>
                                <p> Daftar sebagai:</p>
                            </div>
                            &nbsp;
                            <!-- <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                <a  href="#" class="fa fa-user-circle-o" style="font-size: 5em; color:white" >Donatur</a>
                              </div>
                              <div class="col-sm-6">
                                <a  href="#" class="fa fa-user-circle" style="font-size: 5em; color:white" ></a>
                                <button href="#" class="btn"><i class="fa fa-home"></i> Home</button>
                              </div>
                            </div> -->
                            <div class="row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="text-center">
                                  <label>Donatur</label><br></br>
                                  <a  href="<?= base_url('Auth/regist_donatur'); ?>" class="fa fa-user-circle-o" style="font-size: 3em; color:white" ></a>
                                  <!-- <a class="fa fa-user-circle-o" style="font-size: 3em; color:white" ></a> -->
                                </div>
                              <hr>
                              </div>
                              <div class="col-sm-6">
                                <div class="text-center">
                                  <label>Penggalang Dana</label><br></br>
                                  <a  href="<?= base_url('Auth/regist_pd'); ?>" class="fa fa-user-circle" style="font-size: 3em; color:white" ></a>
                                </div> 
                              <hr> 
                              </div>
                              </div>
                            <div class="text-center">
                                <a class="small" style="color: mediumturquoise" href="<?= base_url('web/pilih_login'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <body class="bg-gradient-bmth" style="background-size:1920px 1080px; background-image: url('<?= base_url('assets/img/child1.jpg'); ?>')">

    <!-- ============================================================================================================ -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>