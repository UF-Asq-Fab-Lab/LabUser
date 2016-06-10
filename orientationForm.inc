<?php
if(!$pn = $user->get('lab_user_phone_number')){
  $pn = '';
}
?>
<form id='orientation' class='LabUserForm' action='./' method='post'>
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
