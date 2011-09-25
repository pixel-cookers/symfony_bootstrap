<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    sfbootstrap
 * @subpackage filter
 * @author     Michel Parpaillon
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'genre'      => new sfWidgetFormFilterInput(),
      'first_name' => new sfWidgetFormFilterInput(),
      'last_name'  => new sfWidgetFormFilterInput(),
      'email'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'genre'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'first_name' => new sfValidatorPass(array('required' => false)),
      'last_name'  => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'user_id'    => 'ForeignKey',
      'genre'      => 'Number',
      'first_name' => 'Text',
      'last_name'  => 'Text',
      'email'      => 'Text',
    );
  }
}
