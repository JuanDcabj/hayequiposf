<?php

/**
 * BaseTactica_Posicion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property bigint $tactica_id
 * @property int $indice_tabla
 * @property bigint $posicion_id
 * @property int $dorsal
 * @property int $posicion_top_arriba
 * @property int $posicion_top_abajo
 * @property int $posicion_bottom_arriba
 * @property int $posicion_bottom_abajo
 * @property Tactica $Tactica
 * @property Posicion $Posicion
 * @property Doctrine_Collection $Jugador_Partido
 * 
 * @method bigint              getTacticaId()              Returns the current record's "tactica_id" value
 * @method int                 getIndiceTabla()            Returns the current record's "indice_tabla" value
 * @method bigint              getPosicionId()             Returns the current record's "posicion_id" value
 * @method int                 getDorsal()                 Returns the current record's "dorsal" value
 * @method int                 getPosicionTopArriba()      Returns the current record's "posicion_top_arriba" value
 * @method int                 getPosicionTopAbajo()       Returns the current record's "posicion_top_abajo" value
 * @method int                 getPosicionBottomArriba()   Returns the current record's "posicion_bottom_arriba" value
 * @method int                 getPosicionBottomAbajo()    Returns the current record's "posicion_bottom_abajo" value
 * @method Tactica             getTactica()                Returns the current record's "Tactica" value
 * @method Posicion            getPosicion()               Returns the current record's "Posicion" value
 * @method Doctrine_Collection getJugadorPartido()         Returns the current record's "Jugador_Partido" collection
 * @method Tactica_Posicion    setTacticaId()              Sets the current record's "tactica_id" value
 * @method Tactica_Posicion    setIndiceTabla()            Sets the current record's "indice_tabla" value
 * @method Tactica_Posicion    setPosicionId()             Sets the current record's "posicion_id" value
 * @method Tactica_Posicion    setDorsal()                 Sets the current record's "dorsal" value
 * @method Tactica_Posicion    setPosicionTopArriba()      Sets the current record's "posicion_top_arriba" value
 * @method Tactica_Posicion    setPosicionTopAbajo()       Sets the current record's "posicion_top_abajo" value
 * @method Tactica_Posicion    setPosicionBottomArriba()   Sets the current record's "posicion_bottom_arriba" value
 * @method Tactica_Posicion    setPosicionBottomAbajo()    Sets the current record's "posicion_bottom_abajo" value
 * @method Tactica_Posicion    setTactica()                Sets the current record's "Tactica" value
 * @method Tactica_Posicion    setPosicion()               Sets the current record's "Posicion" value
 * @method Tactica_Posicion    setJugadorPartido()         Sets the current record's "Jugador_Partido" collection
 * 
 * @package    hayequiposf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTactica_Posicion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tactica__posicion');
        $this->hasColumn('tactica_id', 'bigint', 8, array(
             'type' => 'bigint',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('indice_tabla', 'int', null, array(
             'type' => 'int',
             'notnull' => true,
             ));
        $this->hasColumn('posicion_id', 'bigint', 8, array(
             'type' => 'bigint',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('dorsal', 'int', null, array(
             'type' => 'int',
             'notnull' => true,
             ));
        $this->hasColumn('posicion_top_arriba', 'int', null, array(
             'type' => 'int',
             ));
        $this->hasColumn('posicion_top_abajo', 'int', null, array(
             'type' => 'int',
             ));
        $this->hasColumn('posicion_bottom_arriba', 'int', null, array(
             'type' => 'int',
             ));
        $this->hasColumn('posicion_bottom_abajo', 'int', null, array(
             'type' => 'int',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tactica', array(
             'local' => 'tactica_id',
             'foreign' => 'id'));

        $this->hasOne('Posicion', array(
             'local' => 'posicion_id',
             'foreign' => 'id'));

        $this->hasMany('Jugador_Partido', array(
             'local' => 'id',
             'foreign' => 'tactica_posicion_id'));
    }
}