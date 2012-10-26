<?php

/**
 * Tactica_Posicion form base class.
 *
 * @method Tactica_Posicion getObject() Returns the current form's model object
 *
 * @package    hayequiposf
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTactica_PosicionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'tactica_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica'), 'add_empty' => false)),
      'indice_tabla'           => new sfWidgetFormInputText(),
      'posicion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Posicion'), 'add_empty' => false)),
      'dorsal'                 => new sfWidgetFormInputText(),
      'posicion_top_arriba'    => new sfWidgetFormInputText(),
      'posicion_top_abajo'     => new sfWidgetFormInputText(),
      'posicion_bottom_arriba' => new sfWidgetFormInputText(),
      'posicion_bottom_abajo'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'tactica_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica'))),
      'indice_tabla'           => new sfValidatorPass(),
      'posicion_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Posicion'))),
      'dorsal'                 => new sfValidatorPass(),
      'posicion_top_arriba'    => new sfValidatorPass(array('required' => false)),
      'posicion_top_abajo'     => new sfValidatorPass(array('required' => false)),
      'posicion_bottom_arriba' => new sfValidatorPass(array('required' => false)),
      'posicion_bottom_abajo'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tactica_posicion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tactica_Posicion';
  }

}
