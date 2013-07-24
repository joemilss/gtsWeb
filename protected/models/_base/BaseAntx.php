<?php

/**
 * This is the model base class for the table "Antx".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Antx".
 *
 * Columns in table "Antx" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $deviceID
 * @property string $timestamp
 * @property integer $fieldID
 * @property integer $channelID
 * @property integer $type
 * @property double $data0
 * @property double $data1
 * @property double $data2
 * @property double $data3
 * @property double $data4
 * @property string $creationTime
 *
 */
abstract class BaseAntx extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'Antx';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, deviceID, fieldID, channelID', 'required'),
            array('fieldID, channelID, type', 'numerical', 'integerOnly'=>true),
            array('data0, data1, data2, data3, data4', 'numerical'),
            array('accountID, deviceID', 'length', 'max'=>32),
            array('timestamp, creationTime', 'length', 'max'=>10),
            array('type, data0, data1, data2, data3, data4, creationTime', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, deviceID, timestamp, fieldID, channelID, type, data0, data1, data2, data3, data4, creationTime', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'accountID' => Yii::t('app', 'Account'),
                'deviceID' => Yii::t('app', 'Device'),
                'timestamp' => Yii::t('app', 'Timestamp'),
                'fieldID' => Yii::t('app', 'Field'),
                'channelID' => Yii::t('app', 'Channel'),
                'type' => Yii::t('app', 'Type'),
                'data0' => Yii::t('app', 'Data0'),
                'data1' => Yii::t('app', 'Data1'),
                'data2' => Yii::t('app', 'Data2'),
                'data3' => Yii::t('app', 'Data3'),
                'data4' => Yii::t('app', 'Data4'),
                'creationTime' => Yii::t('app', 'Creation Time'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('deviceID', $this->deviceID, true);
        $criteria->compare('timestamp', $this->timestamp, true);
        $criteria->compare('fieldID', $this->fieldID);
        $criteria->compare('channelID', $this->channelID);
        $criteria->compare('type', $this->type);
        $criteria->compare('data0', $this->data0);
        $criteria->compare('data1', $this->data1);
        $criteria->compare('data2', $this->data2);
        $criteria->compare('data3', $this->data3);
        $criteria->compare('data4', $this->data4);
        $criteria->compare('creationTime', $this->creationTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => null,
                'updateAttribute' => 'timestamp',
                'timestampExpression' => new CDbExpression('NOW()'),
            )
        ), parent::behaviors());
    }
}