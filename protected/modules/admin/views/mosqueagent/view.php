<?php
$this->breadcrumbs = array(
	Yii::t('app', 'Agents')=> array('index'),
	$model->title,
);

$this->menu = array(
	array('label' => Yii::t('MosqueAgent', 'List Agent'), 'url' => array('index')),
	array('label' => Yii::t('MosqueAgent', 'Create Agent'), 'url' => array('create')),
	array('label' => Yii::t('MosqueAgent', 'Update Agent'), 'url' => array('update', 'id' => $model->id)),
	array('label' => Yii::t('MosqueAgent', 'Delete Agent'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label' => Yii::t('MosqueAgent', 'Manage Agent'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueAgent', 'View Agent')?> #<?php echo $model->id;?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
		'data'       => $model,
		'attributes' => array(
			'id',
			'company_name',
			array(
				'name'  => 'title',
				'value' => array($model, 'getTranslatedTitle'),
			),
			'fullname',
			'ssn',
			array(
				'name'  => 'gender',
				'value' => array($model, 'getTranslatedGender'),
			),
			'email',
			'home_phone',
			'work_phone',
			'mobile',
			'address',
			'bank_name',
			'bank_branch_name',
			'bank_branch_number',
			'bank_swift_code',
			'bank_account_number',
			array(
                'name'  => 'personal_photo_path', 
                'type'  => 'raw', 
                'value' => CHtml::image($model->preview->getUrl('large'), $model->getAttributeLabel('personal_photo_path'))),
			array(
                'name'  => 'country_id', 
                'value' => array($model, 'countryFilter')
            ),
            array(
                'name'  => 'city_id', 
                'value' => (Yii::app()->language == 'ar') ? $model->city->name_ar : $model->city->name_ar 
            ),
            array(
                'name'  => 'organization_id', 
                'value' => $model->organization->name 
            ),
            array(
                'name'  => 'owner_id', 
                'value' => $model->owner->fullname 
            ),
			'created_at',
			'updated_at',
		),
	));?>