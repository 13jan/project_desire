<?php

use yii\db\Migration;

class m161112_120219_campaigns extends Migration
{
    public function up()
    {
		$this->create_Table('campaigns', [
			'id'=>Schema::TYPE_PK,
			'name'=>Schema::TYPE_STRING . ' NOT NULL',
			'description'=>Schema::TYPE_TEXT,
			'id_creator'=>Schema::TYPE_INTEGER,
			'name_contact'=>Schema::TYPE_STRING . ' NOT NULL',
			'contact'=>Schema::TYPE_STRING . ' NOT NULL',
			'date_created'=>Schema::TYPE_INTEGER . ' NOT NULL',
			'date_end'=>Schema::TYPE_INTEGER,
			'photo'=>Schema::TYPE_STRING,
		]);
			
		$this->addForeignKey(
			'fk_campaigns_creater', //название
			'campaigns', //название таблицы
			'id_creator', //Поле для связи во что тащим
			'user', //откуда тащим
			'id', //поле которое тащим
			'CASCADE'
		);					
    }

    public function down()
    {
        $this->dropTable('campaigns');
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
