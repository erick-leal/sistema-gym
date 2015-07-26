<?php

/**
 * This is the model class for table "servicios".
 *
 * The followings are the available columns in table 'servicios':
 * @property integer $SE_ID
 * @property integer $PE_ID
 * @property string $SE_NOMBRE
 * @property string $SE_DESCRIPCION
 * @property string $SE_FOTO
 * @property string $SE_HORARIO
 */
class Servicios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PE_ID', 'numerical', 'integerOnly'=>true),
			array('SE_NOMBRE, SE_FOTO', 'length', 'max'=>50),
			array('SE_DESCRIPCION, SE_HORARIO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SE_ID, PE_ID, SE_NOMBRE, SE_DESCRIPCION, SE_FOTO, SE_HORARIO', 'safe', 'on'=>'search'),
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
			'SE_ID' => 'Se',
			'PE_ID' => 'Pe',
			'SE_NOMBRE' => 'Se Nombre',
			'SE_DESCRIPCION' => 'Se Descripcion',
			'SE_FOTO' => 'Se Foto',
			'SE_HORARIO' => 'Se Horario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('SE_ID',$this->SE_ID);
		$criteria->compare('PE_ID',$this->PE_ID);
		$criteria->compare('SE_NOMBRE',$this->SE_NOMBRE,true);
		$criteria->compare('SE_DESCRIPCION',$this->SE_DESCRIPCION,true);
		$criteria->compare('SE_FOTO',$this->SE_FOTO,true);
		$criteria->compare('SE_HORARIO',$this->SE_HORARIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
