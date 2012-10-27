<div id="contenedorBanner">
    
    <div class="panelHeaderFijo">
        <?php echo image_tag("miclub.png"); ?>
    </div>

    <div class="galleryBanner">
        <img src="images/slider_principal/01.png" />
        <img src="images/slider_principal/02.png" />
        <img src="images/slider_principal/03.png" />
        <img src="images/slider_principal/04.png" />
    </div>

    <div class="thumbsBanner">
        <img class="thumb-0" src="images/slider_principal/11.png" />
        <img class="thumb-1" src="images/slider_principal/12.png" />
        <img class="thumb-2" src="images/slider_principal/13.png" />
        <img class="thumb-3" src="images/slider_principal/14.png" />
    </div>

</div>

<div class="clear"></div> <!--Esto es para eliminar los float (linea nueva) -->

<div id="contenedorPaneles">

    <div class="feed_principal">
        <div id="feedTitulo">
            <img src="images/feedTitulo.png" />
        </div>
        <div id="feedPostear">
            <form id="formPostear" name="input" action="html_form_action.asp" method="get">
                <textarea name="posteo" cols="52" rows="1">a</textarea>
                <input type="submit" class="btn" value="Enviar">
                <div class="clear"></div>
                Subir foto        Enlazar Video
            </form>
        </div>
        
        <?php
            for($i=0;$i<count($ultimas);$i++)
            {
                switch($ultimas[$i]['tipo_historia_id'])
                {
                    case 1: //Partido Iniciado
                        $partido=Doctrine::getTable("Partido")->find($ultimas[$i]["param1"]);
                        include_partial('partido_iniciado', array('indice' => $i, 'partido' => $partido));
                        break;
                    case 3: //Publicacion
                        $publicacion=Doctrine::getTable("Publicacion")->find($ultimas[$i]["param1"]);
                        include_partial('publicacion', array('indice' => $i, 'publicacion' => $publicacion));
                        break;
                }

            }
        ?>
        
              
        
    </div>

    <div class="panel_seguinos">
        Seguinos en Facebook, Twitter, Blog
    </div>

    <div class="panel3">
        Slide Ole
    </div>

    <div class="panel4">
        Slide Twitter tu equipo
    </div>

    <div class="panel5">
        Slide fotos partidos al azar
    </div>

    <div class="clear"></div> <!--Esto es para eliminar los float (linea nueva) -->

    <div class="panelAbajo">
        seis
    </div>

    <div class="panelAbajo">
        siete
    </div>

    <div class="panelAbajo">
        ocho
    </div>

    <div class="panelAbajo">
        nueve
    </div>

    <div class="panelPubliAbajo">
        Publicidad
    </div>

</div>