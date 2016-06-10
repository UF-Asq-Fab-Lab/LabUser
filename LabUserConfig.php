<?php
class LabUserConfig extends ModuleConfig {
  public function __construct() {
    $this->add(
    array (
      'account_page_id' => array(
       'type' => 'InputfieldInteger',
       'value' => 0,
       'label' => 'Account Page ID (should be filled automatically, but you may need to change it if you move the account page).',
        ),
      'laser_user_lifetime' => array(
        'type' => 'InputfieldInteger',
        'value' => 90,
        'label' => 'Lifetime of users in days. Users older than their lifetime will be deleted.'
      ),
      'cnc_user_lifetime' => array(
        'type' => 'InputfieldInteger',
        'value' => 90,
        'label' => 'Lifetime of users in days. Users older than their lifetime will be deleted.'
      ),
      '3dprint_user_lifetime' => array(
        'type' => 'InputfieldInteger',
        'value' => 90,
        'label' => 'Lifetime of users in days. Users older than their lifetime will be deleted.'
      ),
      'orientation_code' => array(
        'type' => 'InputfieldText',
        'value' => 'code',
        'label' => 'Set the code that users have to input to prove they completed an orientation. Change this every orientation session!'
      )
    ));
	}
}
?>
