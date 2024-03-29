<?php

/**
 * BaseTactica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property int $cantidad_jugadores
 * @property string $descripcion
 * @property Doctrine_Collection $Equipo_Partido
 * @property Doctrine_Collection $Tactica_Posicion
 * 
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method int                 getCantidadJugadores()  Returns the current record's "cantidad_jugadores" value
 * @method string              getDescripcion()        Returns the current record's "descripcion" value
 * @method Doctrine_Collection getEquipoPartido()      Returns the current record's "Equipo_Partido" collection
 * @method Doctrine_Collection getTacticaPosicion()    Returns the current record's "Tactica_Posicion" collection
 * @method Tactica             setNombre()             Sets the current record's "nombre" value
 * @method Tactica             setCantidadJugadores()  Sets the current record's "cantidad_jugadores" value
 * @method Tactica             setDescripcion()        Sets the current record's "descripcion" value
 * @method Tactica             setEquipoPartido()      Sets the current record's "Equipo_Partido" collection
 * @method Tactica             setTacticaPosicion()    Sets the current record's "Tactica_Posicion" collection
 * 
 * @package    hayequiposf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTactica extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tactica');
        $this->hasColumn('nombre', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('cantidad_jugadores', 'int', null, array(
             'type' => 'int',
             'notnull' => true,
             ));
        $this->hasColumn('descripcion', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Equipo_Partido', array(
             'local' => 'id',
             'foreign' => 'tactica_id'));

        $this->hasMany('Tactica_Posicion', array(
             'local' => 'id',
             'foreign' => 'tactica_id'));
    }
}