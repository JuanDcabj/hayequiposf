<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    
    <script>
    (function($){
        $(document).ready(function(){
            $(".feed_principal").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
					});
        });
    })(jQuery);
	
</script>
  </head>
    
  <body>
    <header>
        <div id="navegadorArriba">
            <div id="contenedorImagenHeader">
                <a href="<?php echo url_for('@homepage'); ?>"><?php echo image_tag("header.png"); ?></a>
            </div>
            <ul class="menu">
                <li><a href="<?php echo url_for('@partidos'); ?>">PARTIDOS</a></li>
                <li><a href="<?php echo url_for('@canchas'); ?>">CANCHAS</a></li>
                <li><a href="<?php echo url_for('@equipos'); ?>">EQUIPOS</a></li>
            </ul>
            <div id="contenedorBuscadorHeader">
                <input type="text" name="buscador" value="" /><?php echo image_tag("icon_search.png") ?>
            </div>
            <div id="contenedorPerfilHeader">
                <div id="contenedorFotoPerfil">
                    <?php echo image_tag('avatares/' . $sf_user->getProfile()->getFirst()->getImagen(), array('width' => 30, 'height' =>30)); ?>
                </div>
            </div>
        </div>
    </header>

    <article>
        <?php echo $sf_content ?>
    </article>

    <footer>
        Abajo
    </footer>

  </body>
</html>
