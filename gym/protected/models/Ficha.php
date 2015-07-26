<?php

/**
 * This is the model class for table "ficha".
 *
 * The followings are the available columns in table 'ficha':
 * @property integer $FI_ID
 * @property integer $US_ID
 * @property string $FI_FECHA
 * @property string $FI_NOMBRE_USUARIO
 * @property string $FI_APELLIDOS_USUARIO
 * @property string $FI_FECHA_NACIMIENTO
 * @property string $FI_SEXO
 * @property string $FI_OCUPACION
 * @property string $FI_OBJETIVO
 * @property integer $FI_PESO
 * @property integer $FI_ESTATURA
 * @property string $FI_IMC
 * @property integer $FI_MASA_MAGRA
 * @property string $FI_DIAGNOSTICO
 * @property string $FI_PROGRESO
 * @property string $FI_OBSERVACION
 */
class Ficha extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ficha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('US_ID,PE_ID, FI_FECHA_NACIMIENTO,FI_SEXO, FI_PESO,FI_ESTATURA', 'required'),
			array('US_ID, FI_PESO, FI_ESTATURA, FI_MASA_MAGRA', 'numerical', 'integerOnly'=>true),
			array('FI_NOMBRE_USUARIO, FI_APELLIDOS_USUARIO, FI_SEXO, FI_OCUPACION, FI_OBJETIVO, FI_DIAGNOSTICO, FI_PROGRESO', 'length', 'max'=>50),
			array('FI_IMC', 'length', 'max'=>11),
			array('FI_FECHA, FI_FECHA_NACIMIENTO, FI_OBSERVACION', 'safe'),

			array('FI_OCUPACION', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('FI_OCUPACION', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('FI_OCUPACION', 'length', 'max'=>50),
	         array('FI_OCUPACION','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

	         array('FI_OBJETIVO', 'match','pattern' => '/^[a-zA-Z\s]+$/u','message'=>'Debe ingresar {attribute} válido'),
	         array('FI_OBJETIVO', 'match','not'=>'true','pattern' => '/(\w)\1{3,}$/','message'=>'Debe ingresar {attribute} válido (no letras repetidas) '),
	         array('FI_OBJETIVO', 'length', 'max'=>50),
	         array('FI_OBJETIVO','length','min'=>2,'tooShort'=>'Nombre  muy corto (mínimo 2 caracteres)'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FI_ID, US_ID, FI_FECHA, FI_NOMBRE_USUARIO, FI_APELLIDOS_USUARIO, , , FI_OCUPACION, FI_OBJETIVO, FI_PESO, FI_ESTATURA, FI_IMC, FI_MASA_MAGRA, FI_DIAGNOSTICO, FI_PROGRESO, FI_OBSERVACION', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	
	{

	return array('usuario' => array(self::BELONGS_TO, 'Usuario', 'US_ID') );

	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FI_ID' => 'ID',
			'US_ID' => 'Id Usuario',
			'PE_ID' => 'Id Instructor',
			'FI_FECHA' => 'Fecha',
			'FI_NOMBRE_USUARIO' => 'Nombre Usuario',
			'FI_APELLIDOS_USUARIO' => 'Apellidos Usuario',
			'FI_FECHA_NACIMIENTO' => 'Fecha Nacimiento',
			'FI_SEXO' => 'Sexo',
			'FI_OCUPACION' => 'Ocupacion',
			'FI_OBJETIVO' => 'Objetivo',
			'FI_PESO' => 'Peso',
			'FI_ESTATURA' => 'Estatura',
			'FI_IMC' => 'Fi Imc',
			'FI_MASA_MAGRA' => 'Fi Masa Magra',
			'FI_DIAGNOSTICO' => 'Fi Diagnostico',
			'FI_PROGRESO' => 'Fi Progreso',
			'FI_OBSERVACION' => 'Fi Observacion',
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

		$criteria->compare('FI_ID',$this->FI_ID);
		$criteria->compare('US_ID',$this->US_ID);
		$criteria->compare('FI_FECHA',$this->FI_FECHA,true);
		$criteria->compare('FI_NOMBRE_USUARIO',$this->FI_NOMBRE_USUARIO,true);
		$criteria->compare('FI_APELLIDOS_USUARIO',$this->FI_APELLIDOS_USUARIO,true);
		$criteria->compare('FI_FECHA_NACIMIENTO',$this->FI_FECHA_NACIMIENTO,true);
		$criteria->compare('FI_SEXO',$this->FI_SEXO,true);
		$criteria->compare('FI_OCUPACION',$this->FI_OCUPACION,true);
		$criteria->compare('FI_OBJETIVO',$this->FI_OBJETIVO,true);
		$criteria->compare('FI_PESO',$this->FI_PESO);
		$criteria->compare('FI_ESTATURA',$this->FI_ESTATURA);
		$criteria->compare('FI_IMC',$this->FI_IMC,true);
		$criteria->compare('FI_MASA_MAGRA',$this->FI_MASA_MAGRA);
		$criteria->compare('FI_DIAGNOSTICO',$this->FI_DIAGNOSTICO,true);
		$criteria->compare('FI_PROGRESO',$this->FI_PROGRESO,true);
		$criteria->compare('FI_OBSERVACION',$this->FI_OBSERVACION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ficha the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public function get_PE_ID()
        {
                return array(
                CHtml::listData(personal::model()->findAll(), 'PE_ID',  'PE_APELLIDO_PATERNO'),array(NULL=>'-- Seleccione --'),
                
        );
		}
	  public function get_US_ID()
        {
                return array(
                CHtml::listData(usuario::model()->findAll(), 'US_ID',  'US_APELLIDO_PATERNO'),array(NULL=>'-- Seleccione --'),
                
        );
		}
}



