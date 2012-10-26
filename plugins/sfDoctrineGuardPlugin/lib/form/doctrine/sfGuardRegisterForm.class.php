<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
      parent::configure();
      $formProfile=new JugadorForm();
      unset($formProfile['user_id']);
      unset($formProfile['apodo']);
      unset($formProfile['facebook_account']);
      unset($this['id']);
      unset($this['first_name']);
      unset($this['last_name']);
      
      $this->embedForm("Jugador",$formProfile);
  }
  
  /*public function doSave($con = null)
  {
      parent::doSave($con);
      $profile = $this->getObject();
      $profile->setUserId($this->getObject()->getId());
      $profile->save();
  }*/
}