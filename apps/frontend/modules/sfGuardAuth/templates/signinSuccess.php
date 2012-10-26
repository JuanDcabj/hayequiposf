<?php use_helper('I18N') ?>
<?php echo get_partial('sfGuardAuth/signin_form'); ?>

<?php slot('register',  get_partial('sfGuardRegister/register_form')); ?>

