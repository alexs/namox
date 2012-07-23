<?php

class m120723_043803_create_counties_table extends CDbMigration
{
	public function up()
	{
			$this->createTable('tbl_counties', array(
			            'id' => 'pk',
						'name' => 'string NOT NULL',
						'state_id' => 'INT NOT NULL',
			        ));
		}

		public function down()
		{
			        $this->dropTable('tbl_counties');
		}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}