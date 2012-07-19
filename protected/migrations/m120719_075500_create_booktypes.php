<?php

class m120719_075500_create_booktypes extends CDbMigration
{
	public function up()
	{
		
			$this->createTable('tbl_booktypes', array(
			            'id' => 'pk',
						'name' => 'string NOT NULL',
						'user_id' => 'integer',
						'created_at' => 'timestamp NOT NULL DEFAULT "0000-00-00 00:00:00"',
					    'updated_at'  => 'timestamp NOT NULL DEFAULT "0000-00-00 00:00:00" ON UPDATE CURRENT_TIMESTAMP',		
			        ));
		}

		public function down()
		{
			        $this->dropTable('tbl_booktypes');
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