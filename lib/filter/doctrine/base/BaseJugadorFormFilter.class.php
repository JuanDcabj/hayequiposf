<?php

/**
 * Jugador filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJugadorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'apellido'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'localidad_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'), 'add_empty' => true)),
      'sexo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'apodo'            => new sfWidgetFormFilterInput(),
      'imagen'           => new sfWidgetFormFilterInput(),
      'dorsal'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'apellido'         => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'localidad_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Localidad'), 'column' => 'id')),
      'sexo'             => new sfValidatorPass(array('required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'apodo'            => new sfValidatorPass(array('required' => false)),
      'imagen'           => new sfValidatorPass(array('required' => false)),
      'dorsal'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jugador_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jugador';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'apellido'         => 'Text',
      'nombre'           => 'Text',
      'fecha_nacimiento' => 'Date',
      'localidad_id'     => 'ForeignKey',
      'sexo'             => 'Text',
      'user_id'          => 'ForeignKey',
      'apodo'            => 'Text',
      'imagen'           => 'Text',
      'dorsal'           => 'Text',
    );
  }
}
