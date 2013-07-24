<?php

/**
 * This is the model base class for the table "AccountString".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AccountString".
 *
 * Columns in table "AccountString" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $stringID
 * @property string $singularTitle
 * @property string $pluralTitle
 * @property string $description
 * @property string $lastUpdateTime
 * @property string $creationTime
 *
 */
abstract class BaseAccountString extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'AccountString';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, stringID', 'required'),
            array('accountID, stringID', 'length', 'max'=>32),
            array('singularTitle, pluralTitle', 'length', 'max'=>64),
            array('description', 'length', 'max'=>128),
            array('lastUpdateTime, creationTime', 'length', 'max'=>10),
            array('singularTitle, pluralTitle, description, lastUpdateTime, creationTime', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, stringID, singularTitle, pluralTitle, description, lastUpdateTime, creationTime', 'safe', 'on'=>'search'),
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
                'stringID' => Yii::t('app', 'String'),
                'singularTitle' => Yii::t('app', 'Singular Title'),
                'pluralTitle' => Yii::t('app', 'Plural Title'),
                'description' => Yii::t('app', 'Description'),
                'lastUpdateTime' => Yii::t('app', 'Last Update Time'),
                'creationTime' => Yii::t('app', 'Creation Time'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('stringID', $this->stringID, true);
        $criteria->compare('singularTitle', $this->singularTitle, true);
        $criteria->compare('pluralTitle', $this->pluralTitle, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('lastUpdateTime', $this->lastUpdateTime, true);
        $criteria->compare('creationTime', $this->creationTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}