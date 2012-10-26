<?php

/**
 * Jugador form base class.
 *
 * @method Jugador getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJugadorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'apellido'         => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'localidad_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'), 'add_empty' => false)),
      'sexo'             => new sfWidgetFormInputText(),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'apodo'            => new sfWidgetFormInputText(),
      'imagen'           => new sfWidgetFormInputText(),
      'dorsal'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'apellido'         => new sfValidatorString(array('max_length' => 100)),
      'nombre'           => new sfValidatorString(array('max_length' => 100)),
      'fecha_nacimiento' => new sfValidatorDate(),
      'localidad_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'))),
      'sexo'             => new sfValidatorString(array('max_length' => 1)),
      'user_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'apodo'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'imagen'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'dorsal'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jugador[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jugador';
  }

}
