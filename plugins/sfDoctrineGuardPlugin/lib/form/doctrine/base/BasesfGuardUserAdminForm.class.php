<?php

/**
 * BasesfGuardUserAdminForm
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: BasesfGuardUserAdminForm.class.php 25546 2009-12-17 23:27:55Z Jonathan.Wage $
 */
class BasesfGuardUserAdminForm extends BasesfGuardUserForm
{

  /**
   * @see sfForm
   */
  public function setup()
  {
    parent::setup();

    unset(
      $this['last_login'], $this['created_at'], $this['updated_at'], $this['salt'], $this['algorithm']
    );

    $this->widgetSchema['groups_list']->setLabel('Groups');
    $this->widgetSchema['permissions_list']->setLabel('Permissions');

    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', false);
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];

    $this->widgetSchema->moveField('password_again', 'after', 'password');

//    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => 'The two passwords must be the same.')));
    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => sfContext::getInstance()->getI18N()->__('The two passwords must be the same.', null, 'sf_guard'))));




    $validators = $this->validatorSchema->getPostValidator()->getValidators();
    $postValidators = $validators[0]->getValidators();

    $postValidators[0]->setMessage('invalid', sfContext::getInstance()->getI18N()->__('An object with the same "email" already exist.', null, 'sf_guard'));
    $postValidators[1]->setMessage('invalid', sfContext::getInstance()->getI18N()->__('An object with the same "username" already exist.', null, 'sf_guard'));


    $this->getValidator('password')->setMessage('required', sfContext::getInstance()->getI18N()->__('Required', null, 'sf_guard'));
    $this->getValidator('password_again')->setMessage('required', sfContext::getInstance()->getI18N()->__('Required', null, 'sf_guard'));
    $this->getValidator('username')->setMessage('required', sfContext::getInstance()->getI18N()->__('Required', null, 'sf_guard'));
    $this->getValidator('email_address')->setMessage('required', sfContext::getInstance()->getI18N()->__('Required', null, 'sf_guard'));
  }

}