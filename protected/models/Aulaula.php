<?php

class Aulaula extends CActiveRecord 
{
    public $image;

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

    public function mosqueAgentgentFilter($data) {
        return MosqueAgent::model()->findByPk($data->agent_id)->company_name;
    }

    public function managerFullNameFilter($data) {
        return OrganizationUser::model()->findByPk($data->manager_id)->fullname;
    }

    public function beneficiaryFullNameFilter($data) {
        return Beneficiary::model()->findByPk($data->beneficiary_id)->full_name;
    }

    public function beneficiaryRelationNameFilter($data) {
        return BeneficiaryRelation::model()->findByPk($data->beneficiary_relation_id)->name;
    }

    public function eventNameFilter($data) {
        return Event::model()->findByPk($data->event_id)->title;
    }

    public function eventTypeFilter($data) {
        return EventType::model()->findByPk($data->event_type_id)->title;
    }

    public function mailTypeFilter($data) {
        return MailType::model()->findByPk($data->mail_type_id)->title;
    }

    public function mosqueTypeFilter($data) {
        return MosqueType::model()->findByPk($data->mosque_type_id)->title;
    }

    public function organizationTypeFilter($data) {
        return OrganizationType::model()->findByPk($data->organization_type_id)->title;
    }

    public function organizationFilter($data) {
        return Organization::model()->findByPk($data->organization_id)->name;
    }

    public function organizationBranchFilter($data) {
        return OrganizationBranch::model()->findByPk($data->organization_branch_id)->name;
    }

    public function organizationBranchCountryFilter($data) {
        return OrganizationBranchCountry::model()->findByPk($data->organization_branch_country_id)->name;
    }

    public function organizationBranchCountryCommitteeFilter($data) {
        return OrganizationBranchCountryCommittee::model()->findByPk($data->organization_branch_country_committee_id)->name;
    }
    
    public function getOrganizationUsersByOrganizationId( $organizationId = null ) {

        if ( ! Yii::app()->user->checkAccess(Rights::module()->superuserName) ) {
            if ( empty($organizationId) )
                $organizationId = Yii::app()->user->organization_id;
    
            $users = OrganizationUser::model()->findAll( 
                array(
                    'select'=> 'id, fullname', 
                    'condition' => 'organization_id = :organizationId', 
                    'params' => array(
                        ':organizationId' => $organizationId
                    ) 
                ) 
            );
            return CHtml::listData( $users, 'id', 'fullname');
        } else {
            return array();
        }
    }
    
    public function getTranslatedGender($data) {
        return Yii::t('enumItem', $data->gender);
    }

    public function getTranslatedTitle($data) {
        return Yii::t('enumItem', $data->title);
    }

}
