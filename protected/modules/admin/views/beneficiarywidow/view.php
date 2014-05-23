<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Widows')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryWidow', 'List Beneficiary Widow'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryWidow', 'Create Beneficiary Widow'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryWidow', 'Update Beneficiary Widow'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryWidow', 'Delete Beneficiary Widow'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('BeneficiaryWidow', 'Manage Beneficiary Widow'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryWidow', 'View Beneficiary Widow')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'husband_full_name',
		'husband_job',
		'husband_date_of_birth',
		'husband_date_of_death',
		'husband_reason_of_death',
		'husband_death_certificate_path',
		'number_of_sons',
		'number_of_daughters',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
