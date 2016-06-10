<?php
// fields update ===============================================================
$f = $this->wire('fields')->get('ufid');
if($f){

  $f->name = "lab_user_ufid";
  $f->type = "FieldtypeText";
  $f->label = "Lab User Ufid";
  $f->tags = "LabUser";
  $f->save();

}
$f = $this->wire('fields')->get('firstname');
if($f){

  $f->name = "lab_user_first_name";
  $f->type = "FieldtypeText";
  $f->label = "Lab User First Name";
  $f->tags = "LabUser";
  $f->save();

}
$f = $this->wire('fields')->get('lastname');
if($f){

  $f->name = "lab_user_last_name";
  $f->type = "FieldtypeText";
  $f->label = "Lab User Last Name";
  $f->tags = "LabUser";
  $f->save();

}
$f = $this->wire('fields')->get('phone_num');
if($f){

  $f->name = "lab_user_phone_number";
  $f->type = "FieldtypeText";
  $f->label = "Lab User Phone Number";
  $f->tags = "LabUser";
  $f->save();

}
$f = $this->wire('fields')->get('expiration_date');
if($f){

  $f->name = "lab_user_expiration_date";
  $f->type = "FieldtypeDatetime";
  $f->set('dateOutputFormat', "m/d/Y H:i:s");
  $f->set('dateInputFormat', "m/d/Y");
  $f->set('timeInputFormat', "H:i:s");
  $f->set('datepicker', 3);
  $f->label = "Lab User Expiration Date";
  $f->tags = "LabUser";
  $f->save();

}

$passKey = $this->wire('fields')->get('passkey');

if($passKey){
  $userfields = wire('templates')->get("name=user")->fields;
  $userfields->remove("name=passkey");
  $this->wire('fields')->delete($passKey);
}

// roles update=================================================================
// remove tmpuser role from all users
$tmpusers = wire('users')->find('role=tmpuser');
foreach ($tmpusers as $tmpuser) {
  $tmpuser->roles->remove('tmpuser');
}
// delete tmpuser role
$tmpuserRole = $this->wire('roles')->get('tmpuser');
$this->wire('roles')->delete($tmpuserRole);
// create laser-user, cnc-user, and 3dprint-user roles
$laserUserRole = $this->wire('roles')->add('laser-user');
$cncUserRole = $this->wire('roles')->add('cnc-user');
$printUserRole = $this->wire('roles')->add('3dprint-user');

// assign laser-user role to all extant users
// remove user role from all laser-users
$oldUsers = wire('users')->find('role=user');
foreach ($users as $oldUser) {
  $user->roles->add('laser-user');
  $user->roles->remove('user');
}
// delete user role
$userRole = $this->wire('roles')->get('user');
$this->wire('roles')->delete($userRole);

$interns = $this->wire('users')->find('role=intern');
foreach ($interns as $intern) {
  $intern->roles->remove('intern');
}

$assts = $this->wire('users')->find('role=assitant');
foreach ($assts as $asst) {
  $asst->roles->remove('assistant');
}
$internRole = $this->wire('roles')->get('intern');
$asstRole = $this->wire('roles')->get('assistant');
$this->wire('roles')->delete($internRole);
$this->wire('roles')->delete($asstRole);

 ?>
