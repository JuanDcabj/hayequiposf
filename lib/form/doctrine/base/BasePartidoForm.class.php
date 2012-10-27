<?php

/**
 * Partido form base class.
 *
 * @method Partido getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePartidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'creador_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => false)),
      'fecha_creado'      => new sfWidgetFormDate(),
      'estado_partido_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado_Partido'), 'add_empty' => false)),
      'fecha_partido'     => new sfWidgetFormDate(),
      'comentarios'       => new sfWidgetFormInputText(),
      'figura_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador_Partido'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'creador_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'))),
      'fecha_creado'      => new sfValidatorDate(),
      'estado_partido_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado_Partido'))),
      'fecha_partido'     => new sfValidatorDate(),
      'comentarios'       => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'figura_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador_Partido'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('partido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Partido';
  }

}
