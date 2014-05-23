<?php


class Aulaula extends CActiveRecord 
{
    public function countryFilter($model) {
        if ( Yii::app()->language == 'en' )
            return Country::model()->findByPk($model->country_id)->name;
        else
            return Country::model()->findByPk($model->country_id)->name_ar;

    }

    public function donatorFilter($model) {
        return Donator::model()->findByPk($model->donator_id)->fullname;
    }
}