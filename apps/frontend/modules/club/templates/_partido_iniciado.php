<div id="historia<?php echo $indice; ?>" class="contenedorHistoria">
    
    <div class="containerHistoria">
        <div class="historiaPosteo">
            <?php include_partial('usuario', array('jugador' => $partido->getJugador())) ?>
             jugará un partido el <?php echo $partido->getFechaPartido(); ?> versus el equipo de <?php include_partial('usuario', array('jugador' => $partido->getEquipoVisitante()->getCapitan())) ?>
        </div>
        <div class="historiaAcciones">
            <a href="#">Comentar</a> - <a href="#">Compartir</a> - <a href="#">Enviar Mensaje</a> | <span class="fechaHora"><?php echo $partido->getFechaCreado(); ?>
        </div>
    </div>

    <div class="historiaAvatar">
        <?php echo image_tag('avatares/' . $partido->getJugador()->getImagen(),array('alt' => 'Avatar de' . $partido->getJugador()->getNombre(),'width' => 55, 'height' =>55)); ?>
        <?php echo $partido->getJugador()->getDorsal(); ?>
    </div>
    
    <div class="clear"></div> <!--Esto es para eliminar los float (linea nueva) -->
</div> 