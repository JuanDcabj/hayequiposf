<?php

/**
 * Publicacion form base class.
 *
 * @method Publicacion getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublicacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'jugador_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => false)),
      'contenido'  => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'jugador_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'))),
      'contenido'  => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('publicacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Publicacion';
  }

}
