
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/basic_admin/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Dec 2021 17:58:15 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Basic Admin</title>
  <!-- plugins:css -->



  <link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . "node_modules/mdi/css/materialdesignicons.min.css"; ?>">
  <link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . "node_modules/simple-line-icons/css/simple-line-icons.css"; ?>">
  <link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . "node_modules/flag-icon-css/css/flag-icon.min.css"; ?>">
  <link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . "node_modules/perfect-scrollbar/css/perfect-scrollbar.css"; ?>">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . "css/style.css"; ?>">
  <!-- endinject -->
  <link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . "images/favicon.png"; ?>">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2 class="text-white"><?php echo lang('login_heading');?></h2>
              <h4 class="font-weight-light text-white"><?php echo lang('login_subheading');?></h4>
              <form class="pt-5">
              <div id="infoMessage"><?php echo $message;?></div>
              <?php echo form_open("auth/login");?>
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo lang('login_identity_label', 'identity');?></label>
                    <?php echo form_input($identity); ?>
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="mt-5">
                    <a class="btn btn-block btn-warning btn-lg font-weight-medium" href="../../index-2.html">Login</a>
                  </div>
                  <div class="mt-3 text-center">
                    <a href="#" class="auth-link text-white">Forgot password?</a>
                  </div>
                </form>
              <?php echo form_close();?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->



  <script src="<?php echo base_url( '/assets/layout/' ) . 'node_modules/jquery/dist/jquery.min.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'node_modules/popper.js/dist/umd/popper.min.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'node_modules/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js' ?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url( '/assets/layout/' ) . 'js/off-canvas.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'js/hoverable-collapse.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'js/misc.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'js/settings.js' ?>"></script>
  <script src="<?php echo base_url( '/assets/layout/' ) . 'js/todolist.js' ?>"></script>

  <!-- endinject -->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/basic_admin/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Dec 2021 17:58:15 GMT -->
</html>
<!--
<!-- 


<h1></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

-->