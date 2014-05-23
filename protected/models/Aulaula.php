<?php


class Aulaula extends CActiveRecord 
{
    public function countryFilter($data) {
        if ( Yii::app()->language == 'en' )
            return Country::model()->findByPk($data->country_id)->name;
        else
            return Country::model()->findByPk($data->country_id)->name_ar;

    }

    public function donatorFilter($data) {
        return Donator::model()->findByPk($data->donator_id)->fullname;
    }
}