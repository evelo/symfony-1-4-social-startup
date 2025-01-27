<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfMessageWithLayoutPlugin');
    $this->enablePlugins('sfSslRequirementPlugin');
    $this->enablePlugins('sfSslRequirementPlugin');
    $this->enablePlugins('sfDoctrineActAsSignablePlugin');
    $this->enablePlugins('sfFtpPlugin');
    
    
//   brak obsługi i18n
//
//
//    sfValidatorBase::setDefaultMessage('required', 'ProjectConfiguration Class::: Pole wymagane.');
//    sfValidatorBase::setDefaultMessage('invalid', 'ProjectConfiguration Class::: Błąd');
    
    
  }
}
