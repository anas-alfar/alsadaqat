<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Finances')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFinance', 'List Beneficiary Finance'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryFinance', 'Create Beneficiary Finance'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryFinance', 'Update Beneficiary Finance'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryFinance', 'Delete Beneficiary Finance'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('BeneficiaryFinance', 'Manage Beneficiary Finance'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryFinance', 'View Beneficiary Finance')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'has_supplies_card',
		'income_from_paterfamilias',
		'income_from_beneficiary_business',
		'income_from_beneficiary_family_business',
		'income_from_social_security',
		'income_from_retirement',
		'income_from_lands',
		'income_from_property',
		'income_from_agriculture',
		'income_from_national_aid_fund',
		'income_from_zakat_fund',
		'income_from_charity_fund',
		'income_total',
		'spending_home_rent',
		'spending_food',
		'spending_clothes',
		'spending_medication',
		'spending_smoking',
		'spending_education',
		'spending_transportation',
		'spending_gas_invoice',
		'spending_water_invoice',
		'spending_elctricity_invoice',
		'spending_kerosene',
		'spending_other',
		'spending_total',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
