<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property integer $PE_ID
 * @property string $PE_NOMBRES
 * @property string $PE_APELLIDO_PATERNO
 * @property string $PE_APELLIDO_MATERNO
 * @property string $PE_CV
 * @property string $PE_FUNCION
 * @property string $PE_FECHA_INS
 */
class Personal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(


			array('PE_NOMBRES, PE_APELLIDO_PATERNO, PE_FUNCION, PE_FECHA_INS', 'required'),


			array(', PE_APELLIDO_PATERNO, PE_APELLIDO_MATERNO, ', 'length', 'max'=>50),
			array('PE_CV', 'length', 'max'=>255),

			 array('PE_NOMBRES', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('PE_NOMBRES', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('PE_NOMBRES', 'length', 'max'=>50),
	         array('PE_NOMBRES','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

	         array('', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('PE_APELLIDO_PATERNO', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('PE_APELLIDO_PATERNO', 'length', 'max'=>50),
	         array('PE_APELLIDO_PATERNO','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

	         array('PE_APELLIDO_MATERNO', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('PE_APELLIDO_MATERNO', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('PE_APELLIDO_MATERNO', 'length', 'max'=>50),
	         array('PE_APELLIDO_MATERNO','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),



			array('', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PE_ID, PE_NOMBRES, PE_APELLIDO_PATERNO, PE_APELLIDO_MATERNO, PE_CV, PE_FUNCION, PE_FECHA_INS', 'safe', 'on'=>'search'),
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
			'PE_ID' => 'ID',
			'PE_NOMBRES' => 'Nombres',
			'PE_APELLIDO_PATERNO' => 'Apellido Paterno',
			'PE_APELLIDO_MATERNO' => 'Apellido Materno',
			'PE_CV' => 'Cv',
			'PE_FUNCION' => 'Funcion',
			'PE_FECHA_INS' => 'Fecha Inscripcion',
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

		$criteria->compare('PE_ID',$this->PE_ID);
		$criteria->compare('PE_NOMBRES',$this->PE_NOMBRES,true);
		$criteria->compare('PE_APELLIDO_PATERNO',$this->PE_APELLIDO_PATERNO,true);
		$criteria->compare('PE_APELLIDO_MATERNO',$this->PE_APELLIDO_MATERNO,true);
		$criteria->compare('PE_CV',$this->PE_CV,true);
		$criteria->compare('PE_FUNCION',$this->PE_FUNCION,true);
		$criteria->compare('PE_FECHA_INS',$this->PE_FECHA_INS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
