<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="contenedorPaginaLogin">
        <div id="contenedorArribaLogin">
            <?php echo $sf_content ?>
        </div>

        <div id="contenedorIzquierdaLogin">
            <div id="contenedorImagenLogo1">
            </div>
        </div>
    
        <div id="contenedorDerechaLogin">
            <div id="contenedorImagenLogo2">
            </div>
            <div id="contenedorRegistro">
                <?php include_slot('register'); ?>
            </div>
        </div>
    
        <div class="clear"></div>
    
        <div id="contenedorAbajoLogin">
            Abajo
        </div>
    </div>
</body>
</html>
