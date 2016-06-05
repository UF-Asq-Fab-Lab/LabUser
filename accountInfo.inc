<div id='account-control'>
  <?php
    $data = wire('modules')->getModuleConfigData('LabUser');
    $accountPage = wire('pages')->get($data['account_page_id']);
    $loginPage = wire('pages')->get($data['login_page_id']);
    $registerPage = wire('pages')->get($data['register_page_id']);
    $resetPage = wire('pages')->get($data['reset_page_id']);
    if(wire('user')->isLoggedIn() ){
   ?>

  <p id='account-name'>
    <i class='fa fa-user'></i> <?php echo wire('user')->name ?> |
    <a id='account-link' href='<?php echo $accountPage->httpUrl ?>'>Account</a> |
    <a id='logout-link' href='<?php echo wire('page')->httpUrl ?>?logout=1'><i class='fa fa-sign-out'></i>Log-out</a>
  </p>

  <?php
    } else {
  ?>
  <p id='login-register'>
    <a id='login-link' href='<?php echo $loginPage->url ?>'><i class='fa fa-sign-in'></i>Log-In</a> |
    <a id='register-link' href='<?php echo $registerPage->url ?>'>Register</a> |
    <a id='forgot-password-link' href='<?php echo $resetPage->url ?>'>Forgot Password?</a>
  </p>
<?php } ?>
</div>
