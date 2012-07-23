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
 * @property string $year
 * @property string $keywords
 * @property string $abstract
 * @property string $image
 * @property string $created_at
 * @property integer $user_id
 * @property string $updated_at
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
		return 'tbl_books';
	}
	
	public $image;
	

	/**
	 * @return array validation rules for model attributes.
	 */
	

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		$user = Yii::app()->getModule('user')->user();
		return array(
			array('booktype_id, subject_id, condition_id, format_id, title, ad_type_id','required'),
			array('booktype_id, subject_id, trade_subject_id, condition_id, format_id, ad_type_id, user_id, year', 'numerical', 'integerOnly'=>true),
			array('title, author, isbn, publisher, edition, keywords,trade_title,trade_author', 'length', 'max'=>128),
			array('number_of_pages', 'length', 'max'=>6),
			array('year', 'length', 'max'=>4),
			array('price', 'match', 'pattern'=>'(^\$?([1-9]{1}[0-9]{0,2}(\,[0-9]{3})*(\.[0-9]{0,2})?|[1-9]{1}[0-9]{0,}(\.[0-9]{0,2})?|0(\.[0-9]{0,2})?|(\.[0-9]{1,2})?)$)', 'message'=>'Precio debe tener máximo dos decimales.'),			
			array('year, abstract, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, booktype_id, subject_id, condition_id, format_id, title, author, isbn, number_of_pages, publisher, edition, year, keywords, abstract, created_at, user_id, updated_at', 'safe', 'on'=>'search'),
			array('image', 'file', 'types'=>'jpg, gif, png','allowEmpty' => true, 'maxSize'=>1024 * 1024 * 20, 'tooLarge'=>'La imagen es demasiado grande, tamaño máximo 20MB'),	
			array('user_id', 'default', 'value' => $user->id),
			array('year', 'default', 'setOnEmpty'=>true),
			array('updated_at','default',
			              'value'=>new CDbExpression('NOW()'),
			              'setOnEmpty'=>false,'on'=>'update'),
			array('created_at,updated_at','default',
				              'value'=>new CDbExpression('NOW()'),
				              'setOnEmpty'=>false,'on'=>'insert')
			
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'ad_type' => array(self::BELONGS_TO, 'AdType', 'ad_type_id'),
			'booktype' => array(self::BELONGS_TO, 'Booktype', 'booktype_id'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
			'trade_subject' => array(self::BELONGS_TO, 'Subject', 'trade_subject_id'),
			'condition' => array(self::BELONGS_TO, 'Condition', 'condition_id'),
			'format' => array(self::BELONGS_TO, 'Format', 'format_id'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ad_type_id' => 'Tipo de anuncio',
			'booktype_id' => 'Artículo',
			'subject_id' => 'Género',
			'condition_id' => 'Estado o Condición',
			'format_id' => 'Formato',
			'title' => 'Título',
			'author' => 'Autor',
				'trade_title' => 'Título del libro que te gustaría recibir de intercambio.',
				'trade_author' => 'Autor del libro que te gustaría recibir de intercambio',
				'trade_subject_id' => 'Género del libro que te gustaría recibir de intercambio',
			'price' => 'Precio',
			'isbn' => 'ISNB o ISSN',
			'number_of_pages' => 'Número de páginas',
			'publisher' => 'Editor',
			'edition' => 'Edición',
			'year' => 'Año',
			'keywords' => 'Palabras clave',
			'abstract' => 'Resumen, o comentrarios',
			'image' => 'Imagen',
			'created_at' => 'Fecha de publicación',
			'user_id' => 'Create User',
			'updated_at' => 'Última actualización',
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
		
			$userObject = Yii::app()->getModule('user')->user();
			$userId = $userObject->id;
			// Create a new CDbCriteria object
			$criteria = new CDbCriteria();
			// Assign search criteria
			$criteria->addSearchCondition('user_id', $userId, true, 'OR' );

		$criteria->compare('id',$this->id);
		$criteria->compare('ad_type_id',$this->ad_type_id);
		$criteria->compare('booktype_id',$this->booktype_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('condition_id',$this->condition_id);
		$criteria->compare('format_id',$this->format_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('isbn',$this->isbn,true);
		$criteria->compare('number_of_pages',$this->number_of_pages,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('edition',$this->edition,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('abstract',$this->abstract,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}