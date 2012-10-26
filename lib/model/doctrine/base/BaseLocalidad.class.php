<?php

/**
 * BaseLocalidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Jugador $Jugador
 * 
 * @method string    getNombre()  Returns the current record's "nombre" value
 * @method Jugador   getJugador() Returns the current record's "Jugador" value
 * @method Localidad setNombre()  Sets the current record's "nombre" value
 * @method Localidad setJugador() Sets the current record's "Jugador" value
 * 
 * @package    hayequiposf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLocalidad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('localidad');
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Jugador', array(
             'local' => 'id',
             'foreign' => 'localidad_id'));
    }
}