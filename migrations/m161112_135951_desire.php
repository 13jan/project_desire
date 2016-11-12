<?php

use yii\db\Migration;
use yii\db\Schema;

class m161112_135951_desire extends Migration
{
    public function up()
    {
		$this->createTable('desire', [
			'id' => Schema::TYPE_PK,
			'id_campaigns'=>Schema::TYPE_INTEGER. ' NOT NULL',
			'name' => Schema::TYPE_STRING . ' NOT NULL',
			'number' => Schema::TYPE_INTEGER. ' NOT NULL',
			'comment' => Schema::TYPE_TEXT,
			'number_solved' => Schema::TYPE_INTEGER. ' NOT NULL',
		]);
		
		$this->addForeignKey(
			'fk_desire_creater', //название
			'desire', //название таблицы
			'id_campaigns', //Поле для связи во что тащим
			'campaigns', //откуда тащим
			'id', //поле которое тащим
			'CASCADE'
		);	
    }

    public function down()
    {
        $this->dropTable('desire');
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
