<?php

/**
 * BaseEquipo_Partido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property bigint $tactica_id
 * @property bigint $capitan_id
 * @property Tactica $Tactica
 * @property Jugador_Partido $Jugador_Partido
 * @property Doctrine_Collection $Partido
 * 
 * @method string              getNombre()          Returns the current record's "nombre" value
 * @method bigint              getTacticaId()       Returns the current record's "tactica_id" value
 * @method bigint              getCapitanId()       Returns the current record's "capitan_id" value
 * @method Tactica             getTactica()         Returns the current record's "Tactica" value
 * @method Jugador_Partido     getJugadorPartido()  Returns the current record's "Jugador_Partido" value
 * @method Doctrine_Collection getPartido()         Returns the current record's "Partido" collection
 * @method Equipo_Partido      setNombre()          Sets the current record's "nombre" value
 * @method Equipo_Partido      setTacticaId()       Sets the current record's "tactica_id" value
 * @method Equipo_Partido      setCapitanId()       Sets the current record's "capitan_id" value
 * @method Equipo_Partido      setTactica()         Sets the current record's "Tactica" value
 * @method Equipo_Partido      setJugadorPartido()  Sets the current record's "Jugador_Partido" value
 * @method Equipo_Partido      setPartido()         Sets the current record's "Partido" collection
 * 
 * @package    hayequiposf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEquipo_Partido extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('equipo__partido');
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('tactica_id', 'bigint', 8, array(
             'type' => 'bigint',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('capitan_id', 'bigint', 8, array(
             'type' => 'bigint',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tactica', array(
             'local' => 'tactica_id',
             'foreign' => 'id'));

        $this->hasOne('Jugador_Partido', array(
             'local' => 'capitan_id',
             'foreign' => 'id'));

        $this->hasMany('Partido', array(
             'local' => 'id',
             'foreign' => 'equipo_visitante_id'));
    }
}