<style>
    .tombol {
        text-transform: uppercase;
        border-radius: 30px;
    }
</style>
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <h2>Sarana Sekolah</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-pills nav-justified ml-auto">
                            <li class="nav-item mr-2">
                                <a class="btn text-black tombol" href="#" data-target="#login" data-toggle="pill">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary tombol" href="#" data-target="#register" data-toggle="pill">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row">

                <div class=" col-xl-4 col-lg-6 col-md-9 ml-5">

                    <div class="card bg-transparent o-hidden border-0 tab-content p-3">
                        <div class="card-body p-0 tab-pane active show" id="login">
                            <div class=" row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">LOGIN!</h1>
                                        </div>
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <form action="<?= base_url('Auth/proses_login'); ?>" method="POST" class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" placeholder="Enter Your Email..." name="email" value="<?= set_value('email') ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" placeholder="Enter Your Password..." name="password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                            <hr>
                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 tab-pane" id="register">
                            <div class=" row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="card text-center">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs nav-pill nav-justified ml-auto">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-target="#daftar-siswa" data-toggle="pill">Siswa</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-target="#daftar-gurubk" data-toggle="pill">Guru BK</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <form class="user tab-pane active show" id="daftar-siswa">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox small">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                                <label class="custom-control-label" for="customCheck">Siswa</label>
                                                            </div>
                                                        </div>
                                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                                            Daftar
                                                        </a>
                                                        <hr>
                                                    </form>
                                                    <form class="user tab-pane" id="daftar-gurubk">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox small">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                                <label class="custom-control-label" for="customCheck">Guru BK</label>
                                                            </div>
                                                        </div>
                                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                                            Daftar
                                                        </a>
                                                        <hr>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 mt-5" style="margin-left:150px">
                    <img src="<?= base_url('assets/images/mac.png') ?>" class="img-fluid d-block w-100">
                </div>
            </div>
        </div>
    </div>
</div>