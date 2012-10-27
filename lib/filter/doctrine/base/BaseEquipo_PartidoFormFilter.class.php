<?php

/**
 * Equipo_Partido filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEquipo_PartidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'partido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Partido'), 'add_empty' => true)),
      'tactica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica'), 'add_empty' => true)),
      'capitan_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador_Partido'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'partido_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Partido'), 'column' => 'id')),
      'tactica_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tactica'), 'column' => 'id')),
      'capitan_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jugador_Partido'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('equipo_partido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo_Partido';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'nombre'     => 'Text',
      'partido_id' => 'ForeignKey',
      'tactica_id' => 'ForeignKey',
      'capitan_id' => 'ForeignKey',
    );
  }
}
