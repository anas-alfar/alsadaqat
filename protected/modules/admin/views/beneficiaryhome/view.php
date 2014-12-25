<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Homes')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryHome', 'List Beneficiary Home'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryHome', 'Create Beneficiary Home'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryHome', 'Update Beneficiary Home'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryHome', 'Delete Beneficiary Home'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('BeneficiaryHome', 'Manage Beneficiary Home'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryHome', 'View Beneficiary Home')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'owner_name',
		'construction_type',
		'number_of_rooms',
		'number_of_residents',
		'contract_type',
		'rent_cost',
		'rent_type',
		'has_tv',
		'has_refrigerator',
		'has_washer',
		'has_dryer',
		'has_video_player',
		'has_telephone',
		'has_mobile',
		'has_gas',
		'has_oven',
		'has_microwave',
		'has_air_conditioner',
		'has_water_solar_heater',
		'has_water_electrical_heater',
		'has_gas_heater',
		'has_electrical_heater',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
