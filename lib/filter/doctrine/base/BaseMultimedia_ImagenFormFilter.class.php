<?php

/**
 * Multimedia_Imagen filter form base class.
 *
 * @package    hayequiposf
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMultimedia_ImagenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'publicacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Publicacion'), 'add_empty' => true)),
      'imagen'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pie'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'publicacion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Publicacion'), 'column' => 'id')),
      'imagen'         => new sfValidatorPass(array('required' => false)),
      'pie'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('multimedia_imagen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Multimedia_Imagen';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'publicacion_id' => 'ForeignKey',
      'imagen'         => 'Text',
      'pie'            => 'Text',
    );
  }
}
