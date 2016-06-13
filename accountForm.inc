<?php
if(!$pn = $user->get('lab_user_phone_number')){
  $pn = '';
}
$user = $this->wire('user');
$name = $user->lab_user_first_name." ".$user->lab_user_last_name;
$ufid = $user->lab_user_ufid;
$email = $user->email;
?>
<form id='orientation' class='LabUserForm' action='./' method='post'>
  <div class='row'>
    <div class='four columns'>
      <label>Name</label>
      <p><?php echo $name ?></p>
    </div>
    <div class='four columns'>
      <label>UFID</label>
      <p><?php echo $ufid ?></p>
    </div>
    <div class='four columns'>
      <label>Email Address</label>
      <p><?php echo $email ?></p>
    </div>
  </div>
  <div class='row'>
    <div class='twelve columns'>
      <label for='phone_number'>Phone Number</label>
      <input class='u-full-width' type='text' id='phone_number' name='phone_number' required='1' placeholder='###-###-####' value='<?php echo $pn ?>'></input>
    </div>
  </div>
  <div class='row'>
    <div class='twelve columns'>
      <label for='orientation_code'>Orientation Code</label>
      <input class='u-full-width' type='text' id='orientation_code' name='orientation_code' required='1' placeholder='' value=''></input>
    </div>
  </div>
  <div class='row'>
    <div class='twelve columns'>
      <input class='' type='submit' id='submit_orientation' name='submit_orientation' required='0' placeholder='' value='Send Code'></input>
    </div>
  </div>
</form>
