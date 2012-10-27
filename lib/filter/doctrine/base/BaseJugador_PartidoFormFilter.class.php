<?php

/**
 * Jugador_Partido filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJugador_PartidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'jugador_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => true)),
      'estado_jugador_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado_Jugador'), 'add_empty' => true)),
      'equipo_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo_Partido'), 'add_empty' => true)),
      'dorsal'              => new sfWidgetFormFilterInput(),
      'tactica_posicion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica_Posicion'), 'add_empty' => true)),
      'goles'               => new sfWidgetFormFilterInput(),
      'amarillas'           => new sfWidgetFormFilterInput(),
      'rojas'               => new sfWidgetFormFilterInput(),
      'puntaje'             => new sfWidgetFormFilterInput(),
      'comentario'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'jugador_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jugador'), 'column' => 'id')),
      'estado_jugador_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado_Jugador'), 'column' => 'id')),
      'equipo_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Equipo_Partido'), 'column' => 'id')),
      'dorsal'              => new sfValidatorPass(array('required' => false)),
      'tactica_posicion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tactica_Posicion'), 'column' => 'id')),
      'goles'               => new sfValidatorPass(array('required' => false)),
      'amarillas'           => new sfValidatorPass(array('required' => false)),
      'rojas'               => new sfValidatorPass(array('required' => false)),
      'puntaje'             => new sfValidatorPass(array('required' => false)),
      'comentario'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jugador_partido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jugador_Partido';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'jugador_id'          => 'ForeignKey',
      'estado_jugador_id'   => 'ForeignKey',
      'equipo_id'           => 'ForeignKey',
      'dorsal'              => 'Text',
      'tactica_posicion_id' => 'ForeignKey',
      'goles'               => 'Text',
      'amarillas'           => 'Text',
      'rojas'               => 'Text',
      'puntaje'             => 'Text',
      'comentario'          => 'Text',
    );
  }
}
