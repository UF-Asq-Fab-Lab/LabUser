<?php
class LabUserConfig extends ModuleConfig {
  public function __construct() {
    $this->add(
    array (
      'login_page_id' => array(
       'type' => 'InputfieldInteger',
       'value' => 0,
       'label' => 'Login Page ID (should be filled automatically, but you may need to change it if you move the login page).',
        ),
      'register_page_id' => array(
       'type' => 'InputfieldInteger',
       'value' => 0,
       'label' => 'Register Page ID (should be filled automatically, but you may need to change it if you move the register page).',
        ),
      'account_page_id' => array(
       'type' => 'InputfieldInteger',
       'value' => 0,
       'label' => 'Account Page ID (should be filled automatically, but you may need to change it if you move the account page).',
        ),
      'reset_page_id' => array(
        'type' => 'InputfieldInteger',
        'value' => 0,
        'label' => 'Password Reset Page ID (should be filled automatically, but you may need to change it if you move the page).'
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
      ),
      'contact_email' => array(
       'type' => 'InputfieldEmail',
       'value' => 'admin@fablab.com',
       'label' => 'Contact email for all user-related communications.',
       ),
      'contact_name' => array(
       'type' => 'InputfieldText',
       'value' => 'Fablab Admin',
       'label' => 'Contact name for all user-related communications.',
       ),
      'register_subject' => array(
       'type' => 'InputfieldText',
       'value' => 'Fablab Registration: Please confirm your email address.',
       'label' => 'Subject line for automated registration emails.',
       ),
      'register_body' => array(
       'type' => 'InputfieldTextarea',
       'value' => "Navigate to the following url to confirm your email address and activate your account! \n[url]",
       'label' => 'Body text for automated registration emails.',
       ),
       'confirm_subject' => array(
        'type' => 'InputfieldText',
        'value' => 'Fablab Registration: Thanks! Your email address is confirmed.',
        'label' => 'Subject line for automated account confirmation emails.',
        ),
       'confirm_body' => array(
        'type' => 'InputfieldTextarea',
        'value' => 'Your email address has been successfully verified. Your next step is to go to an orientation if you have not already.',
        'label' => 'Body text for automated account confirmation emails.',
        ),
      'reset_subject' => array(
       'type' => 'InputfieldText',
       'value' => 'Fablab Account: You reset your password',
       'label' => 'Subject line for automated registration emails.',
      ),
      'reset_body' => array(
        'type' => 'InputfieldTextarea',
        'value' => 'You requested that your Fablab account password be reset. Your new password is: "[pass]".',
        'label' => 'Body text for automated password change emails. Should provide a link to confirm the password change.'
      ),
      'oriented_subject' => array(
        'type' => 'InputfieldText',
        'value' => 'Fablab Orientation Confirmed!',
        'label' => 'Subject line for automated orientation confirmation emails.'
      ),
      'oriented_body' => array(
        'type' => 'InputfieldTextarea',
        'value' => 'Your orientation with the Fablab has been confirmed in our system. You now have access to upload files for 3D printing and use the scheduler to reserve equipment! Welcome. We look forward to seeing what you make!',
        'label' => 'Body text for automated orientation confirmation emails.'
      )
    ));
	}
}
?>
