<?php

/**
 * Jugador
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hayequiposf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Jugador extends BaseJugador
{
    
    function getNombreCompleto()
    {
        return parent::getNombre() . " " . parent::getApellido();
    }

}