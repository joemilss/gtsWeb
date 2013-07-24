<?php

Yii::import('application.models._base.BaseResource');

class Resource extends BaseResource
{
    /**
     * @return Resource
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Resource|Resources', $n);
    }

}