<?php

class m120719_083907_create_formats_table extends CDbMigration
{
	public function up()
	{
		
			$this->createTable('tbl_formats', array(
			            'id' => 'pk',
						'name' => 'string NOT NULL',
						'user_id' => 'integer',
						'created_at' => 'timestamp NOT NULL DEFAULT "0000-00-00 00:00:00"',
					    'updated_at'  => 'timestamp NOT NULL DEFAULT "0000-00-00 00:00:00" ON UPDATE CURRENT_TIMESTAMP',		
			        ));
		}

		public function down()
		{
			        $this->dropTable('tbl_formats');
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