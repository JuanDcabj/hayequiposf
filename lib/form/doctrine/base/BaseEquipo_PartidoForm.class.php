<?php

/**
 * Equipo_Partido form base class.
 *
 * @method Equipo_Partido getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEquipo_PartidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'partido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Partido'), 'add_empty' => false)),
      'tactica_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 100)),
      'partido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Partido'))),
      'tactica_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica'))),
    ));

    $this->widgetSchema->setNameFormat('equipo_partido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Equipo_Partido';
  }

}
