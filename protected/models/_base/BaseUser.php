<?php

/**
 * This is the model base class for the table "User".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "User".
 *
 * Columns in table "User" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $userID
 * @property integer $userType
 * @property string $roleID
 * @property string $password
 * @property integer $gender
 * @property string $notifyEmail
 * @property string $contactName
 * @property string $contactPhone
 * @property string $contactEmail
 * @property string $timeZone
 * @property string $firstLoginPageID
 * @property string $preferredDeviceID
 * @property integer $maxAccessLevel
 * @property string $passwdQueryTime
 * @property string $lastLoginTime
 * @property integer $isActive
 * @property string $displayName
 * @property string $description
 * @property string $notes
 * @property string $lastUpdateTime
 * @property string $creationTime
 * @property string $passwdChangeTime
 *
 */
abstract class BaseUser extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'User';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, userID', 'required'),
            array('userType, gender, maxAccessLevel, isActive', 'numerical', 'integerOnly'=>true),
            array('accountID, userID, roleID, password, contactPhone, timeZone, preferredDeviceID', 'length', 'max'=>32),
            array('notifyEmail, description', 'length', 'max'=>128),
            array('contactName, contactEmail', 'length', 'max'=>64),
            array('firstLoginPageID', 'length', 'max'=>24),
            array('passwdQueryTime, lastLoginTime, lastUpdateTime, creationTime, passwdChangeTime', 'length', 'max'=>10),
            array('displayName', 'length', 'max'=>40),
            array('notes', 'safe'),
            array('userType, roleID, password, gender, notifyEmail, contactName, contactPhone, contactEmail, timeZone, firstLoginPageID, preferredDeviceID, maxAccessLevel, passwdQueryTime, lastLoginTime, isActive, displayName, description, notes, lastUpdateTime, creationTime, passwdChangeTime', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, userID, userType, roleID, password, gender, notifyEmail, contactName, contactPhone, contactEmail, timeZone, firstLoginPageID, preferredDeviceID, maxAccessLevel, passwdQueryTime, lastLoginTime, isActive, displayName, description, notes, lastUpdateTime, creationTime, passwdChangeTime', 'safe', 'on'=>'search'),
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
                'userID' => Yii::t('app', 'User'),
                'userType' => Yii::t('app', 'User Type'),
                'roleID' => Yii::t('app', 'Role'),
                'password' => Yii::t('app', 'Password'),
                'gender' => Yii::t('app', 'Gender'),
                'notifyEmail' => Yii::t('app', 'Notify Email'),
                'contactName' => Yii::t('app', 'Contact Name'),
                'contactPhone' => Yii::t('app', 'Contact Phone'),
                'contactEmail' => Yii::t('app', 'Contact Email'),
                'timeZone' => Yii::t('app', 'Time Zone'),
                'firstLoginPageID' => Yii::t('app', 'First Login Page'),
                'preferredDeviceID' => Yii::t('app', 'Preferred Device'),
                'maxAccessLevel' => Yii::t('app', 'Max Access Level'),
                'passwdQueryTime' => Yii::t('app', 'Passwd Query Time'),
                'lastLoginTime' => Yii::t('app', 'Last Login Time'),
                'isActive' => Yii::t('app', 'Is Active'),
                'displayName' => Yii::t('app', 'Display Name'),
                'description' => Yii::t('app', 'Description'),
                'notes' => Yii::t('app', 'Notes'),
                'lastUpdateTime' => Yii::t('app', 'Last Update Time'),
                'creationTime' => Yii::t('app', 'Creation Time'),
                'passwdChangeTime' => Yii::t('app', 'Passwd Change Time'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('userID', $this->userID, true);
        $criteria->compare('userType', $this->userType);
        $criteria->compare('roleID', $this->roleID, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('gender', $this->gender);
        $criteria->compare('notifyEmail', $this->notifyEmail, true);
        $criteria->compare('contactName', $this->contactName, true);
        $criteria->compare('contactPhone', $this->contactPhone, true);
        $criteria->compare('contactEmail', $this->contactEmail, true);
        $criteria->compare('timeZone', $this->timeZone, true);
        $criteria->compare('firstLoginPageID', $this->firstLoginPageID, true);
        $criteria->compare('preferredDeviceID', $this->preferredDeviceID, true);
        $criteria->compare('maxAccessLevel', $this->maxAccessLevel);
        $criteria->compare('passwdQueryTime', $this->passwdQueryTime, true);
        $criteria->compare('lastLoginTime', $this->lastLoginTime, true);
        $criteria->compare('isActive', $this->isActive);
        $criteria->compare('displayName', $this->displayName, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('notes', $this->notes, true);
        $criteria->compare('lastUpdateTime', $this->lastUpdateTime, true);
        $criteria->compare('creationTime', $this->creationTime, true);
        $criteria->compare('passwdChangeTime', $this->passwdChangeTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}