<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version11 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('sample', 'sample_created_by_sf_guard_user_id', array(
             'name' => 'sample_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('sample', 'sample_updated_by_sf_guard_user_id', array(
             'name' => 'sample_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('sample', 'sample_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('sample', 'sample_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('sample', 'sample_created_by_sf_guard_user_id');
        $this->dropForeignKey('sample', 'sample_updated_by_sf_guard_user_id');
        $this->removeIndex('sample', 'sample_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('sample', 'sample_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
    }
}