<div id='account-control'>
  <?php
    $data = wire('modules')->getModuleConfigData('LabUser');
    $accountPage = wire('pages')->get($data['account_page_id']);
    $user = wire('user');
    if($user->isLoggedIn() ){
   ?>

  <p id='account-name'>
    <i class='fa fa-user'></i> <?php echo $user->lab_user_first_name." ".$user->lab_user_last_name ?> |
    <a id='account-link' href='<?php echo $accountPage->httpUrl ?>'>Account</a> |
    <a id='logout-link' href='<?php echo wire('page')->httpUrl ?>?logout=1'><i class='fa fa-sign-out'></i>Log-out</a>
  </p>

  <?php
    } else {
  ?>
  <p id='login-register'>
    <a id='account-link' href='<?php echo $accountPage->httpUrl ?>'><i class='fa fa-sign-in'></i>Log-In</a>
  </p>
<?php } ?>
</div>
