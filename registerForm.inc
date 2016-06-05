<form id='register' class='LabUserForm' action='./' method='post'>

  <div class='row'>
    <div class='six columns'>
      <label for='firstname'>First Name</label>
      <input class='u-full-width' type='text' id='firstname' name='firstname' required='1' placeholder='' value=''></input>
    </div>
    <div class='six columns'>
      <label for='lastname'>Last Name</label>
      <input class='u-full-width' type='text' id='lastname' name='lastname' required='1' placeholder='' value=''></input>
    </div>
  </div>

  <div class='row'>
    <div class='four columns'>
      <label for='username'>Username</label>
      <input class='u-full-width' type='text' id='user' name='user' required='1' placeholder='' value=''></input>
    </div>
    <div class='four columns'>
      <label for='email'>Email Address</label>
      <input class='u-full-width' type='email' id='email' name='email' required='1' placeholder='' value=''></input>
    </div>
    <div class='four columns'>
      <label for='confirm_email'>Confirm Email</label>
      <input class='u-full-width' type='email' id='confirm_email' name='confirm_email' required='1' placeholder='' value=''></input>
    </div>
  </div>

  <div class='row'>
    <div class='six columns'>
      <label for='ufid'>UFID Number</label>
      <input class='u-full-width' type='text' id='ufid' name='ufid' required='1' placeholder='########' value=''></input>
    </div>
    <div class='six columns'>
      <label for='phone_num'>Phone Number</label>
      <input class='u-full-width' type='text' id='phone_num' name='phone_num' required='1' placeholder='###-###-####' value=''></input>
    </div>
  </div>

  <div class='row'>
    <div class='six columns'>
      <label for='pass'>Password</label>
      <input class='u-full-width' type='password' id='pass' name='pass' required='1' placeholder='' value=''></input>
    </div>
    <div class='six columns'>
      <label for='confirm_pass'>Confirm Password</label>
      <input class='u-full-width' type='password' id='confirm_pass' name='confirm_pass' required='1' placeholder='' value=''></input>
    </div>
  </div>

  <div class='row'>
    <div class='twelve columns'>
      <input class='' type='submit' id='register' name='register' required='0' placeholder='' value='Register'></input>
    </div>
  </div>

</form>
