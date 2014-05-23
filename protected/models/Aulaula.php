<?php

class Aulaula extends CActiveRecord 
{
    public function countryFilter($data, $columnName = NULL) {
    	if (is_null($columnName)) {
    		$columnName = 'country_id';
    	}
        if ( Yii::app()->language == 'en' )
            return Country::model()->findByPk($data->{$columnName})->name;
        else
            return Country::model()->findByPk($data->{$columnName})->name_ar;
    }

    public function donatorFilter($data) {
        return Donator::model()->findByPk($data->donator_id)->fullname;
    }

    public function fullUsernameFilter($data, $columnName = NULL) {
        if (is_null($columnName)) {
            $columnName = 'manager_id';
        }
        return OrganizationUser::model()->findByPk($data->manager_id)->fullname;
    }
}
