<?php

/**
 * Tactica_Posicion filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTactica_PosicionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tactica_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tactica'), 'add_empty' => true)),
      'indice_tabla'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'posicion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Posicion'), 'add_empty' => true)),
      'dorsal'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'posicion_top_arriba'    => new sfWidgetFormFilterInput(),
      'posicion_top_abajo'     => new sfWidgetFormFilterInput(),
      'posicion_bottom_arriba' => new sfWidgetFormFilterInput(),
      'posicion_bottom_abajo'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tactica_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tactica'), 'column' => 'id')),
      'indice_tabla'           => new sfValidatorPass(array('required' => false)),
      'posicion_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Posicion'), 'column' => 'id')),
      'dorsal'                 => new sfValidatorPass(array('required' => false)),
      'posicion_top_arriba'    => new sfValidatorPass(array('required' => false)),
      'posicion_top_abajo'     => new sfValidatorPass(array('required' => false)),
      'posicion_bottom_arriba' => new sfValidatorPass(array('required' => false)),
      'posicion_bottom_abajo'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tactica_posicion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tactica_Posicion';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'tactica_id'             => 'ForeignKey',
      'indice_tabla'           => 'Text',
      'posicion_id'            => 'ForeignKey',
      'dorsal'                 => 'Text',
      'posicion_top_arriba'    => 'Text',
      'posicion_top_abajo'     => 'Text',
      'posicion_bottom_arriba' => 'Text',
      'posicion_bottom_abajo'  => 'Text',
    );
  }
}
