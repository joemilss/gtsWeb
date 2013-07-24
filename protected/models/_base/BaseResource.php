<?php

/**
 * This is the model base class for the table "Resource".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Resource".
 *
 * Columns in table "Resource" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $resourceID
 * @property string $type
 * @property string $title
 * @property string $properties
 * @property string $value
 * @property string $displayName
 * @property string $description
 * @property string $lastUpdateTime
 * @property string $creationTime
 *
 */
abstract class BaseResource extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'Resource';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, resourceID', 'required'),
            array('accountID', 'length', 'max'=>32),
            array('resourceID', 'length', 'max'=>80),
            array('type', 'length', 'max'=>16),
            array('title', 'length', 'max'=>70),
            array('displayName', 'length', 'max'=>40),
            array('description', 'length', 'max'=>128),
            array('lastUpdateTime, creationTime', 'length', 'max'=>10),
            array('properties, value', 'safe'),
            array('type, title, properties, value, displayName, description, lastUpdateTime, creationTime', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, resourceID, type, title, properties, value, displayName, description, lastUpdateTime, creationTime', 'safe', 'on'=>'search'),
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
                'resourceID' => Yii::t('app', 'Resource'),
                'type' => Yii::t('app', 'Type'),
                'title' => Yii::t('app', 'Title'),
                'properties' => Yii::t('app', 'Properties'),
                'value' => Yii::t('app', 'Value'),
                'displayName' => Yii::t('app', 'Display Name'),
                'description' => Yii::t('app', 'Description'),
                'lastUpdateTime' => Yii::t('app', 'Last Update Time'),
                'creationTime' => Yii::t('app', 'Creation Time'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('resourceID', $this->resourceID, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('properties', $this->properties, true);
        $criteria->compare('value', $this->value, true);
        $criteria->compare('displayName', $this->displayName, true);
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