<?php

/**
 * BaseTipo_Historia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $descripcion
 * @property Doctrine_Collection $Historia
 * 
 * @method string              getNombre()      Returns the current record's "nombre" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection getHistoria()    Returns the current record's "Historia" collection
 * @method Tipo_Historia       setNombre()      Sets the current record's "nombre" value
 * @method Tipo_Historia       setDescripcion() Sets the current record's "descripcion" value
 * @method Tipo_Historia       setHistoria()    Sets the current record's "Historia" collection
 * 
 * @package    hayequiposf
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipo_Historia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo__historia');
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('descripcion', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Historia', array(
             'local' => 'id',
             'foreign' => 'tipo_historia_id'));
    }
}