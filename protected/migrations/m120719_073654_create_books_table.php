<?php

class m120719_073654_create_books_table extends CDbMigration
{
	public function up()
	{
		
		$this->createTable('tbl_books', array(
		            'id' => 'pk',
					'ad_type_id' => 'int NOT NULL',
					'booktype_id' => 'int NOT NULL',
					'subject_id' => 'int NOT NULL',
					'condition_id' => 'int NOT NULL',
					'format_id' => 'int NOT NULL',
					'title' => 'string NOT NULL',
					'author' => 'string',
					'year' => 'year',
					'price' => 'decimal(10,2)',
		            'isbn' => 'string',
		            'number_of_pages' => 'string',
		            'publisher' => 'string',
		            'edition' => 'string',
		            'keywords' => 'string',
		            'abstract' => 'text',
					'trade_title' => 'string',
					'trade_author' => 'string',
					'trade_subject_id' => 'int',
		            'image' => 'string',
					'user_id' => 'integer',
					'created_at' => 'timestamp NOT NULL DEFAULT "0000-00-00 00:00:00"',
				    'updated_at'  => 'timestamp NOT NULL DEFAULT "0000-00-00 00:00:00" ON UPDATE CURRENT_TIMESTAMP',		
		        ));
	}

	public function down()
	{
		        $this->dropTable('tbl_books');
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