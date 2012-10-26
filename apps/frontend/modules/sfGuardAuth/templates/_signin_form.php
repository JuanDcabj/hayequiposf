<?php use_helper('I18N') ?>
<?php $form = new sfGuardFormSignin(); ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <?php echo $form['_csrf_token']->render(); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td>Usuario o Mail</td>
            <td>Password</td>
            <td></td>
        </tr>
        <tr>
            <td><?php echo $form['username']->render(); ?></td>
            <td><?php echo $form['password']->render(); ?></td>
            <td><input class="entrarLogin" type="submit" value="<?php echo __('Entrar', null, 'sf_guard') ?>" /></td>
        </tr>
        <tr>
            <td><?php echo $form['remember']->render(); ?> Recordarme</td>
            <td>Olvidaste tu pass</td>
            <td></td>
        </tr>
    </table>
    
</form>