<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $US_ID
 * @property string $US_NOMBRES
 * @property string $US_APELLIDO_PATERNO
 * @property string $US_APELLIDO_MATERNO
 * @property string $US_RUT
 * @property integer $US_EDAD
 * @property integer $US_TELEFONO
 * @property string $US_DIRECCION
 * @property string $US_CORREO
 * @property string $US_FECHA_INS
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('US_NOMBRES,US_APELLIDO_PATERNO,US_APELLIDO_MATERNO,US_RUT,US_TELEFONO,US_EDAD, US_FECHA_INS', 'required'),

			array('US_EDAD, US_TELEFONO', 'numerical', 'integerOnly'=>true),

			 array('US_NOMBRES', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('US_NOMBRES', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('US_NOMBRES', 'length', 'max'=>50),
	         array('US_NOMBRES','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

	         array('US_APELLIDO_PATERNO', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('US_APELLIDO_PATERNO', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('US_APELLIDO_PATERNO', 'length', 'max'=>50),
	         array('US_APELLIDO_PATERNO','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

	         array('US_APELLIDO_MATERNO', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('US_APELLIDO_MATERNO', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('US_APELLIDO_MATERNO', 'length', 'max'=>50),
	         array('US_APELLIDO_MATERNO','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

	         array('US_EDAD', 'length', 'max'=>2),
	         array('US_EDAD', 'numerical', 'min'=>18, 'max'=>80),

	         array('US_TELEFONO', 'length', 'min'=>7,'max'=>15),
	        

	         array('US_CORREO','email'),


			array('US_DIRECCION, US_CORREO', 'length', 'max'=>50),


			array('US_RUT', 'length', 'max'=>15),


			array('US_FECHA_INS', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('US_ID, US_NOMBRES, US_APELLIDO_PATERNO, US_APELLIDO_MATERNO, US_RUT, US_EDAD, US_TELEFONO, US_DIRECCION, US_CORREO, US_FECHA_INS', 'safe', 'on'=>'search'),
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
			'US_ID' => 'ID',
			'US_NOMBRES' => 'Nombres',
			'US_APELLIDO_PATERNO' => 'Apellido Paterno',
			'US_APELLIDO_MATERNO' => 'Apellido Materno',
			'US_RUT' => 'Rut',
			'US_EDAD' => 'Edad',
			'US_TELEFONO' => 'Telefono',
			'US_DIRECCION' => 'Direccion',
			'US_CORREO' => 'Correo',
			'US_FECHA_INS' => 'Fecha Inscripcion',
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
		$criteria->compare('US_NOMBRES',$this->US_NOMBRES,true);
		$criteria->compare('US_APELLIDO_PATERNO',$this->US_APELLIDO_PATERNO,true);
		$criteria->compare('US_APELLIDO_MATERNO',$this->US_APELLIDO_MATERNO,true);
		$criteria->compare('US_RUT',$this->US_RUT,true);
		$criteria->compare('US_EDAD',$this->US_EDAD);
		$criteria->compare('US_TELEFONO',$this->US_TELEFONO);
		$criteria->compare('US_DIRECCION',$this->US_DIRECCION,true);
		$criteria->compare('US_CORREO',$this->US_CORREO,true);
		$criteria->compare('US_FECHA_INS',$this->US_FECHA_INS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
