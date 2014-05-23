<?php

class Aulaula extends CActiveRecord 
{
    public function countryFilter($data) {
        if ( Yii::app()->language == 'en' )
            return Country::model()->findByPk($data->country_id)->name;
        else
            return Country::model()->findByPk($data->country_id)->name_ar;
    }

    public function nationalityFilter($data) {
        if ( Yii::app()->language == 'en' )
            return Country::model()->findByPk($data->nationality_id)->name;
        else
            return Country::model()->findByPk($data->nationality_id)->name_ar;
    }

    public function donatorFilter($data) {
        return Donator::model()->findByPk($data->donator_id)->fullname;
    }

    public function managerFullNameFilter($data) {
        return OrganizationUser::model()->findByPk($data->manager_id)->fullname;
    }

    public function beneficiaryFullNameFilter($data) {
        return Beneficiary::model()->findByPk($data->beneficiary_id)->full_name;
    }
}
