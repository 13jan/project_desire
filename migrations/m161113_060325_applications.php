<?php

use yii\db\Migration;
use yii\db\Schema;

class m161113_060325_applications extends Migration
{
    public function up()
    {
		$this->createTable('applications', [
			'id' => Schema::TYPE_PK,
			'id_user'=>Schema::TYPE_INTEGER. ' NOT NULL',
			'id_desire'=>Schema::TYPE_INTEGER. ' NOT NULL',
			'number_reserve' => Schema::TYPE_INTEGER. ' NOT NULL',
			'number_completed' => Schema::TYPE_INTEGER. ' NOT NULL',
		]);
			
		$this->addForeignKey(
			'fk_applications_user', //название
			'applications', //название таблицы
			'id_user', //Поле для связи во что тащим
			'user', //откуда тащим
			'id', //поле которое тащим
			'CASCADE'
		);	
		$this->addForeignKey(
			'fk_applications_desire', //название
			'applications', //название таблицы
			'id_desire', //Поле для связи во что тащим
			'desire', //откуда тащим
			'id', //поле которое тащим
			'CASCADE'
		);		
    }

    public function down()
    {
		$this->dropTable('applications');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
