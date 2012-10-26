<?php

/**
 * Historia form base class.
 *
 * @method Historia getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHistoriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'sujeto_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => false)),
      'tipo_historia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo_Historia'), 'add_empty' => false)),
      'param1'           => new sfWidgetFormInputText(),
      'param2'           => new sfWidgetFormInputText(),
      'param3'           => new sfWidgetFormInputText(),
      'param4'           => new sfWidgetFormInputText(),
      'param5'           => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sujeto_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'))),
      'tipo_historia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo_Historia'))),
      'param1'           => new sfValidatorPass(),
      'param2'           => new sfValidatorPass(),
      'param3'           => new sfValidatorPass(),
      'param4'           => new sfValidatorPass(),
      'param5'           => new sfValidatorPass(),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('historia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Historia';
  }

}
