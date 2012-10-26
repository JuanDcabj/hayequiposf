<?php use_helper('I18N') ?>

<?php //echo get_partial('sfGuardRegister/form', array('form' => $form)) ?>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>

<?php slot('register',  get_partial('sfGuardRegister/register_form')); ?>