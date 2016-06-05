<?php
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

 ?>
