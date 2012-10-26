<div id="historia<?php echo $indice; ?>" class="contenedorHistoria">
    
    <div class="containerHistoria">
        <div class="historiaPosteo">
            <?php include_partial('usuario', array('jugador' => $publicacion->getJugador())) ?>  dijo:<br>
            <p>
            <?php echo $publicacion->getContenido(); ?>
            </p>
        </div>
        <div class="historiaAcciones">
            <a href="#">Comentar</a> - <a href="#">Compartir</a> - <a href="#">Enviar Mensaje</a> | <span class="fechaHora"><?php echo $publicacion->getCreatedAt(); ?>
        </div>
    </div>

    <div class="historiaAvatar">
        <?php echo image_tag('avatares/' . $publicacion->getJugador()->getImagen(),array('alt' => 'Avatar de' . $publicacion->getJugador()->getNombre(),'width' => 55, 'height' =>55)); ?>
        <?php echo $publicacion->getJugador()->getDorsal(); ?>
    </div>
    
    <div class="clear"></div> <!--Esto es para eliminar los float (linea nueva) -->
</div> 