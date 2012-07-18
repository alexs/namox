<?php

/**
 * This is the model class for table "tbl_book".
 *
 * The followings are the available columns in table 'tbl_book':
 * @property integer $id
 * @property integer $booktype_id
 * @property integer $subject_id
 * @property integer $condition_id
 * @property integer $format_id
 * @property string $title
 * @property string $author
 * @property string $isbn
 * @property string $number_of_pages
 * @property string $publisher
 * @property string $edition
 * @property string $date_edition
 * @property string $keywords
 * @property string $abstract
 * @property string $image
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class Book extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Book the static model class
	 */
	
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_book';
	}
	
	public $image;
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('booktype_id, subject_id, condition_id, format_id, title, create_user_id', 'required'),
			array('booktype_id, subject_id, condition_id, format_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('title, author, isbn, publisher, edition, keywords', 'length', 'max'=>128),
			array('number_of_pages', 'length', 'max'=>45),
			array('date_edition, abstract, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, booktype_id, subject_id, condition_id, format_id, title, author, isbn, number_of_pages, publisher, edition, date_edition, keywords, abstract, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
			array('image', 'file', 'types'=>'jpg, gif, png','allowEmpty' => true)
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'booktype_id' => 'Booktype',
			'subject_id' => 'Subject',
			'condition_id' => 'Condition',
			'format_id' => 'Format',
			'title' => 'Title',
			'author' => 'Author',
			'isbn' => 'Isbn',
			'number_of_pages' => 'Number Of Pages',
			'publisher' => 'Publisher',
			'edition' => 'Edition',
			'date_edition' => 'Date Edition',
			'keywords' => 'Keywords',
			'abstract' => 'Abstract',
			'image' => 'image',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('booktype_id',$this->booktype_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('condition_id',$this->condition_id);
		$criteria->compare('format_id',$this->format_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('isbn',$this->isbn,true);
		$criteria->compare('number_of_pages',$this->number_of_pages,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('edition',$this->edition,true);
		$criteria->compare('date_edition',$this->date_edition,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('abstract',$this->abstract,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}