<?php

/**
 * This is the model base class for the table "Device".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Device".
 *
 * Columns in table "Device" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $deviceID
 * @property string $groupID
 * @property string $equipmentType
 * @property string $vehicleID
 * @property string $licensePlate
 * @property string $driverID
 * @property double $fuelCapacity
 * @property double $fuelEconomy
 * @property double $speedLimitKPH
 * @property double $planDistanceKM
 * @property string $expirationTime
 * @property string $uniqueID
 * @property string $deviceCode
 * @property string $deviceType
 * @property string $dcsPropertiesID
 * @property string $pushpinID
 * @property string $displayColor
 * @property string $serialNumber
 * @property string $simPhoneNumber
 * @property string $smsEmail
 * @property string $imeiNumber
 * @property string $dataKey
 * @property integer $ignitionIndex
 * @property string $codeVersion
 * @property string $featureSet
 * @property string $ipAddressValid
 * @property string $lastTotalConnectTime
 * @property string $lastDuplexConnectTime
 * @property string $pendingPingCommand
 * @property string $lastPingTime
 * @property integer $totalPingCount
 * @property integer $maxPingCount
 * @property integer $expectAck
 * @property string $lastAckCommand
 * @property string $lastAckTime
 * @property string $dcsConfigMask
 * @property integer $supportsDMTP
 * @property integer $supportedEncodings
 * @property integer $unitLimitInterval
 * @property integer $maxAllowedEvents
 * @property string $totalProfileMask
 * @property integer $totalMaxConn
 * @property integer $totalMaxConnPerMin
 * @property string $duplexProfileMask
 * @property integer $duplexMaxConn
 * @property integer $duplexMaxConnPerMin
 * @property string $ipAddressCurrent
 * @property integer $remotePortCurrent
 * @property integer $listenPortCurrent
 * @property string $lastInputState
 * @property double $lastBatteryLevel
 * @property double $lastFuelLevel
 * @property double $lastFuelTotal
 * @property double $lastOilLevel
 * @property double $lastValidLatitude
 * @property double $lastValidLongitude
 * @property double $lastValidHeading
 * @property string $lastGPSTimestamp
 * @property string $lastCellServingInfo
 * @property double $lastOdometerKM
 * @property double $odometerOffsetKM
 * @property double $lastEngineHours
 * @property double $engineHoursOffset
 * @property string $lastIgnitionOnTime
 * @property string $lastIgnitionOffTime
 * @property integer $isActive
 * @property string $displayName
 * @property string $description
 * @property string $notes
 * @property string $lastUpdateTime
 * @property string $creationTime
 * @property string $simID
 * @property string $lastTcpSessionID
 * @property string $lastEventTimestamp
 * @property string $lastStopTime
 * @property string $lastStartTime
 * @property integer $lastMalfunctionLamp
 * @property string $lastFaultCode
 * @property integer $allowNotify
 * @property string $lastNotifyTime
 * @property string $lastNotifyCode
 * @property string $notifyEmail
 * @property string $notifySelector
 * @property integer $notifyAction
 * @property string $notifyDescription
 * @property string $notifySubject
 * @property string $notifyText
 * @property integer $notifyUseWrapper
 * @property integer $notifyPriority
 * @property double $parkedLatitude
 * @property double $parkedLongitude
 * @property double $parkedRadius
 * @property string $lastDataPushTime
 * @property string $lastEventCreateMillis
 *
 */
abstract class BaseDevice extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'Device';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, deviceID', 'required'),
            array('ignitionIndex, totalPingCount, maxPingCount, expectAck, supportsDMTP, supportedEncodings, unitLimitInterval, maxAllowedEvents, totalMaxConn, totalMaxConnPerMin, duplexMaxConn, duplexMaxConnPerMin, remotePortCurrent, listenPortCurrent, isActive, lastMalfunctionLamp, allowNotify, notifyAction, notifyUseWrapper, notifyPriority', 'numerical', 'integerOnly'=>true),
            array('fuelCapacity, fuelEconomy, speedLimitKPH, planDistanceKM, lastBatteryLevel, lastFuelLevel, lastFuelTotal, lastOilLevel, lastValidLatitude, lastValidLongitude, lastValidHeading, lastOdometerKM, odometerOffsetKM, lastEngineHours, engineHoursOffset, parkedLatitude, parkedLongitude, parkedRadius', 'numerical'),
            array('accountID, deviceID, groupID, driverID, dcsPropertiesID, pushpinID, codeVersion, ipAddressCurrent, lastTcpSessionID', 'length', 'max'=>32),
            array('equipmentType, uniqueID, displayName', 'length', 'max'=>40),
            array('vehicleID, licensePlate, deviceCode, deviceType, serialNumber, simPhoneNumber, imeiNumber, simID', 'length', 'max'=>24),
            array('expirationTime, lastTotalConnectTime, lastDuplexConnectTime, lastPingTime, lastAckTime, dcsConfigMask, lastInputState, lastGPSTimestamp, lastIgnitionOnTime, lastIgnitionOffTime, lastUpdateTime, creationTime, lastEventTimestamp, lastStopTime, lastStartTime, lastNotifyTime, lastNotifyCode, lastDataPushTime', 'length', 'max'=>10),
            array('displayColor', 'length', 'max'=>16),
            array('smsEmail, featureSet, notifyDescription', 'length', 'max'=>64),
            array('ipAddressValid, description, notifyEmail', 'length', 'max'=>128),
            array('lastCellServingInfo', 'length', 'max'=>100),
            array('lastFaultCode', 'length', 'max'=>96),
            array('lastEventCreateMillis', 'length', 'max'=>20),
            array('dataKey, pendingPingCommand, lastAckCommand, totalProfileMask, duplexProfileMask, notes, notifySelector, notifySubject, notifyText', 'safe'),
            array('groupID, equipmentType, vehicleID, licensePlate, driverID, fuelCapacity, fuelEconomy, speedLimitKPH, planDistanceKM, expirationTime, uniqueID, deviceCode, deviceType, dcsPropertiesID, pushpinID, displayColor, serialNumber, simPhoneNumber, smsEmail, imeiNumber, dataKey, ignitionIndex, codeVersion, featureSet, ipAddressValid, lastTotalConnectTime, lastDuplexConnectTime, pendingPingCommand, lastPingTime, totalPingCount, maxPingCount, expectAck, lastAckCommand, lastAckTime, dcsConfigMask, supportsDMTP, supportedEncodings, unitLimitInterval, maxAllowedEvents, totalProfileMask, totalMaxConn, totalMaxConnPerMin, duplexProfileMask, duplexMaxConn, duplexMaxConnPerMin, ipAddressCurrent, remotePortCurrent, listenPortCurrent, lastInputState, lastBatteryLevel, lastFuelLevel, lastFuelTotal, lastOilLevel, lastValidLatitude, lastValidLongitude, lastValidHeading, lastGPSTimestamp, lastCellServingInfo, lastOdometerKM, odometerOffsetKM, lastEngineHours, engineHoursOffset, lastIgnitionOnTime, lastIgnitionOffTime, isActive, displayName, description, notes, lastUpdateTime, creationTime, simID, lastTcpSessionID, lastEventTimestamp, lastStopTime, lastStartTime, lastMalfunctionLamp, lastFaultCode, allowNotify, lastNotifyTime, lastNotifyCode, notifyEmail, notifySelector, notifyAction, notifyDescription, notifySubject, notifyText, notifyUseWrapper, notifyPriority, parkedLatitude, parkedLongitude, parkedRadius, lastDataPushTime, lastEventCreateMillis', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, deviceID, groupID, equipmentType, vehicleID, licensePlate, driverID, fuelCapacity, fuelEconomy, speedLimitKPH, planDistanceKM, expirationTime, uniqueID, deviceCode, deviceType, dcsPropertiesID, pushpinID, displayColor, serialNumber, simPhoneNumber, smsEmail, imeiNumber, dataKey, ignitionIndex, codeVersion, featureSet, ipAddressValid, lastTotalConnectTime, lastDuplexConnectTime, pendingPingCommand, lastPingTime, totalPingCount, maxPingCount, expectAck, lastAckCommand, lastAckTime, dcsConfigMask, supportsDMTP, supportedEncodings, unitLimitInterval, maxAllowedEvents, totalProfileMask, totalMaxConn, totalMaxConnPerMin, duplexProfileMask, duplexMaxConn, duplexMaxConnPerMin, ipAddressCurrent, remotePortCurrent, listenPortCurrent, lastInputState, lastBatteryLevel, lastFuelLevel, lastFuelTotal, lastOilLevel, lastValidLatitude, lastValidLongitude, lastValidHeading, lastGPSTimestamp, lastCellServingInfo, lastOdometerKM, odometerOffsetKM, lastEngineHours, engineHoursOffset, lastIgnitionOnTime, lastIgnitionOffTime, isActive, displayName, description, notes, lastUpdateTime, creationTime, simID, lastTcpSessionID, lastEventTimestamp, lastStopTime, lastStartTime, lastMalfunctionLamp, lastFaultCode, allowNotify, lastNotifyTime, lastNotifyCode, notifyEmail, notifySelector, notifyAction, notifyDescription, notifySubject, notifyText, notifyUseWrapper, notifyPriority, parkedLatitude, parkedLongitude, parkedRadius, lastDataPushTime, lastEventCreateMillis', 'safe', 'on'=>'search'),
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
                'groupID' => Yii::t('app', 'Group'),
                'equipmentType' => Yii::t('app', 'Equipment Type'),
                'vehicleID' => Yii::t('app', 'Vehicle'),
                'licensePlate' => Yii::t('app', 'License Plate'),
                'driverID' => Yii::t('app', 'Driver'),
                'fuelCapacity' => Yii::t('app', 'Fuel Capacity'),
                'fuelEconomy' => Yii::t('app', 'Fuel Economy'),
                'speedLimitKPH' => Yii::t('app', 'Speed Limit Kph'),
                'planDistanceKM' => Yii::t('app', 'Plan Distance Km'),
                'expirationTime' => Yii::t('app', 'Expiration Time'),
                'uniqueID' => Yii::t('app', 'Unique'),
                'deviceCode' => Yii::t('app', 'Device Code'),
                'deviceType' => Yii::t('app', 'Device Type'),
                'dcsPropertiesID' => Yii::t('app', 'Dcs Properties'),
                'pushpinID' => Yii::t('app', 'Pushpin'),
                'displayColor' => Yii::t('app', 'Display Color'),
                'serialNumber' => Yii::t('app', 'Serial Number'),
                'simPhoneNumber' => Yii::t('app', 'Sim Phone Number'),
                'smsEmail' => Yii::t('app', 'Sms Email'),
                'imeiNumber' => Yii::t('app', 'Imei Number'),
                'dataKey' => Yii::t('app', 'Data Key'),
                'ignitionIndex' => Yii::t('app', 'Ignition Index'),
                'codeVersion' => Yii::t('app', 'Code Version'),
                'featureSet' => Yii::t('app', 'Feature Set'),
                'ipAddressValid' => Yii::t('app', 'Ip Address Valid'),
                'lastTotalConnectTime' => Yii::t('app', 'Last Total Connect Time'),
                'lastDuplexConnectTime' => Yii::t('app', 'Last Duplex Connect Time'),
                'pendingPingCommand' => Yii::t('app', 'Pending Ping Command'),
                'lastPingTime' => Yii::t('app', 'Last Ping Time'),
                'totalPingCount' => Yii::t('app', 'Total Ping Count'),
                'maxPingCount' => Yii::t('app', 'Max Ping Count'),
                'expectAck' => Yii::t('app', 'Expect Ack'),
                'lastAckCommand' => Yii::t('app', 'Last Ack Command'),
                'lastAckTime' => Yii::t('app', 'Last Ack Time'),
                'dcsConfigMask' => Yii::t('app', 'Dcs Config Mask'),
                'supportsDMTP' => Yii::t('app', 'Supports Dmtp'),
                'supportedEncodings' => Yii::t('app', 'Supported Encodings'),
                'unitLimitInterval' => Yii::t('app', 'Unit Limit Interval'),
                'maxAllowedEvents' => Yii::t('app', 'Max Allowed Events'),
                'totalProfileMask' => Yii::t('app', 'Total Profile Mask'),
                'totalMaxConn' => Yii::t('app', 'Total Max Conn'),
                'totalMaxConnPerMin' => Yii::t('app', 'Total Max Conn Per Min'),
                'duplexProfileMask' => Yii::t('app', 'Duplex Profile Mask'),
                'duplexMaxConn' => Yii::t('app', 'Duplex Max Conn'),
                'duplexMaxConnPerMin' => Yii::t('app', 'Duplex Max Conn Per Min'),
                'ipAddressCurrent' => Yii::t('app', 'Ip Address Current'),
                'remotePortCurrent' => Yii::t('app', 'Remote Port Current'),
                'listenPortCurrent' => Yii::t('app', 'Listen Port Current'),
                'lastInputState' => Yii::t('app', 'Last Input State'),
                'lastBatteryLevel' => Yii::t('app', 'Last Battery Level'),
                'lastFuelLevel' => Yii::t('app', 'Last Fuel Level'),
                'lastFuelTotal' => Yii::t('app', 'Last Fuel Total'),
                'lastOilLevel' => Yii::t('app', 'Last Oil Level'),
                'lastValidLatitude' => Yii::t('app', 'Last Valid Latitude'),
                'lastValidLongitude' => Yii::t('app', 'Last Valid Longitude'),
                'lastValidHeading' => Yii::t('app', 'Last Valid Heading'),
                'lastGPSTimestamp' => Yii::t('app', 'Last Gpstimestamp'),
                'lastCellServingInfo' => Yii::t('app', 'Last Cell Serving Info'),
                'lastOdometerKM' => Yii::t('app', 'Last Odometer Km'),
                'odometerOffsetKM' => Yii::t('app', 'Odometer Offset Km'),
                'lastEngineHours' => Yii::t('app', 'Last Engine Hours'),
                'engineHoursOffset' => Yii::t('app', 'Engine Hours Offset'),
                'lastIgnitionOnTime' => Yii::t('app', 'Last Ignition On Time'),
                'lastIgnitionOffTime' => Yii::t('app', 'Last Ignition Off Time'),
                'isActive' => Yii::t('app', 'Is Active'),
                'displayName' => Yii::t('app', 'Display Name'),
                'description' => Yii::t('app', 'Description'),
                'notes' => Yii::t('app', 'Notes'),
                'lastUpdateTime' => Yii::t('app', 'Last Update Time'),
                'creationTime' => Yii::t('app', 'Creation Time'),
                'simID' => Yii::t('app', 'Sim'),
                'lastTcpSessionID' => Yii::t('app', 'Last Tcp Session'),
                'lastEventTimestamp' => Yii::t('app', 'Last Event Timestamp'),
                'lastStopTime' => Yii::t('app', 'Last Stop Time'),
                'lastStartTime' => Yii::t('app', 'Last Start Time'),
                'lastMalfunctionLamp' => Yii::t('app', 'Last Malfunction Lamp'),
                'lastFaultCode' => Yii::t('app', 'Last Fault Code'),
                'allowNotify' => Yii::t('app', 'Allow Notify'),
                'lastNotifyTime' => Yii::t('app', 'Last Notify Time'),
                'lastNotifyCode' => Yii::t('app', 'Last Notify Code'),
                'notifyEmail' => Yii::t('app', 'Notify Email'),
                'notifySelector' => Yii::t('app', 'Notify Selector'),
                'notifyAction' => Yii::t('app', 'Notify Action'),
                'notifyDescription' => Yii::t('app', 'Notify Description'),
                'notifySubject' => Yii::t('app', 'Notify Subject'),
                'notifyText' => Yii::t('app', 'Notify Text'),
                'notifyUseWrapper' => Yii::t('app', 'Notify Use Wrapper'),
                'notifyPriority' => Yii::t('app', 'Notify Priority'),
                'parkedLatitude' => Yii::t('app', 'Parked Latitude'),
                'parkedLongitude' => Yii::t('app', 'Parked Longitude'),
                'parkedRadius' => Yii::t('app', 'Parked Radius'),
                'lastDataPushTime' => Yii::t('app', 'Last Data Push Time'),
                'lastEventCreateMillis' => Yii::t('app', 'Last Event Create Millis'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('deviceID', $this->deviceID, true);
        $criteria->compare('groupID', $this->groupID, true);
        $criteria->compare('equipmentType', $this->equipmentType, true);
        $criteria->compare('vehicleID', $this->vehicleID, true);
        $criteria->compare('licensePlate', $this->licensePlate, true);
        $criteria->compare('driverID', $this->driverID, true);
        $criteria->compare('fuelCapacity', $this->fuelCapacity);
        $criteria->compare('fuelEconomy', $this->fuelEconomy);
        $criteria->compare('speedLimitKPH', $this->speedLimitKPH);
        $criteria->compare('planDistanceKM', $this->planDistanceKM);
        $criteria->compare('expirationTime', $this->expirationTime, true);
        $criteria->compare('uniqueID', $this->uniqueID, true);
        $criteria->compare('deviceCode', $this->deviceCode, true);
        $criteria->compare('deviceType', $this->deviceType, true);
        $criteria->compare('dcsPropertiesID', $this->dcsPropertiesID, true);
        $criteria->compare('pushpinID', $this->pushpinID, true);
        $criteria->compare('displayColor', $this->displayColor, true);
        $criteria->compare('serialNumber', $this->serialNumber, true);
        $criteria->compare('simPhoneNumber', $this->simPhoneNumber, true);
        $criteria->compare('smsEmail', $this->smsEmail, true);
        $criteria->compare('imeiNumber', $this->imeiNumber, true);
        $criteria->compare('dataKey', $this->dataKey, true);
        $criteria->compare('ignitionIndex', $this->ignitionIndex);
        $criteria->compare('codeVersion', $this->codeVersion, true);
        $criteria->compare('featureSet', $this->featureSet, true);
        $criteria->compare('ipAddressValid', $this->ipAddressValid, true);
        $criteria->compare('lastTotalConnectTime', $this->lastTotalConnectTime, true);
        $criteria->compare('lastDuplexConnectTime', $this->lastDuplexConnectTime, true);
        $criteria->compare('pendingPingCommand', $this->pendingPingCommand, true);
        $criteria->compare('lastPingTime', $this->lastPingTime, true);
        $criteria->compare('totalPingCount', $this->totalPingCount);
        $criteria->compare('maxPingCount', $this->maxPingCount);
        $criteria->compare('expectAck', $this->expectAck);
        $criteria->compare('lastAckCommand', $this->lastAckCommand, true);
        $criteria->compare('lastAckTime', $this->lastAckTime, true);
        $criteria->compare('dcsConfigMask', $this->dcsConfigMask, true);
        $criteria->compare('supportsDMTP', $this->supportsDMTP);
        $criteria->compare('supportedEncodings', $this->supportedEncodings);
        $criteria->compare('unitLimitInterval', $this->unitLimitInterval);
        $criteria->compare('maxAllowedEvents', $this->maxAllowedEvents);
        $criteria->compare('totalProfileMask', $this->totalProfileMask, true);
        $criteria->compare('totalMaxConn', $this->totalMaxConn);
        $criteria->compare('totalMaxConnPerMin', $this->totalMaxConnPerMin);
        $criteria->compare('duplexProfileMask', $this->duplexProfileMask, true);
        $criteria->compare('duplexMaxConn', $this->duplexMaxConn);
        $criteria->compare('duplexMaxConnPerMin', $this->duplexMaxConnPerMin);
        $criteria->compare('ipAddressCurrent', $this->ipAddressCurrent, true);
        $criteria->compare('remotePortCurrent', $this->remotePortCurrent);
        $criteria->compare('listenPortCurrent', $this->listenPortCurrent);
        $criteria->compare('lastInputState', $this->lastInputState, true);
        $criteria->compare('lastBatteryLevel', $this->lastBatteryLevel);
        $criteria->compare('lastFuelLevel', $this->lastFuelLevel);
        $criteria->compare('lastFuelTotal', $this->lastFuelTotal);
        $criteria->compare('lastOilLevel', $this->lastOilLevel);
        $criteria->compare('lastValidLatitude', $this->lastValidLatitude);
        $criteria->compare('lastValidLongitude', $this->lastValidLongitude);
        $criteria->compare('lastValidHeading', $this->lastValidHeading);
        $criteria->compare('lastGPSTimestamp', $this->lastGPSTimestamp, true);
        $criteria->compare('lastCellServingInfo', $this->lastCellServingInfo, true);
        $criteria->compare('lastOdometerKM', $this->lastOdometerKM);
        $criteria->compare('odometerOffsetKM', $this->odometerOffsetKM);
        $criteria->compare('lastEngineHours', $this->lastEngineHours);
        $criteria->compare('engineHoursOffset', $this->engineHoursOffset);
        $criteria->compare('lastIgnitionOnTime', $this->lastIgnitionOnTime, true);
        $criteria->compare('lastIgnitionOffTime', $this->lastIgnitionOffTime, true);
        $criteria->compare('isActive', $this->isActive);
        $criteria->compare('displayName', $this->displayName, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('notes', $this->notes, true);
        $criteria->compare('lastUpdateTime', $this->lastUpdateTime, true);
        $criteria->compare('creationTime', $this->creationTime, true);
        $criteria->compare('simID', $this->simID, true);
        $criteria->compare('lastTcpSessionID', $this->lastTcpSessionID, true);
        $criteria->compare('lastEventTimestamp', $this->lastEventTimestamp, true);
        $criteria->compare('lastStopTime', $this->lastStopTime, true);
        $criteria->compare('lastStartTime', $this->lastStartTime, true);
        $criteria->compare('lastMalfunctionLamp', $this->lastMalfunctionLamp);
        $criteria->compare('lastFaultCode', $this->lastFaultCode, true);
        $criteria->compare('allowNotify', $this->allowNotify);
        $criteria->compare('lastNotifyTime', $this->lastNotifyTime, true);
        $criteria->compare('lastNotifyCode', $this->lastNotifyCode, true);
        $criteria->compare('notifyEmail', $this->notifyEmail, true);
        $criteria->compare('notifySelector', $this->notifySelector, true);
        $criteria->compare('notifyAction', $this->notifyAction);
        $criteria->compare('notifyDescription', $this->notifyDescription, true);
        $criteria->compare('notifySubject', $this->notifySubject, true);
        $criteria->compare('notifyText', $this->notifyText, true);
        $criteria->compare('notifyUseWrapper', $this->notifyUseWrapper);
        $criteria->compare('notifyPriority', $this->notifyPriority);
        $criteria->compare('parkedLatitude', $this->parkedLatitude);
        $criteria->compare('parkedLongitude', $this->parkedLongitude);
        $criteria->compare('parkedRadius', $this->parkedRadius);
        $criteria->compare('lastDataPushTime', $this->lastDataPushTime, true);
        $criteria->compare('lastEventCreateMillis', $this->lastEventCreateMillis, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}