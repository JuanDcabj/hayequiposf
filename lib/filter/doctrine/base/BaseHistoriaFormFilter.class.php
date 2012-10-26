<?php

/**
 * Historia filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseHistoriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sujeto_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => true)),
      'tipo_historia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo_Historia'), 'add_empty' => true)),
      'param1'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'param2'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'param3'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'param4'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'param5'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sujeto_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jugador'), 'column' => 'id')),
      'tipo_historia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tipo_Historia'), 'column' => 'id')),
      'param1'           => new sfValidatorPass(array('required' => false)),
      'param2'           => new sfValidatorPass(array('required' => false)),
      'param3'           => new sfValidatorPass(array('required' => false)),
      'param4'           => new sfValidatorPass(array('required' => false)),
      'param5'           => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('historia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Historia';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'sujeto_id'        => 'ForeignKey',
      'tipo_historia_id' => 'ForeignKey',
      'param1'           => 'Text',
      'param2'           => 'Text',
      'param3'           => 'Text',
      'param4'           => 'Text',
      'param5'           => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
