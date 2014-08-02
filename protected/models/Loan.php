<?php

/**
 * This is the model class for table "{{loan}}".
 *
 * The followings are the available columns in table '{{loan}}':
 * @property integer $id
 * @property string $cid
 * @property string $uid
 * @property string $amount
 * @property string $timerange
 * @property string $ratepermonth
 * @property double $discount
 * @property string $activetime
 * @property integer $operatorid
 * @property string $createtime
 * @property string $updatetime
 */
class Loan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{loan}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, cid, uid, amount, timerange, ratepermonth, activetime, operatorid', 'required'),
			array('id, operatorid', 'numerical', 'integerOnly'=>true),
			array('discount', 'numerical'),
			array('cid, uid, amount, updatetime', 'length', 'max'=>45),
			array('timerange', 'length', 'max'=>20),
			array('ratepermonth', 'length', 'max'=>10),
			array('createtime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cid, uid, amount, timerange, ratepermonth, discount, activetime, operatorid, createtime, updatetime', 'safe', 'on'=>'search'),
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
			'cid' => 'Cid',
			'uid' => 'Uid',
			'amount' => 'Amount',
			'timerange' => 'Timerange',
			'ratepermonth' => 'Ratepermonth',
			'discount' => 'Discount',
			'activetime' => 'Activetime',
			'operatorid' => 'Operatorid',
			'createtime' => 'Createtime',
			'updatetime' => 'Updatetime',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('timerange',$this->timerange,true);
		$criteria->compare('ratepermonth',$this->ratepermonth,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('activetime',$this->activetime,true);
		$criteria->compare('operatorid',$this->operatorid);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('updatetime',$this->updatetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Loan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
