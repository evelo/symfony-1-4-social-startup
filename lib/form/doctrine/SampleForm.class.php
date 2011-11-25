<?php

/**
 * Sample form.
 *
 * @package    symfony-1-4-social-startup
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SampleForm extends BaseSampleForm
{
  public function configure()
  {

    parent::setup();

    unset(
      $this['created_at'],
      $this['updated_at']
    );

  }
}
