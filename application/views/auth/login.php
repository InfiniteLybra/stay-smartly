<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stay-Smartly : Stay-Smartly">
    <meta property="og:title" content="Stay-Smartly : Stay-Smartly">
    <meta property="og:description" content="Stay-Smartly : Stay-Smartly">
    <!-- <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png"> -->
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/asset/images/favicon.png">
    <link href="<?= base_url(); ?>/asset/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="post" action="<?= base_url('auth/index'); ?>">
                                        <?php if ($this->session->flashdata('message')) : ?>
                                            <div class="alert alert-danger"><?= $this->session->flashdata('message'); ?></div>
                                        <?php endif; ?>
                                        <?php if ($this->session->flashdata('success')) : ?>
                                            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                                        <?php endif; ?>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" id="username" name="username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <!-- <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div> -->
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="<?= base_url('auth/registration'); ?>">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url(); ?>/asset/vendor/global/global.min.js"></script>
    <script src="<?= base_url(); ?>/asset/js/custom.min.js"></script>
    <script src="<?= base_url(); ?>/asset/js/dlabnav-init.js"></script>
    <!-- <script src="<?= base_url(); ?>/asset/js/styleSwitcher.js"></script> -->
</body>

</html>