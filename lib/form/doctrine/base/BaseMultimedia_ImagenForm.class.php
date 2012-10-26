<?php

/**
 * Multimedia_Imagen form base class.
 *
 * @method Multimedia_Imagen getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMultimedia_ImagenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'publicacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Publicacion'), 'add_empty' => true)),
      'imagen'         => new sfWidgetFormInputText(),
      'pie'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'publicacion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Publicacion'), 'required' => false)),
      'imagen'         => new sfValidatorString(array('max_length' => 30)),
      'pie'            => new sfValidatorString(array('max_length' => 250, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('multimedia_imagen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Multimedia_Imagen';
  }

}
