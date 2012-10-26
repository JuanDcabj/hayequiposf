<?php use_helper('I18N') ?>

<?php $formulario = new sfGuardRegisterForm(); ?>

<form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
    <table>
        <tr>
            <td>Nombre</td>
            <td><?php echo $formulario['Jugador']['nombre']; ?></td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td><?php echo $formulario['Jugador']['apellido']; ?></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td><?php echo $formulario['email_address']; ?></td>
        </tr>
        <tr>
            <td>Nombre de Usuario</td>
            <td><?php echo $formulario['username']; ?></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><?php echo $formulario['password']; ?></td>
        </tr>
        <tr>
            <td>Repetir Contraseña</td>
            <td><?php echo $formulario['password_again']; ?></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><?php echo $formulario['Jugador']['sexo']; ?></td>
        </tr>
        <tr>
            <td>Fecha de Nacimiento</td>
            <td><?php echo $formulario['Jugador']['fecha_nacimiento']; ?></td>
        </tr>
        <tr>
            <td>Provincia</td>
            <td></td>
        </tr>
        <tr>
            <td>Localidad</td>
            <td><?php echo $formulario['Jugador']['localidad_id']; ?></td>
        </tr>
        <?php echo $formulario['_csrf_token']; ?>
    </table>
    
    <input class="registrarLogin" type="submit" value="<?php echo __('Registrarse', null, 'sf_guard') ?>" />
    
</form>