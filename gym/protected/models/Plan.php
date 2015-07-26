<?php

/**
 * This is the model class for table "plan".
 *
 * The followings are the available columns in table 'plan':
 * @property integer $US_ID
 * @property integer $SE_ID
 * @property string $CO_FECHA_INI
 * @property string $CO_FECHA_FIN
 * @property string $CO_ESTADO
 * @property integer $CO_VALOR
 * @property integer $CO_CUPO
 * @property string $CO_PLAN
 */
class Plan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('US_ID, SE_ID', 'required'),
			array('US_ID, SE_ID, CO_VALOR, CO_CUPO', 'numerical', 'integerOnly'=>true),
			array('CO_ESTADO, CO_PLAN', 'length', 'max'=>50),
			array('CO_FECHA_INI, CO_FECHA_FIN', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('US_ID, SE_ID, CO_FECHA_INI, CO_FECHA_FIN, CO_ESTADO, CO_VALOR, CO_CUPO, CO_PLAN', 'safe', 'on'=>'search'),
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
			'US_ID' => 'Us',
			'SE_ID' => 'Se',
			'CO_FECHA_INI' => 'Co Fecha Ini',
			'CO_FECHA_FIN' => 'Co Fecha Fin',
			'CO_ESTADO' => 'Co Estado',
			'CO_VALOR' => 'Co Valor',
			'CO_CUPO' => 'Co Cupo',
			'CO_PLAN' => 'Co Plan',
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

		$criteria->compare('US_ID',$this->US_ID);
		$criteria->compare('SE_ID',$this->SE_ID);
		$criteria->compare('CO_FECHA_INI',$this->CO_FECHA_INI,true);
		$criteria->compare('CO_FECHA_FIN',$this->CO_FECHA_FIN,true);
		$criteria->compare('CO_ESTADO',$this->CO_ESTADO,true);
		$criteria->compare('CO_VALOR',$this->CO_VALOR);
		$criteria->compare('CO_CUPO',$this->CO_CUPO);
		$criteria->compare('CO_PLAN',$this->CO_PLAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
