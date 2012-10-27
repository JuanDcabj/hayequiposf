<?php

/**
 * Partido filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePartidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'creador_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => true)),
      'fecha_creado'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'estado_partido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado_Partido'), 'add_empty' => true)),
      'fecha_partido'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comentarios'       => new sfWidgetFormFilterInput(),
      'figura_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador_Partido'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'creador_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jugador'), 'column' => 'id')),
      'fecha_creado'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'estado_partido_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado_Partido'), 'column' => 'id')),
      'fecha_partido'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'comentarios'       => new sfValidatorPass(array('required' => false)),
      'figura_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jugador_Partido'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('partido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Partido';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'creador_id'        => 'ForeignKey',
      'fecha_creado'      => 'Date',
      'estado_partido_id' => 'ForeignKey',
      'fecha_partido'     => 'Date',
      'comentarios'       => 'Text',
      'figura_id'         => 'ForeignKey',
    );
  }
}
