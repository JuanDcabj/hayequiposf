<?php

/**
 * Jugador_Partido form base class.
 *
 * @method Jugador_Partido getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJugador_PartidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'jugador_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'), 'add_empty' => false)),
      'estado_jugador_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado_Jugador'), 'add_empty' => false)),
      'equipo_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo_Partido'), 'add_empty' => false)),
      'dorsal'              => new sfWidgetFormInputText(),
      'tactica_posicion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica_Posicion'), 'add_empty' => false)),
      'goles'               => new sfWidgetFormInputText(),
      'amarillas'           => new sfWidgetFormInputText(),
      'rojas'               => new sfWidgetFormInputText(),
      'puntaje'             => new sfWidgetFormInputText(),
      'comentario'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'jugador_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Jugador'))),
      'estado_jugador_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado_Jugador'))),
      'equipo_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Equipo_Partido'))),
      'dorsal'              => new sfValidatorPass(array('required' => false)),
      'tactica_posicion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica_Posicion'))),
      'goles'               => new sfValidatorPass(array('required' => false)),
      'amarillas'           => new sfValidatorPass(array('required' => false)),
      'rojas'               => new sfValidatorPass(array('required' => false)),
      'puntaje'             => new sfValidatorPass(array('required' => false)),
      'comentario'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jugador_partido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jugador_Partido';
  }

}
