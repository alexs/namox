<?php

class m120723_043354_create_states_table extends CDbMigration
{
	public function up()
	{
			$this->createTable('tbl_states', array(
			            'id' => 'pk',
						'name' => 'string NOT NULL',
						'key' => 'string',
			        ));
		}

		public function down()
		{
			        $this->dropTable('tbl_states');
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